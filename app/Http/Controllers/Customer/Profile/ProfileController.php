<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    protected $user;

    public function index($id)
    {
        $user = User::withoutTrashed()->findOrFail($id);
        $orders = Orders::withoutTrashed()->with('order_detail')->where('user_id', $id)->get(); // Load order details

        return view('Customer.Profile.profile', compact('user', 'orders'));
    }

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function profileupdate($id, UserUpdateRequest $request)
    {
        try {
            $user = User::withoutTrashed()->findOrFail($id);
            $user->update([
                'us_name' => $request->us_name,
                'us_gender' => $request->us_gender,
                'us_birthday' => $request->birthday,
                'us_phone' => $request->us_phone,
                'us_address' => $request->us_address,
            ]);
            Alert::success('Update information Success!!');
            return redirect()->route('profile.show', ['id' => $id]);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            Alert::error('Update information Failed!!');
            return redirect()->back()->with('error', 'Register error');
        }
    }

    public function showOrderDetails($id, $orderId)
    {
        // Fetch user based on $id if needed
        $user = User::withoutTrashed()->findOrFail($id);
    
        // Fetch order details based on $orderId
        $order = Orders::withoutTrashed()->with('order_detail')->findOrFail($orderId);
    
        // Return the order details view with user and order data
        return view('Customer.Profile.profile_order_detail.blade', compact('user', 'order'));
    }   
}