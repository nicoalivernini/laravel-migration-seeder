@extends('layouts.app')

@section('main')
<div class="container">
  @foreach ($holidays as $holiday)
  <div class="card">
    <div class="content-card">
      <img src="{{ asset('img/img-holidays.jpg') }}" alt="">
      <p>For {{ $holiday->people }} people</p>
      <p>A travel for {{ $holiday->duration }} days</p>
      <p>In {{ $holiday->country }}</p>
      <p>{{ $holiday->typology }}</p>
      <p>{{ $holiday->category }}</p>
      <p>{{ $holiday->cost }}€</p>
    </div>
  </div>
  @endforeach
</div>
@endsection
