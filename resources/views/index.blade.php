<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeders</title>

    @vite(["resources/sass/app.scss","resources/js/app.js"])

</head>
<body>
    <div class="container">
        <h1>HELLO WORLD!</h1>

        @foreach ($trains as $train)
            <ul>
                <li>{{$train["company"]}}</li>
                <li>{{$train["station_of_departure"]}}</li>
                <li>{{$train["station_of_arrival"]}}</li>
                <li>{{$train["departure_time"]}}</li>
                <li>{{$train["arrival_time"]}}</li>
                <li>{{$train["train_code"]}}</li>
                <li>{{$train["number_of_carriage"]}}</li>
                    @if (!$train["on_time"])
                        <li>
                            In Ritardo
                        </li>

                    @else
                        <li>
                            In Orario
                        </li>
                    @endif
                    @if ($train["is_deleted"])
                        <li>
                            Cancellato
                        </li>
                    @endif
            </ul>    
        @endforeach
    </div>
    
</body>
</html>
