<!doctype html>
<html lang="en">
    <head>
        @include('includes.general_title')
        @include('includes.home_css')
    </head>
<body>

 @include('includes.home_header_one', ['pageTitle' => 'USer Profile'])
    <main>
        <div class="single_job">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row ">
                            <div class="col-md-12 single_job_main">
                                <h2>Jobseekers Description</h2>

                                <p> Suspendisse potenti. Suspendisse efficitur augue enim, a aliquet nunc malesuada sit
                                    amet. Praesent finibus egestas velit sit amet lobortis. Aliquam ultricies tempus
                                    facilisis. Sed maximus, turpis eu pharetra fringilla, sem tellus pharetra lorem, at
                                    dictum tortor libero sit amet nulla. Cras quis enim vitae enim congue elementum.
                                    Integer tincidunt sit amet nulla at ultricies. Mauris id hendrerit urna. </p>
                                <ul>
                                    <li>Suspendisse efficitur augue enim, a aliquet nunc malesuada sit amet.</li>
                                    <li>sit amet nulla at ultricies. Mauris id hendrerit urna.</li>
                                    <li>turpis eu pharetra fringilla, sem tellus pharetra lorem.</li>
                                    <li>sit amet Mauris id hendrerit urna. nulla at ultricies. </li>
                                    <li>turpis eu , sem tellus pharetra lorem pharetra fringilla.</li>
                                </ul>
                            </div>

                            <div class="section-divider"></div>
                            <div class="col-md-12 single_job_main">
                                <h2>Similar Employee </h2>
                                <div class="row two_col featured_box_outer">
                                    <div class="col-sm-6">
                                        <div class="featured_box ">
                                            <div class="fb_image">
                                                <img alt="brand logo" src="{{ asset('assets/images/profile-2.png') }}">
                                            </div>
                                            <div class="fb_content">
                                                <h4>Dedolp Seofls </h4>
                                                <ul class="tags">
                                                    <li>PHP</li>
                                                    <li>MySQL </li>
                                                    <li>API Development</li>

                                                </ul>
                                            </div>
                                            <div class="fb_action">
                                                <a title="add to favourite" href="#"><i
                                                        class="far fa-heart"></i></a>
                                                <a class="btn btn-third" href="#">View Profile</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="featured_box ">
                                            <div class="fb_image">
                                                <img alt="brand logo" src="{{ asset("assets/images/profile-4.png") }}">
                                            </div>
                                            <div class="fb_content">
                                                <h4>Dedolp Seofls </h4>
                                                <ul class="tags">
                                                    <li>PHP</li>
                                                    <li>MySQL </li>
                                                    <li>API Development</li>

                                                </ul>
                                            </div>
                                            <div class="fb_action">
                                                <a title="add to favourite" href="#"><i
                                                        class="fas fa-heart"></i></a>
                                                <a class="btn btn-third" href="#">View Profile</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a class="btn btn-primary" href="find-staff.html">Browse All job seekers <i
                                                class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="single-job-sidebar">
                            <div class="sjs_box">
                                <h3>Employee Summary</h3>
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
                                        <h6>Expected Salary</h6>
                                        <p>$35k - $38k</p>
                                    </li>
                                    <li>
                                        <i class="far fa-clock"></i>
                                        <h6>Apply date</h6>
                                        <p>18-02-2020</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="sjs_box">
                                <h3>Skills</h3>
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
                        <div class="sjs_box sjs_box_action">
                            <h3>Attachments</h3>
                            <a target="_blank" class="download-cv" href="#"><i
                                    class="fas fa-file-download"></i><span>Curriculum Vitae</span></a>
                            <a class="btn btn-primary" href="#">Hire me</a>
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
