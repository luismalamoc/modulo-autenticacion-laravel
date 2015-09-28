<?php

class Auth_SessionController extends BaseController {
	
	
	public function getLogIn()
	{
		if(Auth::check())
			return View::make('layouts.auth.session.postLogin');
		else
			return View::make('layouts.auth.session.getLogin');
	}
		
    public function postLogIn()
	{
	
		$rules = array(
			'username' => 'required|alpha_num',
			'password'  => 'required|min:8'
		);
	
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);
	
        $validator = Validator::make($userdata, $rules);
        
        if ($validator->passes())
        {
	        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
			{					
				return View::make('layouts.auth.session.postLogin');
			}
			else
			{
				return Redirect::route('login')
					->with('error', Lang::get('messages.auth.session.login.error'));
			}
        }
        else
        {
        	return Redirect::route('login')->withInput()
                ->withErrors($validator->errors());
        }         		
	}	

	public function logOut()
	{
		Auth::logout();
        Session::flash('info',Lang::get('messages.auth.session.logout'));
		return Redirect::to('/');
	}	
}
