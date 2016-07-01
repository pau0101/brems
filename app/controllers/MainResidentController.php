<?php

class MainResidentController extends BaseController {

	public function showRecords()
	{
		$resident = DB::table('tblresident')
			->where('tblresident.status', '=', 'active')
			->join('tblfamily', 'tblresident.FamilyID', '=', 'tblfamily.FamilyID')
			->get();

		$household = DB::table('tblhouse')
			->where('status', '=', 'active')
			->get();

		

		return View::make('mainResident.resident')
			->with('res', $resident)
			->with('house', $household);
			
	}


	public function getInfo()
	{
		if(Request::ajax()){
			$household = DB::table('tblhouse')
				->where('HouseID', '=', Input::get('id'))
				->get();

			return Response::json(array('house' => $household));

			$resident = DB::table('tblresident')
				->where('ResidentID', '=', Input::get('id'))
				->get();

			return Response::json(array('resi' => $resident));

		}
	}

	public function getResInfo()
	{
		if(Request::ajax()){

			$resident = DB::table('tblresident')
				->where('ResidentID', '=', Input::get('id'))
				->get();

			return Response::json(array('resi' => $resident));

		}
	}

	public function addFamily()
	{	

		if(Request::ajax()){

			$familyCount = DB::table('tblfamily')
				->orderBy('FamilyID', 'desc')
				->count();

			if($familyCount == 0) {

				$f = 1;

			}
			else {

				$family = DB::table('tblfamily')
					->orderBy('FamilyID', 'desc')
					->take(1)
					->get();

					$f = $family[0]->FamilyID + 1;
			}

			DB::table('tblfamily')
				->insert(array(
					array(
						'HouseID' => Input::get('houseid'),
						'FamilyID' => $f
						)
					));

		}
	}


	public function addRecord()
	{				
		if(Request::ajax()){


			$familyid = DB::table('tblfamily')
					->orderBy('FamilyID', 'desc')
					->take(1)
					->get();

			DB::table('tblresident')
				->insert(array(
					array(
						'FamilyID' => $familyid[0]->FamilyID,
						'LastName' => Input::get('lname'),
						'FirstName' => Input::get('fname'),
						'MidName' => Input::get('mname'),
						'RelationHead' => Input::get('relationhead'),
						'ResidencyStat' => Input::get('restype'),
						'Birthdate' => Input::get('bdate'),
						'Birthplace' => Input::get('bplace'),
						'Gender' => Input::get('gender'),
						'CivilStat' => Input::get('civil'),
						'Religion' => Input::get('religion'),
						'MobileNo' => Input::get('mobileno'),
						'TelNo' => Input::get('telno'),
						'EmailAdd' => Input::get('email'),
						'Height' => Input::get('height'),
						'Weight' => Input::get('weight'),
						'HealthStat' => Input::get('healthstat'),
						'CurrStudy' => Input::get('currentstud'),
						'CurrLevel' => Input::get('currentlevel'),
						'HighLevel' => Input::get('highestlevel'),
						'ReadLiteracy' => Input::get('read'),
						'WriteLiteracy' => Input::get('write'),
						'CurrEmployed' => Input::get('currentemp'),
						'Occupation' => Input::get('occup'),
						'Salary' => Input::get('salary'),
						'status' => 'active'
						)
					));

			$resident = DB::table('tblresident')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('res' => $resident));
			 
		}
	}

	public function updateRecord()
	{

		if(Request::ajax()){
			DB::table('tblresident')
				->where('ResidentID', Input::get('txt1'))
				->update(array(
						'FirstName' => Input::get('txt2'),
						'LastName' => Input::get('txt3'),
						'MidName' => Input::get('txt4'),
						'RelationHead' => Input::get('txt5'),
						'ResidencyStat' => Input::get('txt6'),
						'Birthdate' => Input::get('txt7'),
						'Birthplace' => Input::get('txt8'),
						'Gender' => Input::get('txt9'),
						'CivilStat' => Input::get('txt10'),
						'Religion' => Input::get('txt11'),
						'MobileNo' => Input::get('txt12'),
						'TelNo' => Input::get('txt13'),
						'EmailAdd' => Input::get('txt14'),
						'Height' => Input::get('txt15'),
						'Weight' => Input::get('txt16'),
						'HealthStat' => Input::get('txt17'),
						'CurrStudy' => Input::get('txt18'),
						'HighLevel' => Input::get('txt19'),
						'CurrLevel' => Input::get('txt20'),
						'ReadLiteracy' => Input::get('txt21'),
						'WriteLiteracy' => Input::get('txt22'),
						'CurrEmployed' => Input::get('txt23'),
						'Occupation' => Input::get('txt24'),
						'Salary' => Input::get('txt25'),
						'status' => 'active'
					));
					

			$res = DB::table('tblresident')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('resi' => $res));
		}
	}

}