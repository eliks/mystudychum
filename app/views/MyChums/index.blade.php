<!-- <?php
	//include 'models/database.php';
	//include 'classes/crud.php';

	// Google's user service
	//require_once 'google/appengine/api/users/UserService.php';
	//use google\appengine\api\users\User;
    //use google\appengine\api\users\UserService;

    //$user = UserService::getCurrentUser();

   

?> -->

<html>
<head>
	<title>StudyChum - Your Profile</title>
	<meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keyowrds" content="online learning, online student program, study chum, studychum, find students, students with same course">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600|Oxygen'>
		<link rel="stylesheet" href="assets/css/bs.min.css">
		<link rel="stylesheet" href="assets/css/app.css">
		<link rel="stylesheet" href="assets/css/profile.css">
		<link rel="shortcut icon" href="assets/img/favicon.ico">
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
			<a class="navbar-brand" href="/">StudyChum</a>
			<!-- <img src="header-logo" src="assets/img/header_logo.webp" alt="studychum logo"> -->
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">

			<!-- <ul class="nav navbar-nav"> -->
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
						<button type="submit" class="btn btn-default">Search</button>
					</form>
    			</li> -->
			<!-- </ul> -->


			<ul class="nav navbar-nav navbar-right">
				<!--li><a href="#">Notifications <span class="badge">0</span></a></li>
				<li><a href="#"><img src="assets/img/profile.webp" alt="" class="profile-pic"></a></li-->

				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$user['email']}} <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="/settings">Settings</a></li>
			          <li><a href="/logout">Log out</a></li>
			        </ul>
			      </li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="main-body">
		<div class="side-nav well-lg col-sm-2">
			<ul class="nav nav-pills nav-stacked">

				<li><a href="/chums">Find Chums</a></li>
				<li class="active"><a href="/my_chums">My Chums</a></li>
				<li><a href="/profile">Profile</a></li>
				<li><a href="/forum">Forum</a></li>
				<li><a href="/groups">Groups</a></li>
				<li><a href="/activity">Activity</a></li>

				<!-- <li><a href="#">Calendar</a></li> -->
				<!-- <li><a href="#">Settings</a></li> -->
			</ul>

		</div>
		<div class="col-sm-10">
			<div class="row">
				<h3 class="profile-heading">My Chums</h3>
				
			</div>
		</div>
	</div>

	<script src="{{ URL::asset('assets/js/jquery-2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bs.min.js') }}"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-45749635-1', 'studychumapp.appspot.com');
	  ga('send', 'pageview');

	</script>
	<!-- start Dropifi --> <script type='text/javascript' src='https://s3.amazonaws.com/dropifi/js/widget/dropifi_widget.min.js'></script><script type='text/javascript'>document.renderDropifiWidget('cf7264a283e336148e3ba979479b372e-1373448040847');</script> <!-- end Dropifi -->
</body>
</html>