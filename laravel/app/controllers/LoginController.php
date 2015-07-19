<?php

class LoginController extends BaseController{

	public function __construct() {

    	$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function showLogin(){
		
		return View::make('users.login');
	}

	public function doLogin(){

		$rules = array(
			'email'		=> 'required|email',
			'password'	=> 'required|alphaNum|min:5'
			);
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}
		else{
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {

				$user_data = Auth::user();
				Session::put('email', $user_data->email);
				
				return Redirect::to('index')->with('message', 'Welcome back!');
			}
			else{
				return Redirect::to('login')->with('message', 'Sorry, invalid login');
			}
		}
	}

	public function doLogout(){
		
		Auth::logout();
		return Redirect::to('users.login');
	}
}