@extends('layouts.app')
@section('content')
    <h3>Edit Room Type </h3>
    {!! Form::open(['action'=>['RoomTypesController@update',$roomtype->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Description')}}
            {{Form::text('description',$roomtype->description,['class'=>'form-control','placeholder'=>'Type here'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
        {{Form::hidden('_method','PUT')}}
    {!! Form::close() !!}
@endsection