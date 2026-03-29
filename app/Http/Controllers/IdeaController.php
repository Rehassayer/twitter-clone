<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store(){

    request()->validate([
    'idea'=> 'required|min:5|max:250'
    ]);
 
   $idea = Idea::create([
    'content' => request()->get('idea',''),
   ]);
  
   return redirect()->route('dashboard')->with('sucess', 'Idea created sucessfully');
   
    }
    public function destory($id){
      
    $idea = Idea::where('id',$id)->firstOrFail()->delete();
    
       return redirect()->route('dashboard')->with('sucess', 'Idea deleted sucessfully');


    }
}
