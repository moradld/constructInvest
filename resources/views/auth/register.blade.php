<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construct Invest - Construction Management Software">
    <meta name="author" content="Lender Direct">
    <meta name="keywords" content="lunder direct, construction management software, project management, contractor management, payment processing, draw requests, construction scheduling, construction budgeting, construction analytics">
     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="">
     <!-- Main Theme Js -->
     <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
     <!-- TITLE -->
     <title>{{ __('Construct Invest - Register') }}</title>
     <!-- BOOTSTRAP CSS -->
     <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- STYLE CSS -->
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
     <!--- FONT-ICONS CSS -->
     <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
     <style>

     </style>
</head>
<body class="app sidebar-mini auth-page">
    <div class="container-fluid min-vh-100 p-0">
        <div class="row min-vh-100 g-0">
            <!-- LEFT IMAGE SECTION -->
            <div class="col-lg-7 d-none d-lg-block position-relative auth-hero overflow-hidden">
                <img src="{{ asset('assets/image/login/backgroung-img.png') }}" alt="" class="auth-hero__bg">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: .15;"></div>

                <div class="position-absolute top-0 start-0 p-4 p-xl-5">
                    <img src="{{ asset('assets/image/login/Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 260px; margin-left: 50px; margin-top:20px">
                </div>

                <div class="position-absolute bottom-0 start-0 p-4 p-xl-5 text-white" style="max-width: 460px;">
                    <img src="{{ asset('assets/image/login/footer-logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 320px; margin-left: 50px; margin-bottom: 50px;">
                </div>
            </div>
            <!-- RIGHT REGISTER SECTION -->
            <div class="col-lg-5 d-flex align-items-center justify-content-center bg-white">
                <div class="w-100 px-4 px-md-5" style="max-width: 420px;">
                    <div class="mb-4 text-center">
                        <h3 class="fw-bold mb-1">{{ __('Create Your Account') }}</h3>
                        <p class="text-muted mb-0">{{ __('Get started in minutes') }}</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label auth-label text-muted">{{ __('Full Name') }}</label>
                            <div class="position-relative">
                                <span class="position-absolute top-50 translate-middle-y auth-field-icon-left text-muted auth-input-icon pe-none">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="form-control auth-control @error('name') is-invalid @enderror"
                                    placeholder="Your name"
                                    autofocus
                                    autocomplete="name"
                                >
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label auth-label text-muted">{{ __('Email Address') }}</label>
                            <div class="position-relative">
                                <span class="position-absolute top-50 translate-middle-y auth-field-icon-left text-muted auth-input-icon pe-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20" fill="none">
                                        <path d="M22.5 0H2.5C1.125 0 0.0125 1.125 0.0125 2.5L0 17.5C0 18.875 1.125 20 2.5 20H22.5C23.875 20 25 18.875 25 17.5V2.5C25 1.125 23.875 0 22.5 0ZM22.5 5L12.5 11.25L2.5 5V2.5L12.5 8.75L22.5 2.5V5Z" fill="#9CA3AF"/>
                                    </svg>
                                </span>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control auth-control @error('email') is-invalid @enderror"
                                    placeholder="yourname@company.com"
                                    autocomplete="username"
                                >
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label auth-label text-muted">{{ __('Password') }}</label>
                            <div class="position-relative">
                                <span class="position-absolute top-50 translate-middle-y auth-field-icon-left text-muted auth-input-icon pe-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                                     <path d="M2.5 26.25C1.8125 26.25 1.22417 26.0054 0.735 25.5163C0.245833 25.0271 0.000833333 24.4383 0 23.75V11.25C0 10.5625 0.245 9.97417 0.735 9.485C1.225 8.99583 1.81333 8.75083 2.5 8.75H3.75V6.25C3.75 4.52083 4.35958 3.04708 5.57875 1.82875C6.79792 0.610418 8.27167 0.000834187 10 8.53242e-07C11.7283 -0.00083248 13.2025 0.608751 14.4225 1.82875C15.6425 3.04875 16.2517 4.5225 16.25 6.25V8.75H17.5C18.1875 8.75 18.7763 8.995 19.2663 9.485C19.7563 9.975 20.0008 10.5633 20 11.25V23.75C20 24.4375 19.7554 25.0263 19.2663 25.5163C18.7771 26.0063 18.1883 26.2508 17.5 26.25H2.5ZM11.7663 19.2663C12.2554 18.7763 12.5 18.1875 12.5 17.5C12.5 16.8125 12.2554 16.2242 11.7663 15.735C11.2771 15.2458 10.6883 15.0008 10 15C9.31167 14.9992 8.72333 15.2442 8.235 15.735C7.74667 16.2258 7.50167 16.8142 7.5 17.5C7.49833 18.1858 7.74333 18.7746 8.235 19.2663C8.72667 19.7579 9.315 20.0025 10 20C10.685 19.9975 11.2738 19.7529 11.7663 19.2663ZM6.25 8.75H13.75V6.25C13.75 5.20833 13.3854 4.32292 12.6562 3.59375C11.9271 2.86458 11.0417 2.5 10 2.5C8.95833 2.5 8.07292 2.86458 7.34375 3.59375C6.61458 4.32292 6.25 5.20833 6.25 6.25V8.75Z" fill="#9CA3AF"/>
                                    </svg>
                                </span>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    class="form-control auth-control auth-control--toggle @error('password') is-invalid @enderror"
                                    placeholder="********"
                                    autocomplete="new-password"
                                >
                                <button
                                    type="button"
                                    class="btn btn-link position-absolute top-50 translate-middle-y auth-field-icon-right text-muted p-0"
                                    aria-label="Toggle password visibility"
                                    onclick="(function(){var i=document.getElementById('password'); if(!i) return; var open=document.getElementById('password_eye_open'); var closed=document.getElementById('password_eye_closed'); var show=(i.type==='password'); i.type = show ? 'text' : 'password'; if(open && closed){ open.classList.toggle('d-none', !show); closed.classList.toggle('d-none', show); }})();"
                                >
                                    <i id="password_eye_closed" class="bi bi-eye-slash auth-toggle-icon"></i>
                                    <i id="password_eye_open" class="bi bi-eye auth-toggle-icon d-none"></i>
                                </button>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label auth-label text-muted">Confirm Password</label>
                            <div class="position-relative">
                                <span class="position-absolute top-50 translate-middle-y auth-field-icon-left text-muted auth-input-icon pe-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 20 27" fill="none">
                                     <path d="M2.5 26.25C1.8125 26.25 1.22417 26.0054 0.735 25.5163C0.245833 25.0271 0.000833333 24.4383 0 23.75V11.25C0 10.5625 0.245 9.97417 0.735 9.485C1.225 8.99583 1.81333 8.75083 2.5 8.75H3.75V6.25C3.75 4.52083 4.35958 3.04708 5.57875 1.82875C6.79792 0.610418 8.27167 0.000834187 10 8.53242e-07C11.7283 -0.00083248 13.2025 0.608751 14.4225 1.82875C15.6425 3.04875 16.2517 4.5225 16.25 6.25V8.75H17.5C18.1875 8.75 18.7763 8.995 19.2663 9.485C19.7563 9.975 20.0008 10.5633 20 11.25V23.75C20 24.4375 19.7554 25.0263 19.2663 25.5163C18.7771 26.0063 18.1883 26.2508 17.5 26.25H2.5ZM11.7663 19.2663C12.2554 18.7763 12.5 18.1875 12.5 17.5C12.5 16.8125 12.2554 16.2242 11.7663 15.735C11.2771 15.2458 10.6883 15.0008 10 15C9.31167 14.9992 8.72333 15.2442 8.235 15.735C7.74667 16.2258 7.50167 16.8142 7.5 17.5C7.49833 18.1858 7.74333 18.7746 8.235 19.2663C8.72667 19.7579 9.315 20.0025 10 20C10.685 19.9975 11.2738 19.7529 11.7663 19.2663ZM6.25 8.75H13.75V6.25C13.75 5.20833 13.3854 4.32292 12.6562 3.59375C11.9271 2.86458 11.0417 2.5 10 2.5C8.95833 2.5 8.07292 2.86458 7.34375 3.59375C6.61458 4.32292 6.25 5.20833 6.25 6.25V8.75Z" fill="#9CA3AF"/>
                                    </svg>
                                </span>
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control auth-control auth-control--toggle @error('password_confirmation') is-invalid @enderror"
                                    placeholder="********"
                                    autocomplete="new-password"
                                >
                                <button
                                    type="button"
                                    class="btn btn-link position-absolute top-50 translate-middle-y auth-field-icon-right text-muted p-0"
                                    aria-label="Toggle confirm password visibility"
                                    onclick="(function(){var i=document.getElementById('password_confirmation'); if(!i) return; var open=document.getElementById('password_confirmation_eye_open'); var closed=document.getElementById('password_confirmation_eye_closed'); var show=(i.type==='password'); i.type = show ? 'text' : 'password'; if(open && closed){ open.classList.toggle('d-none', !show); closed.classList.toggle('d-none', show); }})();"
                                >
                                    <i id="password_confirmation_eye_closed" class="bi bi-eye-slash auth-toggle-icon"></i>
                                    <i id="password_confirmation_eye_open" class="bi bi-eye auth-toggle-icon d-none"></i>
                                </button>
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Terms -->
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="1" id="terms">
                            <label class="form-check-label small text-muted" for="terms">
                                {{ __('I agree to the') }} <a href="#" class="text-decoration-none">{{ __('Terms of Service') }}</a> {{ __('and') }} <a href="#" class="text-decoration-none">{{ __('Privacy Policy') }}</a>
                            </label>
                        </div>

                        <!-- Create Account Button -->
                        <button type="submit" class="btn btn-success w-100 py-2">{{ __('Create Account') }}</button>

                        <p class="text-center mt-4 small text-muted">
                            {{ __('Already have an account?') }}
                            <a href="{{ route('login') }}" class="fw-bold text-decoration-none text-primary">{{ __('Sign in') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom-Switcher JS -->
    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>