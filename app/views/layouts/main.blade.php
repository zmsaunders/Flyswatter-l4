<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>{{ $title }} - Flyswatter</title>
		<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="/assets/css/flyswatter.css" rel="stylesheet" />
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="/">Flyswatter</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li><a href="/">Dashboard</a></li>
							<li><a href="/issue/new">New Issue</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Nav -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
						@section('nav')
							<li class="nav-header">Projects</li>
							@foreach($projects as $project)
							<li><a href="/project/view/{{$project->id}}">{{$project->name}}</a></li>
							@endforeach
						@show
						</ul>
					</div>
				</div>
				<div class="span10">
					<header class="row-fluid">
						<div class="page-header">
							<h1>
								@section('header')
								Flyswatter
								@show
							</h1>
						</div>
					</header>
					@yield('content')
				</div>
			</div>
		</div>
		<!-- Load JS -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>
