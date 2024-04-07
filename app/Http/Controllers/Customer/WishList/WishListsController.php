<?php

namespace App\Http\Controllers\Customer\WishList;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class WishListsController extends Controller
{

    private $categories;
    private $products;

    public function __construct(Categories $categories, Products $products)
    {
        $this->categories = $categories;
        $this->products = $products;
    }

    public function wishlist()
    {
        try {
            if (!Auth::check()) {
                Alert::info('Login Required', 'You must be logged in to view your wishlist.');
                return redirect()->route('login');
            }
            $categories = $this->categories->withoutTrashed()->get();
            $wishlistItems = Auth::user()->wishlistItems;
            return view('Customer.WishList.wishlist', compact('categories', 'wishlistItems'));
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return back()->withInput();
        }
    }


    public function addToWishlist(Request $request, $productId)
    {
        try {
            if (!Auth::check()) {
                Alert::info('Login Required', 'You must be logged in to add your wishlist.');
                return redirect()->route('login');
            }

            $user = $request->user();

            if ($user->wishlistItems()->where('product_id', $productId)->exists()) {
                toast('Product is already in your wishlist.');
                // Alert::info('Info', 'Product is already in your wishlist.');
                return redirect()->back()->with('info', 'Product is already in your wishlist.');
            }

            $user->wishlistItems()->attach($productId);
            toast('Product added to wishlist successfully','success')->autoClose(5000);
            return redirect()->back();
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return back()->withInput();
        }
    }


    public function removeFromWishlist(Request $request, $productId)
    {
        try {
            if (!Auth::check()) {
                Alert::error('Login Required', 'You must be logged in to view your wishlist.');
                return redirect()->route('login');
            }

            $user = $request->user();

            if ($user->wishlistItems()->where('product_id', $productId)->exists()) {
                $user->wishlistItems()->detach($productId);
                Alert::success('Remove Wishlist Success', 'Product removed from wishlist successfully');
                return redirect()->back()->with('success', 'Product removed from wishlist successfully');
            }

            return redirect()->back()->with('error', 'Product is not in your wishlist.');
        } catch (\Exception $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return back()->withError($exception->getMessage())->withInput();
        }
    }
}