<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')
            ->latest()
            ->get()
            ->reverse();

        return view('dashboard', compact('messages'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $message = Message::create([
            'user_id' => Auth::id(),
            'message' => $request->message
        ]);

        broadcast(new MessageSent($message));

        return response()->json([
            'success' => true
        ]);
    }
}