<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Login
Route::get('/', 'LoginController@index');

//getting the value of the input if Login Successful
Route::post('loginVerification', 'LoginController@loginVerification');
Route::get('logout', 'LoginController@Logout');

Route::get('register', 'RegisterController@index');
Route::post('registration', 'RegisterController@register');
Route::post('checkUsername', 'RegisterController@checkUsername');


Route::get('userProfile', 'ProfileController@index');
//Dashboard
Route::get('dashboard', function(){
	return View::make('dashboard.dashboard');
});

//Maintenance Menu
Route::get('maintenanceMenu', function(){
	return View::make('maintenanceMenu.maint_menu');
});


//Maintenance Official Position
Route::get('officialPosition', 'MainOfficialPositionController@showRecords');
Route::post('getInfoByID', 'MainOfficialPositionController@getInfoByID');
Route::post('addOfficialPosition', 'MainOfficialPositionController@addRecord');
Route::post('updateOfficialPosition', 'MainOfficialPositionController@updateRecord');
Route::post('deleteOfficialPosition', 'MainOfficialPositionController@deleteRecord');


//Maintenance Official Details
Route::get('officialDetails', 'MainOfficialDetailsController@showRecords');
Route::post('getResidentInfo', 'MainOfficialDetailsController@getResidentInfo');
Route::post('getOfficialDetails', 'MainOfficialDetailsController@getInfo');
Route::post('addOfficialDetails', 'MainOfficialDetailsController@addRecord');
Route::post('updateOfficialDetails', 'MainOfficialDetailsController@updateRecord');
Route::post('deleteOfficialDetails', 'MainOfficialDetailsController@deleteRecord');


//Maintenance Official Schedule
Route::get('officialSchedule', 'MainOfficialSchedController@showRecords');
Route::post('perOfficial', 'MainOfficialSchedController@perOfficial');
Route::post('getSched', 'MainOfficialSchedController@getInfo');
Route::post('updateSched', 'MainOfficialSchedController@updateRecord');

Route::get('officialScheduleDay', 'MainOfficialSchedDayController@showRecords');



//Maintenance Household Details
Route::get('householdDetails', 'MainHouseholdController@showRecords');
Route::post('getInfo', 'MainHouseholdController@getInfo');
Route::post('addHousehold', 'MainHouseholdController@addRecord');
Route::post('updateHousehold', 'MainHouseholdController@updateRecord');
Route::post('deleteHousehold', 'MainHouseholdController@deleteRecord');

//Maintenance Resident Details
Route::get('residentDetails', 'MainResidentController@showRecords');
Route::post('getInfo', 'MainResidentController@getInfo');
Route::post('getResInfo', 'MainResidentController@getResInfo');
Route::post('addResident', 'MainResidentController@addRecord');
Route::post('addFamily', 'MainResidentController@addFamily');
Route::post('updateResident', 'MainResidentController@updateRecord');


//Maintenance Document Details
Route::get('documentDetails', 'MainDocumentDetailsController@showRecords');
Route::post('addDocumentDetails', 'MainDocumentDetailsController@addRecord');
Route::post('getDocumentDetails', 'MainDocumentDetailsController@getInfo');
Route::post('updateDocumentDetails', 'MainDocumentDetailsController@updateRecord');
Route::post('deleteDocumentDetails', 'MainDocumentDetailsController@deleteRecord');

//Maintenance Document Details
Route::get('documentPurpose', 'MainDocumentPurposeController@showRecords');
Route::post('getDocumentPurpose', 'MainDocumentPurposeController@getInfo');
Route::post('addDocumentPurpose', 'MainDocumentPurposeController@addRecord');
Route::post('updateDocumentPurpose', 'MainDocumentPurposeController@updateRecord');
Route::post('deleteDocumentPurpose', 'MainDocumentPurposeController@deleteRecord');


//Maintenance Business Type
Route::get('businessType', 'MainBusinessTypeController@showRecords');
Route::post('getBusinessTypeInfo', 'MainBusinessTypeController@getBusinessTypeInfo');
Route::post('addBusinessType', 'MainBusinessTypeController@addRecord');
Route::post('updateBusinessType', 'MainBusinessTypeController@updateRecord');
Route::post('deleteBusinessType', 'MainBusinessTypeController@deleteRecord');


//Maintenance Business Details
Route::get('businessDetails', 'MainBusinessDetailsController@showRecords');

//Maintenance Facility Type
Route::get('facilityType', 'MainFacilityTypeController@showRecords');
Route::post('getFacilityType', 'MainFacilityTypeController@getInfo');
Route::post('addFacilityType', 'MainFacilityTypeController@addRecord');
Route::post('updateFacilityType', 'MainFacilityTypeController@updateRecord');
Route::post('deleteFacilityType', 'MainFacilityTypeController@deleteRecord');

//Maintenance for Facility Details
Route::get('facilityDetails', 'MainFacilityDetailsController@showRecords');
Route::post('getFacilityDetails', 'MainFacilityDetailsController@getInfo');
Route::post('addFacilityDetails', 'MainFacilityDetailsController@addRecord');
Route::post('updateFacilityDetails', 'MainFacilityDetailsController@updateRecord');
Route::post('deleteFacilityDetails', 'MainFacilityDetailsController@deleteRecord');


//Maintenance Facility Schedule
Route::get('facilitySchedule', 'MainFacilityScheduleController@showRecords');
Route::post('getFacilitySchedule', 'MainFacilityScheduleController@getInfo');
Route::post('updateFacilitySched', 'MainFacilityScheduleController@updateSched');


//Maintenance Item Type
Route::get('itemType', 'MainItemTypeController@showRecords');
Route::post('getItemTypeInfo', 'MainItemTypeController@getInfo');
Route::post('addItemType', 'MainItemTypeController@addRecord');
Route::post('updateItemType', 'MainItemTypeController@updateRecord');
Route::post('deleteItemType', 'MainItemTypeController@deleteRecord');

//Maintenance Item Details
Route::get('itemDetails', 'MainItemDetailsController@showRecords');
Route::post('addItemDetails', 'MainItemDetailsController@addRecord');
Route::post('getItemDetailsInfo', 'MainItemDetailsController@getInfo');
Route::post('updateItemDetails', 'MainItemDetailsController@updateRecord');
Route::post('deleteItemDetails', 'MainItemDetailsController@deleteRecord');

//Maintenance Event Details
Route::get('eventDetails', 'MainEventDetailsController@showRecords');





Route::get('transactionMenu', function(){
	return View::make('transactionMenu.trans_menu');
});


Route::get('documentRequest', function(){
	return View::make('transDocument.doc_request');
});

Route::get('documentRequestForm', function(){
	return View::make('transDocument.doc_request_form');
});



Route::get('itemRequest', 'TransItemRequestController@showRecords');

Route::get('itemRequestForm', function(){
	return View::make('transItem.item_request_content');
});


