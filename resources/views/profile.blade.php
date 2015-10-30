@extends('app')

@section('content')
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Responsive 'Flat Profile' HTML Portfolio Template</title>
 <link href="css/demo.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/jqbar.css" />
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

 <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>

 <link rel="stylesheet" type="text/css" href="css/style.css">

 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/simpletextrotator.css" />

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
       <img src="img/avatar.png" alt="Profile Avatar"  class="avatar">

       <div class="navigation">
         <div>
           <ul>
             <li>
               <img src="img/about-icon.png">
               <a href="indextest2.html">About Me</a>
             </li>
             <li>
               <a href="#"></a>
           </ul>
         </div>
       </div>
     </div>

     <div class="span7 homeabout">
       <div class="person">
         <span class="name">Gulli Gullason</span>
       </div>
       <div class="desciption home">
         <p>skrifa ehv <span class="rotate greentext">einhvað meira</span> svo meira herna<span class="greentext">aftur ehv</span>.</p>
       </div>
       <div class="row">
         <div class="span6">
            <div class="bars">
             <div id="bar-1">
             </div>
             <div id="bar-2">
             </div>
             <div id="bar-3">
             </div>
             <div id="bar-4">
             </div>

           </div>
         </div>
         <div class="span6">
                     <div class="user-tip"><img src="img/img-tip.png" alt="" /></div>
           <div id="bars-content">
             <div  class="content" id="content-1">Description</div>
         </div>
       </div>

     </div>

   </div>
 </div>
 <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
 <script src="js/jqbar.js" type="text/javascript"></script>

 <script type="text/javascript">
  $(document).ready(function () {

           $('#bar-1').jqbar({ label: 'HTML5', value: 80, barColor: '#21ba82' });

           $('#bar-2').jqbar({ label: 'CSS', value: 99, barColor: '#21ba82' });

           $('#bar-3').jqbar({ label: 'JavaScript', value: 85, barColor: '#21ba82' });

           $('#bar-4').jqbar({ label: 'WordPress', value: 75, barColor: '#21ba82' });



     $('#bars-content .content').css({'opacity':'0',display:'none'});
     $('#bars-content .content:eq(0)').css('display','block').animate({opacity:1},1000);
     $('.jqbar:first').addClass('active');
     $('.jqbar').hover(function(){ $(this).addClass('hover');},function(){ $(this).removeClass('hover');});
     $('.jqbar').click(function(){
       $('.jqbar').removeClass('active');
       var id = $(this).addClass('active').attr('id').replace('bar','content');
       $('#bars-content .content').css({'opacity':'0',display:'none'});
       $('#' + id).css('display','block').animate({opacity:1},1000);

     });

      $(".rotate").textrotator({
       animation: "spin",
       separator: ",",
       speed: 2000
       });


       });

   </script>
   <script type="text/javascript" src="js/jquery.simple-text-rotator.min.js"></script>

</body>


</html>

@stop
