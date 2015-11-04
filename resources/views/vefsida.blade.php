@extends('app')

@section('content')

  <h1>Fyrirspurnir</h1>

  <form class="form-horizontal" action="/create">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">
          Búa til nýja fyrirspurn
        </button>
  <form>

  @foreach ($vefsida as $vefsida)
    <article>
      <h2>

        <a href="{{url('/vefsida', $vefsida->id)}}">{{ $vefsida->title }}</a>

      </h2>

      <div class="body">{{ $vefsida->body }}</div>

    </article>
    @endforeach

@stop
