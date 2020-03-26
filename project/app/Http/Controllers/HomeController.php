<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurfewInformation;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $informations = CurfewInformation::get();
        return view('home',compact('informations'));
    }

    public function send_mail(Request $request)
    {
        //return $request->all();
        $information = CurfewInformation::find($request->id);
        $information->status = $request->status;
        if($information->update())
        {
            try
            {
                Mail::to($information->email)->send(new SendMail());
                return redirect()->route('home')->with(['message'=>$information->name.' information has been confirmed!']);
            } 
            catch (Exception $e)
            {
                return redirect()->route('home')->with(['message'=>$e->getMessages()]);
            }
        }
        else
        {
            return redirect()->route('home')->with(['message'=>'Something error!.']);
        }
    }

    public function show($id)
    {
        $information = CurfewInformation::find($id);
        return view('show_details',compact('information'));
    }
}
