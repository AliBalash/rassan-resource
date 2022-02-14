<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminLogoutRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        return view("admin.login");
    }

    public function store (AdminLoginRequest $request){

        $remember_me = $request->has('remember_me');
//
//        if (auth()->attempt(
//            [
//                'mobile' => $request->input('mobile'),
//                'password' => $request->input('password')
//            ],
//            $remember_me
//        )){
////            $user = auth()->user();
//            return redirect('/admin/dashboard');
//        }else{
//            return redirect('/admin/login')->withErrors('اطلاعات وارد شده نامعتبر است');
//        }

        $user = User::query()->where('mobile',$request->get('mobile'))->first();

        if(Hash::check($request->get('password'),$user->password)){
            auth()->login($user,$remember_me);

            return redirect('/admin/dashboard');
        }else{
            return redirect('/admin/login')->withErrors('اطلاعات وارد شده نامعتبر است');
        }
    }

    public function destroy(AdminLogoutRequest $request)
    {
        auth()->logout();
        return redirect('/admin');
    }
}
