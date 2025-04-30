<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class task1 extends Controller
{
    public function attendance(Request $request){
        $fields = $request->validate([
            'title' => 'required',
            'sname' => 'required',
            'status' => 'required'
        ]);

        $fields['user_id'] = auth()->id();
        Task::create($fields);
        return view('home');

 }
}
