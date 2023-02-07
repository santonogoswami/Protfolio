<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;

class AboutController extends Controller
{
     //index Method__//
     public function index(){
        $data = about::all();
        return view('Details.About.index', compact('data'));
   }
   //__create Method__//
   public function create(){
    return view('Details.About.create');
}


//__About Store Method__//
public function store(Request $request){
    $about=new about;
    $about->proffession = $request->proffession;
    $about->short_description = $request->short_description;
    $about->long_description = $request->long_description;
    $about->DOB = $request->DOB;
    $about->age = $request->age;
    $about->website = $request->website;
    $about->degree = $request->degree;
    $about->phone = $request->phone;
    $about->email = $request->email;
    $about->city = $request->city;
    $about->save();
    return redirect()->back();
  }

  //__About Edit__//
  public function edit($id){
    $data=about::find($id);
    return view('Details.About.edit', compact('data'));
    }

    //About Update Method__//
public function update(Request $request,$id){
    $about=about::find($id);
    $about->proffession = $request->proffession;
    $about->short_description = $request->short_description;
    $about->long_description = $request->long_description;
    $about->DOB = $request->DOB;
    $about->age = $request->age;
    $about->website = $request->website;
    $about->degree = $request->degree;
    $about->phone = $request->phone;
    $about->email = $request->email;
    $about->city = $request->city;
    $about->save();
    return redirect()->back();
  }

     //__About Delete Method__//
     public function destroy($id)
     {
       about::destroy($id);
         return redirect()->back();
     }
}
