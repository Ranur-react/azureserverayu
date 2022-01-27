<?php

namespace App\Http\Controllers\SuperAdmin\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Http\Requests\SuperAdmin\Store\StoreUserRequest;
use App\Http\Requests\SuperAdmin\Update\UpdateUserRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('user_access');
        $users = User::with('roles')->simplePaginate(10);

        return view('SuperAdmin.UserManagement.User.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('user_create');
        $roles = Role::all('id', 'name');

        return view('SuperAdmin.UserManagement.User.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' =>  Hash::make($request->password),
        ]);
        $user->assignRole($request->role);

        toast('User Successfully Registered','success');

        return redirect()->route('super-admin.user-management.users.index');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('user_edit');
        $roles = Role::all('id', 'name');

        return view('SuperAdmin.UserManagement.User.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $update = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);
        $user->syncRoles($request->role);

        toast('User Successfully Updated','success');

        return redirect()->route('super-admin.user-management.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('user_delete');
        $user = User::findOrFail($id);
        $delete = $user->delete($user);

        return redirect()->route('super-admin.user-management.users.index')
            ->with('delete_user_message_success', 'User deleted successfully. <a href="'.route('super-admin.user-management.users.restore', $id). '"> Whoops, Undo</a>');
    }

    public function restore(int $id)
    {
        $this->authorize('user_delete');

        $user = User::withTrashed()->find($id);
        if ($user && $user->trashed()) {
            $user->restore();
        }

        toast('User Restored Successfully','success');

        return redirect()->route('super-admin.user-management.users.index');
    }
}
