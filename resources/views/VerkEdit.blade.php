@extends('app')

@section('content')
  <h1>Write a new fyrirspurn</h1>

  {!! Form::open(['url' => '/verktakar/$verktakar->id' ]) !!}
      <div Class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', $verktakar->title, ['class' => 'form-control']) !!}
      </div>

      <div Class="form-group">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', $verktakar->body, ['class' => 'form-control']) !!}
      </div>
      <div Class="form-group">
        {!! Form::hidden('id', $verktakar->id, ['class' => 'form-control']) !!}
      </div>

      <div Class="form-group">
        {!! Form::submit('Edit', ['class' => 'btn btn-primary form-control']) !!}
      </div>
  {!! Form::close() !!}
@stop
