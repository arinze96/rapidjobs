<header class="header_01">
    <div class="header_main">
        <div class="header_menu fixed-top">
            <div class="container">
                <div class="header_top">
                    <div class="logo">
                        <a href="index.html">
                            <img alt="JoDice" class="img-fluid" src="{{ asset("assets/images/dice-logo.png") }}">
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
                                            <a href="job-seeker-dashboard.html">Job dashboard</a>
                                        </li>
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
                                            <a href="edit-profile.html">Update my profile</a>
                                        </li>

                                        <li>
                                            <a href="edit-password.html">Change password</a>
                                        </li>
                                        <li>
                                            <a href="registration.html">Registration</a>
                                        </li>
                                        <li>
                                            <a href="browse-companies.html">Browse companies</a>
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

                                <li class="has-sub-menu">
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
                        <div class="ac_nav">
                            <div class="login_pop">
                                <button class="btn btn-primary">Login / Sign up <i
                                        class="fas fa-caret-down"></i></button>
                                <div class="login_pop_box">
                                    <span class="twobtn_cont">
                                        <a class=" signjs_btn" href="registration.html">
                                            <span>Job seekers</span> Sign up
                                            <i class="far fa-user"></i>
                                        </a>
                                        <a class=" signrs_btn" href="emp-registration.html"> <span>EMPLOYERS</span>
                                            Sign up
                                            <i class="fas fa-landmark"></i>
                                        </a>
                                    </span>
                                    <div>
                                        <span class="member_btn">Already a member?</span>
                                        <a class="lgin_btn btn btn-primary" href="login.html">
                                            Login
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_btm">
            <div class="container">
                <div class="banner_slider ">
                    <div class="">
                        <div class="row align-items-center">
                            <div class="col-lg-4" data-aos="fade-down" data-aos-delay="200">
                                <h2>Find the most exciting<br> starup jobs</h2>
                                <p>Most complete 2020 template for Job board sites.</p>
                                <a class="btn btn-primary" href="browse-jobs.html">Know more
                                    <i class="material-icons">arrow_right_alt</i>
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <div class="banner_form_cont">
                                    <form action="https://veepixel.com/tf/html/jodice/browse-jobs.html">
                                        <div class="banerSearch" data-aos="fade-up" data-aos-delay="200">
                                            <div class="fild-wrap fw-job-title">
                                                <i class="fas fa-briefcase"></i>
                                                <select class="js-example-basic-multiple" name="state">
                                                    <option value="AL"> JOB TITLE, SKILL, INDUSTRY</option>
                                                    <option value="1">Concierge</option>
                                                    <option value="2">Event Planner</option>
                                                    <option value="3">Executive Chef</option>
                                                    <option value="4">General Manager</option>

                                                </select>
                                            </div>
                                            <div class="fild-wrap fw-job-location">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <select class="js-example-basic-single" name="state">
                                                    <option value="AL">ALABAMA</option>
                                                    <option value="WY">WYOMING</option>
                                                </select>
                                            </div>
                                            <div class="fild-wrap fw-submit">
                                                <button type="submit" class="btn btn-primary" value="">
                                                    <i class="material-icons">search</i> SEARCH JOBS
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="user_type">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="user_type_inner  user_type_seeker">
                                                    <a href="browse-jobs.html">
                                                        <div class="usertype_img">
                                                            <img alt=""
                                                                src="{{ asset("assets/images/usertype-2.png") }}">
                                                            <img alt="" class="usertype-addon"
                                                                src="{{ asset("assets/images/usertype-2-addon.png") }}">
                                                        </div>
                                                        <div>
                                                            <h3>I'm looking for a job</h3>
                                                            <p>Post CV and apply job you love</p>
                                                            <i class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="user_type_inner user_type_post">
                                                    <a href="post-a-job.html">
                                                        <div class="usertype_img">
                                                            <img alt=""
                                                                src="{{ asset("assets/images/usertype-1.png") }}">
                                                            <img alt="" class="usertype-addon"
                                                                src="{{ asset("assets/images/usertype-1-addon.png") }}">
                                                        </div>
                                                        <div>
                                                            <h3>I want to post job</h3>
                                                            <p>Post jobs & hire porfessionls</p>
                                                            <i class="fas fa-long-arrow-alt-right"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>