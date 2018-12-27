<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShowUsers extends Controller
{
    public function show()
    {
        $users = DB::select('SELECT * FROM users');
        return view('dbtest', ['users' => $users]);
    }
}
