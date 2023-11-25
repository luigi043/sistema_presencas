<!-- resources/views/presencas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Presença #{{ $presenca->id }}</h1>
    <a href="{{ route('presencas.edit', $presenca->id) }}">Editar</a>
    <form method="POST" action="{{ route('presencas.destroy', $presenca->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>
@endsection
