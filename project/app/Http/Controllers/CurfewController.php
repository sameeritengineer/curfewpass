<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurfewInformation;
use Carbon\Carbon;
class CurfewController extends Controller
{
    public function index()
    {
    	return view('curfewpass');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
    	$data['date'] = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');
  		//$request->validate([
		//     'title' => 'required|unique:posts|max:255',
		//     'author.name' => 'required',
		//     'author.description' => 'required',
		// ]);

    	$information = new CurfewInformation;
    	$information->name = $data['name'];
    	$information->email = $data['email'];
    	$information->date = $data['date'];
    	$information->occupation = $data['occupation'];
    	$information->message = $data['message'];
    	$information->mobile_no = $data['mobile_no'];
    	if($information->save())
    	{
    		return response()->json(['status'=>true,'message'=>'Thanks for sharing your information!.']);
    	}
    	else
    	{
    		return response()->json(['status'=>false,'message'=>'Something error!.']);
    	}
    }

    public function store_api(Request $request)
    {
    	$data = $request->all();
    	$information = new CurfewInformation;
    	$information->name = $data['name'];
    	$information->email = $data['email'];
    	$information->date = $data['date'];
    	$information->occupation = $data['occupation'];
    	$information->message = $data['message'];
    	$information->mobile_no = $data['mobile_no'];
    	if($information->save())
    	{
    		return response()->json(['status'=>true,'message'=>'Thanks for sharing your information!.']);
    	}
    	else
    	{
    		return response()->json(['status'=>false,'message'=>'Something error!.']);
    	}
    }
}
