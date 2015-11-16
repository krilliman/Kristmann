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
      <div class="body">@if(strlen($vefsida->body) > 100){{


          substr($vefsida->body,0,99) }}...
        @else
        {{
          $vefsida->body}}
        @endif
      </div>

    </article>
    @endforeach

@stop
