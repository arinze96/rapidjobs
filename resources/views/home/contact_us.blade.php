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
                        <div class=" contact_us">
                            <div class="row ">

                                <div class="col-md-12 col-lg-6 ">
                                    <div class="newslatter_outer">

                                        <div>
                                            <h5>Address:</h5>
                                            <ul>
                                                <li><i class="fas fa-map-marker-alt"></i>
                                                    Keas 69 Str. 15234, Chalandri <br>
                                                    Athens, <b>Greece</b>
                                                </li>
                                                <li><a href="tel:#"><i class="fas fa-phone"></i> +30-2106019311
                                                        (landline)</a></li>
                                                <li><a href="tel:#"><i class="fas fa-phone"></i> +30-6977664062
                                                        (mobile phone)</a></li>
                                                <li><a href="tel:#"><i class="fas fa-fax"></i> +30-2106398905
                                                        (fax)</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <form class="newsletter">
                                        <h5>Newsletter</h5>
                                        <div class="d-flex">
                                            <input class="form-control" type="email">
                                            <input class="btn btn-primary" type="submit" value="Subscribe">
                                        </div>

                                    </form>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="only-form-box">
                                        <form>
                                            <div class="com_class_form">
                                                <div class="form-group">

                                                    <input class="form-control" type="text" name="name"
                                                        size="40" placeholder="Name">
                                                </div>
                                                <div class="form-group">

                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group">

                                                    <select class="form-control" name="user_type">
                                                        <option value="none">Are you a job seeker or an employer ?
                                                        </option>
                                                        <option value="Job Seeker">Job Seeker</option>
                                                        <option value="Employer">Employer</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">

                                                    <input class="form-control" type="text" name="subject"
                                                        placeholder="Subject">
                                                </div>
                                                <div class="form-group">

                                                    <textarea class="form-control" name="message" cols="40" rows="3" placeholder="Message"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input class="btn btn-primary" type="submit" value="Send">
                                                </div>
                                            </div>
                                        </form>
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
