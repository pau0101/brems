<?php

class MainFacilityTypeController extends BaseController {

	public function showRecords()
	{
		$facilityType = DB::table('tblfacilitytype')
			->where('status', '=', 'active')
			->get();

		return View::make('mainFacility.fac_type')
			->with('fType', $facilityType);
	}

	public function getInfo()
	{
		if(Request::ajax())
		{
			$info = DB::table('tblfacilitytype')
				->where('FacilityTypeID', '=', Input::get('id'))
				->get();

			return Response::json(array('info' => $info));
		}
	}

	public function addRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblfacilitytype')
				->insert(array(
						'FacilityName' => Input::get('txtFacility'),
						'FacilityCode' => Input::get('txtFCode'),
						'FacilityRental' => Input::get('txtFee'),
						'FacilityDiscount' => Input::get('txtDiscount')
					));

			$facilityType = DB::table('tblfacilitytype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('fType' => $facilityType));
		}
	}

	public function updateRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblfacilitytype')
				->where('FacilityTypeID', '=', Input::get('etxt1'))
				->update(array(
						'FacilityName' => Input::get('etxt2'),
						'FacilityCode' => Input::get('etxt3'),
						'FacilityRental' => Input::get('etxt4'),
						'FacilityDiscount' => Input::get('etxt5')
					));

			$facilityType = DB::table('tblfacilitytype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('fType' => $facilityType));
		}
	}

	public function deleteRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblfacilitytype')
				->where('FacilityTypeID', '=', Input::get('dtxt1'))
				->update(array(
						'status' =>'inactive'
					));

			$facilityType = DB::table('tblfacilitytype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('fType' => $facilityType));
		}
	}

}
