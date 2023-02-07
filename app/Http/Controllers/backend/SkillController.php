<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\skill;

class SkillController extends Controller
{
    //index Method__//
    public function index(){
        $data = skill::all();
        return view('Details.skill.index', compact('data'));
   }

//__create Method__//
   public function create(){
    return view('Details.skill.create');
}
//__Skill Method__//
public function store(Request $request){
    $skill=new skill;
    $skill->skill_name = $request->skill_name;
    $skill->skill_level = $request->skill_level;
    $skill->save();
    return redirect()->back();

  }
  //__Skill Edit__//
  public function edit($id){
    $data=skill::find($id);
    return view('Details.skill.edit', compact('data'));
    }
    //__Update Method__//
    public function update(Request $request,$id){
        $skill=skill::find($id);
        $skill->skill_name = $request->skill_name;
        $skill->skill_level = $request->skill_level;
        $skill->save();
        return redirect()->back();
      }

       //__Delete Method__//
     public function destroy($id)
     {
       skill::destroy($id);
         return redirect()->back();
     }
}
