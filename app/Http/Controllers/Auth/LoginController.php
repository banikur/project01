<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class LoginController extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getLogin()
    {
        return view('template.front_login.login');
    }

    public function postLogin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // Attempt to log the user in
        // Passwordnya pake bcrypt
        if(Auth::check()) {


        }
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 2])) {
            return redirect()->intended('/admin/dashboard');
        } else if (Auth::guard('kab_kota')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 4])) {
            return redirect()->intended('/kab_kota/dashboard');
        } else if (Auth::guard('provinsi')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 3])) {
            return redirect()->intended('/provinsi/dashboard');
        } else {
            return redirect()->intended('/login');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('kab_kota')->check()) {
            Auth::guard('kab_kota')->logout();
        }elseif (Auth::guard('provinsi')->check()) {
            Auth::guard('provinsi')->logout();
        }
        
        return redirect('/');
    }
}
