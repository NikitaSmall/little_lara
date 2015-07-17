@extends('layouts.master')

@section('content')
<h1>Редактирвоание задачи № {{$list->id}}</h1>
<br>
    {!! Form::model($list, ['method' => 'put', 'url' => '/lists/' . $list->id]) !!}
    {!! csrf_field() !!}
    <div class="form-group">
      {!! Form::label('name', 'Название задачи') !!}
      {!! Form::text('name', $list->name, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Описание задачи') !!}
      {!! Form::textarea('description', $list->description, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
      {!! Form::checkbox('complete', 1, array('class' => 'form-control')) !!} {!! Form::label('complete', 'Выполнена?') !!}
    </div>

    {!! Form::submit('Обновить', array('class' => 'btn btn-success')) !!}

  {!! Form::close() !!}
@endsection
