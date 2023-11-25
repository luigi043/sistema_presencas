<!-- resources/views/presencas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Presença #{{ $presenca->id }}</h1>
    <form method="POST" action="{{ route('presencas.update', $presenca->id) }}">
        @csrf
        @method('PUT')
        <!-- Adicione os campos necessários aqui -->
        <button type="submit">Salvar</button>
    </form>
@endsection

