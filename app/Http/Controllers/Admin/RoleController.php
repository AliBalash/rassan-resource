<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdminPermission;
use App\Http\Requests\AdminRoleRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public $back_link;


    public function __construct()
    {
//        $this->middleware(['role_or_permission:مدیر کل|کارشناس خدمات پس از فروش شهرستان']);

        $this->back_link = route('admin.roles.index');
    }

    public function index()
    {
//        if (auth()->user()->hasRole('کارشناس خدمات پس از فروش شهرستان')) {
//            echo 'کارشناس خدمات پس از فروش شهرستان';
//        }
//
//        dd(auth()->user()->roles->pluck('name'));

        if(!auth()->user()->hasPermissionTo('view role')){
            return  abort(403);
        }

        return view("admin.roles.index");
    }

    public function create()
    {
        if(!auth()->user()->hasPermissionTo('create role')){
            return  abort(403);
        }

        return view("admin.roles.create",[
            'permissions' => Permission::all(),
            'back_link' => $this->back_link
        ]);
    }

    public function edit(Role $role)
    {
        if(!auth()->user()->hasPermissionTo('edit role')){
            return  abort(403);
        }

        return view("admin.roles.edit",[
            'role' => $role,
            'permissions' => Permission::all(),
            'back_link' => $this->back_link
        ]);
    }

    public function store(AdminRoleRequest $request)
    {
        $roles = Role::query()->create($request->only('name'));
        $roles->syncPermissions($request->get('permissionList'));

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
        return redirect(route('admin.roles.index'));
    }

    public function update(Role $role , AdminRoleRequest $request)
    {

        $role->update($request->only('name'));
        $role->syncPermissions($request->get('permissionList'));

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
        return redirect(route('admin.roles.index'));
    }

    public function destroy(Role $role)
    {
        dd('it Handle With LiveWire');
    }
}
