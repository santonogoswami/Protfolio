<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller
{
     //index Method__//
     public function index(){
        $data = service::all();
        return view('Details.Service.index', compact('data'));
    }
    //__create Method__//
public function create(){
    return view('Details.Service.create');
}

//__Store Method__//
public function store(Request $request){
    $service=new service;
    $service->name = $request->name;
    $service->description = $request->description;
    $service->icon = $request->icon;
    $service->save();
    return redirect()->back();
  }
  //__ Edit Method__//
public function edit($id){
    $data=service::find($id);
    return view('Details.Service.edit', compact('data'));
    }
    //__Update Method__//
public function update(Request $request,$id){
    $service=service::find($id);
    $service->name = $request->name;
    $service->description = $request->description;
    $service->icon = $request->icon;
    $service->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    service::destroy($id);
       return redirect()->back();
   }
}
