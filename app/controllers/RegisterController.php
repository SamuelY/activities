<?php

class RegisterController extends \BaseController {

	public function index()
	{
   /*     $inputs = Input::all();      
        
        Register::create($inputs);

		return Redirect::route('register.index', $inputs['beside_id']);*/
		return View::make('register.index');
	}

	public function create()
	{
		$register = new User;
        $register->name = Input::get('name');
		$register->email = Input::get('email');  
		  
        if (!strcmp(Input::get('password'),Input::get('confirm_password'))) {
			$register->password = Hash::make(Input::get('password'));
			$register->save();
			return View::make('beside.message', ['message'=>'註冊成功']);
		}
			
        return View::make('beside.message', ['message'=>'發生錯誤']);

		
	}
}