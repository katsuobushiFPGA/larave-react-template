<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //getTodos
    public function getTodos()
    {
        $todos = Todo::all();
        return $todos;
    }
}
