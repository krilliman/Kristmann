@extends('app')

@section('content')
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 <title>Responsive 'Flat Profile' HTML Portfolio Template</title>
 <link href="css/demo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/jqbar.css" />
 <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css">


 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" type="text/css" href="../css/style.css">

 <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="../css/simpletextrotator.css" />

   <!--[if lt IE 9]>
     <style>
       .rw-wrapper{ display: none; }
       .rw-sentence-IE{ display: block;  }
     </style>
 <![endif]-->
</head>
<body >

 <div class="container topbottom">
   <!-- Modal -->

   <div class="row-fluid">

     <div class="span5">
       <img src="../{{$user->profilephoto}}" alt="Profile Avatar"  class="avatar" height="439">

       <div class="navigation">
         <div>
           <ul>
             <li>
               <img src="../img/about-icon.png">
               <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Velja Nýja Mynd</button>
               <!-- Modal content-->
             </li>
             <li>
               <img src="../img/about-icon.png">
               <button type="button" class="btn btn-primary btn-lg" id="button_breyta" >Breyta lýsingu</buton>
            </li>
            <li>
              <img src="../img/about-icon.png">
              <button type="button" class="btn btn-primary btn-lg" id="verkefnaferil">Skoða Verkefnaferil</buton>
           </ul>
         </div>
       </div>
     </div>

     <div class="span7 homeabout" id="De_scription">
       <div class="person">
         <span class="name">{{ $user->firstname }} {{ $user->lastname }} - ( {{$user->username}} )</span>
       </div>
       <div class="desciption home">
         <article>
           {{ $user->description}}
         </article>

           </div>

         </div>
         <form class="form-horizontal" role="form" method="POST" action="/reddescrip">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="span7 homeabout" id="edit_scription">
         <div class="person">
           <span class="name">{{ $user->firstname }} {{ $user->lastname }} - ( {{$user->username}} ) - Breyting Á Persónu lýsingu</span>
         </div>
         <div class="desciption home">
           <textarea rows="8" cols="80" name="descritionEdited">
             {{ $user->description }}
           </textarea>
           <button type="submit" class="btn btn-danger btn-lg" id="desciption_breytt" >Breyta</button>
             </div>
           </div>
         </form>

         <div class="span7 homeabout" id="verkefna_ferill">
           <div class="person">
             <span class="name">{{ $user->firstname }} {{ $user->lastname }} - ( {{$user->username}} ) - VerkefnaFerill</span>
           </div>
           <div class="desciption home">
              <h2>Nýjasta verkefni: {{$user->verkefni}}</h2>
              <h3>Öll Verkefnin:</h3>
                @foreach ($verkefnaf as $post_titles)
                  @if($post_titles->post_user == $user->username)
                    <a href="{{ url('vefsida', $post_titles->post_id)}}" style="font-size:150%;color:black;">{{$post_titles->post_title}} <br> </a>
                  @endif
                @endforeach
           </div>

         </div>
       </div>


       <div class="modal" id="myModal" role="dialog">
         <div class="modal-dialog">

           <!-- Modal content-->
           <div class="modal-content">
             <div class="modal-header">
               <h4 class="modal-title">Breyta Um Mynd</h4>
             </div>
             <div class="modal-body">
               <p>Veldu nýja mynd</p>
               <form action="/setphoto" method="POST" enctype="multipart/form-data" files="true">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="file" name="photo" accept="image/*">
                 <input type="submit" class="btn btn-primary btn-lg" value="Staðfesta Mynd">
               </form>
             </div>

             <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             </div>
           </div>

         </div>
       </div>

     </div>

   </div>
 </div>
</body>
<script>
$(document).ready(function(){
  $('#verkefna_ferill').hide();
  $('#edit_scription').hide();
  $('#button_breyta').click(function(){
    $('#De_scription').hide();
    $('#verkefna_ferill').hide();
    $('#edit_scription').show();
  });
  $('#verkefnaferil').click(function(){
    $('#De_scription').hide();
    $('#edit_scription').hide();
    $('#verkefna_ferill').show();
  });

});
</script>
</html>

@stop

@section('hello')
<form class="form-horizontal" role="form" method="POST" action="/profilesaveComment">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="profile_name" value="{{ $user->username }}">
  <input type="hidden" name="current_user" value="{{ $curruser->username }}">

@foreach ($comments as $comments)
  @if($comments->profile_name == $user->username)

<div class="col-md-6 col-md-offset-3">
  <h1>{{ $comments->current_user }}</h1>
  <p>{{ $comments->comment }}</p>
  <!--<div class=" navbar navbar-fixed-bottom col-md-offset-2" id="submit_myndir">
    <img src="../{{$user->profilephoto}}"  height="50" >
</div>-->
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

@stop
