<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <title>Staff</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('js/modernizr.min.js') }}"></script>

</head>


<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>Logo</span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras navbar-topbar">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar.jpg" alt="user" class="rounded-circle">
                                <h5 class="text-overflow"><small>IFA Staff</small> </h5>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                </div> <!-- end menu-extras -->
                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->


        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="active">
                            <a href="{{ route('staff', Auth::user()->id) }}" title="Dashboard"><i
                                    class="zmdi zmdi-view-dashboard"></i>
                                <span> Dashboard </span> </a>
                        </li>
                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12" style="padding-bottom: 20px;">

                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <div class="header">
                            <h3>View Policy</h3>
                        </div>

                        <div class="col-12 padded padded-bottom padded-la">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Code</label>
                                    <input type="text" name="firstname" class="form-control" disabled
                                        value="{{ $policy->code }}" />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Last Name</label>
                                    <input type="text" name="firstname" class="form-control" disabled
                                        value="{{ $policy->plan_reference }}" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Investment</label>
                                    <input type="text" name="firstname" class="form-control" disabled
                                        value="{{ $policy->investment_house }}" />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Last Operation</label>
                                    <input type="text" name="firstname" class="form-control" disabled
                                        value="{{ $policy->last_operation }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row padded">
                            <div class="col-6 padded padded-top">
                                <a href="{{ route('staff', Auth::user()->id) }}" title="Go back"
                                    class="btn btn-success"> <- Back to dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->


        </div>
        <!-- end row -->


    </div> <!-- container -->


    <!-- Footer -->
    <footer class="footer">
        &copy; 2017. All Righs Reserved.
    </footer>
    <!-- End Footer -->

    </div> <!-- End wrapper -->




    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('js/jquery.core.js') }}"></script>
    <script src="{{ asset('js/jquery.app.js') }}"></script>

</body>

</html>
