<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;



class ProfileController extends Controller
{
    protected $user;

    public function index($id)
    {
        try {
            $user = User::withoutTrashed()->findOrFail($id);
            $orders = Orders::withoutTrashed()->with('order_detail')->where('user_id', $id)->get();
            return view('Customer.Profile.profile', compact('user', 'orders'));
        } catch (\Throwable $exception) {
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Customer.Order.order', compact('carts', 'totalAll'));
        }
    }

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function profileupdate($id, UserUpdateRequest $request)
    {
        try {
            $user = User::withoutTrashed()->findOrFail($id);

            // Handle avatar update
            if ($request->hasFile('avatar')) {
                // Validate the uploaded file
                $request->validate([
                    'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules for image upload
                ]);

                // Get the file contents
                $avatarContents = file_get_contents($request->file('avatar')->getRealPath());

                // Update the user record with the file contents
                $user->image = $avatarContents;
            }
            // Update user information
            $user->update([
                'us_name' => $request->input('us_name'),
                'us_gender' => $request->input('us_gender'),
                'us_birthday' => $request->input('birthday'),
                'email' => $request->input('email'),
                'us_phone' => $request->input('us_phone'),
                'us_address' => $request->input('us_address'),
            ]);

            Alert::success('Update information Success!!');
            return redirect()->route('profile.show', ['id' => $id]);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            Alert::error('Update information Failed!!');
            return redirect()->back()->with('error', 'Update error');
        }
    }

    public function showOrderDetails($id, $orderId)
    {
        // Fetch user based on $id if needed
        $user = User::withoutTrashed()->findOrFail($id);

        // Fetch order details based on $orderId
        $order = Orders::withoutTrashed()->with('order_detail')->findOrFail($orderId);

        // Return the order details view with user and order data
        return view('Customer.Profile.profile_order_detail', compact('user', 'order'));
    }
}
