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
                                <h5 class="text-overflow"><small>IFA Administrator</small> </h5>
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
                            <a href="{{ route('admin') }}" title="Staff"><i class="fa fa-users"></i> <span>
                                    Staff</span> </a>
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

                        <form class="col-12 padded padded-bottom padded-la" method="POST" id="staff-update-form">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Name</label>
                                    <input type="text" name="firstname" class="form-control"
                                        value="{{ $staff->name }}" required />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $staff->email }}" disabled />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                    <label>Status</label><br />
                                    @if ($staff->status == 'active')
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-info">Invitation Sent</span>
                                    @endif
                                </div>
                            </div>
                        </form>

                        <div class="col-12 header">
                            <h3>Policies <button class="btn btn-primary waves-effect waves-light pull-right"
                                    data-toggle="modal" data-target="#addProducts"><i class="fa fa-plus"></i> Add
                                    Policy</button></h3>
                        </div>

                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="assignment-table">
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
                                        @if ($staff->policy->isEmpty())
                                            <tr>
                                                <td colspan="6">Current user has no policies</td>
                                            </tr>
                                        @else
                                            @foreach ($staff->policy as $policyEntry)
                                                <tr id="policy-row-{{ $policyEntry->id }}">
                                                    <td>{{ $policyEntry->code }}</td>
                                                    <td>{{ $policyEntry->plan_reference }}</td>
                                                    <td>{{ $policyEntry->first_name }}, {{ $policyEntry->last_name }}
                                                    </td>
                                                    <td>{{ $policyEntry->investment_house }}</td>
                                                    <td>{{ $policyEntry->last_operation }}</td>
                                                    <td>
                                                        <a href="javascript:void(0);" title="Remove"
                                                            class="text-danger remove-policy"
                                                            data-id="{{ $policyEntry->id }}">Remove</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                            <div class="row padded">
                                <div class="col-6">
                                    <button type="submit" name="submit" class="btn btn-success"
                                        id="save-staff-btn"><i class="fa fa-floppy-o"></i> Save</button>

                                </div>
                                <div class="col-6 text-right padded padded-top">
                                    <a href="#" title="Remove User" class="text-danger"
                                        id="remove-staff-btn"><i class="fa fa-trash"></i> Remove Staff</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addProducts" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                                <tbody id="unassigned-table-body">
                                                    @foreach ($unasignedPolicy as $policy)
                                                        <tr id="policy-unasigned-row-{{ $policy->id }}">
                                                            <td>{{ $policy->code }}</td>
                                                            <td>{{ $policy->plan_reference }}</td>
                                                            <td>{{ $policy->first_name }}, {{ $policy->last_name }}
                                                            </td>
                                                            <td>{{ $policy->investment_house }}</td>
                                                            <td><a href="javascript:void(0);"
                                                                    class="text-site1 assign-policy"
                                                                    data-staff-id="{{ $staff->id }}"
                                                                    data-id="{{ $policy->id }}"
                                                                    title="Add Client"><i class="fa fa-plus"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 padded padded-top">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary pull-right"><i class="fa fa-check"></i>
                                                Done</button>
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
        const staffId = @json($staff->id);
        const staffUpdateUrl = '{{ route('admin.staff.update', $staff->id) }}';
        const staffRemoveUrl = '{{ route('admin.staff.remove', $staff->id) }}';
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script><!-- Tether for Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/waves.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/jquery.core.js') }}"></script>
    <script src="{{ asset('js/jquery.app.js') }}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: true
                //buttons: ['copy', 'excel', 'pdf']
            });

            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');


            $('#save-staff-btn').on('click', function(e) {
                console.log('Url', staffUpdateUrl);


                const form = $('#staff-update-form');


                $.ajax({
                    url: staffUpdateUrl,
                    method: 'PUT',
                    data: form.serialize(),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        window.location.href = '/admin';

                    },
                    error: function(xhr) {
                        console.error(xhr);
                        alert('Failed to update staff.');
                    }
                });
            });

            $('#remove-staff-btn').on('click', function(e) {
                console.log('Url', staffUpdateUrl);

                $.ajax({
                    url: staffRemoveUrl,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        window.location.href = '/admin';

                    },
                    error: function(xhr) {
                        console.error(xhr);
                        alert('Failed to delete staff.');
                    }
                });
            });


            //Todo fix this
            $(document).on('click', '.remove-policy', function(e) {
                //e.preventDefault();

                const id = $(this).data('id');
                const row = $('#policy-row-' + id);


                $.ajax({
                    url: `/admin/policy/remove/${id}`,
                    type: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            row.fadeOut(300, function() {
                                $(this).remove();
                            });
                            table.row.add([
                                response.policy.code,
                                response.policy.plan_reference,
                                response.policy.first_name + ', ' + response.policy
                                .last_name,
                                response.policy.investment_house,
                                '<a href = "javascript:void(0);" class = "text-site1 assign-policy" data-staff-id = "${staffId}" data-id = "${id}"" title = "Add Client" > < i class = "fa fa-plus" > </i></a >'
                            ]).draw();
                        } else {
                            alert('Failed to remove policy.');
                        }
                    },
                    error: function() {
                        alert('Something went wrong.');
                    }
                });
            });

            $(document).on('click', '.assign-policy', function(e) {
                e.preventDefault();

                const id = $(this).data('id');
                const staffId = $(this).data('staff-id');
                const row = $('#policy-unasigned-row-' + id);
                console.log(id, staffId);


                $.ajax({
                    url: `/admin/policy/${id}/${staffId}`,
                    type: 'PUT',
                    data: {
                        _token: '{{ csrf_token() }}'

                    },
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            row.fadeOut(300, function() {
                                $(this).remove();
                            });
                            const newRow = `
                                    <tr id="policy-row-${id}">
                                        <td>${response.policy.code}</td>
                                        <td>${response.policy.plan_reference}</td>
                                        <td>${response.policy.first_name}, ${response.policy.last_name}</td>
                                        <td>${response.policy.investment_house}</td>
                                        <td>${response.policy.last_operation ?? ''}</td>
                                        <td>
                                            <a href="javascript:void(0);" title="Remove"
                                            class="text-danger remove-policy"
                                            data-id="${id}">Remove
                                            </a>
                                        </td>
                                    </tr>
                            `;
                            $('#assignment-table tbody').append(newRow);
                        } else {
                            alert('Failed to asign policy.');
                        }
                    },
                    error: function() {
                        alert('Something went wrong.');
                    }
                });
            });

        });
    </script>

</body>

</html>
