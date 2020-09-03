@extends('layouts.app')
@section('content')
    <h3>Edit Zone </h3>
    {!! Form::open(['action'=>['ZonesController@update',$zone->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Description')}}
            {{Form::text('description',$zone->description,['class'=>'form-control','placeholder'=>'Type here'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
        {{Form::hidden('_method','PUT')}}
    {!! Form::close() !!}
@endsection