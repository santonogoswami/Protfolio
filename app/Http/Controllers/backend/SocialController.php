<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\social;

class SocialController extends Controller
{
    public function index(){
        $data = social::all();
        return view('Details.social.index', compact('data'));
    }
    public function create(){
        return view('Details.social.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required',
        ]);
      $social=new Social;
      $social->name = $request->name;
      $social->link = $request->link;
      $social->icon = $request->icon;
      $social->save();
      return redirect()->back();

    }
    public function edit($id){
    $data=social::find($id);
    return view('Details.social.edit', compact('data'));
    }
    //update method//
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'icon' => 'required',
        ]);
        $social=social::find($id);
        $social->name = $request->name;
        $social->link = $request->link;
        $social->icon = $request->icon;
        $social->save();
        return redirect()->back();
    }
     //__Delete Method__//
     public function destroy($id)
     {

       social::destroy($id);
         return redirect()->back();
     }


}
