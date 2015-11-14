@extends('app')

@section('content')
  <h1>Write a new Request</h1>

  <hr/>
  {!! Form::open(['url' => '/verktakar']) !!}
      <div Class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>

      <div Class="form-group">
        {!! Form::hidden('hofundur', 'Hofundur:') !!}
        {!! Form::hidden('hofundur', Auth::user()->username, ['class' => 'form-control']) !!}
      </div>
      <div Class="form-group">
        {!! Form::hidden('current_photo', Auth::user()->profilephoto, ['class' => 'form-control']) !!}
      </div>

      <div Class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
      </div>



      <div Class="form-group">
        {!! Form::submit('Add Request', ['class' => 'btn btn-primary form-control']) !!}
      </div>
  {!! Form::close() !!}
@stop
