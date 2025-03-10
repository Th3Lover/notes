<?php

namespace App\Http\Controllers;

use App\Note;
use App\Services\Operations;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //load user notes
        $id = session('user.id');
        $notes = User::find($id)->notes->whereNull('deleted_at')->toArray();

        //show home view
        return view('home', ['notes' => $notes]);
    }

    public function newNote()
    {
        //show new note view
        return view('new_note');
    }

    public function newNoteSubmit(Request $request)
    {
        //validate request
        $request->validate([
            //rules
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:6|max:3000'
        ],
        // error messages
        [
            'text_title.required' => 'O título é obrigatório',
            'text_title.min' => 'O título deve ter no mínimo :min caracteres',
            'text_title.max' => 'O título deve ter no máximo :max caracteres',
            'text_note.required' => 'A nota é obrigatória',
            'text_note.min' => 'A nota deve ter no mínimo :min caracteres',
            'text_note.max' => 'A nota deve ter no máximo :max caracteres'
        ]
        );

        //get user id
        $id = session('user.id');

        //create nre note
        $note = new Note();
        $note->user_id = $id;
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        //redirect to home
        return redirect()->route('home');
    }

    public function editNote($id)
    {
        $id = Operations::decryptId($id);
        
        if($id == null){
            return redirect()->route('home');
        }

        //load note
        $note = Note::find($id);

        //show edit note view
        return view('edit_note', ['note' => $note]);
    }

    public function editNoteSubmit(Request $request)
    {
        //validate request
        $request->validate([
            //rules
            'text_title' => 'required|min:3|max:200',
            'text_note' => 'required|min:6|max:3000'
        ],
        // error messages
        [
            'text_title.required' => 'O título é obrigatório',
            'text_title.min' => 'O título deve ter no mínimo :min caracteres',
            'text_title.max' => 'O título deve ter no máximo :max caracteres',
            'text_note.required' => 'A nota é obrigatória',
            'text_note.min' => 'A nota deve ter no mínimo :min caracteres',
            'text_note.max' => 'A nota deve ter no máximo :max caracteres'
        ]
        );

        //check if note_id exists
        if($request->note_id == null){
            return redirect()->route('home');
        }

        //decrypt note_id
        $id = Operations::decryptId($request->note_id);

        //load note
        $note = Note::find($id);

        //update note
        $note->title = $request->text_title;
        $note->text = $request->text_note;
        $note->save();

        //redirect to home
        return redirect()->route('home');
    }

    public function deleteNote($id)
    {
       $id = Operations::decryptId($id);
        
       if($id == null){
        return redirect()->route('home');
        }

       //load note
       $note = Note::find($id);

       //show delete note confirmation
       return view('delete_note', ['note' => $note]);
    }

    public function deleteNoteConfirm($id)
    {
        //check if id is encrypted
        $id = Operations::decryptId($id);

        if($id == null){
            return redirect()->route('home');
        }

        //load note
        $note = Note::find($id);

        //1.Soft delete (property in model)
        $note->delete();

        //redirect to home
        return redirect()->route('home');
    }
}
