<?php

class LoginController extends BaseController {

	public function index()
	{
		return View::make('login.login');
	}

	public function loginVerification()
	{
		$username = Input::get('username');
		$password = Input::get('password');

		$result = DB::table('tblofficialaccount')
			->where('Username', '=', Input::get('username'))
			->where('Password', '=', Input::get('password'))
			->count();

		if($result == 1)
		{

			$result2 = DB::table('tblofficialaccount')
				->join('tblofficialdetails', 'tblofficialdetails.OfficialID', '=', 'tblofficialaccount.OfficialID')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
				->where('tblofficialaccount.Username', '=', Input::get('username'))
				->where('tblofficialaccount.Password', '=', Input::get('password'))
				->get();



			Session::put('username', $username);
			Session::put('password', $password);
			Session::put('firstname', $result2[0]->FirstName);
			Session::put('lastname', $result2[0]->LastName);
			Session::put('position', $result2[0]->OfficialPosition);
			Session::put('image', $result2[0]->Image);

			if($result2[0]->Admin == 1)
			{
				Session::put('admin', 'Admin');
			}
			else
			{
				Session::put('admin', 'Not Admin');	
			}

			return Redirect::to('dashboard');
		}
		else
		{
			return Redirect::to('/')
				->with('messageLogin', 'User does not exists');
		}
	}

	public function Logout()
	{
		return Redirect::to('/');
	}

}