@extends('layouts.master')

@section('content')
  <h1>Lists</h1>

  <ul class="list">
    @forelse($lists as $list)
      <li>{{$list->name}} - {{$list->description}}</li>
    @empty
      <p>Empty!</p>
    @endforelse
  </ul>
@endsection
