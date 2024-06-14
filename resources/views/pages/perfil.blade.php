@extends('./layout.layout')

@section('title', 'Perfil')

@section('head-content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js', 'resources/scss/main.scss', 'resources/js/perfilScript.js'])

@endsection


@section('content')

@include('./components/navbar')
@include('./components/aside')

<section class="container">

</section>


@endsection
