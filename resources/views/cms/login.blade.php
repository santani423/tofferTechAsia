<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Toffel Tech Asia</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/faficon.png') }}">

    <!-- App css -->
    <link href="{{ asset('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body class="bg-light">

    <!-- Wrapper -->
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <a href="/" class="logo logo-admin">
                            <img src="{{ asset('assets/images/logo/faficon.png') }}" height="40" alt="logo">
                        </a>
                    </div>

                    <form id="loginForm" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="email" id="email" name="email" required placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="password" id="password" name="password" required placeholder="Password">
                        </div>

                        <div id="error-message" class="text-danger mb-2" style="display:none;"></div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                Log In
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="{{ asset('template/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#loginForm').on('submit', function (e) {
                e.preventDefault();

                let email = $('#email').val();
                let password = $('#password').val();

                $.ajax({
                    url: "/api/login",
                    method: "POST",
                    data: {
                        email: email,
                        password: password
                    },
                    success: function (response) {
                        // Simpan token ke localStorage
                        localStorage.setItem("auth_token", response.token);

                        alert("Login berhasil, Selamat datang " + response.user.name);

                        // Redirect ke dashboard
                        window.location.href = "/cms/dashboard";
                    },
                    error: function (xhr) {
                        let errorMessage = xhr.responseJSON?.message || "Login gagal, periksa kembali data anda.";
                        $('#error-message').text(errorMessage).show();
                    }
                });
            });
        });
    </script>

    <!-- App js -->
    <script src="{{ asset('template/assets/js/app.js') }}"></script>
</body>
</html>
