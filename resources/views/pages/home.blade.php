@extends('layouts.main-layouts')
@section('content')
    @auth
        <games-component></games-component>
    @endauth
@endsection