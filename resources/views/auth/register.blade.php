@extends('layouts.master')

@section('content')
<h1>Вход в систему</h1>
<br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  {!! Form::open(array('url' => '/auth/register')) !!}
    {!! csrf_field() !!}
    <div class="form-group">
      {!! Form::label('name', 'Логин') !!}
      {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Пароль') !!}
      {!! Form::password('password', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Ещё раз') !!}
      {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Зарегистрироваться', array('class' => 'btn btn-success')) !!}

  {!! Form::close() !!}
@endsection
