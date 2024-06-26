<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>

   @include('includes.home_header_one', ['pageTitle' => "Job Details"])

    <main>
        <div class="single_job">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row ">
                            <div class="col-md-12 single_job_main">
                                <h2>Job Description</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vestibulum
                                    ante, sit amet blandit tellus. Pellentesque sit amet viverra lorem. Sed non diam
                                    egestas ex aliquam feugiat. Nullam urna mauris, rutrum sed erat quis, gravida
                                    scelerisque enim. Cras dapibus orci magna, sit amet fringilla est porttitor sit
                                    amet. Proin eget justo mauris. Proin leo urna, ornare quis lacus id, pretium
                                    ullamcorper libero. Suspendisse congue tortor pellentesque diam accumsan, vel dictum
                                    tellus tincidunt. Vivamus dapibus dignissim posuere. Aliquam eget sem semper,
                                    feugiat mauris eget, convallis nisi. Curabitur interdum, mi vitae commodo mattis,
                                    lacus erat aliquet urna, ut malesuada elit quam quis justo. </p>
                                <p> Quisque aliquet eros libero. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Nunc vitae sapien sit amet ante mattis
                                    laoreet. Sed at quam quis ligula suscipit iaculis in tempus diam. Cras pulvinar
                                    facilisis commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                                    Aenean a leo eget felis porta pharetra. Donec vitae metus metus. Fusce pharetra
                                    turpis non felis laoreet cursus. </p>
                                <p> Suspendisse potenti. Suspendisse efficitur augue enim, a aliquet nunc malesuada sit
                                    amet. Praesent finibus egestas velit sit amet lobortis. Aliquam ultricies tempus
                                    facilisis. Sed maximus, turpis eu pharetra fringilla, sem tellus pharetra lorem, at
                                    dictum tortor libero sit amet nulla. Cras quis enim vitae enim congue elementum.
                                    Integer tincidunt sit amet nulla at ultricies. Mauris id hendrerit urna. </p>
                            </div>
                            <div class="section-divider"></div>
                            <div class="col-md-12 single_job_main">
                                <h2>Location</h2>
                                <iframe class="full-width-iframe"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3428.916507434128!2d76.78322631470263!3d30.748846681631466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed76ab9f14c1%3A0xd6362b158b8994aa!2sEiffel%20Tower%20Replica!5e0!3m2!1sen!2sin!4v1581932177674!5m2!1sen!2sin"
                                    height="450" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                            <div class="section-divider"></div>
                            <div class="col-md-12 single_job_main">
                                <h2>Similar Jobs</h2>
                                <div class="row two_col featured_box_outer">
                                    <div class="col-sm-6">
                                        <div class="featured_box ">
                                            <div class="fb_image">
                                                <img alt="brand logo" src="{{ asset("assets/images/c-logo-01.webp") }}">
                                            </div>
                                            <div class="fb_content">
                                                <h4>2000 Words English to German</h4>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-landmark"></i>
                                                            Magna Aliqua
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            New York
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-clock"></i>
                                                            2 days ago
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb_action">
                                                <a title="add to favourite" href="#"><i
                                                        class="far fa-heart"></i></a>
                                                <a class="btn btn-third" href="job-single.html">Apply Now</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="featured_box ">
                                            <div class="fb_image">
                                                <img alt="brand logo" src="{{ asset('assets/images/c-logo-02.webp') }}">
                                            </div>
                                            <div class="fb_content">
                                                <h4>Fix Python Selenium Code</h4>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-landmark"></i>
                                                            Magna Aliqua
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            New York
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="far fa-clock"></i>
                                                            3 days ago
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="fb_action">
                                                <a title="add to favourite" href="#"><i
                                                        class="fas fa-heart"></i></a>
                                                <a class="btn btn-third" href="job-single.html">Apply Now</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-primary" href="browse-jobs.html">Browse All Jobs <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="single-job-sidebar">
                            <div class="sjs_box">
                                <h3>Job Summary</h3>
                                <ul class="single-job-sidebar-features">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h6>Location</h6>
                                        <p>London, United Kingdom</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-briefcase"></i>
                                        <h6>Job Type</h6>
                                        <p>Full Time</p>
                                    </li>
                                    <li>
                                        <i class="fas fa-money-bill-alt"></i>
                                        <h6>Salary</h6>
                                        <p>$35k - $38k</p>
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <h6>Date Posted</h6>
                                        <p>$35k - $38k</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="sjs_box">
                                <h3>Tags</h3>
                                <ul class="tags">
                                    <li>PHP</li>
                                    <li>MySQL </li>
                                    <li>API Development</li>
                                    <li>PHP</li>
                                    <li>MySQL </li>
                                    <li>API Development</li>
                                </ul>
                            </div>

                        </div>
                        <div class=" sjs_box_action">
                            <a class="btn btn-third" href="#">Contact Employer</a>
                            <p>- or -</p>
                            <a class="btn btn-primary" href="#">Apply Job</a>
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
