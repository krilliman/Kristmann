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
  <div class="container">

    <form class="form-horizontal" role="form" method="POST" action="/VerksaveComment">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="post_name" value="{{ $verktakar->id }}">
      <input type="hidden" name="current_user" value="{{ $user->username }}">
      <input type="hidden" name="current_userPhoto" value="{{ $user->profilephoto }}">
    <div class="col-md-6 col-md-offset-3">
      <h1>{{ $verktakar->title }}@if($user->username == $verktakar->hofundur)
        [<a href="{{url('/verktakar/Edit', $verktakar->id)}}">Edit</a>]

      @else
      @endif</h1>
        <article>
          {{ $verktakar->body}}
          <h6>
           <a href="{{ url('index', $verktakar->hofundur)}}" style="font-size:100%;color:black;">
             Written By:  {{$verktakar->hofundur}}
             <img src="../{{$verktakar->current_photo}}"  height="30" style="display:inline" >
           </a></h6>

        </article>

    </div>
    @stop
    @section('hello')
    @foreach ($verkcomments as $comments)
      @if($comments->post_name == $verktakar->id)

      <div class="col-md-6 col-md-offset-3">
        <a href="{{ url('index', $comments->current_user)}}" style="font-size:200%;color:black;">
          <img src="../{{$comments->current_userPhoto}}"  height="30" style="display:inline" >
          {{ $comments->current_user }}
        </a>
        <p>{{ $comments->comment }}</p>
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
