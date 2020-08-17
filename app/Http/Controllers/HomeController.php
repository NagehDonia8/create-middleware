<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {

//        $request->session()->put(['soliman'=>'instructor']);
//        session(['nageh'=>'student']);
//  return $request->session()->all();
//-----------------------------------
//        session(['nageh1'=>'developer']);
//        echo session('nageh1');
//--------------------------------------
            // array
//          $request->session()->flush();
          // delete key
//          $request->session()->forget('nageh1');
//          return $request->session()->all();
//----------------------------------------

//        $request->session()->flash('message' , 'post has been created');
//        return $request->session()->get('message');
//   $request->session()->reflash();
//   $request->session()->keep('massage');




//-------------------------------------
//
//        $user = Auth::user();
//        return view('home' , compact('user'));

    }
}
