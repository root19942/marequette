<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'genre' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'subname' => ['required', 'string', 'max:255'],
            'etablisement' => ['required', 'string', 'max:255'],
            'faculte' => ['required', 'string', 'max:255'],
            'filiere' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'matricule' => ['required', 'string', 'max:255'],

            'telephone' => ['required', 'string', 'max:255'],


            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'genre' => $data['genre'],
            'subname' => $data['subname'],
            'etablisement' => $data['etablisement'],
            'faculte' => $data['faculte'],
            'filiere' => $data['filiere'],
            'niveau' => $data['niveau'],
            'matricule' => $data['matricule'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }
}
