<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>
    @include('includes.home_header')
    <header class="header_01 header_inner">
        <div class="header_main">
            <div class="header_menu fixed-top">
                <div class="container">
                    <div class="header_top">
                        <div class="logo">
                            <a href="index.html">
                                <img alt="JoDice" class="img-fluid" src="assets/images/dice-logo.png">
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
                                    <li class="has-sub-menu ">
                                        <a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="index.html">Homepage 1</a>
                                            </li>
                                            <li>
                                                <a href="home-page-2.html">Homepage 2</a>
                                            </li>
                                            <li>
                                                <a href="home-page-3.html">Homepage 3</a>
                                            </li>
                                            <li>
                                                <a href="home-page-4.html">Homepage 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu">
                                        <a href="index.html">Job Seekers</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="job-seeker-dashboard.html">Job dashboard</a>
                                            </li>
                                            <li>
                                                <a href="browse-jobs.html">Browse jobs</a>
                                            </li>

                                            <li>
                                                <a href="job-single.html">Job single</a>
                                            </li>
                                            <li>
                                                <a href="my-stared-jobs.html">My stared jobs</a>
                                            </li>
                                            <li>
                                                <a href="staff-profile-single.html">Job seeker profile</a>
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

                                    <li class="has-sub-menu current_page">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">

                                            <li>
                                                <a href="blog.html">blog</a>
                                            </li>
                                            <li class="current_page">
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
                                <!--Not logedin-->
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
                                <!--end logedin-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_btm">
                <h2>4 Secrets To Be Strategic About Your Job Search</h2>
            </div>
        </div>
    </header>
    <main>
        <div class="blog-listing">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post_box singlepb">
                                    <img alt="" src="{{ asset('assets/images/blog1.jpg') }}"
                                        class="img-responsive">
                                    <div class="post_content">
                                        <h6>
                                            <a href="blog-single.html">4 Secrets To Be Strategic About Your Job
                                                Search</a>
                                        </h6>
                                        <p>Queequeg removed himself to just beyond the head of the sleeper, and lighted
                                            his tomahawk pipe. We kept the pipe passing over the sleeper, from one to
                                            the other. Meanwhile, upon questioning him in his broken fashion, Queequeg
                                            gave me to understand that, in his land, owing to the absence of settees and
                                            sofas of all sorts, the king, chiefs, and great people generally, were in
                                            the custom of fattening some of the lower orders for ottomans.</p>

                                        <p>I was going to warn ye against — but never mind, never mind — it’s all one,
                                            all in the family too — sharp frost this morning, ain’t it? The cabin
                                            entrance was locked within; the hatches were all on, and lumbered with coils
                                            of rigging. Going forward to the forecastle, we found the slide of the
                                            scuttle open. Seeing a light, we went down, and found only an old rigger
                                            there, wrapped in a tattered pea-jacket. He was thrown at whole length upon
                                            two chests, his face downwards and inclosed in his folded arms. The
                                            profoundest slumber slept upon him.</p>

                                        <p>But it seemed that, when on the wharf, Queequeg had not at all noticed what I
                                            now alluded to; hence I would have thought myself to have been optically
                                            deceived in that matter, were it not for Elijah’s otherwise inexplicable
                                            question. But I beat the thing down; and again marking the sleeper,
                                            jocularly hinted to Queequeg that perhaps we had best sit up with the body;
                                            telling him to establish himself accordingly. He put his hand upon the
                                            sleeper’s rear, as though feeling if it was soft enough; and then, without
                                            more ado, sat quietly down there.
                                        </p>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="blog_sidebar">
                            <div class="single-job-sidebar">
                                <div class="sjs_box">
                                    <h3>Search blog</h3>
                                    <form class="form-inline" action="#">
                                        <input type="text" class="form-control" placeholder="Search"
                                            id="search-blog">

                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-search"></i></button>
                                    </form>

                                </div>
                                <div class="sjs_box">
                                    <h3>Tags</h3>
                                    <ul class="tags">
                                        <li><a href="#">business</a></li>
                                        <li><a href="#">company</a></li>
                                        <li><a href="#">earnings</a></li>
                                        <li><a href="#">employees</a></li>
                                        <li><a href="#">future</a></li>
                                        <li><a href="#">job</a></li>
                                        <li><a href="#">jobseek</a></li>
                                        <li><a href="#">market</a></li>
                                        <li><a href="#">resume</a></li>
                                        <li><a href="#">secrets</a></li>
                                        <li><a href="#">skills</a></li>
                                        <li><a href="#">strategy</a></li>
                                        <li><a href="#">suggestions</a></li>
                                        <li><a href="#">training</a></li>
                                        <li><a href="#">unemployment</a></li>
                                        <li><a href="#">work</a></li>
                                    </ul>
                                </div>
                                <div class="sjs_box">
                                    <h3>Recent Posts</h3>
                                    <ul class="recentpost">
                                        <li><a href="blog-single.html">4 Secrets To Be Strategic About Your Job
                                                Search</a></li>
                                        <li><a href="blog-single.html">Why Long-Term Unemployment Isn’t As Bad As You
                                                Think</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('includes.home_footer')
    @include('includes.home_js')
</body>

</html>
