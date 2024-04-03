<?php

namespace App\Http\Controllers\Customer\Carts;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class CartsController extends Controller
{
    private $products;
    protected $category;

    public function __construct(Products $products, Categories $category)
    {
        $this->products = $products;
        $this->category = $category;
    }

    public function index()
    {
        $totalAll = 0;
        $carts = session()->get('cart');
        $category = $this->category::withoutTrashed()->select('cate_id', 'cate_name')->get();
        if ($carts != []) {
            foreach ($carts as $item) {
                $totalAll =  $totalAll + ($item['pro_id'] * $item['pro_quantity']);
            }
        }
        return view('Customer.Cart.cart', compact('carts', 'category', 'totalAll'));
    }
    public function AddToCart($id)
    {
        try {
            $product = $this->products::find($id);
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                $cart[$id]['pro_quantity'] = $cart[$id]['pro_quantity'] + 1;
            } else {
                $cart[$id] = [
                    'pro_id' => $product->pro_id,
                    'category_id ' => $product->category->cate_name,
                    'pro_img' => $product->pro_img,
                    'pro_name' => $product->pro_name,
                    'pro_price' => $product->pro_price,
                    'pro_quantity' => 1,
                ];
            }
            Log::info($product->category->cate_name);
            session()->put('cart', $cart);
            toast('Add Success','success')->autoClose(5000);;

            return redirect()->back();
        } catch (\Throwable $exception) {
            
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            toast('Add Error','error')->autoClose(5000);;

            return redirect()->back();
        }
    }

    public function UpdateCart(Request $request)
    {
        if ($request->pro_id && $request->pro_quantity) {
            $cart = session()->get('cart');
            $cart[$request->pro_id]['pro_quantity'] = $request->pro_quantity;
            session()->put('cart', $cart);
            return response()->json(['code' => 200], 200);
        }
    }

    public function DeleteCart(Request $request)
    {
        if ($request->pro_id) {
            $cart = session()->get('cart');
            unset($cart[$request->pro_id]);
            session()->put('cart', $cart);
            return response()->json(['code' => 200], 200);
        }
    }
}