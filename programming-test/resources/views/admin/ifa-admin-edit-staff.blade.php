<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Staff</title>

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

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
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar.jpg" alt="user" class="rounded-circle"> <h5 class="text-overflow"><small>IFA Administrator</small> </h5>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
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
                                <a href="ifa-admin-all-staff.html" title="Staff"><i class="fa fa-users"></i> <span> Staff</span> </a>
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
                                <h3>Edit Staff</h3>
                            </div>

                            <form class="col-12 padded padded-bottom padded-la">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Name</label>
                                        <input type="text" name="firstname" class="form-control" value="Client Name" required/>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="example@email.com" disabled/>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Status</label><br/>
                                        <span class="label label-info">Invitation Sent</span>
                                    </div>
                                </div>
                            </form>

                            <div class="col-12 header">
                                <h3>Policies <button class="btn btn-primary waves-effect waves-light pull-right" data-toggle="modal" data-target="#addProducts"><i class="fa fa-plus"></i> Add Policy</button></h3>
                            </div>

                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Policy</th>
                                                <th>Plan Reference</th>
                                                <th>Member Name</th>
                                                <th>Investment House</th>
                                                <th>Last Operation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12345678</td>
                                                <td>The Calpe RBS No. 247</td>
                                                <td>Withrod, Martin Terence</td>
                                                <td>Old Mutual International</td>
                                                <td>27/07/2017</td>
                                                <td>
                                                    <a href="#" title="Remove" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row padded">
                                    <div class="col-6">
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                                        
                                    </div>
                                    <div class="col-6 text-right padded padded-top">
                                        <a href="#" title="Remove User" class="text-danger"><i class="fa fa-trash"></i> Remove Staff</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addProducts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Available Policies</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Policy</th>
                                                            <th>Plan Reference</th>
                                                            <th>Member Name</th>
                                                            <th>Investment House</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12345678</td>
                                                            <td>The Calpe RBS No. 247</td>
                                                            <td>Withrod, Martin Terence</td>
                                                            <td>Old Mutual International</td>
                                                            <td><a title="Add Client" class="text-site1"><i class="fa fa-plus"></i></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12 padded padded-top">
                                                <button type="submit" name="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> Done</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

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
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false
                    //buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            });    

        </script>

    </body>
</html>