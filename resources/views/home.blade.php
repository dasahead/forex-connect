use Illuminate\Support\Facades\Cookie;
@extends('layouts.app')
@extends('layouts.globals')
@section('menu_home','active')
@section('content')

{{__("Home page")}}
{{Config::set('Active_Property_Id', 7)}}
{{Config::set('Active_Property_Name', 'Hotel 1')}}
@endsection
