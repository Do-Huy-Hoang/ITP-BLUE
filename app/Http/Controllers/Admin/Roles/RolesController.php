<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class RolesController extends Controller
{
    private $roles;
    private $permission;
    public function __construct(Roles $roles, Permission $permission)
    {
        $this->roles = $roles;
        $this->permission = $permission;
    }
    public function index(Request $request)
    {
        try {
            if ($request->search != null) {
                $roles = $this->roles::where('rol_name', 'like', '%' . $request->search . '%')->latest()->paginate(10);
            } else {
                $roles = $this->roles->latest()->paginate(10);
            }
            return view('Admin.Roles.roles', compact('roles'));
        } catch (\Throwable $exception) {
            $roles = new LengthAwarePaginator(
                collect([]),
                collect([])->count(),
                20,
                1
            );
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Admin.Roles.roles', compact('roles'));
        }
    }

    public function add()
    {
        $PermissonsParent = $this->permission::where('per_parent_id', 0)->where('per_name', '!=', 'permission')->get();
        return view('Admin.Roles.add', compact('PermissonsParent'));
    }
    
    public function edit($id)
    {
        $roleCheckd = $this->roles::withoutTrashed()->find($id);
        $PermissonsParent = $this->permission::where('per_parent_id', 0)->where('per_name', '!=', 'permission')->get();
        $permissionChecked = $roleCheckd->permission;
        return view('Admin.Roles.edit', compact('PermissonsParent', 'roleCheckd', 'permissionChecked'));
    }
    
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $role = $this->roles::create([
                'rol_name' => $request->rol_name,
                'rol_display_name' => $request->rol_display_name
            ]);
            $role->permission()->attach($request->permission_id);
            DB::commit();
            Alert::success('Create Success', 'Role Created Successfully');
            return redirect()->route('admin-roles');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Create error', 'Role Created Error !');
            return redirect()->route('admin-roles');
        }
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $role = Roles::find($id);
            if (!$role) {
                Alert::error('Update error', 'Role Update Error !');
                return redirect()->route('admin-roles');
            }

            $role->update([
                'rol_name' => $request->rol_name,
                'rol_display_name' => $request->rol_display_name,
            ]);

            if ($request->has('permission_id')) {
                $role->permission()->sync($request->permission_id);
            }
            DB::commit();
            Alert::success('Update Success', 'Role Update Successfully');
            return redirect()->route('admin-roles');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Update error', 'Role Update Error !');
            return redirect()->route('admin-roles');
        }
    }


    public function delete($roleId)
    {
        try {
            DB::beginTransaction();
            $role = Roles::find($roleId);
            if (!$role) {
                return redirect()->route('admin-roles')->with('toast_error', 'The roles deleted error');
            }
            if ($role->userRole()->exists()) {
                return redirect()->route('admin-roles')->with('toast_error', 'This role is linked to user accounts, cannot delete');
            }
            $role->delete();
            Alert::success('Delete Success', 'Role Delete Successfully');
            return redirect()->route('admin-roles')->with('toast_success', 'The roles deleted Successfully!');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Delete error', 'Role Delete Error !');
            return redirect()->route('admin-roles')->with('toast_error', 'Roles Updated Error !');
        }
    }
}
