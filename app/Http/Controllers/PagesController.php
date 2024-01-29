<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        return view('home');
    }

    public function bbn(){
        return view('bbn');
    }

    public function about(){
        return view('we-are.about');
    }

    public function clients(){
        return view('we-are.clients');
    }

    public function team(){
        return view('we-are.team');
    }

    public function contact(){
        return view('we-are.contact');
    }

    public function americas(){
        return view('here.americas');
    }

    public function global(){
        return view('here.global');
    }

    public function ideas(){
        return view('for-you.ideas');
    }

    public function services(){
        return view('for-you.services');
    }

    public function ajaxRequestPost(Request $request)
    {

        $input = $request->all();

        return response()->json(['success'=>'Got Simple Ajax Request.']);

    }

    public function cases(){
        return redirect()->away('https://mymarketlogic.com/cases/');
    }

    public function blog(){
        return redirect()->away('https://mymarketlogic.com/blog/');
    }

    public function thankyou(){
        return view('thankyou');
    }

    public function ondemand(){
        return redirect()->away('https://articulos.mymarketlogic.com/webinarondemand-es/');
    }
}
