<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Property;
use Illuminate\Support\Facades\Auth;
class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid=auth()->user()->id;
        $properties= Property::where('user','=',$userid)->orderBy('description')->paginate(10);
        return view('properties.index')->with('properties',$properties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('properties.create');
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
        $property= new Property;
        $property->description=$request->input('description');
        $property->user=Auth::user()->id;
        $property->save();
        return redirect('properties')->with('success',__("New property is added"));
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
        $property=Property::find($id);
        return view('properties.edit')->with('property',$property);
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
        $property= Property::find($id);
        $property->description=$request->input('description');
        $property->user=Auth::user()->id;
        $property->save();
        return redirect('properties')->with('success',__("Property updated"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property= Property::find($id);
        $property->delete();
        return redirect('properties')->with('success',__("Property deleted"));

    }
}
