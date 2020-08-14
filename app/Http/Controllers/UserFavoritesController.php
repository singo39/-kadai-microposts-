<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoritesController extends Controller
{
    
   
    
      public function store($micropost)
     {
        \Auth::user()->favorite($micropost);
       
        return back();
    }

   
      public function destroy($micropost)
     {
       
        \Auth::user()->unfavorite($micropost);
       
        return back();
    }

}
