<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>
    @include('includes.home_header_one')
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
                            <li>
                                <a href="job-dashboard.html">
                                    <i class="fas fa-border-all"></i> Job Dashboard </a>
                            </li>
                        </ul>
                        <h5>Organize and Manage</h5>
                        <ul class="user_navigation">
                            <li>
                                <a href="post-a-job.html"><i class="fas fa-paper-plane"></i> Post Job</a>
                            </li>
                            <li class="is-active">
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
                                    <h6>Your listings are shown in the table below.</h6>
                                </div>
                                <div class="table-cont">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Vacancies</th>
                                                <th>Posted</th>
                                                <th>Expires</th>
                                                <th>Interest</th>
                                                <th>Contacted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6><a href="post-a-job.html">Manager</a></h6>
                                                    <ul class="job-dashboard-actions">
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-edit">
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="job-dashboard-action-mark_filled">
                                                                Deactivate</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="job-dashboard-action-delete">
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    Active
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    2020/10/17
                                                </td>
                                                <td>
                                                    2020/10/01
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
