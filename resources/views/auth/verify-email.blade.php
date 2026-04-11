<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construct Invest - Construction Management Software">
    <meta name="author" content="Lender Direct">
    <meta name="keywords" content="lunder direct, construction management software, project management, contractor management, payment processing, draw requests, construction scheduling, construction budgeting, construction analytics">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <script src="{{ asset('assets/js/authentication-main.js') }}"></script>
    <title>{{ __('Construct Invest - Email Verification') }}</title>
    <link id="style" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <style>
        .verify-card {
            max-width: 420px;
        }

        .verify-otp {
            width: 2.1rem;
            height: 2.1rem;
            text-align: center;
            padding: 0;
            font-weight: 600;
        }

        @media (min-width: 576px) {
            .verify-otp {
                width: 2.35rem;
                height: 2.35rem;
            }
        }

        /* Stop Bootstrap validation background icons */
        .auth-page .form-control.is-invalid,
        .auth-page .form-control.is-valid,
        .auth-page .was-validated .form-control:invalid,
        .auth-page .was-validated .form-control:valid {
            background-image: none !important;
        }
    </style>
</head>

<body class="app sidebar-mini auth-page">
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center bg-light px-3">
        <div class="card shadow-sm border-0 verify-card w-100">
            <div class="card-body p-4 p-md-5 text-center">
                <div class="mb-3 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="44" viewBox="0 0 50 44" fill="none">
                        <path d="M24.9352 22.8773C27.9922 19.8452 30.9039 16.9937 33.7762 14.1048C37.4828 10.3692 41.1562 6.61692 44.8461 2.87297C45.1016 2.59816 45.3793 2.3448 45.6763 2.11547C46.4898 1.52607 47.2328 1.51777 48.0546 2.08226C48.3566 2.30467 48.6443 2.54589 48.9159 2.80449C50.2981 4.0497 50.3687 4.83834 49.0716 6.16241C46.2989 9.0015 43.493 11.8095 40.6809 14.6174C36.4721 18.8304 32.257 23.0385 28.0358 27.2418C27.5045 27.771 26.9566 28.2795 26.3755 28.7651C25.2735 29.6741 24.5907 29.6866 23.5509 28.7319C22.3265 27.6071 21.1684 26.4096 19.9751 25.2515C18.7423 24.0561 17.4847 22.8939 16.2685 21.6757C15.0233 20.4139 15.0586 19.453 16.3661 18.2617C16.642 18.007 16.9376 17.7746 17.2502 17.5665C18.2007 16.9439 18.6759 16.9273 19.5476 17.7159C20.9381 18.9736 22.2621 20.308 23.6132 21.6114C24.0428 22.0161 24.4599 22.4145 24.9352 22.8773Z" fill="#35AE83"/>
                        <path d="M23.752 6.09518C18.1755 9.83082 11.993 11.6986 5.35603 12.1988C4.98869 14.4464 5.35603 16.5072 5.69639 18.5556C5.9143 19.8755 6.31899 21.1602 6.55766 22.478C6.62657 22.8325 6.61993 23.1975 6.53817 23.5492C6.45641 23.9009 6.30137 24.2315 6.08318 24.5192C5.86499 24.8069 5.58856 25.0454 5.27193 25.219C4.95531 25.3926 4.60562 25.4975 4.24571 25.5267C2.91956 25.6762 2.1247 25.2279 1.72831 23.8353C1.2157 22.0401 0.667802 20.218 0.468568 18.3709C0.165566 15.565 0.146888 12.7114 0.00368879 9.87856C-0.0793254 8.19544 1.2489 7.01664 2.9673 7.10381C7.14291 7.31134 11.1587 6.39196 15.0542 4.94544C17.6276 3.99077 20.035 2.71443 22.1228 0.900571C23.5009 -0.290683 23.9408 -0.290683 25.3064 0.844537C27.6375 2.73946 30.2055 4.32246 32.9458 5.55352C33.5825 5.83324 34.1972 6.1607 34.7846 6.53308C35.6043 7.07683 35.789 7.67038 35.1996 8.42996C34.5961 9.23929 33.8516 9.93318 33.0018 10.4783C32.5868 10.7336 31.7276 10.5821 31.215 10.3248C29.4447 9.43858 27.7346 8.43203 26.012 7.45454C25.2608 7.03324 24.5406 6.57252 23.752 6.09518Z" fill="#0F2231"/>
                        <path d="M47.5295 17.0511C46.9713 26.3529 42.723 33.93 34.9321 39.5418C32.704 41.1348 30.2575 42.3979 27.6684 43.2919C26.2468 43.79 25.3855 43.2546 25.2029 41.7831C25.1717 41.5175 25.2029 41.2456 25.1634 40.98C24.9372 39.4193 25.6242 38.5186 27.0603 37.8919C30.6341 36.3333 33.8322 34.2102 36.3994 31.2258C39.5373 27.5919 41.4487 23.4142 41.9448 18.6326C42.0444 17.6654 42.3245 16.8727 43.0468 16.2314C44.0077 15.3805 44.9021 14.4403 45.9294 13.6808C46.853 13.0001 47.4092 13.3238 47.5026 14.4881C47.5793 15.2352 47.5295 15.9803 47.5295 17.0511Z" fill="#0F2231"/>
                        <path d="M22.3891 40.6051C22.3732 40.9201 22.3351 41.2336 22.2749 41.5432C21.9408 42.9254 20.9695 43.5293 19.633 42.9959C18.0308 42.3875 16.4762 41.6605 14.9821 40.821C11.4503 38.7537 8.37369 35.9926 5.93774 32.7043C5.6804 32.3639 5.46041 31.9924 5.22174 31.6354C4.6863 30.8427 4.34802 30.0353 4.88346 29.0911C5.47286 28.0534 6.41507 27.5947 7.53369 27.5449C8.00828 27.5684 8.46502 27.7332 8.84531 28.0181C9.24007 28.2998 9.57453 28.6575 9.82903 29.0703C12.5062 33.2418 16.3498 35.9584 20.7973 37.9425C22.1214 38.5298 22.3808 38.9926 22.3891 40.6051Z" fill="#0F2231"/>
                    </svg>
                </div>

                <h5 class="fw-bold mb-1">Please check your email</h5>
                <p class="text-muted small mb-4">
                    We've sent a code to <span class="fw-semibold">{{ auth()->user()->email }}</span>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <div class="alert alert-success py-2 small" role="alert">
                        Verification code sent.
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.code.verify') }}" class="mb-3" novalidate>
                    @csrf
                    <input type="hidden" name="code" id="verification_code" value="{{ old('code') }}">

                    <div class="d-flex justify-content-center gap-2 mb-3" dir="ltr" aria-label="Verification code">
                        @for ($i = 0; $i < 6; $i++)
                            <input
                                type="text"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                maxlength="1"
                                class="form-control verify-otp @error('code') is-invalid @enderror"
                                autocomplete="one-time-code"
                                aria-label="Digit {{ $i + 1 }}"
                            >
                        @endfor
                    </div>

                    @error('code')
                        <div class="invalid-feedback d-block small mb-2">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-success w-100">Verify</button>
                </form>

                <div class="small text-muted">
                    Didn't receive an email?
                    <form method="POST" action="{{ route('verification.send') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 align-baseline small">Resend</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        (function () {
            var hidden = document.getElementById('verification_code');
            var inputs = Array.prototype.slice.call(document.querySelectorAll('.verify-otp'));
            if (!hidden || inputs.length === 0) return;

            function syncHidden() {
                hidden.value = inputs.map(function (el) { return (el.value || '').trim(); }).join('');
            }

            function focusInput(index) {
                if (inputs[index]) inputs[index].focus();
            }

            inputs.forEach(function (input, idx) {
                input.addEventListener('input', function () {
                    input.value = (input.value || '').replace(/\D/g, '').slice(0, 1);
                    syncHidden();
                    if (input.value && idx < inputs.length - 1) focusInput(idx + 1);
                });

                input.addEventListener('keydown', function (e) {
                    if (e.key === 'Backspace' && !input.value && idx > 0) {
                        focusInput(idx - 1);
                    }
                });

                input.addEventListener('paste', function (e) {
                    var text = (e.clipboardData || window.clipboardData).getData('text');
                    var digits = (text || '').replace(/\D/g, '').slice(0, inputs.length);
                    if (!digits) return;
                    e.preventDefault();
                    digits.split('').forEach(function (d, i) {
                        if (inputs[i]) inputs[i].value = d;
                    });
                    syncHidden();
                    focusInput(Math.min(digits.length, inputs.length - 1));
                });
            });

            // Prefill from old('code') if present
            if (hidden.value) {
                hidden.value.replace(/\D/g, '').slice(0, inputs.length).split('').forEach(function (d, i) {
                    if (inputs[i]) inputs[i].value = d;
                });
            }

            focusInput(0);
            syncHidden();
        })();
    </script>
</body>

</html>
