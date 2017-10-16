@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">后台首页</div>

        <div class="panel-body">

        <a href="{{ URL('admin/events/create') }}" class="btn btn-lg btn-primary">新增</a>

          @foreach ($events as $event)
            <hr>
            <div class="event">
              <h4>{{ $event->title }}</h4>
              <div class="content">
                <p>
                  {{ $event->brief }}
                </p>
                <p>
                  {{ $event->location }}
                </p>
                <p>
                  {{ $event->category }}
                </p>
                <p>
                  {{ $event->date }}
                </p>
                <p>
                  {{ $event->body }}
                </p>

              </div>
            </div>
            <a href="{{ URL('admin/events/'.$event->id.'/edit') }}" class="btn btn-success">编辑</a>

            <form action="{{ URL('admin/events/'.$event->id) }}" method="POST" style="display: inline;">
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">删除</button>
            </form>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection