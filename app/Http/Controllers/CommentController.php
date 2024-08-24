<?php

namespace App\Http\Controllers;

use App\Models\binhluan;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        binhluan::create([
            'idTin' => 1,
            'noiDung' => $request->input('message'),
            'email' => $request->input('email'),
            'hoTen' => $request->input('name'),
        ]);

        return redirect()->back()->with('success', 'Bình luận của bạn đã được gửi!');
    }

    // public function show($id)
    // {
    //     $ctt = tin::findOrFail($id);

    //     $comments = binhluan::where('idTin', $id)->get();

    //     return view('client.page.chitiet', compact('ctt', 'comments'));
    // }
}
