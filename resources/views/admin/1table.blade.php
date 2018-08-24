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
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- PAGE LEVEL STYLES -->
		<link href="assets/css/layout-datatables.css" rel="stylesheet" type="text/css" />

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

				<!-- page title -->
				<header id="page-header">
					<h1>Administrator</h1>
					<ol class="breadcrumb">
						<li><a href="#">Page Admin</a></li>
						<li class="active">Database</li>
					</ol>
				</header>
				<!-- /page title -->


				<div id="content" class="padding-20">

					<!--
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>Tabel Data</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
								<li><a href="#" class="opt panel_close" data-confirm-title="Confirm" data-confirm-message="Are you sure you want to remove this panel?" data-toggle="tooltip" title="Close" data-placement="bottom"><i class="fa fa-times"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>

						<!-- panel content -->
						<div class="panel-body">

							<table class="table table-striped table-bordered table-hover" id="datatable_sample">
								<thead>
									<tr>
										<th class="table-checkbox">
											<input type="checkbox" class="group-checkable" data-set="#datatable_sample .checkboxes"/>
										</th>
										<th>Username</th>
										<th>Email</th>
										<th>Points</th>
										<th>Joined</th>
										<th>Status</th>
									</tr>
								</thead>

								<tbody>
									<tr class="odd gradeX">
										<td>
											<input type="checkbox" class="checkboxes" value="1"/>
										</td>
										<td>
											 shuxer
										</td>
										<td>
											<a href="mailto:shuxer@gmail.com">
											shuxer@gmail.com </a>
										</td>
										<td>
											 120
										</td>
										<td class="center">
											 12 Jan 2012
										</td>
										<td>
											<span class="label label-sm label-success">
											Approved </span>
										</td>
									</tr>

								
								</tbody>
							</table>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						<div class="panel-footer">

<!-- pre code -->
<div class="text-left">
	<a class="btn btn-xs btn-info" href="javascript:;" onclick="jQuery('#pre-0').slideToggle();">Show Code</a>
</div>
<pre id="pre-0" class="text-left noradius text-danger softhide margin-top-10">
<span class="text-success">&lt;!-- HTML DATATABLE --&gt;</span>
&lt;table class="table table-striped table-bordered table-hover" id="datatable_sample"&gt;
	&lt;thead&gt;
		&lt;tr&gt;
			&lt;th class="table-checkbox"&gt;
				&lt;input type="checkbox" class="group-checkable" data-set="#datatable_sample .checkboxes"/&gt;
			&lt;/th&gt;
			&lt;th&gt;Username&lt;/th&gt;
			&lt;th&gt;Email&lt;/th&gt;
			&lt;th&gt;Points&lt;/th&gt;
			&lt;th&gt;Joined&lt;/th&gt;
			&lt;th&gt;Status&lt;/th&gt;
		&lt;/tr&gt;
	&lt;/thead&gt;

	&lt;tbody&gt;
		&lt;tr class="odd gradeX"&gt;
			&lt;td&gt;
				&lt;input type="checkbox" class="checkboxes" value="1"/&gt;
			&lt;/td&gt;
			&lt;td&gt;
				 shuxer
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a href="mailto:shuxer@gmail.com"&gt;
				shuxer@gmail.com &lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;
				 120
			&lt;/td&gt;
			&lt;td class="center"&gt;
				 12 Jan 2012
			&lt;/td&gt;
			&lt;td&gt;
				&lt;span class="label label-sm label-success"&gt;
				Approved &lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
		&lt;tr class="odd gradeX"&gt;
			&lt;td&gt;
				&lt;input type="checkbox" class="checkboxes" value="1"/&gt;
			&lt;/td&gt;
			&lt;td&gt;
				 looper
			&lt;/td&gt;
			&lt;td&gt;
				&lt;a href="mailto:looper90@gmail.com"&gt;
				looper90@gmail.com &lt;/a&gt;
			&lt;/td&gt;
			&lt;td&gt;
				 120
			&lt;/td&gt;
			&lt;td class="center"&gt;
				 12.12.2011
			&lt;/td&gt;
			&lt;td&gt;
				&lt;span class="label label-sm label-warning"&gt;
				Suspended &lt;/span&gt;
			&lt;/td&gt;
		&lt;/tr&gt;
	&lt;/tbody&gt;
&lt;/table&gt;


<span class="text-success">&lt;!-- CSS DATATABLE --&gt;</span>
&lt;link href="assets/css/layout-datatable.css" rel="stylesheet" type="text/css" /&gt;



<span class="text-success">&lt;!-- JS DATATABLE --&gt;</span>
&lt;script type="text/javascript"&gt;
loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
	loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){

		if (jQuery().dataTable) {

			var table = jQuery('#datatable_sample');
			table.dataTable({
				"columns": [{
					"orderable": false
				}, {
					"orderable": true
				}, {
					"orderable": false
				}, {
					"orderable": false
				}, {
					"orderable": true
				}, {
					"orderable": false
				}],
				"lengthMenu": [
					[5, 15, 20, -1],
					[5, 15, 20, "All"] // change per page values here
				],
				// set the initial value
				"pageLength": 5,
				"pagingType": "bootstrap_full_number",
				"language": {
					"lengthMenu": "  _MENU_ records",
					"paginate": {
						"previous":"Prev",
						"next": "Next",
						"last": "Last",
						"first": "First"
					}
				},
				"columnDefs": [{  // set default column settings
					'orderable': false,
					'targets': [0]
				}, {
					"searchable": false,
					"targets": [0]
				}],
				"order": [
					[1, "asc"]
				] // set first column as a default sort by asc
			});

			var tableWrapper = jQuery('#datatable_sample_wrapper');

			table.find('.group-checkable').change(function () {
				var set = jQuery(this).attr("data-set");
				var checked = jQuery(this).is(":checked");
				jQuery(set).each(function () {
					if (checked) {
						jQuery(this).attr("checked", true);
						jQuery(this).parents('tr').addClass("active");
					} else {
						jQuery(this).attr("checked", false);
						jQuery(this).parents('tr').removeClass("active");
					}
				});
				jQuery.uniform.update(set);
			});

			table.on('change', 'tbody tr .checkboxes', function () {
				jQuery(this).parents('tr').toggleClass("active");
			});

			tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown

		}

	});
});
&lt;/script"&gt;
</pre>
<!-- /pre code -->

						</div>
						<!-- /panel footer -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
			<!-- /MIDDLE -->

		</div>




		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>

		<!-- PAGE LEVEL SCRIPTS -->
		<script type="text/javascript">
			loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
				loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){

					if (jQuery().dataTable) {

						var table = jQuery('#datatable_sample');
						table.dataTable({
							"columns": [{
								"orderable": false
							}, {
								"orderable": true
							}, {
								"orderable": false
							}, {
								"orderable": false
							}, {
								"orderable": true
							}, {
								"orderable": false
							}],
							"lengthMenu": [
								[5, 15, 20, -1],
								[5, 15, 20, "All"] // change per page values here
							],
							// set the initial value
							"pageLength": 5,
							"pagingType": "bootstrap_full_number",
							"language": {
								"lengthMenu": "  _MENU_ records",
								"paginate": {
									"previous":"Prev",
									"next": "Next",
									"last": "Last",
									"first": "First"
								}
							},
							"columnDefs": [{  // set default column settings
								'orderable': false,
								'targets': [0]
							}, {
								"searchable": false,
								"targets": [0]
							}],
							"order": [
								[1, "asc"]
							] // set first column as a default sort by asc
						});

						var tableWrapper = jQuery('#datatable_sample_wrapper');

						table.find('.group-checkable').change(function () {
							var set = jQuery(this).attr("data-set");
							var checked = jQuery(this).is(":checked");
							jQuery(set).each(function () {
								if (checked) {
									jQuery(this).attr("checked", true);
									jQuery(this).parents('tr').addClass("active");
								} else {
									jQuery(this).attr("checked", false);
									jQuery(this).parents('tr').removeClass("active");
								}
							});
							jQuery.uniform.update(set);
						});

						table.on('change', 'tbody tr .checkboxes', function () {
							jQuery(this).parents('tr').toggleClass("active");
						});

						tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown

					}

				});
			});
		</script>

	</body>
</html>
