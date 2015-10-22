@extends('app')

@section('content')

  <h1>{{ $user->username }}</h1>
    <article>
      {{ $user->description}}
    </article>
@stop
