<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Smarty Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="/admin/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="/admin/assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="/admin/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<!-- WRAPPER -->
		<div id="wrapper">

			<!--
				ASIDE
				Keep it outside of #wrapper (responsive purpose)
			-->
			<aside id="aside">
				<!--
					Always open:
					<li class="active alays-open">

					LABELS:
						<span class="label label-danger pull-right">1</span>
						<span class="label label-default pull-right">1</span>
						<span class="label label-warning pull-right">1</span>
						<span class="label label-success pull-right">1</span>
						<span class="label label-info pull-right">1</span>
				-->
				<nav id="sideNav"><!-- MAIN MENU -->
					<ul class="nav nav-list">

						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-bar-chart-o"></i> <span>Admin</span>
							</a>

							<ul><!-- submenus -->

								<li class="">
									<a href="/administrator">
										<i class="fa fa-menu-arrow pull-right"></i>
										Items
									</a>



								</li>
							</ul>
						</li>
						<li class="active">
							<a href="/administrator/create">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-pencil-square-o"></i> <span>Insert</span>
							</a>

						</li>


				</nav>

				<span id="asidebg"><!-- aside fixed background --></span>
			</aside>
			<!-- /ASIDE -->


			<!-- HEADER -->
			<header id="header">

				<!-- Mobile Button -->
				<button id="mobileMenuBtn"></button>

				<!-- Logo -->
				<span class="logo pull-left">
					<img src="/admin/assets/images/logo_light.png" alt="admin panel" width="150" />
				</span>

				<form method="get" action="page-search.html" class="search pull-left hidden-xs">
					<input type="text" class="form-control" name="k" placeholder="Search for something..." />
				</form>

				<nav>

					<!-- OPTIONS LIST -->
					<ul class="nav pull-right">

						<!-- USER OPTIONS -->
						<li class="dropdown pull-left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img class="user-avatar" alt="" src="/admin/assets/images/noavatar.jpg" height="34" />
								<span class="user-name">
									<span class="hidden-xs">
										John Doe <i class="fa fa-angle-down"></i>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu hold-on-click">
								<li><!-- my calendar -->
									<a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
								</li>
								<li><!-- my inbox -->
									<a href="#"><i class="fa fa-envelope"></i> Inbox
										<span class="pull-right label label-default">0</span>
									</a>
								</li>
								<li><!-- settings -->
									<a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
								</li>

								<li class="divider"></li>

								<li><!-- lockscreen -->
									<a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li><!-- logout -->
									<a href="page-login.html"><i class="fa fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
						<!-- /USER OPTIONS -->

					</ul>
					<!-- /OPTIONS LIST -->

				</nav>

			</header>
			<!-- /HEADER -->


			<!--
				MIDDLE
			-->
			<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Form Validate</h1>
					<ol class="breadcrumb">
						<li><a href="#">Forms</a></li>
						<li class="active">Form Validate</li>
					</ol>
				</header>
				<!-- /page title -->


				<div id="content" class="padding-20">

					<div class="row">

						<div class="col-md-12">

							<!-- ------ -->
							<div class="panel panel-default">
								<div class="panel-heading panel-heading-transparent">
									<strong>FORM VALIDATION</strong>
								</div>

								<div class="panel-body">

										<form action="/administrator/store" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!" data-toastr-position="top-right">
											<fieldset>
												<!-- required [php action request] -->

												<div class="row">
													<div class="form-group">
														<div class="col-md-6 col-sm-6">
															<label>Merek *</label>
															<input type="text" name="merek" value="" class="form-control required">
														</div>
														<div class="col-md-6 col-sm-6">
															<label>Harga *e.g Rp XXX.XXX.XXX</label>
															<input type="text" name="harga" value="" class="form-control required">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="form-group">
														<div class="col-md-6 col-sm-6">
															<label>Tipe *</label>
															<input type="text" name="tipe" value="" class="form-control required">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="form-group">
														<div class="col-md-12 col-sm-12">
															<label>Kategori *</label>
															<select name="kategori" class="form-control pointer required">
																<option value="">--- Select ---</option>
																@foreach($ktrr as $ktr)
																<option value="{{$ktr -> kategori}}">{{$ktr -> kategori}}</option>
																@endforeach
															</select>
														</div>
													</div>
												</div>



												<div class="row">
													<div class="form-group">
														<div class="col-md-12 col-sm-12">
															<label>Deskripsi Barang *</label>
															<textarea name="isi" rows="4" class="form-control required"></textarea>
														</div>
													</div>
												</div>


												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>
																Gambar

															</label>

															<!-- custom file upload -->
															<div class="fancy-file-upload fancy-file-primary">
																<i class="fa fa-upload"></i>
																<input type="file" class="form-control" name="file" onchange="jQuery(this).next('input').val(this.value);" />
																<input type="text" class="form-control" placeholder="no file selected" readonly="" />
																<span class="button">Choose File</span>
															</div>
															<small class="text-muted block">Max file size: 10Mb (zip/pdf/jpg/png)</small>

														</div>
													</div>
												</div>

											</fieldset>

											<div class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
													 {{csrf_field()}}
														<span class="block font-lato"</span>
													</button>
												</div>
											</div>

										</form>

								</div>

							</div>
							<!-- /----- -->

						</div>



					</div>

				</div>
			</section>
			<!-- /MIDDLE -->

		</div>




		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/admin/assets/plugins/';</script>

		<script type="text/javascript" src="/admin/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="/admin/assets/js/app.js"></script>

	</body>
</html>
