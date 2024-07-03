@extends('layouts.app')

@section('content')
<section class="container">
    <ul>

        <table>
            <thead>
                <tr style="border-bottom:1px solid white">
                    <th scope="col-1">#</th>
                    <th scope="col-1">Azienda</th>
                    <th scope="col-1">Partenza</th>
                    <th scope="col-1">Arrivo</th>
                    <th scope="col-1">Orario di partenza</th>
                    <th scope="col-1">Orario di arrivo</th>
                    <th scope="col-1">Treno N°</th>
                    <th scope="col-1">Carrozze</th>
                    <th scope="col-1">In Orario</th>
                    <th scope="col-1">Cancellato</th>
                </tr>
            </thead>
            <tbody>
         @foreach ($dato as $index => $item)
                <tr>
                    <th style="border-bottom:1px solid white" scope="row">{{$index + 1}}</th>
                    <td style="border-bottom:1px solid white">{{$item->azienda}}</td>
                    <td style="border-bottom:1px solid white">{{$item->stazione_di_partenza}}</td>
                    <td style="border-bottom:1px solid white">{{$item->stazione_di_arrivo}}</td>
                    <td style="border-bottom:1px solid white">{{$item->orario_di_partenza}}</td>
                    <td style="border-bottom:1px solid white">{{$item->orario_di_arrivo}}</td>
                    <td style="border-bottom:1px solid white">{{$item->codice_treno}}</td> 
                    <td style="border-bottom:1px solid white">{{$item->numero_di_carrozze}}</td>
                    <td style="border-bottom:1px solid white">
                        {{($item->in_orario == true) ? "Nessun ritardo" : "in ritardo"}}
                    </td>
                    <td style="border-bottom:1px solid white">
                        {{($item->cancellato == true) ? "//" : "CANCELLATO"}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </ul>
</section>
@endsection
