<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        <div class="container">

            <table class="table table-dark table-striped">

                <thead>

                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Compagnia</th>
                        <th scope="col">Partenza</th>
                        <th scope="col">Destinazione</th>
                        <th scope="col">Orario di partenza</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">PNR</th>
                        <th scope="col">Carrozza</th>
                        <th scope="col">In Orario</th>
                        <th scope="col">Cancellato</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($trains as $train)
                        <tr>
                            <th scope="row">-</th>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure }}</td>
                            <td>{{ $train->destination }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->pnr }}</td>
                            <td>{{ $train->train_carriage }}</td>
                            <td>{{ $train->isinTime() }}</td>
                            <td class="text-danger">{{ $train->isDeleted() }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </main>

</body>

</html>
