<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- App title -->
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="{{ asset('js/modernizr.min.js') }}"></script>


</head>


<body>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="wrapper-page">
            <div class="account-bg">
                <div class="card-box mb-0">
                    <div class="p-20">
                        <div class="text-center">
                            <h4 class="text-muted">Sign In</h4>
                        </div>

                        {{-- Show validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Login form --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                    class="form-control" required autofocus>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control"
                                    required>
                            </div>

                            <div class="form-group">
                                <div class="checkbox checkbox-custom">
                                    <input id="remember" name="remember" type="checkbox">
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-success btn-block" type="submit">Log In</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/jquery.core.js') }}"></script>
        <script src="{{ asset('js/jquery.app.js') }}"></script>

</body>

</html>
