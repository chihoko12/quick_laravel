@extends('layouts.base')
@section('title','basics of shared common layout')
@section('main')

{{-- <!-- a. simple value -->
@component('components.alert', ['type' => 'success'])

  <!-- b. component -->
  @slot('alert_title')
  first component
  @endslot

  <!-- c. other components -->
  component can be defined in the .blade.php file like normal view
  @endcomponent --}}

  @include('components.alert', [
    'type' => 'success',
    'alert_title' => 'first component',
    'slot' => 'component can be defined in the .blade.php file like normal view component'
  ])




  @endsection

