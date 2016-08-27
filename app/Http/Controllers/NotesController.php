<?php

namespace App\Http\Controllers;

use App\Notes;

use App\Http\Requests\FormValidator;

class NotesController extends Controller
{
    public function create() {
    	return view('note.createNote');
    }

    public function store(FormValidator $request) {
    	Notes::create($request->all());

    	return redirect('/notes/');
    }

    public function edit($id) {
    	$note = Notes::where('id', $id)->first();
    	return view('note.editNote', compact('note'));
    }

    public function show($id) {
    	$note = Notes::where('id',$id)->first();

    	return view('note.specificNote', compact('note'));
    }

    public function update($id, FormValidator $request) {
    	$note = Notes::where('id', $id)->first();

    	$note->update($request->all());

    	return redirect('/note/'.$id);
    }

    public function all() {
    	$note = Notes::get();

    	return view('note.allNote', compact('note'));
    }

    public function delete($id, FormValidator $request) {
        $note = Notes::where('id', $id)->first();

        $note->delete($note);
        return redirect('/notes');
    }
}
