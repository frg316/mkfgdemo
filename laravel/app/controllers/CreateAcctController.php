<?php

class CreateAcctController extends BaseController{

	public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function showAcct(){
		return View::make('users.register');
	}

	public function createAcct(){
		$rules = array(
			'firstname'					=> 'required|alpha|min:2',
			'lastname'					=> 'required|alpha|min:2',
			'email'						=> 'required|email|unique:users',
			'password'					=> 'required|alpha_num|min:5|confirmed',
			'password_confirmation'		=> 'required|alpha_num|min:5'
			);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()){
			$user = new User;
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users.login')->with('message', 'Thanks for registering!');
		}
		else{
			return Redirect::to('users.register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}
}