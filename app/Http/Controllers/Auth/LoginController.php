<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';
    //protected $redirectTo = '/admin';
    public function redirectTo()
    {
        $user = auth()->user();
        if ($user->admin == 1) {
            return 'admin/';
        } else if ($user->admin == 0) {
            return '/';
        } else {
            return '/login';
        }
    }

    protected function home()
    {
        // User role
        $role = Auth::user()->admin;
        echo '234' .$role;
//        switch ($role)
//        {
//            case 0:
//                return '/'; // redirect to home page
//                break;
//            case 1:
//                return '/admin'; // redirect to admin page
//                break;
//            default:
//                return '/login'; // redirect to login page
//                break;
//        }
//        return view('front.pages.home');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    //login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    //login post
}
