<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landlord;
use DB;

class FormController extends Controller

{
    
//Search

// function search_data(Request $request) {

//  $data =$request->input('search');

//   $record = DB::table('landlords')->where('address' , 'like' , '%' . $data . '%') ->get(); //% for insensitive

//  return view('records' , compact('record'));

//  }


    //Store Record
    function store_data(Request $request) {
$data = new Landlord;

$data->address = $request->input('address');
$data->rental_price = $request->input('number');
$data->number_of_bedrooms = $request->input('number_of_bedrooms');
$data->square_footage = $request->input('square_footage');
$data->password = $request->input('password');

$data->save();
return back();
    }
    //
//Fetch Record
function records(){

 //$records = Landlord::all();//fetching through model
 $record = Landlord::paginate(5);
//return $record = DB::table('landlords')->get(); //using db

return view('records',compact('record'));
}

//Delete Record
function delete_record($id) {

    Landlord::destroy($id);  //using model
//DB::table('landlords')->where('id', $id)->delete(); //using table directly
return back();

}


//edit_record
function edit_record($id) {
     $data = Landlord::find($id);
return view('edit_form' , compact('data'));

}

//NEW UPDATE DATA RECORD
function update_data(Request $request , $id) {
    $data = Landlord::find($id);

    $data->address = $request->input('address');
    $data->rental_price = $request->input('number');
    $data->number_of_bedrooms = $request->input('number_of_bedrooms');
    $data->square_footage = $request->input('square_footage');
    $data->password = $request->input('password');
    
    $data->save();
    return redirect('records');

}











}
