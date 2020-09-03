@extends('layouts.app')
@section('content')
    <h3> Create Zone </h3>
    {!! Form::open(['action'=>'ZonesController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title','Description')}}
            {{Form::text('description','',['class'=>'form-control','placeholder'=>'Type here'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}    
    {!! Form::close() !!}
@endsection