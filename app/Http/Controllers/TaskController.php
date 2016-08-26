<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Notes;

use App\Http\Requests\FormValidator;

class TaskController extends Controller
{
	public function index() {
		$tasks = Tasks::get();
		$notes = Notes::get();
	    return view('index', compact('notes', 'tasks'));
    }

    public function create() {
    	return view('task.createTask');
    }

    public function store(FormValidator $request) {
    	Tasks::create($request->all());

    	return redirect('/');
    }
}
