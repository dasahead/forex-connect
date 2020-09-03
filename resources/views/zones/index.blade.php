@extends('layouts.app')
@section('content')
    Zones {{ link_to_route('zones.create', 'Insert', null, ['class'=>'btn btn-secondary btn-sm']) }}
    @if(count($zones)>0)
        {{ $zones->links() }}
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zones as $zone)
                    <tr>
                        <td> {{$zone->description}}</td>
                        <td> {{Form::open(['action'=>['ZonesController@destroy',$zone->id],'method'=>'POST'])}}
                        {{ link_to_route('zones.edit', 'Edit', $zone->id, ['class'=>'btn btn-secondary btn-sm']) }}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger btn-sm'])}}
                        {{Form::close()}}</td>
                    </tr>         
                @endforeach
            </tbody>
        </table>
    @else 
        <p>No zones found</p>
    @endif
@endsection