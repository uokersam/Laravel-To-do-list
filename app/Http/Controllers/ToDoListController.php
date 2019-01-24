<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ToDoListController extends Controller
{
    public function create()
    {
        $content = $_POST['textitem'];
        DB::insert('INSERT INTO todolist(id, content) VALUES(DEFAULT, :content)',
            [$content]);
        return redirect()->to('/todo');
    }

    public function show()
    {
        $items = DB::select('SELECT * FROM todolist');
        return view('pages.todo', ['items' => $items]);
    }

    public function edit()
    {

    }

    public function delete()
    {
        DB::delete('DELETE FROM todolist WHERE id IN(SELECT id FROM todolist ORDER BY id DESC LIMIT 1)');
        return redirect()->to('/todo');
    }


}
