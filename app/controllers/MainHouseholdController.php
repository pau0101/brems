<?php

class MainHouseholdController extends BaseController {

	public function showRecords()
	{
		$household = DB::table('tblhouse')
			->where('status', '=', 'active')
			->get();

		return View::make('mainResident.household')
			->with('hhold', $household);
	}

	public function getInfo()
	{
		if(Request::ajax()){
			$household = DB::table('tblhouse')
				->where('HouseID', '=', Input::get('id'))
				->get();

			return Response::json(array('house' => $household));

		}
	}


	public function addRecord()
	{				
		if(Request::ajax()){
			DB::table('tblhouse')
				->insert(array(
					array(
						'HouseOwner' => Input::get('hhowner'),
						'HouseAddNo' => Input::get('hhaddno'),
						'HouseStreet' => Input::get('hhstreet'),
						'HouseZone' => Input::get('hhzone'),
						'HouseType' => Input::get('hhtype'),
						'status' => 'active'
						)
					));

			$household = DB::table('tblhouse')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('house' => $household));
			 
		}
	}


	public function updateRecord()
	{

		if(Request::ajax()){
			DB::table('tblhouse')
				->where('HouseID', Input::get('txt1'))
				->update(array(
					'HouseOwner' => Input::get('txt2'),
						'HouseAddNo' => Input::get('txt3'),
						'HouseStreet' => Input::get('txt4'),
						'HouseZone' => Input::get('txt5'),
						'HouseType' => Input::get('txt6'),
						'status' => 'active'
					));
					

			$household = DB::table('tblhouse')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('house' => $household));
		}
	}

	public function deleteRecord()
	{

		if(Request::ajax()){
			DB::table('tblhouse')
				->where('HouseID', '=', Input::get('txt1'))
				->update(array(
					'status' => 'inactive'
					));
					

			$officialPosition = DB::table('tblhouse')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('house' => $household));
		}
	}



}

