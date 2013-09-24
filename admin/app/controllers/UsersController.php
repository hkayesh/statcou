<?php

class UsersController extends \BaseController {

    public function login() {
       if(Input::server("REQUEST_METHOD") == "POST") {
            
            $credentials = array(
                "username" => Input::get("username"),
                "password" => Input::get("password")
            );
            
            //dd($credentials);

            if(Auth::attempt($credentials)) {
                return Redirect::to('/');
            }
            else {
                return Redirect::route('user/login')
                    ->withErrors(array('password' => 'Invalid username or password'))
                    ->withInput(Input::except('password'));
            }
        }
        
        return View::make('user.login');
    }
    
    public function logout() {        
        Auth::logout();
        return Redirect::route('user/login');
    }
}