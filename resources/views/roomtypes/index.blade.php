@extends('layouts.app')
@section('content')
    {{__("Room Types")}} {{ link_to_route('roomtypes.create', 'Insert', null, ['class'=>'btn btn-secondary btn-sm']) }}
    @if(count($roomtypes)>0)
        {{ $roomtypes->links() }}
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roomtypes as $roomtype)
                    <tr>
                        <td> {{$roomtype->description}}</td>
                        <td> {{Form::open(['action'=>['RoomTypesController@destroy',$roomtype->id],'method'=>'POST'])}}
                        {{ link_to_route('roomtypes.edit', 'Edit', $roomtype->id, ['class'=>'btn btn-secondary btn-sm']) }}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])}}
                        {{Form::close()}}</td>
                    </tr>         
                @endforeach
            </tbody>
        </table>
    @else 
        <p>No room types found</p>
    @endif
@endsection