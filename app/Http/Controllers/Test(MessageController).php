<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        //dd($messages);
        return view('messages', compact('messages'));
    }

    public function create() {
        return view('contac');
    }

    public function store (Request $request) {
        //dd($request->all(), $request->user_mail);
        //dd('Listo');
        $message = new Message();
        $message->user_name = $request->user_name;
        $message->user_mail = $request->user_mail;
        $message->user_message = $request->user_message;
        $message->user_city = 'Guadalajara';

        $message->save();

        //Redilijir
        return redirect('/contac');
    }
}
