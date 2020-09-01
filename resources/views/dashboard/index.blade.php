@extends( 'layout.layout' )

@section( 'css' )
	<!-- DATA TABLE CSS -->
	<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
	<!-- END DATA TABLE CSS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')
	<div class="page-content-wrapper">
	    <!-- BEGIN CONTENT BODY -->
	    <div class="page-content">
	        <!-- BEGIN PAGE HEADER-->
	        <!-- BEGIN PAGE BAR -->
	        <div class="page-bar">
	        	<ul class="page-breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Dashboard</a>
                        <i class="fa fa-circle"></i>
                    </li>
                </ul>
	            <div class="page-toolbar">
	                <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
	                    <i class="icon-calendar"></i>&nbsp;
	                    <span class="thin uppercase hidden-xs"></span>&nbsp;
	                    <i class="fa fa-angle-down"></i>
	                </div>
	            </div>
	        </div>
	        <!-- END PAGE BAR -->
	        <!-- BEGIN PAGE TITLE-->
	        <h1 class="page-title"> Homepage</h1>
	        <!-- END PAGE TITLE-->
	        <!-- END PAGE HEADER-->
	        <!-- BEGIN DASHBOARD STATS 1-->
	        <div class="row">
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
	                    <div class="visual">
	                        <i class="fa fa-comments"></i>
	                    </div>
	                    <div class="details">
	                        <div class="number">
	                            <span data-counter="counterup" data-value="1349">0</span>
	                        </div>
	                        <div class="desc"> New Feedbacks </div>
	                    </div>
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
	                    <div class="visual">
	                        <i class="fa fa-bar-chart-o"></i>
	                    </div>
	                    <div class="details">
	                        <div class="number">
	                            <span data-counter="counterup" data-value="12,5">0</span>M$ </div>
	                        <div class="desc"> Total Profit </div>
	                    </div>
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
	                    <div class="visual">
	                        <i class="fa fa-shopping-cart"></i>
	                    </div>
	                    <div class="details">
	                        <div class="number">
	                            <span data-counter="counterup" data-value="549">0</span>
	                        </div>
	                        <div class="desc"> New Orders </div>
	                    </div>
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
	                    <div class="visual">
	                        <i class="fa fa-globe"></i>
	                    </div>
	                    <div class="details">
	                        <div class="number"> +
	                            <span data-counter="counterup" data-value="89"></span>% </div>
	                        <div class="desc"> Brand Popularity </div>
	                    </div>
	                </a>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	        <!-- END DASHBOARD STATS 1-->
	        <div class="row">
	        	<div class="col-md-12">
	                <!-- BEGIN EXAMPLE TABLE PORTLET-->
	                <div class="portlet light bordered">
	                    <div class="portlet-title">
	                        <div class="caption font-dark">
	                            <i class="icon-settings font-dark"></i>
	                            <span class="caption-subject bold uppercase"> Tournament List</span>
	                        </div>
	                    </div>
	                    <div class="portlet-body">
	                        <div class="table-toolbar">
	                            <div class="row">
	                                <div class="col-md-6">
	                                    <div class="btn-group">
	                                        <button id="sample_editable_1_new" class="btn sbold green"> Add New
	                                            <i class="fa fa-plus"></i>
	                                        </button>
	                                    </div>
	                                </div>
	                                <div class="col-md-6">
	                                    <div class="btn-group pull-right">
	                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Tools
	                                            <i class="fa fa-angle-down"></i>
	                                        </button>
	                                        <ul class="dropdown-menu pull-right">
	                                            <li>
	                                                <a href="javascript:;">
	                                                    <i class="fa fa-print"></i> Print </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:;">
	                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
	                                            </li>
	                                            <li>
	                                                <a href="javascript:;">
	                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
	                        	<div class="row">
		                        	<table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
		                            	<thead>
		                                	<tr role="row">
		                                		<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 67px;">
			                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
			                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes">
			                                            <span></span>
			                                        </label>
			                                    </th>
			                                    <th class="sorting_asc"aria-controls="sample_1"> Username </th>
			                                    <th class="sorting" aria-controls="sample_1"> Email </th>
			                                    <th class="sorting" aria-controls="sample_1"> Status </th>
			                                    <th class="sorting" aria-controls="sample_1"> Joined </th>
			                                    <th class="sorting" aria-controls="sample_1"> Actions </th>
			                                </tr>
		                            	</thead>
			                            <tbody>
			                                
				                            <tr class="gradeX odd" role="row">
			                                    <td>
			                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
			                                            <input type="checkbox" class="checkboxes" value="1">
			                                            <span></span>
			                                        </label>
			                                    </td>
			                                    <td class="sorting_1"> coop </td>
			                                    <td>
			                                        <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
			                                    </td>
			                                    <td>
			                                        <span class="label label-sm label-info"> Info </span>
			                                    </td>
			                                    <td class="center"> 12.12.2011 </td>
			                                    <td>
			                                        <div class="btn-group">
			                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
			                                                <i class="fa fa-angle-down"></i>
			                                            </button>
			                                            <ul class="dropdown-menu" role="menu">
			                                                <li>
			                                                    <a href="javascript:;">
			                                                        <i class="icon-docs"></i> New Post </a>
			                                                </li>
			                                                <li>
			                                                    <a href="javascript:;">
			                                                        <i class="icon-tag"></i> New Comment </a>
			                                                </li>
			                                                <li>
			                                                    <a href="javascript:;">
			                                                        <i class="icon-user"></i> New User </a>
			                                                </li>
			                                                <li class="divider"> </li>
			                                                <li>
			                                                    <a href="javascript:;">
			                                                        <i class="icon-flag"></i> Comments
			                                                        <span class="badge badge-success">4</span>
			                                                    </a>
			                                                </li>
			                                            </ul>
			                                        </div>
			                                    </td>
			                                </tr>

				                        </tbody>
			                        </table>
		                    	</div>
		                    </div>
	                    </div>
	                </div>
	                <!-- END EXAMPLE TABLE PORTLET-->
	            </div>
	        </div>
	    </div>
	    <!-- END CONTENT BODY -->
	</div>
@endsection


@section( 'script' )
	<!-- DATA TABLE JS -->
	<script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
	<!-- END DATA TABLE JS -->


    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
@endsection