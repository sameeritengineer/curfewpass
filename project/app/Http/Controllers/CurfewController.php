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
        $information->image = $request->file('image')->store('images');
        $information->aadhar_image = $request->file('aadhar_image')->store('aadhar_images');
        $information->status = '0';
    	if($information->save())
    	{
    		return back()->with(['status'=>true,'message'=>'Thanks for sharing your information!.']);
    	}
    	else
    	{
    		return back()->with(['status'=>false,'message'=>'Something error!.']);
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
        $information->device_id = $data['device_id'];
        $information->image = $request->file('image')->store('images');
        $information->aadhar_image = $request->file('aadhar_image')->store('aadhar_images');
        $information->status = '0';
    	if($information->save())
    	{
    		return response()->json(['status'=>true,'message'=>'Thanks for sharing your information!.']);
    	}
    	else
    	{
    		return response()->json(['status'=>false,'message'=>'Something error!.']);
    	}
    }

//     function push_notification_android($device_id,$message){

//     //API URL of FCM
//     $url = 'https://fcm.googleapis.com/fcm/send';

//     /*api_key available in:
//     Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/    $api_key = 'AAAAKZLje1I:APbGQDw8FD...TjmtuINVB-g';
                
//     $fields = array (
//         'registration_ids' => array (
//                 $device_id
//         ),
//         'data' => array (
//                 "message" => $message
//         )
//     );

//     //header includes Content type and api key
//     $headers = array(
//         'Content-Type:application/json',
//         'Authorization:key='.$api_key
//     );
                
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
//     $result = curl_exec($ch);
//     if ($result === FALSE) {
//         die('FCM Send Error: ' . curl_error($ch));
//     }
//     curl_close($ch);
//     return $result;
// }
}
