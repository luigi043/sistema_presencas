<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seu Título</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    @yield('content') <!-- Esta diretiva Blade renderá o conteúdo específico de cada página -->

    <!-- Outras seções de conteúdo comuns a todas as páginas podem ser adicionadas aqui -->

    <!-- Scripts -->
    @livewireScripts

    @extends('layouts.app')

@section('content')
    <!-- Seu conteúdo específico para esta página vai aqui -->
    <h1>Minha Página</h1>
@endsection

</body>
</html>
