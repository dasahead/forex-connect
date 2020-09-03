@extends('layouts.app')
@section('content')
    {{__("My properties")}}   {{ link_to_route('properties.create', __("Add New") , null, ['class'=>'btn btn-secondary btn-sm']) }}
    @if(count($properties)>0)
        {{ $properties->links() }}
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">{{__("Description")}} </th>
                    <th scope="col">{{__("Actions")}} </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr>
                        <td> {{$property->description}}</td>
                        <td> {{Form::open(['action'=>['PropertiesController@destroy',$property->id],'method'=>'POST'])}}
                        {{ link_to_route('properties.edit', __("Edit"), $property->id, ['class'=>'btn btn-secondary btn-sm']) }}
                        {{Form::hidden('_method','DELETE')}}
                        @if(count($properties)>1)
                            {{Form::submit(__("Delete"),['class'=>'btn btn-danger btn-sm'])}}
                        @endif    
                        {{Form::close()}}</td>
                    </tr>         
                @endforeach
            </tbody>
        </table>
    @else
        <p>{{__("No records found")}}</p>
    @endif
@endsection