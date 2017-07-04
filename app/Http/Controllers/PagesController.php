<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function getWelcome(){
        
        return view('pages.welcome');
    }
    public function getAbout(){
        
        $first = "Ornab";
        $last = "Ahmed";
        
        $fullname = $first . " " . $last;
        
        return view('pages.about',compact('first','last','fullname'));
    }
    public function getContact(){
        
        return view('pages.contact');
    }
    
}
