<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\education;

class EducationController extends Controller
{
    //index Method__//
    public function index(){
        $data = Education::all();
        return view('Details.Education.index', compact('data'));
   }
   //__create Method__//
   public function create(){
    return view('Details.Education.create');
}

//__Skill Method__//
public function store(Request $request){
    $education=new education;
    $education->name = $request->name;
    $education->passing_year = $request->passing_year;
    $education->session = $request->session;
    $education->Result = $request->Result;
    $education->Inistitute = $request->Inistitute;
    $education->save();
    return redirect()->back();
  }

  //__ Edit Method__//
  public function edit($id){
    $data=education::find($id);
    return view('Details.Education.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $education=education::find($id);
    $education->name = $request->name;
    $education->passing_year = $request->passing_year;
    $education->session = $request->session;
    $education->Result = $request->Result;
    $education->Inistitute = $request->Inistitute;
    $education->save();
    return redirect()->back();
  }

     //__Delete Method__//
     public function destroy($id)
     {
       education::destroy($id);
         return redirect()->back();
     }
}
