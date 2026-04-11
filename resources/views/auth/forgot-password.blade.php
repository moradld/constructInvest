{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

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
     <title>{{ __('Construct Invest - Login') }}</title>
     <!-- BOOTSTRAP CSS -->
     <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- STYLE CSS -->
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
     <!-- STYLE CSS -->
     <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
     <!--- FONT-ICONS CSS -->
     <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

     <style>
        .auth-forgot-icon {
            font-size: 2rem;
            line-height: 1;
            display: inline-flex;
        }
        .auth-label {
            font-size: .75rem;
        }
        .auth-input-icon {
            width: 1.25rem;
            height: 1.25rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .auth-input-icon svg {
            width: 18px;
            height: 18px;
            display: block;
        }
        .auth-field-icon-left {
            left: 1rem;
        }
        .auth-control {
            padding-left: 3rem;
            padding-right: 1rem;
        }
        /* Stop Bootstrap validation background icons (the red ! inside inputs) */
        .auth-page .form-control.is-invalid,
        .auth-page .form-control.is-valid,
        .auth-page .was-validated .form-control:invalid,
        .auth-page .was-validated .form-control:valid {
            background-image: none !important;
        }
        .auth-page .form-control.is-invalid,
        .auth-page .form-control.is-valid,
        .auth-page .was-validated .form-control:invalid,
        .auth-page .was-validated .form-control:valid {
            padding-right: 1rem !important;
        }
     </style>
</head>
<body class="app sidebar-mini auth-page">
    <div class="container-fluid min-vh-100 p-0">
        <div class="row min-vh-100 g-0">
            <!-- LEFT IMAGE SECTION -->
            <div class="col-lg-7 d-none d-lg-block position-relative auth-hero overflow-hidden">
                <img src="{{ asset('assets/image/login/forgot-password.png') }}" alt="" class="auth-hero__bg">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: .15;"></div>
                <div class="position-absolute bottom-0 start-0 p-4 p-xl-5 text-white" style="max-width: 460px;">
                    <img src="{{ asset('assets/image/login/Logo.png') }}" alt="Logo" class="img-fluid" style="max-width: 320px; margin-left: 50px; margin-bottom: 50px;">
                </div>
            </div>
            <!-- RIGHT FORM SECTION -->
            <div class="col-lg-5 d-flex align-items-center justify-content-center bg-light">
                <div class="w-100 px-4 px-md-5" style="max-width: 420px;">
                    <div class="mb-4 text-center">
                        <div class="mb-3 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="44" viewBox="0 0 50 44" fill="none">
                                <path d="M24.9352 22.8773C27.9922 19.8452 30.9039 16.9937 33.7762 14.1048C37.4828 10.3692 41.1562 6.61692 44.8461 2.87297C45.1016 2.59816 45.3793 2.3448 45.6763 2.11547C46.4898 1.52607 47.2328 1.51777 48.0546 2.08226C48.3566 2.30467 48.6443 2.54589 48.9159 2.80449C50.2981 4.0497 50.3687 4.83834 49.0716 6.16241C46.2989 9.0015 43.493 11.8095 40.6809 14.6174C36.4721 18.8304 32.257 23.0385 28.0358 27.2418C27.5045 27.771 26.9566 28.2795 26.3755 28.7651C25.2735 29.6741 24.5907 29.6866 23.5509 28.7319C22.3265 27.6071 21.1684 26.4096 19.9751 25.2515C18.7423 24.0561 17.4847 22.8939 16.2685 21.6757C15.0233 20.4139 15.0586 19.453 16.3661 18.2617C16.642 18.007 16.9376 17.7746 17.2502 17.5665C18.2007 16.9439 18.6759 16.9273 19.5476 17.7159C20.9381 18.9736 22.2621 20.308 23.6132 21.6114C24.0428 22.0161 24.4599 22.4145 24.9352 22.8773Z" fill="#35AE83"/>
                                <path d="M23.752 6.09518C18.1755 9.83082 11.993 11.6986 5.35603 12.1988C4.98869 14.4464 5.35603 16.5072 5.69639 18.5556C5.9143 19.8755 6.31899 21.1602 6.55766 22.478C6.62657 22.8325 6.61993 23.1975 6.53817 23.5492C6.45641 23.9009 6.30137 24.2315 6.08318 24.5192C5.86499 24.8069 5.58856 25.0454 5.27193 25.219C4.95531 25.3926 4.60562 25.4975 4.24571 25.5267C2.91956 25.6762 2.1247 25.2279 1.72831 23.8353C1.2157 22.0401 0.667802 20.218 0.468568 18.3709C0.165566 15.565 0.146888 12.7114 0.00368879 9.87856C-0.0793254 8.19544 1.2489 7.01664 2.9673 7.10381C7.14291 7.31134 11.1587 6.39196 15.0542 4.94544C17.6276 3.99077 20.035 2.71443 22.1228 0.900571C23.5009 -0.290683 23.9408 -0.290683 25.3064 0.844537C27.6375 2.73946 30.2055 4.32246 32.9458 5.55352C33.5825 5.83324 34.1972 6.1607 34.7846 6.53308C35.6043 7.07683 35.789 7.67038 35.1996 8.42996C34.5961 9.23929 33.8516 9.93318 33.0018 10.4783C32.5868 10.7336 31.7276 10.5821 31.215 10.3248C29.4447 9.43858 27.7346 8.43203 26.012 7.45454C25.2608 7.03324 24.5406 6.57252 23.752 6.09518Z" fill="#0F2231"/>
                                <path d="M47.5295 17.0511C46.9713 26.3529 42.723 33.93 34.9321 39.5418C32.704 41.1348 30.2575 42.3979 27.6684 43.2919C26.2468 43.79 25.3855 43.2546 25.2029 41.7831C25.1717 41.5175 25.2029 41.2456 25.1634 40.98C24.9372 39.4193 25.6242 38.5186 27.0603 37.8919C30.6341 36.3333 33.8322 34.2102 36.3994 31.2258C39.5373 27.5919 41.4487 23.4142 41.9448 18.6326C42.0444 17.6654 42.3245 16.8727 43.0468 16.2314C44.0077 15.3805 44.9021 14.4403 45.9294 13.6808C46.853 13.0001 47.4092 13.3238 47.5026 14.4881C47.5793 15.2352 47.5295 15.9803 47.5295 17.0511Z" fill="#0F2231"/>
                                <path d="M22.3891 40.6051C22.3732 40.9201 22.3351 41.2336 22.2749 41.5432C21.9408 42.9254 20.9695 43.5293 19.633 42.9959C18.0308 42.3875 16.4762 41.6605 14.9821 40.821C11.4503 38.7537 8.37369 35.9926 5.93774 32.7043C5.6804 32.3639 5.46041 31.9924 5.22174 31.6354C4.6863 30.8427 4.34802 30.0353 4.88346 29.0911C5.47286 28.0534 6.41507 27.5947 7.53369 27.5449C8.00828 27.5684 8.46502 27.7332 8.84531 28.0181C9.24007 28.2998 9.57453 28.6575 9.82903 29.0703C12.5062 33.2418 16.3498 35.9584 20.7973 37.9425C22.1214 38.5298 22.3808 38.9926 22.3891 40.6051Z" fill="#0F2231"/>
                            </svg>
                        </div>
                        <h3 class="fw-bold mb-1">Forgot password?</h3>
                        <p class="text-muted mb-0 small">No worries, we'll send you reset instructions.</p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label auth-label text-muted">Email</label>
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
                                    placeholder="Enter your email"
                                    autocomplete="username"
                                    required
                                    autofocus
                                >
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Reset Password Button -->
                        <button type="submit" class="btn btn-success w-100 py-2">Reset Password</button>

                        <div class="text-center mt-3">
                            <a href="{{ route('login') }}" class="small text-muted text-decoration-none">
                                <i class="bi bi-arrow-left"></i>
                                <span class="ms-1">Back to log in</span>
                            </a>
                        </div>
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