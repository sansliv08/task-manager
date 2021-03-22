<?php

namespace App\Http\Controllers;

use App\Category;
use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\Todos\CreateTodosRequest;
use App\Http\Requests\Todos\UpdateTodosRequest;

class TodosController extends Controller
{
    public function __construct() {
        $this->middleware('verifyCategoriesCount')->only(['create']);
    }

    public function index() {
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $todo) {
        return view('todos.show')->with('todo', $todo);
    }

    public function create() {
        return view('todos.create')->with('categories', Category::all());
    }


        //debug of data -> put inside the function
        //dd($request->all()) or dd($request);
    public function store(CreateTodosRequest $request) {

        //validation of form in createtodosrequest

        //another option to do - comparation with function store of categories
        Todo::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);

        // sms feedback
        session()->flash('success','Todo created successfully!');

        return redirect('/todos');
    }

    public function edit(Todo $todo) {
        return view('todos.create')->with('todo', $todo)->with('categories', Category::all());
    }

    public function update(UpdateTodosRequest $request, Todo $todo) {

        

        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->category_id = $request->category_id;

        $todo->save();

        session()->flash('success','Todo updated successfully!');


        return redirect('/todos');
    }

    public function destroy(Todo $todo) {
        $todo->delete();

        session()->flash('success','Todo deleted successfully!');

        return redirect("/todos");
    }

    public function complete(Todo $todo) {
        $todo->completed = true;

        $todo->save();

        session()->flash('success','Todo completed successfully!');

        return redirect('/todos');

    }
}
