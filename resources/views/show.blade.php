@extends('app')

@section('content')

  <h1>{{ $vefsida->title }}@if($user->username == $vefsida->hofundur)
    [<a href="{{url('/Edit', $vefsida->id)}}">Edit</a>]
  @else
  @endif</h1>
    <article>
      {{ $vefsida->body}}
    </article>
@stop
