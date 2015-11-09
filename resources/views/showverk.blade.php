@extends('app')

@section('content')

  <h1>{{ $verktakar->title }} @if($user->username == $verktakar->hofundur)
    [<a href="{{url('Verktakar/Edit', $verktakar->id)}}">Edit</a>]
  @else
  @endif</h1>
    <article>
      {{ $verktakar->body}}
    </article>
@stop
