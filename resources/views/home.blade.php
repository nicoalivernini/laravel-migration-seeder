<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Migration & Seeder</title>
  </head>
  <body>
    @foreach ($holidays as $holiday)
    <p>For {{ $holiday->people }} people</p>
    <p>A travel for {{ $holiday->duration }} days</p>
    <p>In {{ $holiday->country }}</p>
    <p>{{ $holiday->typology }}</p>
    <p>{{ $holiday->category }}</p>
    <p>{{ $holiday->cost }}€</p>
    @endforeach
  </body>
</html>
