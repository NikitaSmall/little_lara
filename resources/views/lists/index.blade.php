@extends('layouts.master')

@section('content')
<div class="row">
  <div class="">
  </div>
</div>
  <h1>Lists</h1>

  <table class="table table-stripped">
    @forelse($lists as $list)
      <tr>
        <td>
          {{$list->id}}
        </td>
        <td>
          {{$list->name}}
        </td>
        <td>
          {{$list->description}}
        </td>
        <td>
          <a href='{{ '/lists/' . $list->id . '/edit' }}' class="btn btn-default">
            <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
          </a>
        </td>
        <td>
          {!! Form::model($list, ['method' => 'delete', 'url' => '/lists/' . $list->id ]) !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-danger">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          {!! Form::close() !!}
        </td>
      </tr>
    @empty
      <p>Empty!</p>
    @endforelse
  </table>

  <div>
    {!! $lists->render() !!}
  </div>
  {!! link_to_action('ListsController@create','Создать новую задачу', [], ['class' => 'btn btn-success']) !!}
@endsection
