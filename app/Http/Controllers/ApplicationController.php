<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddEvent;
use App\models\AddTestPreperation;
use Error;


class ApplicationController extends Controller
{
    public function addevent(){
        return view('addevent');
    }
    //Inserting Events
    public function responseaddevent(Request $request){

        $request->validate([
            'title'=>'required',
            'date' =>'required|date',
            'slug'=>'required',
            'meta'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg',
            'description'=>'required',
            'video'=>'required',
            'intro_text'=>'required',
            'details' =>'required',
        ]);
     
        $addevent  = new AddEvent();
        $addevent->title = $request->title;
        $addevent->date = $request->date;
        $addevent->slug = $request->slug;
        $addevent->status = $request->status;
        $addevent->meta = $request->meta;
        $file= $request->file('image');
        $filename= microtime().'.'.$file->getClientOriginalExtension();
        $file-> move(public_path('uploads'), $filename);
        $addevent->image = $filename;
       
        $addevent->description = $request->description;
        $addevent->video = $request->video;
        $addevent->intro_text = $request->intro_text;
        $addevent->details = $request->details;
        $addevent->save();
        return redirect('viewevent');
        
    }

    // showing elements
    public function viewevent(){
        $addevent = AddEvent::orderBy('id', 'DESC')->paginate(7);
        return view('viewevent')->with(compact('addevent'));
    }    

    // deleting elements
    public function deleteevent($id){
        $addevent = AddEvent::find($id);
         $path = public_path('uploads/'.$addevent->image);
         if(file_exists($path) && is_file($path)){
             unlink($path);
         }
         $addevent->delete();
    
        return redirect()->back();
    }


    // edit page
    public function edit($id){
        $addevent = AddEvent::find($id);
        // dd($addevent);
        return view('editevent')->with(compact('addevent'));
    }

    // for upadating
    public function updateEvent($id, Request $request){ 
        $request->validate([
            'title'=>'required',
            'date' =>'required|date',
            'slug'=>'required',
            'meta'=>'required',
            'image'=>'mimes:jpg,png,jpeg,gif,svg',
            'description'=>'required',
            'video'=>'required',
            'intro_text'=>'required',
            'details' =>'required',
        ]);

    $addevent = AddEvent::find($id);
    $addevent->title = $request->title;
    $addevent->date = $request->date;
    $addevent->slug = $request->slug;
    $addevent->status = $request->status;
    $addevent->meta = $request->meta;

    if ($request->hasFile('image')) {
        $path = public_path('uploads/'.$addevent->image);
        if(file_exists($path) && is_file($path)){
            unlink($path);
        }
        
      
            $file= $request->file('image');
    $filename= microtime().'.'.$file->getClientOriginalExtension();
    $file-> move(public_path('/uploads'), $filename);
    $addevent->image = $filename;
    }
    $addevent->description = $request->description;
    $addevent->video = $request->video;
    $addevent->intro_text = $request->intro_text;
    $addevent->details = $request->details;
    $addevent->save();
    return redirect('viewevent');
    }
    // for addtestpreperation page
     public function testpreperation(){
        return view('addtestpreperation');
     }

    //  for response of addtestpreperation page
    public function responsetestpreperation(Request $request){

        
        $request->validate([
            'title'=>'required',
            'date' =>'required|date',
            'slug'=>'required',
            'meta'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg',
            'description'=>'required',
            'video'=>'required',
            'intro_text'=>'required',
            'details' =>'required',
        ]);

        $testpreperation = new AddTestPreperation();
        $testpreperation->title = $request->title;
        $testpreperation->date = $request->date;
        $testpreperation->slug = $request->slug;
        $testpreperation->status = $request->status;
        $testpreperation->meta = $request->meta;
        $file= $request->file('image');
        $filename= microtime().'.'.$file->getClientOriginalExtension();
        $file-> move(public_path('/uploads'), $filename);
        $testpreperation->image = $filename;
       
        $testpreperation->description = $request->description;
        $testpreperation->video = $request->video;
        $testpreperation->intro_text = $request->intro_text;
        $testpreperation->details = $request->details;
        $testpreperation->save();
        return redirect('viewtestpreperation');

    }

    // for viewing test preperations
    public function viewtestpreperation(){
        $testpreperation = AddTestPreperation::orderBy('id', 'DESC')->paginate(7);
        return view('viewtestpreperation')->with(compact('testpreperation'));
    }

    // for deleting test preperations
    public function deletetestpre($id){
        $testpreperation = AddTestPreperation::find($id);
        $path = public_path('uploads/'.$testpreperation->image);
         if(file_exists($path) && is_file($path)){
             unlink($path);
         }
         $testpreperation->delete();

             return redirect()->back();
           
        }

        // for editing test preperations
    public function edittestpre($id){
        $testpreperation = AddTestPreperation::find($id);
        // dd($addevent);
        return view('edit_test_preperation')->with(compact('testpreperation'));
    }

    // for updating image
    public function updatetestpre($id, Request $request){
        $request->validate([
            'title'=>'required',
            'date' =>'required|date',
            'slug'=>'required',
            'meta'=>'required',
            'image'=>'mimes:jpg,png,jpeg,gif,svg',
            'description'=>'required',
            'video'=>'required',
            'intro_text'=>'required',
            'details' =>'required',
        ]);
        $testpreperation = AddTestPreperation::find($id);
        $testpreperation->title = $request->title;
        $testpreperation->date = $request->date;
        $testpreperation->slug = $request->slug;
        $testpreperation->status = $request->status;
        $testpreperation->meta = $request->meta;
      
        if ($request->hasFile('image')) {

            $path = public_path('uploads/'.$testpreperation->image);
            if(file_exists($path) && is_file($path)){
                unlink($path);
            }
            $file= $request->file('image');
        $filename= microtime().'.'.$file->getClientOriginalExtension();
        $file-> move(public_path('/uploads'), $filename);
        $testpreperation->image = $filename;
        }
        $testpreperation->description = $request->description;
        $testpreperation->video = $request->video;
        $testpreperation->intro_text = $request->intro_text;
        $testpreperation->details = $request->details;
        $testpreperation->save();
        return redirect('viewtestpreperation');
        
    }
}

