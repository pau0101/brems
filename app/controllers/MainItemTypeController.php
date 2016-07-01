<?php

class MainItemTypeController extends BaseController {

	public function showRecords()
	{
		$itemType = DB::table('tblitemtype')
			->where('status', '=', 'active')
			->get();

		return View::make('mainItem.item_type')
			->with('iType', $itemType);
	}

	public function getInfo()
	{
		if(Request::ajax())
		{
			$itemType = DB::table('tblitemtype')
				->where('ItemTypeID', '=', Input::get('id'))
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function addRecord()
	{
		if(Request::ajax())
		{
			if(Input::hasFile('txtIImage'))
			{
				$newName = time().Input::file('txtIImage')->getClientOriginalName();

				Input::file('txtIImage')->move(public_path().'/bower_components/admin-lte/dist/images/', $newName);

				DB::table('tblitemtype')
					->insert(array(
							'ItemName' => Input::get('txtIName'),
							'ItemCode' => Input::get('txtICode'),
							'ItemRental' => Input::get('txtIFee'),
							'ItemImage' => $newName

						));
			}
			else
			{

				DB::table('tblitemtype')
					->insert(array(
							'ItemName' => Input::get('txtIName'),
							'ItemCode' => Input::get('txtICode'),
							'ItemRental' => Input::get('txtIFee')

						));
			}


			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function updateRecord()
	{
		if(Request::ajax())
		{
			if(Input::hasFile('etxtIImageChange'))
			{
				$newName = time().Input::file('etxtIImageChange')->getClientOriginalName();

				Input::file('etxtIImageChange')->move(public_path().'/bower_components/admin-lte/dist/images/', $newName);

				DB::table('tblitemtype')
					->where('ItemTypeID', '=', Input::get('etxtID'))
					->update(array(
							'ItemName' => Input::get('etxtIName'),
							'ItemCode' => Input::get('etxtICode'),
							'ItemRental' => Input::get('etxtIFee'),
							'ItemImage' => $newName

						));
			}
			else
			{

				DB::table('tblitemtype')
					->where('ItemTypeID', '=', Input::get('etxtID'))
					->update(array(
							'ItemName' => Input::get('etxtIName'),
							'ItemCode' => Input::get('etxtICode'),
							'ItemRental' => Input::get('etxtIFee')

						));
			}


			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

	public function deleteRecord()
	{
		if(Request::ajax())
		{
			DB::table('tblitemtype')
				->where('ItemTypeID', '=', Input::get('dtxtID'))
				->update(array(
						'status' => 'inactive'

					));

			$itemType = DB::table('tblitemtype')
				->where('status', '=', 'active')
				->get();

			return Response::json(array('itemType' => $itemType));
		}
	}

}
