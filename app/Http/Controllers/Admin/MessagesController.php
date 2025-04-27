<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->paginate(10);
        return view('pages.admin.messages', compact('messages'));
    }

    // public function create()
    // {
    //     return view('admin.messages.create');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($data);

        return redirect()->back()->with('success', 'Message created successfully.');
    }

    // public function show(Message $message)
    // {
    //     return view('admin.messages.show', compact('message'));
    // }

    // public function edit(Message $message)
    // {
    //     return view('admin.messages.edit', compact('message'));
    // }

    public function update(Request $request, Message $message)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message->update($data);

        return redirect()->back()->with('success', 'Message updated successfully.');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
