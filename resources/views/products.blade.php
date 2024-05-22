@extends('layouts.app')

@section('main')

<div class="container">
  <h1>This is the Products Page</h1>
  <h1>{{ $comics[0]['price'] }}</h1>
</div>

@endsection