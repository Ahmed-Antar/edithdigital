<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coverletter;

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
    public function index()
    {
        return view('pages.home');
    }

    public function store(){

        $this->validate(request(),[
            'adress'    => 'required',
            'num_tel'   => 'required',
            'company_name' => 'required',
            'receiver'  => 'required',
            'post'      => 'required',
            'model'     => 'required'
        ]);

        $coverletter = new coverletter();
        $coverletter->adress =  request('adress');
        $coverletter->num_tel = request('num_tel');
        $coverletter->company_name = request('company_name');
        $coverletter->receiver = request('receiver');
        $coverletter->post = request('post');
        $coverletter->cmodel = request('model');
        $coverletter->user_id = auth()->id();

        $coverletter->save();

        return back()->with('cover saved');

    }
}
