@extends('layouts.main')
@section('title', 'Welcome')

@section('styles')
  <link rel="stylesheet" href="{{ @asset('css/landing.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
@endsection

@section('content')
  <div id="particles-js"></div>
  <div class="container-fluid h-100">
    <div class="row h-100 bg-danger" style="z-index: 10"></div>
    <div class="row h-100 bg-warning"></div>
    <div class="row h-100 bg-info"></div>
  </div>
@endsection

@section('scripts')
  <script src="{{ @asset('js/particles.min.js') }}"></script>
  <script src="{{ @asset('js/particles.js') }}"></script>
  <script src="{{ @asset('js/landing.js') }}"></script>
@endsection