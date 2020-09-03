@extends('layouts.app')
@section('content')
    <h3>{{__("Edit property")}}</h3>
    {!! Form::open(['action'=>['PropertiesController@update',$property->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title',__("Description"))}}
            {{Form::text('description',$property->description,['class'=>'form-control','placeholder'=>__("Type here")])}}
        </div>
        {{Form::submit(__("Submit"),['class'=>'btn btn-primary'])}}
        {{Form::hidden('_method','PUT')}}
    {!! Form::close() !!}
@endsection