@extends('layouts.app')

@section('content')
<section class="container">

    <h1>Dati da "config/data.php": {{ $dato }}</h1>
    <p>FUNGE</p>
    <button class="btn btn-primary">
        <a href="http://" style="color: whitesmoke">
            Cliccami
        </a>
    </button>
    <button class="btn btn-primary">
        <a href="http://" style="color: whitesmoke">
            Cliccami
        </a>
    </button>
</section>
@endsection
