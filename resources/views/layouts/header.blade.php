<header class="app-header header sticky">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
        <!-- Start::header-content-left -->
        <div class="header-content-left align-items-center">
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img src="{{ asset('assets/image/logo/logo.png') }}" alt="logo" class="desktop-logo">
                        <img src="{{ asset('assets/image/logo/logo.png') }}" alt="logo" class="toggle-logo">
                    </a>
                </div>
            </div>
            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                    <span class="open-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" width="20px" height="20px"
                            viewBox="0 0 24 24" fill="none">
                            <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    <span class="close-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24"
                            fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                        </svg>
                    </span>
                </a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
            <div class="main-header-center  d-none d-lg-block  header-link">
                <input type="text" class="form-control" id="typehead"
                    placeholder="Search Partners, Reports, or Assets...">
                <button class="btn pe-1">
                    <i class="fe fe-search" aria-hidden="true"></i>
                </button>
            </div>
            <!-- header search -->
        </div>
        <!-- End::header-content-left -->
        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
            </button>
            <div class="navbar navbar-collapse responsive-navbar p-0">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex align-items-center">
                        <!-- Start::header-element -->
                        <div class="header-element dropdown-center notifications-dropdown">
                            <!-- Start::header-link|dropdown-toggle -->
                            <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="31" viewBox="0 0 29 31"
                                    fill="none">
                                    <path
                                        d="M2.5 16V21L0.5 24V27H18.5V24L16.5 21V16C16.5 15.0807 16.3189 14.1705 15.9672 13.3212C15.6154 12.4719 15.0998 11.7003 14.4497 11.0503C13.7997 10.4002 13.0281 9.88463 12.1788 9.53284C11.3295 9.18106 10.4193 9 9.5 9C8.58075 9 7.67049 9.18106 6.82122 9.53284C5.97194 9.88463 5.20026 10.4002 4.55025 11.0503C3.90024 11.7003 3.38463 12.4719 3.03284 13.3212C2.68106 14.1705 2.5 15.0807 2.5 16ZM6 27H13C13 27.4596 12.9095 27.9148 12.7336 28.3394C12.5577 28.764 12.2999 29.1499 11.9749 29.4749C11.6499 29.7999 11.264 30.0577 10.8394 30.2336C10.4148 30.4095 9.95963 30.5 9.5 30.5C9.04037 30.5 8.58525 30.4095 8.16061 30.2336C7.73597 30.0577 7.35013 29.7999 7.02513 29.4749C6.70012 29.1499 6.44231 28.764 6.26642 28.3394C6.09053 27.9148 6 27.4596 6 27Z"
                                        stroke="#111827" stroke-linecap="square" />
                                    <rect x="9" y="0.5" width="19" height="19" rx="9.5" fill="#111827" />
                                    <rect x="9" y="0.5" width="19" height="19" rx="9.5" stroke="#111827" />
                                    <path
                                        d="M19.6335 4.81818V15H18.4006V6.1108H18.3409L15.8551 7.76136V6.50852L18.4006 4.81818H19.6335Z"
                                        fill="white" />
                                </svg>
                            </a>
                            <!-- Start::header-link|dropdown-toggle -->
                            <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    fill="none">
                                    <path
                                        d="M6.25 6.25H22.5C23.4946 6.25 24.4484 6.64509 25.1517 7.34835C25.8549 8.05161 26.25 9.00544 26.25 10V21.25C26.25 22.2446 25.8549 23.1984 25.1517 23.9017C24.4484 24.6049 23.4946 25 22.5 25H6.25C5.25544 25 4.30161 24.6049 3.59835 23.9017C2.89509 23.1984 2.5 22.2446 2.5 21.25V10C2.5 9.00544 2.89509 8.05161 3.59835 7.34835C4.30161 6.64509 5.25544 6.25 6.25 6.25ZM6.25 7.5C5.625 7.5 5.075 7.7125 4.65 8.0875L14.375 14.375L24.1 8.0875C23.675 7.7125 23.125 7.5 22.5 7.5H6.25ZM14.375 15.8875L3.9125 9.1C3.8125 9.375 3.75 9.6875 3.75 10V21.25C3.75 21.913 4.01339 22.5489 4.48223 23.0178C4.95107 23.4866 5.58696 23.75 6.25 23.75H22.5C23.163 23.75 23.7989 23.4866 24.2678 23.0178C24.7366 22.5489 25 21.913 25 21.25V10C25 9.6875 24.9375 9.375 24.8375 9.1L14.375 15.8875Z"
                                        fill="#111827" />
                                </svg>
                            </a>
                            <!-- End::header-link|dropdown-toggle -->
                            <!-- Start::main-header-dropdown -->
                            <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                                data-popper-placement="none">
                                <div class="p-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="mb-0 fs-15 fw-semibold">Notifications</p>
                                        <a href="javascript:void(0);" class="badge bg-secondary-transparent"
                                            id="notifiation-data">4 Items</a>
                                    </div>
                                </div>
                                <div class="dropdown-divider my-0"></div>
                                <ul class="list-unstyled mb-0">
                                    <li class="dropdown-item mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="pe-2">
                                                <span class="avatar avatar-md bg-primary rounded-circle"><i
                                                        class="ti ti-gift fs-18"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <a href="notify-list.html"
                                                            class="mb-0 fs-13 font-weight-semibold text-dark">Nile
                                                            Robetz send to a HTML file for Upload</a>
                                                        <div class="p-1 text-warning">
                                                            <span class="fs-12 me-2"><i
                                                                    class="bi bi-folder2-open me-1 fs-14"></i>HTML
                                                                File</span>
                                                            <span class="fs-13"><i class="bi bi-download"></i></span>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-item mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="pe-2">
                                                <span class="avatar avatar-md bg-secondary rounded-circle"><i
                                                        class="ti ti-discount-2 fs-18"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <div>
                                                        <a href="notify-list.html"
                                                            class="mb-0 fs-13 font-weight-semibold text-dark">Conference
                                                            meeting about client project</a>
                                                        <div class="p-1">
                                                            <span class="fs-11 text-muted me-3"><i
                                                                    class="bi bi-calendar me-1"></i>Monday -
                                                                11:00 AM - 45 minutes</span>
                                                        </div>
                                                        <a href="profile.html" class="d-flex align-items-center mt-1">
                                                            <span class="avatar avatar-sm brround">
                                                                <img src="../assets/images/users/1.jpg" class="brround"
                                                                    alt="img">
                                                            </span>
                                                            <span class="ms-2 fs-13 text-gray-600">Nile
                                                                Rebort</span>
                                                        </a>
                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-item mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="pe-2">
                                                <span class="avatar avatar-md bg-pink rounded-circle"><i
                                                        class="ti ti-user-check fs-18"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <a href="notify-list.html"
                                                        class="mb-0 fs-13 font-weight-semibold text-dark">Taylor
                                                        invite to a design channel</a>
                                                    <a href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                                <div class="fs-12">
                                                    <small class="text-muted fs-12">Hi, can i change my
                                                        commission amount?</small>
                                                    <div class="mt-2">
                                                        <button type="button"
                                                            class="btn btn-primary-light btn-sm me-1 fs-11">Accept</button>
                                                        <button type="button"
                                                            class="btn btn-danger-light btn-sm fs-11">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-item mb-1">
                                        <div class="d-flex align-items-start">
                                            <div class="pe-2">
                                                <span class="avatar avatar-md bg-warning rounded-circle"><i
                                                        class="ti ti-circle-check fs-18"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-start justify-content-between">
                                                    <a href="notify-list.html"
                                                        class="mb-0 fs-13 font-weight-semibold text-dark">Order
                                                        Placed <span class="text-primary">ID:
                                                            #1116773</span></a>
                                                    <a href="javascript:void(0);"
                                                        class="min-w-fit-content text-muted text-opacity-75 ms-1 dropdown-item-close1"><i
                                                            class="ti ti-x fs-16"></i></a>
                                                </div>
                                                <div class="d-flex align-items-center justify-conent-between fs-12">
                                                    <span class="text-muted">Order Placed
                                                        Successfully</span>
                                                    <span
                                                        class="align-self-end min-w-fit-content text-muted mg-s-5">12:46</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- <div class="dropdown-divider"></div> -->
                                <div class="p-3 empty-header-item1">
                                    <div class="d-grid">
                                        <a href="notify-list.html" class="btn btn-primary">View All</a>
                                    </div>
                                </div>
                                <div class="p-5 empty-item1 d-none">
                                    <div class="text-center">
                                        <span class="avatar avatar-xl rounded-2 bg-secondary-transparent">
                                            <i class="ri-notification-off-line fs-2"></i>
                                        </span>
                                        <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- End::main-header-dropdown -->
                        </div>
                        <!-- End::header-element -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
</header>