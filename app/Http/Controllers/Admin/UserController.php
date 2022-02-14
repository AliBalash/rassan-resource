<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckAdminPermission;
use App\Http\Requests\AdminUserRequest;
use Spatie\Permission\Models\Role;
use App\Models\User;


class UserController extends Controller
{
    public $back_link = '/admin/users';

    public function __construct()
    {

//        $this->middleware(CheckAdminPermission::class . ":users");

    }

    public function index()
    {
        if(!auth()->user()->hasPermissionTo('view user')){
            return  abort(403);
        }

        return view("admin.users.index");
    }

    public function create()
    {
        if(!auth()->user()->hasPermissionTo('create user')){
            return  abort(403);
        }

        return view("admin.users.create",[
            'roles' => Role::all(),
            'back_link' => $this->back_link
        ]);
    }

    public function edit(User $user)
    {
        if(!auth()->user()->hasPermissionTo('create user')){
            return  abort(403);
        }

        return view("admin.users.edit",[
            'roles' => Role::all(),
            'user' => $user,
            'back_link' => $this->back_link
        ]);
    }

    public function store(AdminUserRequest $request)
    {

        $data = [
            'role_id' => $request->get('role_id'),
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'mobile' => $request->get('mobile'),
            'password' => bcrypt($request->get('password')),
        ];


        if(!empty($request->get('email'))){
            $data['email'] = $request->get('email');
        }

        if(!empty($request->get('is_admin')) and $request->get('is_admin') == 1){
            $data['is_admin'] = true;
        }else{
            $data['is_admin'] = false;
        }

        User::query()->create($data);

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);

//        try {
//            User::query()->create($data);
//
//            session()->flash('message', [
//                'type' => 'success',
//                'body' => 'با موفقیت انجام شد'
//            ]);
//        } catch(QueryException $e)  {
//
//            session()->flash('message', [
//                'type' => 'error',
//                'body' => 'کاربر قبلا وجود دارد'
//            ]);
//        }



        return redirect($this->back_link);
    }

    public function update(User $user , AdminUserRequest $request)
    {
        if($request->get('is_admin') == null){
            $is_admin = false;
        }else{
            $is_admin = true;
        }

        $data = [
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'mobile' => $request->get('mobile'),
            'role_id' => $request->get('role_id'),
            'is_admin' => $is_admin
        ];

        if(!empty($request->get('password'))){
            $data['password'] = bcrypt($request->get('password'));
        }

        if(!empty($request->get('email'))){
            $data['email'] = $request->get('email');
        }

        $user->update($data);

        session()->flash('message', [
            'type' => 'success',
            'body' => 'با موفقیت انجام شد'
        ]);
        return redirect($this->back_link);
    }

    public function destroy(User $user)
    {
        dd('it Handle With LiveWire');
    }
}
