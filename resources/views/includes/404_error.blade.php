<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>
    @include('includes.home_header')
    <main>
        <div class="fzf_page header_btm">
            <div class="container">
                <div class="d-flexd align-items-centerd fzf_cont ">
                    <div>
                        <h1>404</h1>
                        <p>We've noticed you're lost your way, not to worry though,<br>
                            <b>we can help you find your next opportunity</b>
                        </p>
                        <div class="">
                            <form action="#">
                                <div class="banerSearch" data-aos="fade-up" data-aos-delay="200">
                                    <div class="fild-wrap ">
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="fild-wrap fw-submit">
                                        <button type="submit" class="btn btn-primary" value="">
                                            <i class="material-icons">search</i> SEARCH
                                        </button>
                                    </div>
                                </div>
                            </form>
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
