<?php

class RegisterController extends BaseController {

	public function index()
	{

		$position = DB::table('tblofficialposition')
			->get();

		return View::make('register.register')
			->with('pos', $position);
	}

	public function register()
	{
		//checking kung official talaga
		$ctr = DB::table('tblresident')
			->join('tblofficialdetails', 'tblresident.ResidentID', '=', 'tblofficialdetails.ResidentID')
			->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
			->where('FirstName', '=', Input::get('fname'))
			->where('LastName', '=', Input::get('lname'))
			->where('Gender', '=', Input::get('gender'))
			->where('Birthdate', '=', Input::get('birthdate'))
			->where('tblofficialdetails.OfficialPositionID', '=', Input::get('position'))
			->count();

		if($ctr != 0)
		{
			$checkOfficial = DB::table('tblresident')
				->join('tblofficialdetails', 'tblresident.ResidentID', '=', 'tblofficialdetails.ResidentID')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->where('FirstName', '=', Input::get('fname'))
				->where('LastName', '=', Input::get('lname'))
				->where('Gender', '=', Input::get('gender'))
				->where('Birthdate', '=', Input::get('birthdate'))
				->where('tblofficialdetails.OfficialPositionID', '=', Input::get('position'))
				->get();

			//checking kung yung official ba may account na or wala pa
			$ctr2 = DB::table('tblofficialaccount')
				->join('tblofficialdetails', 'tblofficialdetails.OfficialID', '=', 'tblofficialaccount.OfficialID')
				->where('tblofficialaccount.OfficialID', '=', $checkOfficial[0]->OfficialID)
				->count();

			if($ctr2 == 0 )
			{
				DB::table('tblofficialaccount')
					->insert(array(
							'Username' => Input::get('username'),
							'Password' => Input::get('password'),
							'Email' => Input::get('email'),
							'OfficialID' => $checkOfficial[0]->OfficialID
						));	

				return Redirect::to('/')
					->with('messageLogin', 'You had just created your account');

			}
			else
			{
				return Redirect::to('register')
					->with('message', 'meron nang account yan eh !!!!!!');
				
			}

			
		}
		else
		{
			return Redirect::to('register')
				->with('message', 'di naman yan official eh!!!!!');

		}
	}

	public function checkUsername()
	{
		if(Request::ajax())
		{
			$ctrUser = DB::table('tblofficialaccount')
				->where('Password', '=', Input::get('username'))
				->count();

			if($ctrUser == 0)
			{
				return Response::json(array('hey' => '0'));
			}
			else
			{
				return Response::json(array('hey' => '1'));
			}
			
		}
	}
}