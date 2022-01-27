<?php

namespace App\Http\Controllers\SuperAdmin\UserManagement;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\SuperAdmin\Store\StorePermissionRequest;
use App\Http\Requests\SuperAdmin\Update\UpdatePermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('permission_access');
        $permissions = Permission::simplePaginate(5);
        return view('SuperAdmin.UserManagement.Permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('permission_create');
        return view('SuperAdmin.UserManagement.Permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create($request->validated());

        toast('Permission Successfully Created','success');

        return redirect()->route('super-admin.user-management.permissions.index');
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
    public function edit(Permission $permission)
    {
        $this->authorize('permission_edit');
        return view('SuperAdmin.UserManagement.Permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePermissionRequest $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $update = $permission->update($request->validated());

        toast('Permission Successfully Updated','success');

        return redirect()->route('super-admin.user-management.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $this->authorize('permission_delete');
        $permission->delete();
        toast('Permission Successfully Deleted','success');

        return redirect()->route('super-admin.user-management.permissions.index');
    }
}
