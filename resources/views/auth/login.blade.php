<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>

    @include('includes.home_header_one', ['pageTitle' => "Login Page"])

    <main>
        <div class="only-form-pages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="only-form-box">
                            <form>
                                <div class="com_class_form">
                                    <div class="form-group">

                                        <input class="form-control" type="text" name="name" size="40"
                                            placeholder=" Username or email address * ">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" type="password" name="email"
                                            placeholder=" Password * ">
                                    </div>


                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Login">
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <a class="lost_password" href="lost-password.html"> Lost your password?</a>
                                    </div>
                                </div>
                            </form>
                            <div class="social_login">
                                <p class="or_span"><span>or</span></p>
                                <button class="btn btn-facebook"><i class="fab fa-facebook-f"></i> Log In via
                                    Facebook</button>
                                <button class="btn btn-google"><i class="fab fa-google-plus-g"></i> Register via
                                    Google+</button>
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
