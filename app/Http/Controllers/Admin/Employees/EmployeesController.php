<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\UserAddResquet;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeesController extends Controller
{
    private $user;
    private $roles;
    public function __construct(User $user, Roles $roles)
    {
        $this->user = $user;
        $this->roles = $roles;
    }

    public function index(Request $request)
    {
        try {
            if ($request->search != null) {
                $employees = User::withoutTrashed()->where('name', 'like', '%' . $request->search . '%')
                    ->whereHas('roles', function ($query) {
                        $query->where('rol_name', '!=', 'Customer');
                    })
                    ->latest()
                    ->paginate(10);
            } else {
                $employees = User::withoutTrashed()->whereHas('roles', function ($query) {
                    $query->where('rol_name', '!=', 'Customer');
                })
                    ->latest()
                    ->paginate(10);
            }
            return view('Admin.Employees.employees', compact('employees'));
        } catch (\Throwable $exception) {
            $employees = [];
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Admin.Employees.employees', compact('employees'));
        }
    }

    public function add()
    {
        $role = $this->roles::all();
        return view('Admin.Employees.add', compact('role'));
    }

    public function edit($id)
    {
        $userUpdate = $this->user::withoutTrashed()->find($id);
        $role = $this->roles::all();
        $roleOfUser = $userUpdate->roles;
        return view('Admin.user.edit', compact('userUpdate', 'role', 'roleOfUser'));
    }

    public function create(EmployeeCreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $employee = $this->user::create([
                'us_name' => $request->us_name,
                'email' => $request->email,
                'password' => Hash::make($request->emp_password), 
                'us_phone' => $request->us_phone,
                'us_gender' => $request->us_gender,
                'us_birthday' => $request->us_birthday,
            ]);

            if ($employee && $request->has('role_id')) {
                $employee->roles()->attach($request->role_id);
            }
            DB::commit();
            Alert::success('Create Success', 'Employee Created Successfully');
            return redirect()->route('admin-employees');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Create error', 'Employee Created Error !');
            return redirect()->back()->withInput();       
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user::find($id)->update([
                'is_admin' => $request->is_admin,
            ]);
            $user = $this->user::find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('user.index')->with('toast_success', 'User Updated Successfully!');;
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return redirect()->route('user.index')->with('toast_error', 'User Updated Error !');
        }
    }

    public function delete($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user::find($id);
            $user->roles()->detach($request->role_id);
            $this->user::find($id)->delete();
            DB::commit();
            return redirect()->route('user.index')->with('toast_success', 'The user deleted Successfully!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return redirect()->route('user.index')->with('toast_error', 'The user deleted error');
        }
    }
}
