<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;



class ContactController extends Controller
{
    

    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 28.625485,
                    'lng' => 79.821091
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 28.625293,
                    'lng' => 79.817926
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        return view('map', compact('initialMarkers'));
    }


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


           ];
            // envoie l'email a l'administrateur 

             Mail::to('nakourimayssa@gmail.com')->send (new MyTestMail ($data)) ;
            
                return back()->with('msg','votre message est envoyée avec sucées ') ; 
          
         
          
 

            
    }
}
