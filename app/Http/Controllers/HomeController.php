<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function ajaxRequest()

    {

        return view('ajaxRequest');

    }

    public function ajaxRequestPost(Request $request)

    {

        $input = $request->all();



        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }



    public function index()
    {
        return view('home');
    }
}
