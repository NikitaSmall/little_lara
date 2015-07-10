@extends('layouts.master')

@section('content')
  <div class="container">
      <div class="content">
          <h1 class="text-center">Title</h1>
          <div class="title">
            Hello, {{$name or 'potato'}}. </br>
            From Laravel 5</div>

            <a href="http://www.wjgilmore.com" class="btn btn-default">W.J. Gilmore, LLC</a>
      </div>
  </div>
@endsection
