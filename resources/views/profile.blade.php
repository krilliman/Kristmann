@extends('app')

@section('content')
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Responsive 'Flat Profile' HTML Portfolio Template</title>
 <link href="css/demo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/jqbar.css" />
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
   <div class="row-fluid">

     <div class="span5">
       <img src="../img/avatar.png" alt="Profile Avatar"  class="avatar">

       <div class="navigation">
         <div>
           <ul>
             <li>
               <img src="../img/about-icon.png">
               <a href="indextest2.html">Um Mig</a>
             </li>
             <li>
               <img src="../img/about-icon.png">
               <a href="#">Breyta um mynd</a>
             </li>
             <li>
               <img src="../img/about-icon.png">
               <a href="#">Breyta lýsingu</a>
           </ul>
         </div>
       </div>
     </div>

     <div class="span7 homeabout">
       <div class="person">
         <span class="name">{{ $user->username }}</span>
       </div>
       <div class="desciption home">
         <article>
           {{ $user->description}}
         </article>

           </div>
         </div>
       </div>

     </div>

   </div>
 </div>

</body>


</html>

@stop
