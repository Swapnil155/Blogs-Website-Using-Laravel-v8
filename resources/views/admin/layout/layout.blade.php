<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Admin | @yield('page_title')</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin_asset/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin_asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('admin_asset/vendors/iCheck/skins/flat/green.css ')}}" rel="stylesheet">
    <!-- Datatables -->
    
    <link href="{{ asset('admin_asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('admin_asset/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('admin_asset/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('admin_asset/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{ asset('admin_asset/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css ')}}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
	<link href="{{ asset('admin_asset/vendors/google-code-prettify/bin/prettify.min.css ')}}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{ asset('admin_asset/vendors/select2/dist/css/select2.min.css ')}}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('admin_asset/vendors/switchery/dist/switchery.min.css ')}}" rel="stylesheet">
	<!-- Switchery -->
	<!-- starrr -->
	<link href="{{ asset('admin_asset/vendors/starrr/dist/starrr.css ')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css ')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('admin_asset/vendors/jqvmap/dist/jqvmap.min.css ')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.css ')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_asset/css/custom.min.css ')}}" rel="stylesheet">
    </head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{@config('constant.site_name')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('admin_asset/images/img.jpg ')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{session('BLOG_User_Name')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{url('/admin/post/list')}}"><i class="fa fa-home"></i> Post <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{url('/admin/page/list')}}"><i class="fa fa-home"></i> Page <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href="{{url('/admin/contact/list')}}"><i class="fa fa-home"></i> Contact us <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin_asset/images/img.jpg ')}}" alt="">{{session('BLOG_User_Name')}}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{ url('/admin/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          @section('container')
          @show
          <!-- /top tiles -->
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <!-- jQuery -->
    <script src="{{ asset('admin_asset/vendors/jquery/dist/jquery.min.js ')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin_asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js ')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admin_asset/vendors/fastclick/lib/fastclick.js ')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admin_asset/vendors/nprogress/nprogress.js ')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('admin_asset/vendors/Chart.js/dist/Chart.min.js ')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('admin_asset/vendors/gauge.js/dist/gauge.min.js ')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('admin_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js ')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('admin_asset/vendors/iCheck/icheck.min.js ')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('admin_asset/vendors/skycons/skycons.js ')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('admin_asset/vendors/Flot/jquery.flot.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/Flot/jquery.flot.pie.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/Flot/jquery.flot.time.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/Flot/jquery.flot.stack.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/Flot/jquery.flot.resize.js ')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('admin_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/flot-spline/js/jquery.flot.spline.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/flot.curvedlines/curvedLines.js ')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('admin_asset/vendors/DateJS/build/date.js ')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin_asset/vendors/jqvmap/dist/jquery.vmap.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js ')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('admin_asset/vendors/moment/min/moment.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.js ')}}"></script>

    <!-- Datatables -->
    <script src="{{ asset('admin_asset/vendors/datatables.net/js/jquery.dataTables.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-buttons/js/dataTables.buttons.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-buttons/js/buttons.flash.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-buttons/js/buttons.html5.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-buttons/js/buttons.print.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-responsive/js/dataTables.responsive.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/datatables.net-scroller/js/dataTables.scroller.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/jszip/dist/jszip.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/pdfmake/build/pdfmake.min.js ')}}"></script>
    <script src="{{ asset('admin_asset/vendors/pdfmake/build/vfs_fonts.js ')}}"></script>

    <!-- bootstrap-wysiwyg -->
	<script src="{{ asset('admin_asset/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js ')}}"></script>
	<script src="{{ asset('admin_asset/vendors/jquery.hotkeys/jquery.hotkeys.js ')}}"></script>
	<script src="{{ asset('admin_asset/vendors/google-code-prettify/src/prettify.js ')}}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{ asset('admin_asset/vendors/jquery.tagsinput/src/jquery.tagsinput.js ')}}"></script>
	<!-- Switchery -->
	<script src="{{ asset('admin_asset/vendors/switchery/dist/switchery.min.js ')}}"></script>
	<!-- Select2 -->
	<script src="{{ asset('admin_asset/vendors/select2/dist/js/select2.full.min.js ')}}"></script>
	<!-- Parsley -->
	<script src="{{ asset('admin_asset/vendors/parsleyjs/dist/parsley.min.js ')}}"></script>
	<!-- Autosize -->
	<script src="{{ asset('admin_asset/vendors/autosize/dist/autosize.min.js ')}}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{ asset('admin_asset/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js ')}}"></script>
	<!-- starrr -->
	<script src="{{ asset('admin_asset/vendors/starrr/dist/starrr.js ')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('admin_asset/js/custom.min.js ')}}"></script>
	
  </body>
</html>