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
<h1 class="my-5">Treni Odierni</h1>
        <div class="row row-cols-4 g-4 my-5">
            
        @foreach ($trains as $train)
        <div class="col">

            <ul class="list-group">
                <li class="list-group-item">{{$train["company"]}}</li>
                <li class="list-group-item">{{$train["station_of_departure"]}}</li>
                <li class="list-group-item">{{$train["station_of_arrival"]}}</li>
                <li class="list-group-item">{{$train["departure_time"]}}</li>
                <li class="list-group-item">{{$train["arrival_time"]}}</li>
                <li class="list-group-item">{{$train["train_code"]}}</li>
                <li class="list-group-item">{{$train["number_of_carriage"]}}</li>
                    @if (!$train["on_time"])
                        <li class="list-group-item bg-warning">
                            In Ritardo
                        </li>

                    @else
                        <li class="list-group-item">
                            In Orario
                        </li>
                    @endif
                    @if ($train["is_deleted"])
                        <li class="list-group-item bg-danger">
                            Cancellato
                        </li>
                    @endif
            </ul>    
        </div>

        @endforeach
    </div>
    </div>
    
</body>
</html>
