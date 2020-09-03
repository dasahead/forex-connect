<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;

class PagesController extends Controller
{
    public function index()
    {
        $zones= Zone::All();
        return view('zones.index')->with('zones',$zones);
    }
    public function store(Request $request)
    {
        $this->validate($request,['description'=>'required']);
        $zone=new Zone;
        $zone->description=$request->input('description');
        $zone->save();
        return redirect('zones')->with('success','New zone added');
    }
}
