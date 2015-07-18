@extends('layouts.master')

@section('content')
  <h1>Новая задача</h1>
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
  {!! Form::model($list, array('action' => 'ListsController@store')) !!}
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

    {!! Form::submit('Создать', array('class' => 'btn btn-success')) !!}

  {!! Form::close() !!}
@endsection
