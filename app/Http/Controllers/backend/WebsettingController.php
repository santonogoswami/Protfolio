<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\webSetting;

class WebsettingController extends Controller
{
    public function index(){
        $data = webSetting::all();
        return view('Details.websetting.index', compact('data'));
    }
    public function create(){
        return view('Details.websetting.create');
    }
    public function store(Request $request){
        $webSetting = new webSetting;
        // $webSetting->id = $request->id;
        $webSetting->location = $request->location;
        $webSetting->email = $request->email;
        $webSetting->call = $request->call;
        $webSetting->google_map = $request->google_map;
        $webSetting->name = $request->name;


        $photo= time().'.'. $request->photo->extension();
            $request->photo->move(public_path('webSetting'), $photo);
            $path = "/webSetting/".$photo;
            $webSetting->photo = $path;
        // dd($webSetting);
        $webSetting->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data=webSetting::find($id);
        return view('Details.websetting.edit', compact('data'));

    }


    //__Update method__//
    public function update(Request $request,$id)
    {

       $webSetting=webSetting::find($id);
       $webSetting->location = $request->location;
       $webSetting->email = $request->email;
       $webSetting->call = $request->call;
       $webSetting->google_map = $request->google_map;
       $webSetting->name = $request->name;


       $photo= time().'.'. $request->photo->extension();
           $request->photo->move(public_path('webSetting'), $photo);
           $path = "/webSetting/".$photo;
           $webSetting->photo = $path;
       // dd($webSetting);
       $webSetting->save();
       return redirect()->back();

    }

      //__Delete Method__//
      public function destroy($id)
      {

        webSetting::destroy($id);
          return redirect()->back();
      }

}
