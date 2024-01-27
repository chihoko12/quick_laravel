<!-- a. declare shared common layout -->
@extends('layouts.base')

<!-- b. title section  -->
@section('title','basics of shared common layout')

<!-- c. main section -->
@section('main')
  @parent
  <p>{{ $msg }}</p>
@endsection
