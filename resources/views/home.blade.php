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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Agency</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Arrival Time</th>
                <th scope="col">Train Code</th>
                <th scope="col">Number Carriages</th>
                <th scope="col">In Time</th>
                <th scope="col">Cancelled</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $key => $train)
            <tr>
                <td>{{$train['id']}}</td>
                <td>{{$train['agency']}}</td>
                <td>{{$train['departure_station']}}</td>
                <td>{{$train['arrival_station']}}</td>
                <td>{{$train['departure_time']}}</td>
                <td>{{$train['arrival_time']}}</td>
                <td>{{$train['train_code']}}</td>
                <td>{{$train['number_carriages']}}</td>
                <td>
                    @if ($train['in_time'] == 1)
                    In time
                    @else
                    Late    
                    @endif   
                </td>
                <td>
                    @if ($train['cancelled'] == 1)
                    Cancelled
                    @else
                    Not cancelled
                    
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>

</html>