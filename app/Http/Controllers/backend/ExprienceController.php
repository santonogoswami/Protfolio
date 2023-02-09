<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\exprience;

class ExprienceController extends Controller
{
  //index Method__//
  public function index(){
    $data = exprience::all();
    return view('Details.Exprience.index', compact('data'));
}

//__create Method__//
public function create(){
    return view('Details.Exprience.create');
}
//__Store Method__//
public function store(Request $request){
    $request->validate([
        'company' => 'required',
        'designation' => 'required',
        'form' => 'required',
        'to' => 'required',
        'description' => 'required',
    ]);
    $exprience=new exprience;
    $exprience->company = $request->company;
    $exprience->designation = $request->designation;
    $exprience->form = $request->form;
    $exprience->to = $request->to;
    $exprience->description = $request->description;
    $exprience->save();
    return redirect()->back();
  }
//__ Edit Method__//
public function edit($id){
    $data=exprience::find($id);
    return view('Details.Exprience.edit', compact('data'));
    }
    //update Method__//
public function update(Request $request,$id){
    $request->validate([
        'company' => 'required',
        'designation' => 'required',
        'form' => 'required',
        'to' => 'required',
        'description' => 'required',
    ]);
    $exprience=exprience::find($id);
    $exprience->company = $request->company;
    $exprience->designation = $request->designation;
    $exprience->form = $request->form;
    $exprience->to = $request->to;
    $exprience->description = $request->description;
    $exprience->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    exprience::destroy($id);
       return redirect()->back();
   }

}
