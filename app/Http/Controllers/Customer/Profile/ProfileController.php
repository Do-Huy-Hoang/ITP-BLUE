<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    protected $user;

    public function index($id)
    {
        // Retrieve the user data from the database
        $user = User::findOrFail($id);

        // Pass the user data to the view
        return view('Customer.Profile.profile', compact('user'));
    }

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function profileupdate($id, UserUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'us_name' => $request->us_name,
                'us_gender' => $request->us_gender,
                'us_birthday' => $request->us_birthday,
                'us_phone' => $request->us_phone
            ]);
            DB::commit();
            return redirect()->route('profile')->with('toast_success', 'Profile Update Successfully!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ' Line: ' . $exception->getLine());
            return redirect()->back();
        }
    }
}