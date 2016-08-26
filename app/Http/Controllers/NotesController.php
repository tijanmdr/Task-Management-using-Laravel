<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Notes;

use App\Http\Requests\FormValidator;

class NotesController extends Controller
{
    public function create() {
    	return view('note.createNote');
    }

    public function store(FormValidator $request) {
    	Notes::create($request->all());

    	return redirect('/');
    }
}
