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
    public function addTodo(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        $todos = $this->getTodos();
        return $todos;
    }
    //delete
    public function deleteTodo(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->delete();

        $todos = $this->getTodos();
        return $todos;
    }
}
