<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function show(Idea $idea){

        return view('ideas.show',[
            'Idea' => $idea
        ]);
    }

    
    public function store(){

   $validate = request()->validate([
    'content'=> 'required|min:5|max:250'
    ]);
 
   $idea = Idea::create($validate);

   
  
   return redirect()->route('dashboard')->with('sucess', 'Idea created sucessfully');
   
    }
    public function destory( Idea $idea){
      
    $idea->delete();
    
       return redirect()->route('dashboard')->with('sucess', 'Idea deleted sucessfully');


    }
     public function edit(Idea $idea){
        $editing = true;
        return view('ideas.show',[
            'Idea' => $idea,
            'editing' =>$editing
        ]);
    }
    public function update(Idea $idea){
         
       $validate = request()->validate([
    'content'=> 'required|min:5|max:250'
    ]);
  
       $idea->update($validate);

       return redirect()->route('ideas.show',$idea->id)->with('sucess',"Idea UPdated Successfully");
    }

}
