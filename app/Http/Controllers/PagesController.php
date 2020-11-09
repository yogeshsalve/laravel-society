<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function maintenance()
   {
       return view('/pages.maintenance');
   
   }

   public function household()
   {
       return view('/pages.household');
   
   }

   public function amenities()
   {
       return view('/pages.amenities');
   
   }

   public function parking()
   {
       return view('/pages.parking');
   
   }

   public function complaints()
   {
       return view('/pages.complaints');
   
   }
}

