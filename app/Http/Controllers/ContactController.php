<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;



class ContactController extends Controller
{
    


    public function contact ()
    {


        return view ('contact') ; 
    }


    public function save (Request $request)
    {
/*
            $request->validate([
                'email' =>'required|email',
                'nom' =>'required' ,
                'adresse' =>'required',
                'message' =>'required' ,
                'telephone' =>'required',
            ])  ;*/
      

           $data = [

                      'nom' => $request->nom,
                      'email' =>$request->email,
                      'adresse' =>$request->adresse,
                      'telephone' =>$request->telephone,
                      'message' =>$request->message,
                      'countries' =>$request->countries,

                  


           ];
            // envoie l'email a l'administrateur 

             Mail::to('nakourimayssa@gmail.com')->send (new MyTestMail ($data)) ;
            
                return back()->with('msg','votre message est envoyée avec sucées ') ; 
          
         
          
 

            
    }
}
