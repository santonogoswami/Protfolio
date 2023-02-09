<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
class ContactController extends Controller
{
 //index Method__//
 public function index(){
    $data = contact::all();
    return view('Details.Contact.index', compact('data'));
}
   //__create Method__//
   public function create(){
    return view('Details.Contact.create');
}
//__Store Method__//
public function store(Request $request){
    $contact=new contact;
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();
    return redirect()->back();
  }

   //__ Edit Method__//
public function edit($id){
    $data=contact::find($id);
    return view('Details.Contact.edit', compact('data'));
    }
    //__Store Method__//
public function update(Request $request,$id){
    $contact=contact::find($id);
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->save();
    return redirect()->back();
  }
   //__Delete Method__//
   public function destroy($id)
   {
    contact::destroy($id);
       return redirect()->back();
   }
}
