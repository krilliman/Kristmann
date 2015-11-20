@extends('app')

@section('content')


      <h2>Vefsíður top3</h2><br>
      @foreach ($verktakar as $verktakar)

      @endforeach
      <div class="col-md-6">
        <ul class="nav">
                <li><h1>Verktakar</h1></li>

        @if(count($verktakar->all()) > 3)
            @for($i = 0;$i < 3;$i++)
            <li><h2>
            <a href="{{url('/verktakar',  $verktakar->all()[$i]->id)}}">{{ $verktakar->all()[$i]->title }}</a>
          </h2></li>
            @if(strlen($verktakar->all()[$i]->body) > 250) <li>{{
              substr($verktakar->all()[$i]->body,0,249) }}...</li>
            @else
            <li> {{$verktakar->all()[$i]->body}} </li>
            @endif
      @endfor
      @else
      @for($i = 0; $i < count($verktakar->all());$i++)
                <li><h2>
                  <a href="{{url('/verktakar',  $verktakar->all()[$i]->id)}}">{{ $verktakar->all()[$i]->title }}</a>
                </h2></li>
                  @if(strlen($verktakar->all()[$i]->body) > 250)<li> {{
                    substr($verktakar->all()[$i]->body,0,249) }}... </li>
                  @else
                  <li> {{$verktakar->all()[$i]->body}} </li>
                  @endif
          @endfor

      @endif
      </ul>

    </div>
      @foreach ($vefsida as $vefsida)

      @endforeach
      <div class="col-md-6" >
      <ul class="nav">
              <li><h1>Vefsíður</h1></li>
      @if(count($vefsida) > 3)
      @for($i = 0; $i < 3;$i++)
      <li><h2>
          <a href="{{url('/vefsida',  $vefsida->all()[$i]->id)}}">{{ $vefsida->all()[$i]->title }}</a>
        </h2></li>
          @if(strlen($vefsida->all()[$i]->body) > 250)<li>{{
          substr($vefsida->all()[$i]->body,0,249) }}...</li>
          @else
          <li>{{$vefsida->all()[$i]->body}}</li>
          @endif
    @endfor
    @else
    @for($i = 0; $i < count($vefsida->all());$i++)
              <li><h2>
                <a href="{{url('/vefsida',  $vefsida->all()[$i]->id)}}">{{ $vefsida->all()[$i]->title }}</a>
              </h2></li>
                @if(strlen($vefsida->all()[$i]->body) > 250)<li>{{
                  substr($vefsida->all()[$i]->body,0,249) }}...</li>
                @else
                <li>{{$vefsida->all()[$i]->body}}</li>
                @endif
        @endfor

   @endif
</ul>

 </div>





@stop
@section('hello')
<div class="col-sm-13">
<h3>Eftir að gera:</h3>
      <pre>
<del>Comments á profile</del>
Bæta við post, þannig að hægt er að sjá hvort aðili hefur fundið aðila í vinnu.
Gera history, hvaða verkefni einn aðili hefur gert.
index - sína top 3 síðurnar (viewcount)
comments - Hafa möguleikan a þvi að breyta eða eyða comments
<del>profile/logout- laga logout og profile takkan uppi inna öllum undirsíðunum (posts-profile... ect.)</del>
footer - gera contact link a creators , gera linka a helga og kristmann (poppa up sma siða um hvorn aðilan)
alert - finna betra alert box (kanski einhvað sem skrifast sem error a siðuna i rauðum stöfum og hverfur siðan)
css - laga allt sem þarf að laga og reyna gera hluti flottari ?
myndir - reyna laga þannig að þegar þu breytir um mynd uppfærist sjálfkrafa a post/comments.
Bæta við admin aðgang, getur postað posts á index síðu.
</pre>
</div>
@stop
