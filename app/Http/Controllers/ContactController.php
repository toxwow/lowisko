<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function email(Request $request)
    {
        $elo =$request->name;
        Mail::send(new SendMailable($request));
        return redirect('/kontakt')->with('sucess', 'Twoja wiadomość została wysłana. Dziękujemy za kontakt');
    }
}
