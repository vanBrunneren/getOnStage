<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GetOnStage</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">

		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</head>
	<body>
		<div class="wrapper">
			<div class="container flex-grow">
				<div class="row">
					<a href="/">
						<div class="col-lg-12 header hidden-md hidden-sm hidden-xs">
							<img src="images/header_lg.png">
						</div>
						<div class="col-md-12 header hidden-lg hidden-sm hidden-xs">
							<img src="images/header_md.png">
						</div>
						<div class="col-sm-12 header hidden-lg hidden-md hidden-xs">
							<img src="images/header_sm.png">
						</div>
					</a>
						<div class="col-xs-12 header hidden-lg hidden-md hidden-sm">

							<div class="xs-button">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</div>

							<div class="xs-button-close">
								<i class="fa fa-times close-button" aria-hidden="true"></i>
							</div>

							<a href="/" class="mobile-header">
								<h1 class="header-xs">GetOnStage</h1>
							</a>
						</div>
					
				</div>
				<div class="row content">
					<div class="col-md-3 col-lg-3 hidden-xs col-sm-3">
						@foreach($navigation as $nav)
							@if(!$nav->hidden)
								<div class="row">
									<div class="col-lg-12 {{ Request::is($nav->title) ? 'menu-active' : '' }}">
										<a class="menu-link" href="{{ $nav->route }}"><h4>{{ $nav->name }}</h4></a>
									</div>
								</div>
							@endif
							@if($nav->line)
								<hr>
							@endif
						@endforeach	
					</div>
					<div class="col-md-7 col-lg-7">
						@yield('content')
					</div>
					<div class="col-md-2 col-lg-2 hidden-sm col-xs-12">
						@yield('right-content')
					</div>
				</div>	

				<div class="row mobile-navigation">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								@foreach($navigation as $nav)
									@if(!$nav->hidden)
										<div class="row">
											<div class="col-lg-12 {{ Request::is($nav->title) ? 'menu-active' : '' }}">
												<a class="menu-link" href="{{ $nav->route }}"><h4>{{ $nav->name }}</h4></a> 
											</div>
										</div>
									@endif
									@if($nav->line)
										<hr>
									@endif
								@endforeach	
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="footer hidden-xs container">
				<div class="row">
					<div class="col-sm-3 col-md-3 col-lg-3">
						Home <br>
						BrunnerOnStage <br>
						ArtistOnStage <br>
						Portrait <br>
						Kontakt <br>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						News <br>
						News 1 <br>
						News 2 <br>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						Referenzen / Medien <br>
						RefMed 1 <br>
						RefMed 2 <br>
						RefMed 3 <br>
					</div>
					<div class="col-sm-3 col-md-3 col-lg-3">
						Projekte <br>
						Projekt 1 <br>
						Projekt 2 <br>
						Projekt 3 <br>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('.xs-button').click(function() {
			  	$('.content').hide();
			  	$('.xs-button').hide();
			  	$('.xs-button-close').show();
			  	$('.mobile-navigation').show();
			});

			$('.xs-button-close').click(function() {
			  	$('.content').show();
			  	$('.mobile-navigation').hide();
			  	$('.xs-button').show();
			  	$('.xs-button-close').hide();
			});
		</script>
	</body>
</html>























