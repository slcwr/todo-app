<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todo.index', compact('todos'));
    }

    public function store(Request $request)
    {
        Log::info('bbbbbbbbbbbbbbbbbbbb');
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('todo.index');
    }
    

    public function destroy($id)
    {
    Log::info('ccccccccccccccccccc');
    $post = Todo::find($id);
    $post->delete();
    return redirect()->route('todo.index')->with('success', 'Post deleted successfully.');
    }

}
?>