@extends('app')

@section('content')
<html>
<head>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="container" id="testtest">

    <form class="form-horizontal" role="form" method="POST" action="/VerksaveComment">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="col-md-6 col-md-offset-3">
      <h1>{{ $verktakar->title }}@if($user->username == $verktakar->hofundur)
        [<a href="{{url('/verktakar/Edit', $verktakar->id)}}">Edit</a>]
        <input type="hidden" name="post_name" value="{{ $verktakar->id }}">
        <input type="hidden" name="current_user" value="{{ $user->username }}">
      @else
      @endif</h1>
        <article>
          {{ $verktakar->body}}
        </article>

    </div>
    @stop
    @section('hello')
    @foreach ($verkcomments as $comments)
      @if($comments->post_name == $verktakar->id)

    <div class="col-md-6 col-md-offset-3">
      <h1>{{ $comments->current_user }}</h1>
      <p>{{ $comments->comment }}</p>
      <div class=" navbar col-md-offset-2" id="submit_myndir">
        <img src="../{{ $user->profilephoto }}"  height="50" >
    </div>
  </div>
  @else
  @endif

  @endforeach
      <div class=" navbar-bottom col-md-6 col-md-offset-3" id="comments">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" cols="3" name="comment"></textarea>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
      </div>
    </form>
  </div>

  </body>
  </html>

</body>
@stop
