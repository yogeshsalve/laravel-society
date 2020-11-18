<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitor;

class VisitorController extends Controller
{
    public function visitors()
    {
        return view('/visitors.visitors');
    
    }
    public function addData(Request $request)
    {
        $visitor = new Visitor;
        $visitor->visitor_name= $request->visitor_name;
        $visitor->visit_from= $request->visit_from;
        $visitor->visit_to= $request->visit_to;
        $visitor->visitor_contact=$request->visitor_contact;
        $visitor->visitor_vehicle_no=$request->visitor_vehicle_no;
        $visitor->Entry_time=$request->Entry_time;
        $visitor->Exit_time=$request->Exit_time;
        $visitor->save();
        $request->Session()->flash('status','entry Submitted successfully');
    	return redirect('/visitor_list');
        
    }

    public function show()
    {
    	
        $data= visitor::all();
        return view('visitor_list',['visitors'=>$data]);
    }

    
}