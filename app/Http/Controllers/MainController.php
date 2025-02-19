<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    public function index()
    {
        //load user notes
        $id = session('user.id');
        $notes = User::find($id)->notes->toArray();

        //show home view
        return view('home', ['notes' => $notes]);
    }

    public function newNote()
    {
        echo "New note page";
    }

    public function editNote($id)
    {
        $id = $this->decryptId($id);
        echo "I'm editing note with id: $id";
    }

    public function deleteNote($id)
    {
        $id = $this->decryptId($id);
        echo "I'm deleting note with id: $id";
    }

    private function decryptId($id)
    {
        //check if id is encrypted
        try {
            $id = Crypt::decrypt($id);
           } catch (DecryptException $e) { 
            return redirect()->route('home')->with('error', 'Invalid note id');
           }

           return $id;
    }
}
