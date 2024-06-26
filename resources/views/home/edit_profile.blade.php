<!doctype html>
<html lang="en">
<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>
<body>
    @include('includes.home_header_one', ['pageTitle' => 'Edit User Profile'] )
    <main>
        <div class="job_container">
            <div class="container">
                <div class="row job_main">
                    <div class="sidebar">
                        <ul class="user_navigation">
                            <li>
                                <a href="browse-jobs.html"><i class="fas fa-search"></i> Browse Jobs </a>
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
                            <li>
                                <a href="job-seeker-dashboard.html">
                                    <i class="fas fa-border-all"></i> Job Dashboard
                                </a>
                            </li>
                        </ul>
                        <h5>Organize and Manage</h5>
                        <ul class="user_navigation">
                            <li>
                                <a href="my-stared-jobs.html"><i class="fas fa-star"></i> View My Stared Jobs</a>
                            </li>
                        </ul>
                        <h5>Account</h5>
                        <ul class="user_navigation">
                            <li class="is-active">
                                <a href="edit-profile.html"><i class="fas fa-user"></i> Update My Profile</a>
                            </li>
                            <li>
                                <a href="edit-password.html"><i class="fas fa-key"></i>Change Password</a>
                            </li>
                            <li>
                                <a href="edit-password.html"><i class="fas fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" job_main_right">
                        <div class="row job_section">
                            <div class="col-sm-12">
                                <div class="jm_headings">
                                    <h5>Update My Profile</h5>
                                    <a class="btn btn-primary mypbtn" href="staff-profile-single.html">My profile</a>
                                </div>
                                <div class="section-divider">
                                </div>
                                <form>
                                    <div class="big_form_group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="Dedolp ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="Seofls ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="Seofls@itsexample.com ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>User Name</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="Seofls_ss ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="big_form_group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="London, United Kingdom ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Job Type</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="Full time ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Expected Salary</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="$35k - $38k">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Total experience</label>
                                                    <input type="text" class="form-control" placeholder=""
                                                        value="5 Years ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="big_form_group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Skills</label>
                                                    <select class="form-control">
                                                        <option>
                                                            PHP
                                                        </option>
                                                        <option>
                                                            MySQL
                                                        </option>
                                                        <option>
                                                            API Development
                                                        </option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>Attachments</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label>Jobseekers Description</label>
                                                    <textarea class="form-control">
                                             </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9 ">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
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
