<?php

namespace App\Http\Controllers\Customer\Shop;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductsController extends Controller
{

    private $categories;
    private $products;

    public function __construct(Categories $categories, Products $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    

    public function showproduct(Request $request, $product_id)
    {
        try {
            $categories = $this->categories->withoutTrashed()->get();
            // $product = $this->products->findOrFail($product_id);
            $product = $this->products->with('productImages')->findOrFail($product_id);
            return view('Customer.Products.productDetail', compact('categories', 'product'));
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }   
    }

    public function showAll(Request $request)
    {
        try {
            $categories = $this->categories->withoutTrashed()->get();
            $products = $this->products->paginate(21);
            return view('Customer.Products.products', compact('categories', 'products'));
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function show(Request $request, $category_id)
    {
        try {
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();

            // Lấy giá trị min và max từ request
            $minPrice = $request->input('min_price', 0);
            $maxPrice = $request->input('max_price', PHP_INT_MAX);

            $products = $this->products->where('category_id', $category_id)->paginate(21);

            return view('Customer.Products.products', compact('category', 'categories', 'products'));
        } catch (ModelNotFoundException $e) {
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }

    public function showAllFilter(Request $request)
    {
        try {
            $categories = $this->categories->withoutTrashed()->get();

            $minPrice = $request->input('min_price', 0);
            $maxPrice = $request->input('max_price', PHP_INT_MAX);

            // Lọc tất cả sản phẩm theo giá
            $products = $this->products->whereBetween('price', [$minPrice, $maxPrice])
                ->paginate(21);

            return view('Customer.Products.productFilter', compact('categories', 'products'));
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }


    public function showFilter(Request $request, $category_id)
    {
        try {
            $category = $this->categories->withoutTrashed()->findOrFail($category_id);
            $categories = $this->categories->withoutTrashed()->get();

            // Lấy giá trị min và max từ request
            $minPrice = $request->input('min_price', 0);
            $maxPrice = $request->input('max_price', PHP_INT_MAX);

            // Lọc sản phẩm theo giá
            $products = $this->products->where('category_id', $category_id)
                ->whereBetween('price', [$minPrice, $maxPrice])
                ->paginate(21);

            return view('Customer.Products.productFilter', compact('category', 'categories', 'products'));
        } catch (ModelNotFoundException $e) {
            return back()->withError("Category not found")->withInput();
        } catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }
}
