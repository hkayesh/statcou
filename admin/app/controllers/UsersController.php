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

    public function account() {
        return View::make('user/account');
    }

    public function saveAccount() {
        if(Input::server('REQUEST_METHOD') == "POST") {
            $input = Input::all();
            $validator = Validator::make($input, array(
                'password' => 'required',
                'confirmPassword' => 'required|same:password'
            ));

            if($validator->passes()) {
                //$username = Input::get('username');
                $password = Hash::make(Input::get('password'));
                $user = Auth::user();

                if($username = Input::get('username')) {

                    $user->username = $username;
                }
                $user->password = $password;
                if($user->save()) {
                    return Redirect::route('user/account')
                        ->with('success', 'Information updated');
                }

            }
            else {
                return Redirect::route('user/account')
                    ->withErrors($validator)
                    ->withInput($input);
            }
        }
        else {
            return Redirect::route('user/account');
        }
    }
}