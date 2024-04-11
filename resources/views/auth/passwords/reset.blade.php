
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SITE TITLE -->
    <title>Aglae Provost-Fleury | Password Reset- New password Confirmation</title>

    <!-- FAVICON AND TOUCH ICONS -->

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    {{-- <!-- BOOTSTRAP CSS -->
    <link href="/podologue.mu/css/bootstrap.min.css" rel="stylesheet"> --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <!-- TEMPLATE CSS -->
    <link href="/podologue.mu/css/pink-theme.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="/podologue.mu/css/responsive.css" rel="stylesheet">
    <style>
        .reset-page-wrapper form {
            border-radius: 5%;
            font-size: medium !important;
        }
        .input-group-text{
            height: 38px;
        }
        .text-md-end{
            text-align: left!important;
        }
    </style>
</head>
<body>
    <!-- PAGE CONTENT -->
    <div id="page" class="page font--jakarta">
        <!-- RESET PASSWORD PAGE -->
        <section id="reset-password" class="bg--fixed reset-password-section division">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-5">
                        <!-- LOGO -->
                        <div class="login-page-logo">
                           <a href="/"><img class="img-fluid" src="/podologue.mu/images/aglae-logo-dark.webp" alt="logo-image"></a> 
                        </div>
                        <!-- RESET PASSWORD FORM -->
                        <div class="reset-page-wrapper text-center">
                            {{-- @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif --}}
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <!-- Title-->
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="col-md-12">
                                    <div class="reset-form-title">
                                        <h5 class="s-26 w-700">{{ __('Reset Password') }}</h5>
                                    </div>
                                </div>
                                    <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-4 input-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- New Password Field -->
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
                                    <div class="col-md-4 input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <span class="input-group-text">
                                            <i class="fas fa-eye" id="togglePassword" style="font-size: 14px; inline-height:1.1rem"></i>
                                        </span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Confirm Password Field -->
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-4 input-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class="input-group-text">
                                            <i class="fas fa-eye" id="toggleConfirmPassword" style="font-size: 14px;"></i>
                                        </span>
                                    </div>
                                </div>                              
                                <!-- Form Submit Button -->
                                <div>
                                    <button style="background-color:#0d6efd;border-color:#0d6efd" type="submit" class="btn btn-primary btn-sm">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                                <!-- Form Message -->
                                <div class="col-lg-12 reset-form-msg">
                                    <span class="loading"></span>
                                </div>
                            </form>
                        </div><!-- END RESET PASSWORD FORM -->
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </section><!-- END RESET PASSWORD PAGE -->
    </div><!-- END PAGE CONTENT -->
    <!-- EXTERNAL SCRIPTS -->
    <!-- JavaScript to Toggle Password Visibility -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        togglePassword.addEventListener('click', function () {
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPasswordField = document.getElementById('password-confirm');
        toggleConfirmPassword.addEventListener('click', function () {
            const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <script src="/podologue.mu/js/custom.js"></script>
</body>
</html>








