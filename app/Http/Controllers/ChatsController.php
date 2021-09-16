<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatsController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('user.chat.chat');
    }
    
    public function fetchMessages()
    {
      return Message::with('center')->get();
    }

    public function store(Request $request)
    {
        $center = Auth::id('center');
        
        $message = $center->messages()->create([
            'message' => $request->input('message')
        ]);
        
        return ['status' => 'Message Sent!'];
    }
}
