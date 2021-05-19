@extends('layouts.app')

@section('main')
<div class="container">
  @foreach ($holidays as $holiday)
  <div class="card">
    <div class="content-card">
      <img src="{{ asset('img/img-holidays.jpg') }}" alt="">
      <div class="description">
        <p>Travel for {{ $holiday->people }} people in <br> {{ $holiday->country }}
          for {{ $holiday->duration }} days</p>
      </div>
      <div class="cost">
        <p>{{ $holiday->cost }}€</p>
      </div>
      <div class="category">
        <span>{{ $holiday->typology }} - </span>
        <span>{{ $holiday->category }}</span>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
