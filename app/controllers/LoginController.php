<?php

class LoginController extends \BaseController {

	public function index()
	{

		return View::make('login.index');
	}

    public function auth()
	{
		if (Auth::attempt(['name' => Input::get('name'), 'password' => Input::get('password')]))
		{

        	return View::make('login.message', ['message' => '成功登入']);
    	}
		return View::make('login.message', ['message' => '請檢查登入資訊']);
		
	}
	public function logout()
	{
		Auth::logout();
		
		return View::make('login.message', ['message' => '成功登出']);
	}
}