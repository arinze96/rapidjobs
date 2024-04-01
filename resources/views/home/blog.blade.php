<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>
    @include('includes.home_header')
    <main>
        <div class="blog-listing">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post_box">
                                    <img alt="" src="{{ asset('assets/images/blog1.jpg') }}"
                                        class="img-responsive">
                                    <div class="post_content">
                                        <h6>
                                            <a href="blog-single.html">4 Secrets To Be Strategic About Your Job
                                                Search</a>
                                        </h6>
                                        <p>Queequeg removed himself to just beyond the head of the … </p>
                                        <a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue
                                            reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="post_box">
                                    <img alt="" src="{{ asset('assets/images/blog2.jpg') }}"
                                        class="img-responsive">
                                    <div class="post_content">
                                        <h6>
                                            <a href="blog-single.html">Why Long-Term Unemployment Isn’t As Bad As You
                                                Think</a>
                                        </h6>
                                        <p>Queequeg removed himself to just beyond the head of the … </p>
                                        <a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue
                                            reading</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="post_box">
                                    <img alt="" src="{{ asset('assets/images/blog3.jpg') }}"
                                        class="img-responsive">
                                    <div class="post_content">
                                        <h6>
                                            <a href="blog-single.html">6 Ways Your Job is Losing You Future
                                                Earnings</a>
                                        </h6>
                                        <p>Queequeg removed himself to just beyond the head of the … </p>
                                        <a class="btn btn-secondary btn-rounded" href="blog-single.html">Continue
                                            reading</a>
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
