@extends('app')

@section('content')

  <h1>Fyrirspurnir</h1>

  <form class="form-horizontal" action="/createverk">
        <button type="submit" class="btn btn-primary" style="margin-top: 15px;">
          Búa til nýja fyrirspurn
        </button>
  <form>

  @foreach ($verk as $verktakar)
    <article>
      <h2>

        <a href="{{url('/verktakar', $verktakar->id)}}">{{ $verktakar->title }}</a>

      </h2>

      <div class="body">@if(strlen($verktakar->body) > 100){{


          substr($verktakar->body,0,99) }}...
        @else
        {{
          $verktakar->body}}
        @endif</div>
    </article>
    @endforeach

@stop
