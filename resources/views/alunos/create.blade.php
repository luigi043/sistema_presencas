<!-- resources/views/alunos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Adicionar Aluno</h1>
    <form method="POST" action="{{ route('alunos.store') }}">
        @csrf
        <!-- Adicione os campos necessários aqui -->
        <button type="submit">Adicionar</button>
    </form>
@endsection
