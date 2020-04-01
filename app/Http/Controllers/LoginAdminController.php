<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Destination;
use Flash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;


class LoginAdminController extends Controller
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
  
   
    public function showLoginForm()
    {
        return view('pages.admin.login');
    }
    /***
    *Post Login Form
    * @param Request $request
    * return Response 
    */
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'email'    => 'required|email|min:5|max:191',
                'password' => 'required|string|min:4|max:255',
            ];

            //custom validation error messages.
            $messages = [
                'email.exists' => 'These credentials do not match our records.',
            ];

            //validate the request.
            $request->validate($rules,$messages);
    }
    private function validatorRegister(Request $request)
    {
            //validation rules.
            $rules = [
                'email'    => 'required|email|min:5|max:191',
                'password' => 'required|string|min:4|max:255',
            ];

            //custom validation error messages.
            $messages = [
                'email.exists' => 'These credentials do not match our records.',
            ];

            //validate the request.
            $request->validate($rules,$messages);
    }
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
    public function login(Request $request)
    {
        $this->validator($request);
        
        if(Auth::guard('destination')->attempt($request->only('email','password'))){
            //Authentication passed...
            return redirect()
                ->intended(route('admin'))
                ->with('status','You are Logged in as Admin!');
        }

        //Authentication failed...
        return $this->loginFailed();
        
    }   
    /**
    *Logout function
    * */
    public function logout(Request $request)
    {
        Auth::guard('destination')->logout();
        return redirect()
            ->route('connect-admin')
            ->with('status','Admin has been logged out!');
    }
    public function create()
    {
        return view('pages.admin.create');
    }
    public function store(Request $request)
    {
        $this->validatorRegister($request);
        Destination::create([
            "email" => $request->get('email'),
            "password" => Hash::make($request->get('password'))
        ]);
        Flash::success('Etablissement saved successfully.');
        return redirect(route('connect-admin'));

        
    }
}
