@extends('layout')
@section('title','talleres')
    
@section('content')
    <h1>Talleres Disponibles</h1>
    <ul>
        <li><a href="{{ route('talleres.danza') }}">Taller de Danza</a></li>
        <li><a href="{{ route('talleres.baile') }}">Taller de Baile</a></li>
        <li><a href="{{ route('talleres.oratoria') }}">Taller de Oratoria</a></li>
        <li><a href="{{ route('talleres.liderazgo') }}">Taller de Liderazgo</a></li>
    </ul>
@endsection