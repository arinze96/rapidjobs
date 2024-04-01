<!doctype html>
<html lang="en">
    <head>
        @include('includes.general_title')
        @include('includes.home_css')
    </head>

<body>
    @include('includes.home_header')

    <main>
        <div class="only-form-pages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="only-form-box">
                            <form>
                                <div class="com_class_form">
                                    <div class="form-group">
                                        <label><span class="normal-font-w">Lost your password? Please enter your
                                                username or email address. You will receive a link to create a new
                                                password via email.</span></label>
                                        <input class="form-control" type="text" name="name" size="40"
                                            placeholder=" Username or email address * ">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Reset Password">
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
