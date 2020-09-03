<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Zone;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones=Zone::where('property','=','1')->orderBy('description')->paginate(10);      
        return view('zones.index')->with('zones',$zones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['description'=>'required']);
        $zone= new Zone;
        $zone->description=$request->input('description');
        $zone->property=1;
        $zone->save();
        return redirect('zones')->with('success','New zone was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone=Zone::find($id);
        return view('zones.edit')->with('zone',$zone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['description'=>'required']);
        $zone= Zone::find($id);
        $zone->description=$request->input('description');
        $zone->property=1;
        $zone->save();
        return redirect('zones')->with('success','Property updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zone= Zone::find($id);
        $zone->delete();
        return redirect('zones')->with('success','Zone removed');
    }
}
