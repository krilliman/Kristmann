<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">HandySide</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/index">Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
								<li><a href="{{url('/index', $user->id)}}">Profile</a></li>
							</ul>
						</li>
				</ul>
			</div
					 	@endif
		</div>
	</nav>
	<div id="wrapper">

			@if (Auth::guest())
			@else
             <div class="sidebar-wrapper" >
                       <ul class="nav">
                           <li class="col-md-2" >
                               <ul class="nav nav-second-level">
                                   <li>
                                       <a href="/vefsida">Vefsíður</a>
                                   </li>
                                   <li>
                                       <a href="/verktakar">Verktakar</a>
                                   </li>
                                   <li>
                                       <a href="#">Third Level <span class="fa arrow"></span></a>
                                       <ul class="nav nav-third-level">
                                           <li>
                                               <a href="#">Third Level Item</a>
                                           </li>
                                       </ul>
                                       <!-- /.nav-third-level -->
                                   </li>
                               </ul>
                               <!-- /.nav-second-level -->
                           </li>
													 @endif
													 <div  class="col-md-5" >
													 	@yield('content')
													</div>
                       </ul>

                   <!-- /.sidebar-collapse -->

               <!-- /.navbar-static-side -->
           </nav>
         </div>


         <div id="page-wrapper">
 			 <div class="row">
                 <div class="col-lg-12">
                     <h1 class="page-header">@yield('page_heading')</h1>
                 </div>
                 <!-- /.col-lg-12 -->
            </div>
 			<div class="row">
 				@yield('section')

             </div>
             <!-- /#page-wrapper -->
         </div>
     </div>

		 <div class="navbar navbar-default navbar-fixed-bottom">
		     <div class="container">
		       <p class="navbar-text pull-left">© 2015 - Site Built By Helgi & Kristmann.
		       </p>
		     </div>
		 </div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
