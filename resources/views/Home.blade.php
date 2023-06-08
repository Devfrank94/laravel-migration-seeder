<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Seeder</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container py-5">
                <h1 class="mb-4">Tabella Treni:</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Nome Compagnia</th>
                            <th scope="col">Stazione di Partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Data e ora Partenza</th>
                            <th scope="col">Data e ora Arrivo</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Numero delle carrozze</th>
                            <th scope="col">In Orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($trains as $train)
                        <tr>
                            <th scope="row">{{$train->id}}</th>
                            <td>{{$train->agency}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->number_of_carriages}}</td>
                            @if ($train->in_time === 1 && $train->deleted === 0)
                                <td class="text-success"><strong>IN ORARIO</strong></td>
                                <td class="text-success"><strong>IN SERVIZIO</strong></td>
                            @elseif ($train->in_time === 0 && $train->deleted === 0)
                                <td class="text-danger"><strong>IN RITARDO</strong></td>
                                <td class="text-success"><strong>IN SERVIZIO</strong></td>
                            @else
                                <td class="text-danger"><strong>N/D</strong></td>
                                <td class="text-danger"><strong>CANCELLATO</strong></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
        </main>
    </body>
</html>
