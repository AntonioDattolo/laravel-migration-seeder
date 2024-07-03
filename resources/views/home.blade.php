@extends('layouts.app')

@section('content')
<section class="container">
    <ul>

        @foreach ($dato as $index => $item)
        <li>
           {{$index + 1}} elemento della tabella : <br> {{ $item }} 
        </li>
            
        
        @endforeach
    </ul>
        
        
        
   
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
