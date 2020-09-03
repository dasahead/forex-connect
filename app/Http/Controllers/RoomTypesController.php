<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomType;
class RoomTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes=RoomType::where('property','=','1')->orderBy('description')->paginate(10);      
        return view('roomtypes.index')->with('roomtypes',$roomtypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roomtypes.create');
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
        $roomtype= new RoomType;
        $roomtype->description=$request->input('description');
        $roomtype->property=1;
        $roomtype->save();
        return redirect('roomtypes')->with('success','New room type was created');
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
        $roomtype=RoomType::find($id);
        return view('roomtypes.edit')->with('roomtype',$roomtype);
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
        $roomtype= RoomType::find($id);
        $roomtype->description=$request->input('description');
        $roomtype->property=1;
        $roomtype->save();
        return redirect('roomtypes')->with('success','Room type updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomtype= RoomType::find($id);
        $roomtype->delete();
        return redirect('roomtypes')->with('success','Room type removed');
    }
}
