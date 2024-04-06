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
                                    <a href="index.html">Job Seekers</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route("browse_jobs") }}">Browse jobs</a>
                                        </li>

                                        <li>
                                            <a href="{{ route("job_details") }}">Job single</a>
                                        </li>

                                        <li>
                                            <a href="{{ route("stared_jobs") }}">My stared jobs</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("user_profile") }}">Job seeker profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("edit_profile") }}">Update my profile</a>
                                        </li>

                                        <li>
                                            <a href="{{ route("forgot_password") }}">Change password</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("register") }}">Registration</a>
                                        </li>
                                        <li>
                                            <a href="{{ route("browse_companies") }}">Browse companies</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="has-sub-menu">
                                    <a href="#">For employers</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="job-dashboard.html">Job dashboard</a>
                                        </li>
                                        <li>
                                            <a href="post-a-job.html">Post a job</a>
                                        </li>
                                        <li>
                                            <a href="my-job-listing.html">My Jobs listing</a>
                                        </li>
                                        <li>
                                            <a href="find-staff.html">Find staff</a>
                                        </li>
                                        <li>
                                            <a href="compnay-profile-single.html">Company profile</a>
                                        </li>

                                        <li>
                                            <a href="emp-edit-profile.html">Update profile</a>
                                        </li>
                                        <li>
                                            <a href="emp-edit-password.html">Change password</a>
                                        </li>
                                        <li>
                                            <a href="emp-registration.html">Employer registration</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="has-sub-menu ">
                                    <a href="#">Pages</a>
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
                                </li>
                            </ul>
                        </nav>
                        <div class="ac_nav after_login_ac_nav">
                            <!-- logedin-->
                            <div class="login_pop after_login">
                                <button class="btn btn-primary withdp"><img alt=""
                                        src="{{ asset("assets/images/c-logo-03.webp") }}"> Donec Software <i
                                        class="fas fa-caret-down"></i></button>
                                <div class="login_pop_box login_pop_box_menu">
                                    <div class="login_pop_box_head">
                                        <div class=" ">
                                            <img alt="" src="{{ asset("assets/images/c-logo-03.webp") }}">
                                            <span> New York, London </span>
                                            <h5>Donec Software </h5>
                                            <h6>&nbsp;</h6>
                                        </div>
                                    </div>
                                    <ul class="user_navigation">
                                        <li>
                                            <a href="find-staff.html"><i class="fas fa-search"></i> Find Staff </a>
                                        </li>
                                        <li>
                                            <a href="post-a-job.html"><i class="fas fa-paper-plane"></i> Post
                                                Job</a>
                                        </li>
                                        <li>
                                            <a href="job-dashboard.html"><i class="far fa-list-alt"></i> My job
                                                listings</a>
                                        </li>

                                        <li>
                                            <a href="emp-edit-profile.html"><i class="fas fa-user"></i> Update My
                                                Profile</a>
                                        </li>
                                        <li>
                                            <a href="emp-edit-password.html"><i class="fas fa-key"></i>Change
                                                Password</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-power-off"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="login_pop after_login">
                                <button class="btn btn-msg">
                                    <i class="fas fa-envelope"></i>
                                    <span class="msg-count">2</span>
                                </button>
                                <div class="login_pop_box job_seekernotifi ">
                                    <h6>Inbox</h6>
                                    <ul>
                                        <li><img alt="" src="{{ asset("assets/images/profile-1.png") }}"><a
                                                href="#"> John Stone applying this job contact </a> </li>
                                        <li><img alt="" src="{{ asset('assets/images/profile-2.png') }}"><a
                                                href="#">Nguta Ithya applying this job contact </a> </li>
                                        <li><img alt="" src="{{ asset("assets/images/profile-4.png") }}"><a
                                                href="#">Salome Simoes applying this job</a> </li>
                                    </ul>
                                </div>
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