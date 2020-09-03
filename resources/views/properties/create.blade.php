@extends('layouts.app')
@section('content')
    <h3>{{__("Add new property")}}</h3>
    {!! Form::open(['action'=>'PropertiesController@store','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title',__("Description"))}}
            {{Form::text('description','',['class'=>'form-control','placeholder'=>__("Type here")])}}
        </div>
        {{Form::submit(__("Submit"),['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection