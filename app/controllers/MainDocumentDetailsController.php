<?php

class MainDocumentDetailsController extends BaseController {

	public function showRecords()
	{
		$documentDetails = DB::table('tbldocumentdetails')
			->get();

		return View::make('mainDocument.doc_detail')
			->with('dDetails', $documentDetails);
	}

	public function addRecord()
	{

		if(Request::ajax())
		{

			$newName = time().Input::file('fileTemplate')->getClientOriginalName();

			Input::file('fileTemplate')->move(public_path().'/bower_components/admin-lte/dist/images/', $newName);

			DB::table('tbldocumentdetails')
				->insert(array(
						'DocumentName' => Input::get('txtDocName'),
						'DocumentFee' => Input::get('txtFee'),
						'DocumentTemplate' => $newName
					));

			$documentDetails = DB::table('tbldocumentdetails')
				->get();

			return Response::json(array('oDetails' => $documentDetails));
		}

	}

	public function updateRecord()
	{

		if(Request::ajax())
		{
			if(Input::file('etxt4'))
			{
				$newName = time().Input::file('etxt4')->getClientOriginalName();

				Input::file('etxt4')->move(public_path().'/bower_components/admin-lte/dist/images/', $newName);

				DB::table('tbldocumentdetails')
					->where('DocumentID', '=', Input::get('etxt1'))
					->update(array(
							'DocumentName' => Input::get('etxt2'),
							'DocumentFee' => Input::get('etxt3'),
							'DocumentTemplate' => $newName
						));

				
			}
			else
			{
				DB::table('tbldocumentdetails')
					->where('DocumentID', '=', Input::get('etxt1'))
					->update(array(
							'DocumentName' => Input::get('etxt2'),
							'DocumentFee' => Input::get('etxt3')
						));
			}

			$documentDetails = DB::table('tbldocumentdetails')
				->get();

			return Response::json(array('oDetails' => $documentDetails));
			
		}
	}


	public function deleteRecord()
	{

		if(Request::ajax())
		{
			
				DB::table('tbldocumentdetails')
					->where('DocumentID', '=', Input::get('dtxt1'))
					->delete();
			
			$documentDetails = DB::table('tbldocumentdetails')
				->get();

			return Response::json(array('oDetails' => $documentDetails));
			
		}
	}

	public function getInfo()
	{
		if(Request::ajax())
		{
			$dDetails = DB::table('tbldocumentdetails')
				->where('DocumentID', '=', Input::get('id'))
				->get();
			return Response::json(array('dDetails' => $dDetails));
		}
	}

}
