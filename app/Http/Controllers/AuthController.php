<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;
use Auth;
use Exception;


class AuthController extends Controller
{


    //use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    //protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }


    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        try {
            //$user = Socialite::driver('google')->user();
            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect('/home');
        }
    }
}