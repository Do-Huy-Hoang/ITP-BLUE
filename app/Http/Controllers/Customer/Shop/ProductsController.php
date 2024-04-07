<?php

namespace App\Http\Controllers\Customer\Shop;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{

    private $categories;
    private $products;

    public function __construct(Categories $categories, Products $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    //Detail product
    /**
     * The function `showproduct` retrieves a specific product with its images and related categories,
     * handling any exceptions that may occur.
     * 
     * param Request request The `` parameter in the `showproduct` function is an instance of
     * the `Illuminate\Http\Request` class. It represents the HTTP request that is being made to the
     * server and contains all the information about the request, such as input data, headers, cookies,
     * etc. It allows you to
     * param product_id The `product_id` parameter in the `showproduct` function represents the unique
     * identifier of the product that you want to display details for. This parameter is typically used
     * to fetch the specific product from the database based on its ID and then pass that product's
     * information to the view for rendering.
     * 
     * return The `showproduct` function is returning a view called `productDetail` with the variables
     * `` and `` passed to it using the `compact` function. If an exception occurs
     * during the process, it will redirect back with an error message containing the exception message
     * and the input data.
     */
    public function showproduct(Request $request, $product_id)
    {
        try {
            $categories = $this->categories->withoutTrashed()->get();
            $product = $this->products->select('pro_id', 'pro_name', 'pro_price', 'pro_img', 'category_id', 'pro_status','pro_description','pro_brand','pro_quantity')->with('productImages')->findOrFail($product_id);
            return view('Customer.Products.productDetail', compact('categories', 'product'));
        } catch (\Exception $exception) {
            $categories = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            $product = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Customer.Products.productDetail', compact('categories', 'product'));
        }
    }

    //Shop product all category
    /**
     * The function `showAll` retrieves wishlist items, categories, and paginated products for display
     * on a products view page, handling exceptions by redirecting back with an error message if
     * necessary.
     * 
     * param Request request The `showAll` function is a controller method that retrieves data to
     * display on a web page. Here's an explanation of the parameters used in the function:
     * 
     * return The `showAll` function is returning a view called 'Customer.Products.products' with the
     * following data:
     */
    public function showAll(Request $request)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $categories = $this->categories->withoutTrashed()->get();
            $products = $this->products->select('pro_id', 'pro_name', 'pro_price', 'pro_img', 'category_id', 'pro_status')->paginate(21);

            $minPrice = 0;
            $maxPrice = $this->products->max('pro_price');

            return view('Customer.Products.products', compact('categories', 'wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return back()->withInput();
        }
    }

    //Shop product with category
    /**
     * The function `show` retrieves and displays products belonging to a specific category, handling
     * exceptions for category not found and general errors.
     * 
     * param Request request The `` parameter in the `show` function represents the HTTP
     * request that is being made to access the page. It contains information such as form input,
     * headers, cookies, and more. In this function, the `` parameter is being used to check if
     * a user is authenticated using `
     * param category_id The `category_id` parameter in the `show` function represents the unique
     * identifier of the category for which you want to display products. This parameter is used to
     * fetch the specific category from the database and then retrieve the products belonging to that
     * category for display on the view.
     * 
     * return The `show` function returns a view called 'Customer.Products.products' with the
     * following data passed to it: 'category', 'wishlistItems', 'categories', 'products', 'minPrice',
     * and 'maxPrice'. If an exception of type `ModelNotFoundException` is caught, it returns back with
     * an error message "Category not found" and input data. If any other type of exception is caught
     */
    public function show(Request $request, $category_id)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();
            $products = $this->products->where('category_id', $category_id)->paginate(21);

            $minPrice = 0;
            $maxPrice = $this->products->max('pro_price');

            return view('Customer.Products.products', compact('category', 'wishlistItems', 'categories', 'products', 'minPrice', 'maxPrice'));
        } catch (ModelNotFoundException $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    //Sort price product ascending and descending
    /**
     * The function `filterByPrice` filters products by price in ascending, descending, or default
     * order and returns the filtered products along with other necessary data for display.
     * 
     * param Request request The `` parameter in the `filterByPrice` function is an instance
     * of the `Request` class, which is typically used to retrieve input data from the HTTP request.
     * This parameter allows you to access form inputs, query parameters, and other request data sent
     * to the server.
     * param order The `order` parameter in the `filterByPrice` function is used to determine the
     * sorting order of the products based on their price. It can have three possible values: 'asc' for
     * ascending order, 'desc' for descending order, and any other value for the default pagination
     * without specific sorting
     * 
     * return The function `filterByPrice` is returning a view named 'Customer.Products.products' with
     * the variables `categories`, `wishlistItems`, `products`, `minPrice`, and `maxPrice` passed to it
     * using the `compact` function. These variables are used to display the filtered products based on
     * price in the view.
     */
    public function filterByPrice(Request $request, $order)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $categories = $this->categories->withoutTrashed()->get();
            if ($order === 'asc') {
                $products = $this->products->orderBy('pro_price', 'asc')->paginate(21);
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
            } elseif ($order === 'desc') {
                $products = $this->products->orderBy('pro_price', 'desc')->paginate(21);
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
            } else {
                $products = $this->products->paginate(21);
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
            }
            return view('Customer.Products.products', compact('categories', 'wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }
    /**
     * The function filters products by category and price, with optional sorting, and handles
     * exceptions gracefully.
     * 
     * param Request request The `filterByCategoryAndPrice` function takes three parameters:
     * param category_id The `category_id` parameter in the `filterByCategoryAndPrice` function is
     * used to specify the category ID for which products need to be filtered. This function filters
     * products based on the specified category ID and price order (ascending or descending).
     * param order The `order` parameter in the `filterByCategoryAndPrice` function is used to
     * determine the order in which the products should be displayed. It can have three possible
     * values:
     * 
     * return The function `filterByCategoryAndPrice` is returning a view named
     * 'Customer.Products.products' with the following data passed to it: 'category', 'categories',
     * 'wishlistItems', 'products', 'minPrice', and 'maxPrice'. These variables are being compacted and
     * sent to the view for rendering.
     */
    public function filterByCategoryAndPrice(Request $request, $category_id, $order)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();
            if ($order === 'asc') {
                $products = $this->products->where('category_id', $category_id)->orderBy('pro_price', 'asc')->paginate(21);
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
            } elseif ($order === 'desc') {
                $products = $this->products->where('category_id', $category_id)->orderBy('pro_price', 'desc')->paginate(21);
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
            } else {
                $minPrice = 0;
                $maxPrice = $this->products->max('pro_price');
                $products = $this->products->where('category_id', $category_id)->paginate(21);
            }
            return view('Customer.Products.products', compact('category', 'categories', 'wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (ModelNotFoundException $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }


    //Sort max-min price product ascending and descending

    /**
     * The function filterPriceRange filters products based on price range and displays them on a
     * webpage, handling exceptions if any.
     * 
     * param Request request The `filterPriceRange` function is used to filter products based on a
     * price range specified in the request. Here's a breakdown of the parameters used in the function:
     * 
     * return The `filterPriceRange` function is returning a view named 'Customer.Products.products'
     * with the following data:
     */
    public function filterPriceRange(Request $request)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $categories = $this->categories->withoutTrashed()->get();

            $minPrice = $request->input('min_price', 0);
            $maxPrice = $request->input('max_price', 1000000);

            $products = $this->products->whereBetween('pro_price', [$minPrice, $maxPrice])
                ->where('pro_status', 0)
                ->paginate(21);

            $products->appends(request()->query());

            return view('Customer.Products.products', compact('categories','wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    /**
     * This PHP function filters products by category and price range, handling exceptions for category
     * not found and general errors.
     * 
     * param Request request The `filterByCategoryAndPriceRange` function takes two parameters:
     * param category_id The `category_id` parameter in the `filterByCategoryAndPriceRange` function
     * is used to filter products based on a specific category. It is passed as an argument to the
     * function and is used to retrieve products belonging to that particular category.
     * 
     * return The function `filterByCategoryAndPriceRange` is returning a view named
     * 'Customer.Products.products' with the following data passed to it: 'category', 'categories',
     * 'wishlistItems', 'products', 'minPrice', and 'maxPrice'. If an error occurs, it will redirect
     * back with an error message.
     */
    public function filterByCategoryAndPriceRange(Request $request, $category_id)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();
            $minPrice = $request->input('min_price', 0);
            $maxPrice = $request->input('max_price', 1000000);

            $products = $this->products->where('category_id', $category_id)
                ->whereBetween('pro_price', [$minPrice, $maxPrice])
                ->paginate(21);

            $products->appends(request()->query());

            return view('Customer.Products.products', compact('category', 'categories','wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (ModelNotFoundException $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    public function filterByPriceRangeSort(Request $request, $order)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $categories = $this->categories->withoutTrashed()->get();
            $minPrice = $request->input('min_price');
            $maxPrice = $request->input('max_price');

            if ($order === 'asc') {
                $products = $this->products->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->where('pro_status', 0)
                    ->orderBy('pro_price', 'asc')
                    ->paginate(21);
            } elseif ($order === 'desc') {
                $products = $this->products->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->where('pro_status', 0)
                    ->orderBy('pro_price', 'desc')
                    ->paginate(21);
            } else {
                $products = $this->products->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->where('pro_status', 0)
                    ->paginate(21);
            }

            $products->appends(request()->query());

            return view('Customer.Products.products', compact('categories', 'products','wishlistItems', 'minPrice', 'maxPrice'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }


    public function filterByCategoryAndPriceRangeSort(Request $request, $category_id, $order)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();
            $minPrice = $request->input('min_price');
            $maxPrice = $request->input('max_price');

            if ($order === 'asc') {
                $products = $this->products->where('category_id', $category_id)
                    ->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->orderBy('pro_price', 'asc')
                    ->paginate(21);
            } elseif ($order === 'desc') {
                $products = $this->products->where('category_id', $category_id)
                    ->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->orderBy('pro_price', 'desc')
                    ->paginate(21);
            } else {
                $products = $this->products->where('category_id', $category_id)
                    ->whereBetween('pro_price', [$minPrice, $maxPrice])
                    ->paginate(21);
            }

            $products->appends(request()->query());

            return view('Customer.Products.products', compact('category', 'categories','wishlistItems', 'products', 'minPrice', 'maxPrice'));
        } catch (ModelNotFoundException $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }

    //Search
    public function search(Request $request)
    {
        try {
            if (Auth::check()) {
                $wishlistItems = Auth::user()->wishlistItems;
            } else {
                $wishlistItems = collect();
            }
            $categories = $this->categories->withoutTrashed()->get();

            $query = $request->input('query');

            $products = $this->products->where('pro_name', 'like', '%' . $query . '%')
                ->orWhere('pro_brand', 'like', '%' . $query . '%')
                ->paginate(21);

            $products->appends(request()->query());

            return view('Customer.Products.products', compact('categories', 'wishlistItems','products'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}