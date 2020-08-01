<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
@foreach($cards as $card)
    <p>city:{{$card->city}}<br>name:{{$card->user['name']}}</p>
@endforeach
    </body>
</html>
