<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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

 

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    // protected $redirectTo = RouteServiceProvider::HOME;

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {           
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $userModelObj = new User();    
      
        $credentials = $request->only('email', 'password');

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        $this->authenticated($request, $user);
        // return redirect()->route('home');
        // if(Auth::attempt($credentials) ) {    
        //     // dd("eee".$credentials);
        // // echo "id==".     $userId = auth()->user()->id;        
        // //     $userModelObj->userSessionDestroyOtherDevice($userId);             
            return redirect()->route('home');      
        
        // }
        // else{
        //     return redirect("login")->withSuccess('Login details are not valid');
        // }
  
    }
}
