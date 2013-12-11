

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
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->email}} <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="settings">Settings</a></li>
			          <li><a href="logout">Log out</a></li>
			        </ul>
			      </li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div class="main-body">
		<div class="side-nav well-lg col-sm-2">
			<ul class="nav nav-pills nav-stacked">

<<<<<<< HEAD
				<li><a href="/chums">Find Chums</a></li>
				<li><a href="/my_chums">My Chums</a></li>
				<li><a href="/profile">Profile</a></li>
				<li class="active"><a href="/forums">Forum</a></li>
				<li><a href="/groups">Groups</a></li>
				<li><a href="/activity">Activity</a></li>
=======
				<li><a href="chums">Find Chums</a></li>
				<li><a href="my_chums">My Chums</a></li>
				<li><a href="profile">Profile</a></li>
				<li class="active"><a href="forum">Forum</a></li>
				<li><a href="groups">Groups</a></li>
				<li><a href="activity">Activity</a></li>
>>>>>>> de55b372676b97fb722d72cec5bd0c9edc8c4a9f

				<!-- <li><a href="#">Calendar</a></li> -->
				<!-- <li><a href="#">Settings</a></li> -->
			</ul>

		</div>
		<div class="col-sm-10">
			<div class="row">
				<h3 class="profile-heading">StudyChum Forums</h3>
				<p><a class="press orange" href="forums/create/">Start a Discussion</a></p>
				<br>

				<table class="table">
					<thead>
						<tr>
							<th>Category</th>
							<th>Number of Topics</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{ ucfirst($category['name']) }}</td>
								<td>{{ $category['topics'] }} topics</td>
								
								<!-- we will also add show, edit, and delete buttons -->
								<td>

									<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
									<!-- we will add this later since its a little more complicated than the other two buttons -->

									<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
									<a class="btn btn-small btn-success" href="{{ URL::to('forums/category/' . $category['id']) }}">View this Category</a>


								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				
				
			</div>
		</div>
	</div>

	<script src="{{ URL::asset('assets/js/jquery-2.0.3.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/bs.min.js') }}"></script>
	<script>
		window.scrollback = {
		  streams:["StudyChum"],
		  theme: 'white'
		};

		/* DON'T EDIT: */(function(d,s,h,e){e=d.createElement(s);
		e.src=h+'/client.min.js';e.async=1;scrollback.host=h;
		d.getElementsByTagName(s)[0].parentNode.appendChild(e);}
		(document,'script',location.protocol+'//scrollback.io'));
		</script>
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