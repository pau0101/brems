<?php

class MainOfficialDetailsController extends BaseController {

	public function showRecords()
	{
		$officialDetails = DB::table('tblofficialdetails')
			->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
			->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
			->where('tblofficialdetails.status', '=', 'active')
			->get();

		$officialPosition = DB::table('tblofficialposition')
			->where('status', '=', 'active')
			->get();

		$checkResident = DB::table('tblresident')
			->get();

		return View::make('mainOfficial.official_detail')
			->with('oDetails', $officialDetails)
			->with('oPosition', $officialPosition)
			->with('cResident', $checkResident);
	}

	public function getResidentInfo()
	{
		if(Request::ajax())
		{
			$rDetails = DB::table('tblresident')
				->where('ResidentID', '=', Input::get('resID'))
				->join('tblfamily', 'tblresident.FamilyID', '=', 'tblfamily.FamilyID')
				->join('tblhouse', 'tblfamily.HouseID', '=', 'tblhouse.HouseID')
				->get();

			return Response::json(array('rD' => $rDetails));
		}
	}

	public function getInfo()
	{
		if(Request::ajax()){
			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
				->where('tblofficialdetails.status', '=', 'active')
				->where('OfficialID', '=', Input::get('id'))
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

	public function addRecord()
	{
		if(Request::ajax()){

			DB::table('tblofficialdetails')
				->insert(array(
						'ResidentID' => Input::get('txtResidentID'),
						'OfficialPositionID' => Input::get('txtPosition'),
						'OfficialTermStart' => Input::get('txtStart'),
						'OfficialTermEnd' => Input::get('txtEnd')
					));


			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));

		}
	}

	public function updateRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblofficialdetails')
				->where('OfficialID', '=', Input::get('etxtID'))
				->update(array(
						'OfficialPositionID' => Input::get('etxtPosition'),
						'OfficialTermStart' => Input::get('etxtStart'),
						'OfficialTermEnd' => Input::get('etxtEnd')
					));

			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

	public function deleteRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblofficialdetails')
				->where('OfficialID', '=', Input::get('dtxtID'))
				->update(array(
						'status' => 'inactive'
					));

			$officialDetails = DB::table('tblofficialdetails')
				->join('tblofficialposition', 'tblofficialdetails.OfficialPositionID', '=', 'tblofficialposition.OfficialPositionID')
				->join('tblresident', 'tblofficialdetails.ResidentID', '=', 'tblresident.ResidentID')
				->where('tblofficialdetails.status', '=', 'active')
				->get();

			return Response::json(array('oDetails' => $officialDetails));
		}
	}

}
