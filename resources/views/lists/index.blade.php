@extends('layouts.master')

@section('content')
<div class="row">
  <div class="">
  </div>
</div>
  <h1>Lists</h1>

  <ul class="list">
    @forelse($lists as $list)
      <li>{{$list->name}} - {{$list->description}}</li>
    @empty
      <p>Empty!</p>
    @endforelse
  </ul>
@endsection
