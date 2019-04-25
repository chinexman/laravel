<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class projectcontroller extends Controller
{
    //

    public function index(){
      

      $projects=project::all();
      

    	return view('projects.index', compact('projects'));

    }

    public function create(){

    	return view('projects.create');
    }


       public function store(project $project){



          request()->validate([
          	'title'=>['required','min:3'],
          	'description'=>['required','min:3']
          ]);
            project::create(request(['title','description']));      
           
           

           // $project::create([      
           //'title'=>request('title'),
           //'description'=>request('description')
           // ]);
       	//$project=new Project();

       //	$project->title= request('title');
       //	$project->description=request('description');

       //	$project->save();

         return redirect('/projects');

       	 }

       	 public function show(project $project)
    {


        //$project=project::findorfail($id);
        return view('projects.show',compact('project'));
    }


       	 public function edit(project $project){


       	 	//$project=project::findorfail($id);
                   return view('projects.edit' ,compact('project'));

       	 }

       	 public function destroy(project $project){
           // $project=project::findorfail($id)->delete();
            $project->delete();
            return redirect('/projects');
        
       	 }

       	 public function update(project $project){
              
        // $project= project::findorfail($id);

         $project->title=request('title');
         $project->description=request('description');

         $project->save();

         return redirect('/projects');

       	 }

       	
}
