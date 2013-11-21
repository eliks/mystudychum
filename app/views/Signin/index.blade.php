<html>
<head>
	<title>StudyChum - Sign in</title>
	<meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keyowrds" content="online learning, online student program, study chum, studychum, find students, students with same course">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('/assets/css/index.css') }}
        {{ HTML::style('/assets/css/index.css') }}
        {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600|Oxygen')}}
        {{ HTML::style('/assets/css/bs.min.css')}}
        {{ HTML::style('/assets/css/app.css')}}
        {{ HTML::style('assets/css/signin.css')}}
        <link rel="shortcut icon" href="http://54.201.66.55/public/assets/img/favicon.ico">
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img class="header-logo" src="assets/img/header_logo.webp" alt="studychum logo">
			<a class="navbar-brand" href="/user">StudyChum</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">

			<ul class="nav navbar-nav">
				<!-- <li class="active"><a href="#">Courses</a></li>
				<li><a href="#">Tutors</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groups <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">School chums</a></li>
						<li><a href="#">Bffs</a></li>
						<li><a href="#">Algebra chums</a></li>
						<li role="presentation" class="divider"></li>
						<li><a href="#">New Language chums</a></li>
					</ul>
				</li>
				<li><a href="#">Resources</a></li>
				<li>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control search-bar" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
    			</li> -->
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="main-body">
		<div class="container">
		    <div class="row">
		        <div class="col-md-3 col-md-offset-4">
		            <div class="account-box">
		                <div class="logo ">
		                    <img src="http://placehold.it/90x38/fff/6E329D&text=LOGO" alt=""/>
		                </div>
		                <div id="signintitle">
		                	Sign in
		                </div>
		                <div>
		                	@if(isset($errors))
		                		{{'The following errors occurred:'}}
		                	@endif
		                </div>
		                <ul>
					      @foreach($errors->all() as $error)
					         <li>{{ $error }}</li>
					      @endforeach
					   </ul>
		                <form class="form-signin" action="signin/submit">
		                <div class="form-group">
		                    <input id="email" name="email" type="text" class="form-control" placeholder="Email" required autofocus />
		                </div>
		                <div class="form-group">
		                    <input id="password" name="password" type="password" class="form-control" placeholder="Password" required />
		                </div>
		                <label class="checkbox">
		                    <input id="remember_me" name="remember_me" type="checkbox" value="remember-me" />
		                    Keep me signed in
		                </label>
		                <button class="btn btn-lg btn-block purple-bg" type="submit">
		                    Sign in</button>
		                </form>
		                <p><a class="forgotLnk" href="#">I can't access account? Retrieve it</a></p>
		                <p><a class="signupLnk" href="signup">Don't have an account? Sign up</a></p>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

	<script src="{{ URL::asset('assets/js/jquery-2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bs.min.js') }}"></script>
	<!-- <script src="{{ URL::asset('assets/js/app.js') }}"></script> -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45749635-1', 'studychumapp.appspot.com');
	  ga('send', 'pageview');

	</script>
	<script>
	 	$(document).ready(function(){
		  $("#chum_request").click(function(){
		    $(this).html("Requested submited");
		  });
		});


	</script>
    <!-- start Dropifi --> <script type='text/javascript' src='https://s3.amazonaws.com/dropifi/js/widget/dropifi_widget.min.js'></script><script type='text/javascript'>document.renderDropifiWidget('70c2f0e75aaee02b1cfef8e927e010c1-1383283917314');</script> <!-- end Dropifi -->
</body>
</html>