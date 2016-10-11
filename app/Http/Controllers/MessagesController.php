<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;

class MessagesController extends Controller
{
    public function getMessages()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);

        return view('blog.admin.show-messages',compact('messages'));
    }
    
    public function postMessage(Request $request)
    {
        $input = $request->all();
        $message = new Message();
        $message->sender_name=$input['name'];
        $message->email=$input['email'];
        if($input['about']!=null)
            $message->about_sender=$input['about'];
        else $message->about_sender='';
        $message->content=$input['content']=$input['content'];

        $message->save();
        return redirect()->route('getContact','status=success');
    }
}
