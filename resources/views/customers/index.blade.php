<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>

@include('includes.home_header')
    <main>
        <div class="job_container">
            <div class="container">
                <div class="row job_main">
                    <div class="sidebar">

                        <ul class="user_navigation">
                            <li>
                                <a href="find-staff.html"><i class="fas fa-search"></i> Find Staff </a>
                                <a class="filter_btn" href="#sidebar_filter_option">
                                    <i class="fas fa-filter"></i>
                                    <i class="fas fa-times"></i>
                                </a>
                            </li>
                            <li>
                                <form id="#sidebar_filter_option" class="filter_option">
                                    <div class="form-group">
                                        <label>Location</label>
                                        <div class="field">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <select class="js-example-basic-single" name="state">
                                                <option value="AL">ALABAMA</option>
                                                <option value="WY">WYOMING</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <div class="field">
                                            <i class="fas fa-briefcase"></i>
                                            <select class="js-example-basic-single" name="state">
                                                <option value="AL">e.g. job title</option>
                                                <option value="WY">Title 1</option>
                                                <option value="WY">Title 2</option>
                                                <option value="WY">Title 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <div class="field">
                                            <i class="fas fa-briefcase"></i>
                                            <select class="js-example-basic-single" name="state">
                                                <option>Admin Support</option>
                                                <option>Customer Service</option>
                                                <option>Data Analytics</option>
                                                <option>Design &amp; Creative</option>
                                                <option>Legal</option>
                                                <option>Software Developing</option>
                                                <option>IT &amp; Networking</option>
                                                <option>Writing</option>
                                                <option>Translation</option>
                                                <option>Sales &amp; Marketing</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Salary</label>
                                        <div class="field">
                                            <input type="text" placeholder="e.g. 10k" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Tags</label>
                                        <div class="field">
                                            <div class="form-group custom_checkboxes">
                                                <label class="custom_checkbox" for="tag-1">
                                                    <input type="checkbox" name="usertype" id="tag-1"
                                                        value="job seeker">
                                                    <span><i class="fas fa-check"></i>PHP</span>
                                                </label>
                                                <label class="custom_checkbox" for="tag-2">
                                                    <input type="checkbox" name="usertype" id="tag-2"
                                                        value="employer">
                                                    <span><i class="fas fa-check"></i> MySQL</span>
                                                </label>
                                                <label class="custom_checkbox" for="tag-3">
                                                    <input type="checkbox" name="usertype" id="tag-3"
                                                        value="employer">
                                                    <span><i class="fas fa-check"></i> API</span>
                                                </label>
                                                <label class="custom_checkbox" for="tag-4">
                                                    <input type="checkbox" name="usertype" id="tag-4"
                                                        value="employer">
                                                    <span><i class="fas fa-check"></i> react</span>
                                                </label>
                                                <label class="custom_checkbox" for="tag-5">
                                                    <input type="checkbox" name="usertype" id="tag-5"
                                                        value="employer">
                                                    <span><i class="fas fa-check"></i> design</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </li>
                            <li class="is-active">
                                <a href="job-dashboard.html">
                                    <i class="fas fa-border-all"></i> Job Dashboard </a>
                            </li>
                        </ul>
                        <h5>Organize and Manage</h5>
                        <ul class="user_navigation">
                            <li>
                                <a href="post-a-job.html"><i class="fas fa-paper-plane"></i> Post Job</a>
                            </li>
                            <li>
                                <a href="my-job-listing.html"><i class="far fa-list-alt"></i> My job listings</a>
                            </li>
                        </ul>
                        <h5>Account</h5>
                        <ul class="user_navigation">
                            <li>
                                <a href="emp-edit-profile.html"><i class="fas fa-user"></i> Update My Profile</a>
                            </li>
                            <li>
                                <a href="emp-edit-password.html"><i class="fas fa-key"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" job_main_right">
                        <div class="row job_section">
                            <div class="col-sm-12">
                                <div class="jm_headings">
                                    <h4>Hello, Donec Software !</h4>
                                </div>
                                <div class="dashboard_boxes row">
                                    <div class="col-md-4">
                                        <div class="dashboard_box ">
                                            <i class="fas fa-paper-plane"></i>
                                            <h2><span>18</span>Jobs Posted</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dashboard_box ">
                                            <i class="fas fa-user-check"></i>
                                            <h2><span>68</span>job Seekers Applied </h2>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dashboard_box ">
                                            <i class="fas fa-comments"></i>
                                            <h2><span>28</span>Reviews </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-divider">
                                </div>

                                <h4> Your Profile Views</h4>
                                <div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;">
                                </div>
                                <div class="section-divider">
                                </div>
                                <div class="col-md-12">
                                    <div class=" job_seekernotifi ondahsboard">
                                        <h4>Inbox</h4>
                                        <ul>
                                            <li><img alt="" src="{{ asset("assets/images/profile-1.png") }}"><a
                                                    href="#"> John Stone applying this job contact </a> </li>
                                            <li><img alt="" src="{{ asset("assets/images/profile-1.png") }}"><a
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
        </div>
    </main>
    @include('includes.home_footer')
    @include('includes.home_js')
</body>

</html>
