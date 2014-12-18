<?php

class HomeController extends BaseController {


    public function showLogin()
    {
        // show the form
        return View::make('login');
    }

    public function doLogin(){
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }else{
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            if(Auth::attempt($userdata)){
                echo "SUCCESS";
            }else{
                return Redirect::to('login');
            }
        }
    }

    public function doLogout(){
        Auth::logout();
        return Redirect::to('login');
    }
}
