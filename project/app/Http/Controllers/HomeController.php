<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CurfewInformation;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
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
        try
        {
            Mail::to($request->email)->send(new SendMail());
        }
        catch (Exception $e)
        {
            return response()->json($e->getMessage());
        }
    }
}
