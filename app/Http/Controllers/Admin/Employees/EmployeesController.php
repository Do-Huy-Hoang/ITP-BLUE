<?php

namespace App\Http\Controllers\Admin\Employees;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateResquest;
use App\Models\Roles;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
            $employees = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
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
        $employee = $this->user::withoutTrashed()->find($id);
        $role = $this->roles::all();
        $employeeRoles = $employee->roles->pluck('rol_id')->toArray();
        return view('Admin.Employees.edit', compact('employee', 'role', 'employeeRoles'));
    }

    public function create(EmployeeCreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $file = $request->file('image');
            $imageData = file_get_contents($file->getRealPath());
            $employee = $this->user::create([
                'us_name' => $request->us_name,
                'email' => $request->email,
                'us_address' => $request->address,
                'password' => Hash::make($request->emp_password), 
                'us_phone' => $request->us_phone,
                'us_gender' => $request->us_gender,
                'us_birthday' => $request->us_birthday,
                'us_img' => $imageData,
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

    public function update($id, EmployeeUpdateResquest $request)
    {
        try {
            DB::beginTransaction();
            $employee = $this->user::find($id);
            foreach ($employee->rolesUser as $role) {
                RoleUser::withoutTrashed()->find($role->id)->delete(); 
            }
            if ($employee && $request->has('role_id')) {
                $employee->roles()->attach($request->role_id);
            }
            DB::commit();
            Alert::success('Update Success', 'Employee Updated Successfully');
            return redirect()->route('admin-employees');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Update error', 'Employee Updated Error !');
            return redirect()->route('admin-employees');
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
