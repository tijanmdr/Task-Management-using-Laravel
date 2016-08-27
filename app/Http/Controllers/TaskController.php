<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Notes;
use DB;

use App\Http\Requests\FormValidator;

class TaskController extends Controller
{
	public function index() {
		// $tasks = Tasks::latest()->get();
		// $notes = Notes::latest()->get();

	    return view('index');
    }

    public function create() {
    	return view('task.createTask');
    }

    public function store(FormValidator $request) {
    	Tasks::create($request->all());

    	return redirect('/tasks/');
    }

    public function edit($id) {
    	$task = Tasks::where('id', $id)->first();

    	return view('task.editTask', compact('task'));
    }

    public function update($id, FormValidator $request) {
    	$task = Tasks::where('id', $id)->first();

    	$task->update($request->all());

    	return redirect('/task/'.$id);
    }

    public function show($id) {
    	$task = Tasks::where('id', $id)->first();

    	return view('task.specificTask', compact('task'));
    }

    public function all() {
    	$task = Tasks::latest()->get();

    	return view('task.allTask', compact('task'));
    }

    public function delete($id) {
        $task = Tasks::where('id', $id)->first();

        $task->delete($task);

        return redirect('/tasks');
    }
}
