<?php

namespace App\Http\Controllers\Customer\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;
use App\Models\Categories;
use App\Models\OrderDetail;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    protected $customer;
    protected $category;
    protected $product;
    protected $user;
    protected $orders;
    protected $orderDetail;

    public function __construct(Products $product, Categories $category, User $user, Orders $orders, OrderDetail $orderDetail)
    {
        // $this->middleware('auth');
        $this->user = $user;
        $this->category = $category;
        $this->product = $product;
        $this->orders = $orders;
        $this->orderDetail = $orderDetail;
    }


    public function index()
    {
        $carts = session()->get('cart');
        $totalAll = 0;
        if ($carts != []) {
            $category = $this->category::all();
            $carts = session()->get('cart');
            foreach ($carts as $item) {
                $totalAll = $totalAll + ($item['pro_price']*$item['pro_quantity']);
            }
            return view('Customer.Order.order', compact('category', 'carts', 'totalAll'));
        } else {
            abort(404);
        }
    }
    public function MyOrder(){
        $category = $this->category::all();
        $customer = $this->customer::where('user_id', auth()->id())->get();
        foreach ($customer as $item){
            $customers = $item;
        }
        $orders = $this->orders::latest()->where('customer_id', $customers->id)->get();
        $product = $this->product::all();
        return view('Home.Profile.MyOrder', compact('category','orders','product', 'settings'));
    }



    public function create(OrderCreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $origin = "475A Đ. Điện Biên Phủ, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam";
            $destination = $request->address;
            $response = Http::get('https://maps.googleapis.com/maps/api/distancematrix/json', [
                'origins' => $origin,
                'destinations' => $destination,
                'mode' => 'driving', 
                'key' => env('GOOGLE_MAP_KEY'),
            ]);
            $distance = $response['rows'][0]['elements'][0]['distance']['value']; 
            $distanceInKm = ceil($distance / 1000); 
            $shippingCost = ceil(1 * $distanceInKm);
            $carts = session()->get('cart');
            $totalOriginal = 0;
            foreach ($carts as $item) {
                $totalOriginal += ($item['pro_price']*$item['pro_quantity']);
            }
           
            if(Auth::check()){
                $order = $this->orders::create([
                    'user_id' => Auth::user()->id,
                    'ord_user_name' => $request->ord_user_name,
                    'ord_address' => $request->address,
                    'ord_phone_no' => $request->ord_phone_no,
                    'ord_payment' => $request->ord_payment,
                    'ord_pay_status' => 'Unpaid',
                    'ord_status' => 'Wait for approval',
                    'ord_note' => $request->ord_note,
                    'ord_promotion' => 0,
                    'ord_total_original' =>  $totalOriginal,
                    'ord_ship' => $shippingCost,
                    'ord_total' => doubleval($totalOriginal+$shippingCost),
                ]);
            }else{
                $order = $this->orders::create([
                    'ord_user_name' => $request->ord_user_name,
                    'ord_address' => $request->address,
                    'ord_phone_no' => $request->ord_phone_no,
                    'ord_payment' => $request->ord_payment,
                    'ord_pay_status' => 'Unpaid',
                    'ord_status' => 'Wait for approval',
                    'ord_note' => $request->ord_note,
                    'ord_promotion' => 0,
                    'ord_total_original' =>  $totalOriginal,
                    'ord_ship' => $shippingCost,
                    'ord_total' => doubleval($totalOriginal+$shippingCost),
                ]);
            }
            Log::info($order->ord_id);
            foreach ($carts as $cartsItem) {
                $order->order_detail()->create([
                    'ordd_orders_id' => $order->ord_id, // Chú ý: sử dụng khóa chính của bảng orders
                    'ordd_product_name' => $cartsItem['pro_name'],
                    'ordd_product_price' => $cartsItem['pro_price'],
                    'ordd_product_id' => $cartsItem['pro_id'],
                    'ordd_quantity' => $cartsItem['pro_quantity'],
                ]);
            }
            session()->flush('cart');
            Alert::success('Create Success', 'Order Created Successfully');
            DB::commit();
            return redirect()->route('product.showAll');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Create Error', 'Order Created Error!');
            return redirect()->route('order')->withInput();
        }
    }
}
