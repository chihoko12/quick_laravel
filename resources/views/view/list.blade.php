@extends('layouts.base')
@section('title', 'shared common layout')
@section('mains')
<table class="table">
  <tr>
    <th>Book name</th>
    <th>Price</th>
    <th>Publisher</th>
    <th>Published Date</th>
  </tr>
  @each ('subviews.book', $records, 'record', 'subviews.empty')
</table>
@endsection
