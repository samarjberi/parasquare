<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /*public function newContact(){
        $newContact = new Contact;


    }*/
    public function index(){

    }
    // affiche le formulaire de creation de cv//
    public function create(){
        return view('login');
        
    }
    //enregistrer un cv//
    public function store(Request $request){
        
        $contact= new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->password = $request->input('password');
        $contact->re_pass = $request->input('re_pass');

        $contact->save();
    }
    //permet de recupérer un cv et puis le mettre dans un formulaire//
    public function edit(){
        
    }
    //permetd e modifier un cv //
    public function update(){
        
    }
    //permet de supprimer un cv//
    public function destroy(){
        
    }

}