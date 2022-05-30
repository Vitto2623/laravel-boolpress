<?php

namespace App\Http\Controllers;

use App\Mail\SendNewMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contact(){
        return view('guest.contact');
    }

    public function contactStore(Request $request){

        Mail::to($request->mailMessage)->send(new SendNewMail($request->guestName, $request->mailMessage, $request->guestMessage));

        return redirect()->route('guests.index')->with('message', "Grazie $request->guestName! Il messaggio è stato inviato correttamente");
    }
}
