<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function homepage()
    {
        $articles = ['notizia', 'cronana', 'sport'];
        return view('homepage', ['articles' => $articles]);
    }

    public function about()
    {
        return view('about');
    }

    public function service($service)
    {
        return view('detail', ['service' => $service]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => ['string', 'required'],
            'email' => ['email', 'required'],
            'message' => ['min:5', 'required'],
        ]);


        $data = [
            'name' => 'Utente ' . strtolower($request->name),
            'email' => $request->input('email'), //getter
            'message' => $request->message,
        ];
        Mail::to($data['email'])->send(new ContactMail($data));
        //definire una response

        return redirect('/contattami')->with('success', 'Email inviata con successo');
    }
}
