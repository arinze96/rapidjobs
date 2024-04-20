<header class="header_01 header_inner">
    <div class="header_main">
        <div class="header_menu fixed-top">
            <div class="container">
                <div class="header_top">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="" class="img-fluid" src="{{ asset("assets/images/dice-logo.png") }}">
                        </a>
                    </div>
                    <div class="navigation">
                        <nav>
                            <div class="hamburger hamburger--spring js-hamburger ">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner"></div>
                                </div>
                            </div>
                            <ul>
                                <li class="current_page">
                                    <a href="{{ route("app.home") }}">Home</a>
                                </li>
                                <li class="has-sub-menu">
                                    <a>Job Seekers</a>
                                    <ul class="sub-menu">
                                        {{-- <li>
                                            <a href="job-seeker-dashboard.html">Job dashboard</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route("browse_jobs") }}">Browse jobs</a>
                                        </li>

                                        {{-- <li>
                                            <a href="{{ route("job_details") }}">Job single</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="{{ route("stared_jobs") }}">My stared jobs</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="{{ route("user_profile") }}">Job seeker profile</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="edit-profile.html">Update my profile</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="edit-password.html">Change password</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="registration.html">Registration</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route("browse_companies") }}">Browse companies</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-sub-menu">
                                    <a href="#">For employers</a>
                                    <ul class="sub-menu">
                                        {{-- <li>
                                            <a href="job-dashboard.html">Job dashboard</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('post_jobs') }}">Post a job</a>
                                        </li>
                                        {{-- <li>
                                            <a href="my-job-listing.html">My Jobs listing</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="find-staff.html">Find staff</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="compnay-profile-single.html">Company profile</a>
                                        </li> --}}

                                        {{-- <li>
                                            <a href="emp-edit-profile.html">Update profile</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="emp-edit-password.html">Change password</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="emp-registration.html">Employer registration</a>
                                        </li> --}}
                                    </ul>
                                </li>

                                {{-- <li class="has-sub-menu">
                                    <a href="#">Essentials</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog.html">blog</a>
                                        </li>
                                        <li>
                                            <a href="blog-single.html">Blog single</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact us</a>
                                        </li>
                                        <li>
                                            <a href="plan-page.html">Membership Plans</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Login</a>
                                        </li>
                                        <li>
                                            <a href="lost-password.html">Lost password</a>
                                        </li>
                                        <li>
                                            <a href="user-interface-elements.html">User interface elements</a>
                                        </li>
                                        <li>
                                            <a href="404.html">404</a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="{{ route("app.home") }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="ac_nav">
                            <div class="login_pop"> <a class="btn btn-primary" href="{{ route('register') }}">
                                    Sign up
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_btm">
            <h2>{{ $pageTitle }}</h2>
        </div>
    </div>
</header>