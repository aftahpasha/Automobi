<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>User Profile</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />



		<!-- THEME CSS -->
		<link href="/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:

		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background

		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click

		BACKGROUND IMAGE [together with .boxed class]
		data-background="/assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">



		<!-- SLIDE TOP -->

		<!-- /SLIDE TOP -->



		<!-- wrapper -->
		<div id="wrapper">

			<!--


							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->

				<!-- /Top Nav -->

			</div>


			<!--
				PAGE HEADER

				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->





			<!-- -->
			<section>
				<div class="container">

					<!-- RIGHT -->

						<ul class="nav nav-tabs nav-top-border nav-dark">
							<li class=" bg-dark "><a style="font-size:31px; color:grey;" href="#info" data-toggle="tab">Personal Info</a></li>

						</ul>

						<div class="tab-content margin-top-20">

							<!-- PERSONAL INFO TAB -->
							<div class="tab-pane fade in active" id="info">
								<form action="/editUser/{{Auth::user()->id}}" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="PUT">
									<div class="form-group">
										<label class="control-label">First Name</label>
										<input type="text" name="nama_depan" value="{{Auth::user()->nama_depan}}" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Last Name</label>
										<input type="text" name="nama_belakang"  value="{{Auth::user()->nama_belakang}}" class="form-control">
									</div>
                  <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" name="name"  value="{{Auth::user()->name}}" class="form-control">
                  </div>
									<div class="form-group">
										<label class="control-label">Phone Number</label>
										<input type="text" name="telfon" value="{{Auth::user()->telfon}}" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Email</label>
										<input type="text" name="email" value="{{Auth::user()->email}}" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">City</label>
										<input type="text" name="kota" value="{{Auth::user()->kota}}" class="form-control">
									</div>
									<div class="form-group">
										<label class="control-label">Alamat</label>
										<textarea class="form-control" name="alamat" rows="3" value="{{Auth::user()->alamat}}">{{Auth::user()->alamat}}</textarea>
									</div>
									<div class="form-group">
										<label class="control-label">Zip Code</label>
										<input type="text" name="kode_pos" value="{{Auth::user()->kode_pos}}" class="form-control">
									</div>
									<div class="margiv-top10">
										<input type="submit" value="Save Changes" class="btn btn-danger">
									  <a href="/home" style="margin:30px;" class="btn btn-success"><i class="fa fa-check"></i> Return to Home </a>
									</div>
								</form>
							</div>
							<!-- /PERSONAL INFO TAB -->

							<!-- AVATAR TAB -->

			<!-- / -->




			<!-- FOOTER -->

			<!-- /FOOTER -->

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->



		<!-- PRELOADER -->



		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/assets/plugins/';</script>
		<script type="text/javascript" src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

		<script type="text/javascript" src="/assets/js/scripts.js"></script>

		<!-- STYLESWITCHER - REMOVE -->
	</body>
</html>
