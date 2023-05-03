<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function index()
    {
        return view('email.send');
        //
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ],[
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo correo electrónico es obligatorio',
            'email.email' => 'El correo electrónico no es válido',
            'message.required' => 'El campo mensaje es obligatorio',
        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('alexander.chin@utp.ac.pa')->send($correo);

        $request->session()->flash('mensaje','La información se envió correctamente',true);

        return redirect('contact');
        
    }

}
