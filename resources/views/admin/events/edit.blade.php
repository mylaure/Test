@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">编辑 Event</div>

        <div class="panel-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ URL('admin/events/'.$event->id) }}" method="POST">
          <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            Title:
            <input type="text" name="title" class="form-control" required="required" value="{{ $event->title }}">
            <br>
            Brief:
            <input type="text" name="brief" class="form-control" value="{{ $event->brief }}">
            <br>
            Location:
            <input type="text" name="location" class="form-control" value="{{ $event->location }}">
            <br>
            Category:
            <input type="integer" name="category" class="form-control" value="{{ $event->category }}">
            <br>
            Date:
            <input type="date" name="date" class="form-control" value="{{ $event->date }}">
            <br>
            Body:
            <textarea name="body" rows="10" class="form-control" required="required">{{ $event->body }}</textarea>
            <br>
            <button class="btn btn-lg btn-info">编辑 Event</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection