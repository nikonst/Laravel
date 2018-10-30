<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Message;
use DB;

class MessagesController extends Controller
{
    public function create()
    {
        //
        return view('posts.message');
        
    }

   public function messageForm() {
        
        //Display Message Form
        return view('nikosapp.message');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function storeMessage(Request $request) {
        
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
         ]); 
        //Insert into DataBase
        $message = new Message;

        $message->title = $request->input('title');
        $message->body = $request->input('body');
        $message->save();

        return view('/nikosapp/index')->with('title','Message Stored');
    }

    public function showMessages() {

        $messages = DB::select('select * from messages order by id desc');
        return view('nikosapp.showMessages')->with('messages',$messages);
    
    }

}
