<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="Dashboard/img/apple-icon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="Dashboard/img/favicon.png">
    <title>
        Faça Login - BullBaker
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="Dashboard/css/nucleo-icons.css" rel="stylesheet" />
    <link href="Dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <link href="Dashboard/css/style.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="Dashboard/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="Dashboard/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="">

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Bem vindo Administrador</h3>
                                    <p class="mb-0">Para acessar informe seu email e senha.</p>
                                </div>
                                <div class="card-body">


                                    <form role="form" action="{{ route('login') }}" method="POST">

                                         @csrf   

                                        <label>Email</label>

                                        
                                        <div class="mb-3">
                                            <input name="email" type="email" class="form-control" placeholder="Email"
                                                aria-label="Email"
                                                aria-describedby="email-addon"value="{{ old('email') }}">
                                            {{ $errors->has('email') ? $errors->first('email') : '' }}
                                        </div>
                                        <label>senha</label>


                                        <div class="mb-3">
                                            <input name="senha" type="password" class="form-control" placeholder="Senha"
                                                aria-label="Password"
                                                aria-describedby="password-addon"value="{{ old('senha') }}">
                                            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-info w-100 mt-4 mb-0">Entrar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('Dashboard/img/curved-images/foto.jpeg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">

            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="col-lg-8 col-md-8 footer-text m-0">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved by -> <a href="https://shedevs.com.br/"
                            target="_blank">SHEDEVS</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
