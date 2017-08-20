<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
      public function index()
    {
        return view('vic.index');
    }

   
          public function userhome()
    {
        return view('vic.userhome');
    }
      
    

       public function ideasubmission()
    {
        return view('vic.ideasubmission');
    }

       public function aboutus()
    {
        return view('vic.aboutus');
    }

       public function howitworks()
    {
        return view('vic.howitworks');
    }

       public function partners()
    {
        return view('vic.partners');
    }

       public function contact()
    {
        return view('vic.contact');
    }

       public function teams()
    {
        return view('vic.team');
    }

       public function references()
    {
        return view('vic.references');
    }

   public function downloads()
    {
        return view('vic.downloads');
    }


    
    
}
