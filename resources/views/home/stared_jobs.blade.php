<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>
<body>
    @include('includes.home_header_one', ['pageTitle' => "Stared Jobs"])

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
                            <li class="is-active">
                                <a href="my-stared-jobs.html"><i class="fas fa-star"></i> View My Stared Jobs</a>
                            </li>
                        </ul>
                        <h5>Account</h5>
                        <ul class="user_navigation">
                            <li>
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
                                    <h6>My favourite/starred jobs</h6>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="job_title">Job Title</th>
                                            <th class="date">Email Sent on </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">TEST Full Job Waiter</a>
                                            </td>
                                            <td class="expires">September 30, 2020</td>
                                        </tr>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">Resort Manage</a></td>
                                            <td class="expires">October 15, 2020</td>
                                        </tr>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">Resort Manage</a></td>
                                            <td class="expires">October 15, 2020</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="section-divider">
                        </div>
                        <div class="row job_section">
                            <div class="col-sm-12">
                                <div class="jm_headings">
                                    <h6>Job I contacted for</h6>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="job_title">Job Title</th>
                                            <th class="date">Email Sent on </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">Job for waitor</a></td>
                                            <td class="expires">September 26, 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">test new</a></td>
                                            <td class="expires">September 26, 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">Hotel Assistance</a></td>
                                            <td class="expires">September 26, 2019</td>
                                        </tr>
                                        <tr>
                                            <td class="job_title"><a href="job-single.html">Assistance </a></td>
                                            <td class="expires">September 26, 2019</td>
                                        </tr>
                                    </tbody>
                                </table>
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
