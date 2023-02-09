<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testominial;

class TestominialController extends Controller
{
 //index Method__//
 public function index(){
    $data = testominial::all();
    return view('Details.Testominial.index', compact('data'));
}
    //__create Method__//
    public function create(){
        return view('Details.Testominial.create');
    }
    //__Store Method__//
public function store(Request $request){
    $testominial=new testominial;
    $testominial->name = $request->name;
    $testominial->designation = $request->designation;
    $testominial->testominial = $request->testominial;
    $testominial->save();
    return redirect()->back();
  }
   //__ Edit Method__//
public function edit($id){
    $data=testominial::find($id);
    return view('Details.Testominial.edit', compact('data'));
    }
        //__Update Method__//
public function update(Request $request,$id){
    $testominial=testominial::find($id);
    $testominial->name = $request->name;
    $testominial->designation = $request->designation;
    $testominial->testominial = $request->testominial;
    $testominial->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    testominial::destroy($id);
       return redirect()->back();
   }
}
