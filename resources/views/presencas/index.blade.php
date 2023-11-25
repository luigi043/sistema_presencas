<!-- resources/views/presencas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Presenças</h1>
    <a href="{{ route('presencas.create') }}">Registrar Presença</a>
    <ul>
        @foreach ($presencas as $presenca)
            <li><a href="{{ route('presencas.show', $presenca->id) }}">Presença #{{ $presenca->id }}</a></li>
        @endforeach
    </ul>
@endsection
