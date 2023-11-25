<!-- resources/views/presencas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Registrar Presença</h1>
    <form method="POST" action="{{ route('presencas.store') }}">
        @csrf
        <!-- Adicione os campos necessários aqui -->
        <button type="submit">Registrar Presença</button>
    </form>
@endsection
