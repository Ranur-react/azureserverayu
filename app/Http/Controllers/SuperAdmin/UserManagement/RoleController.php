<?php

namespace App\Http\Controllers\SuperAdmin\UserManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\Update\UpdateRoleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\SuperAdmin\Store\StoreRoleRequest;
use RealRashid\SweetAlert\Facades\Alert;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('role_access');
        $roles =  Role::with('permissions')->simplePaginate(5);

        return view('SuperAdmin.UserManagement.Roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('role_create');
        $permissions = Permission::all('id', 'name');
        return view('SuperAdmin.UserManagement.Roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);
        $role->givePermissionTo($request->permission);

        toast('Role Successfully Created','success');

        return redirect()->route('super-admin.user-management.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('role_edit');
        $role = Role::findOrFail($id);
        $roles = Role::with('permissions')->where('id', $id)->get();
        $permissions = Permission::all('id', 'name');
        foreach ($roles as $role) {
            foreach ($role->permissions as $data) {
                $permission_id[] = $data->id;
            }
        }

        return view('SuperAdmin.UserManagement.Roles.edit', compact('role', 'permissions', 'permission_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $update = $role->update([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permission);

        toast('Role Successfully Updated','success');

        return redirect()->route('super-admin.user-management.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $this->authorize('role_delete');
        $delete = $role->delete();

        toast('Role Successfully Deleted','success');

        return redirect()->route('super-admin.user-management.roles.index');
    }
}
