<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function email(Request $request)
    {
        $elo =$request->name;
        Mail::send(new SendMailable($request));
        return redirect('/')->with('sucess', 'Twoja wiadomość została wysłana. Dziękujemy za kontakt');
    }
}
