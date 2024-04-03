<?php

namespace App\Http\Controllers\Admin\Roles;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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
            $roles = [];
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            Alert::error('Error', 'Connection failed !');
            return view('Admin.Roles.roles', compact('roles'));
        }
    }

    public function add()
    {
        $PermissonsParent = $this->roles::where('rol_id', 0)->get();
        return view('Admin.Roles.add', compact('PermissonsParent'));
    }

    public function edit($id)
    {
        $roleCheckd = $this->roles::find($id);
        $PermissonsParent = $this->roles::where('rol_id', 0)->get();
        $permissionChecked = $roleCheckd->permission;
        return view('Admin.Roles.edit', compact('PermissonsParent', 'roleCheckd', 'permissionChecked'));
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $role = $this->roles::create([
                'name' => $request->name,
                'display_name' => $request->display_name
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
            $role = $this->roles::find($id);
            $role->update([
                'name' => $request->name,
                'display_name' => $request->display_name
            ]);
            $role->permission()->sync($request->permission_id);
            DB::commit();
            return redirect()->route('admin-roles')->with('toast_success', 'Roles Updated Successfully!');;
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return redirect()->route('admin-roles')->with('toast_error', 'Roles Updated Error !');
        }
    }

    public function delete($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $this->roles::find($id)->delete();
            DB::commit();
            return redirect()->route('admin-roles')->with('toast_success', 'The roles deleted Successfully!');;
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::channel('daily')->error('Message: ' . $exception->getMessage() . ' Line :' . $exception->getLine());
            return redirect()->route('admin-roles')->with('toast_error', 'The roles deleted error');
        }
    }
}
