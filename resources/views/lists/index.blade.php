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
