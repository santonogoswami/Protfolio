<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\portfolio;

class PortfolioController extends Controller
{

        //index Method__//
        public function index(){
          $data = portfolio::all();
          return view('Details.Portfolio.index', compact('data'));
      }
      //__create Method__//
         public function create(){
         return view('Details.Portfolio.create');
            }
    //__Store Method__//
public function store(Request $request){
    $portfolio=new portfolio;
    $portfolio->name = $request->name;
    $portfolio->link = $request->link;
    // image code start
    $image= time().'.'. $request->image->extension();
    $request->image->move(public_path('portfolio'), $image);
    $path = "/portfolio/".$image;
    $portfolio->image = $path;
    // image code End
    $portfolio->save();
    return redirect()->back();
  }
//__ Edit Method__//
public function edit($id){
    $data=portfolio::find($id);
    return view('Details.Portfolio.edit', compact('data'));
    }
        //_Update Method__//
        public function update(Request $request, $id)
        {
            $portfolio = Portfolio::find($id);
            $portfolio->name = $request->name;
            $portfolio->link = $request->link;

            // Image code start
            if ($request->hasFile('image')) {
                $image = time().'.'. $request->image->extension();
                $request->image->move(public_path('portfolio'), $image);
                $path = "/portfolio/".$image;
                $portfolio->image = $path;
            }
            // Image code end

            $portfolio->save();

            return redirect()->back();
        }

   //__Delete Method__//
   public function destroy($id)
   {

    portfolio::destroy($id);
       return redirect()->back();
   }

}
