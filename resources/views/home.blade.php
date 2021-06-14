<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Viaggi</h1>

    <ul>
        @foreach($travels as $travel)
            <li>
                <div>Name: {{ $travel['name'] }}</div>
                <div>Destination: {{ $travel['destinaton'] }}</div>
                <div>Days: {{ $travel['days'] }}</div>
                <div>Duration: {{ $travel['duration'] }} days</div>
                <div>Price: {{ $travel['price'] }} €</div>
                @if( $travel->description )
                    <div>Description: {{ $travel['description'] }} </div>
                @endif
            </li>
        @endforeach
    </ul>

</body>
</html>