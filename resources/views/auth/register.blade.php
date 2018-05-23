<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register TimeOut</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/icontimeout.png"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--================================================================================= ==============-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Register
					</span>
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="wrap-input100 validate-input m-b-23" >
                            <span class="label-input100">Nama</span>
                            <span class="focus-input100" data-symbol="&#xf206;"></span>
                            <div class="col-lg-6">

                                <input
                                        type="text"
                                        class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name"
                                        placeholder="Nama"
                                        value="{{ old('name') }}"
                                        required
                                >
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif

                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23">
                            <span class="label-input100">Email</span>
                            <span class="focus-input100" data-symbol="&#9993;"></span>
                            <div class="col-lg-6">

                                <input
                                        type="email"
                                        class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email"
                                        placeholder="Email"
                                        value="{{ old('email') }}"
                                        required
                                >

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23">
                            <span class="label-input100">Password</span>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                            <div class="col-lg-6">

                                <input
                                        type="password"
                                        class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        placeholder="Password"
                                        required
                                >
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23">
                            <span class="label-input100">Confirm password</span>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                            <div class="col-lg-6">

                                <input
                                        type="password"
                                        class="input100{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                        name="password_confirmation"
                                        placeholder="Confirm Pass."
                                        required
                                >
                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Register
                                </button>
                            </div>
                        </div>
                        <div class="flex-col-c p-t-50">
						<span class="txt1 p-b-17">
                            Sudah punya akun? &nbsp;
                            <a href="/login" class="txt2">Login</a>
						</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    </body>
</html>
