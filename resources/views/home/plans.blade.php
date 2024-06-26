<!doctype html>
<html lang="en">

<head>
    @include('includes.general_title')
    @include('includes.home_css')
</head>

<body>

 @include('includes.home_header_one')

    <main>
        <div class="simple_page">
            <div class="container">

                <div class="planduration">
                    <div class="custom-control custom-switch text-center">
                        <label class="before-custom-control-label" for="customSwitch1"> <span>Billed
                                Monthly</span></label>
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"> <span>Billed Yearly</span> </label>
                        <div class="small-alert alert-success"> Save 21% </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="plan_box">
                            <h3>Basic Plan</h3>
                            <p>One time fee for one listing or task highlighted in search results.</p>
                            <div class="plan_price pl-monthly">
                                <h4><strong>$19</strong>/ monthly</h4>
                            </div>
                            <div class="plan_price pl-yearly hide">
                                <h4><strong>$200</strong>/ yearly</h4>
                            </div>
                            <h5>Features of Basic Plan</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> 1 Listing</li>
                                <li><i class="fas fa-check"></i> 30 Days Visibility</li>
                                <li><i class="fas fa-check"></i> Highlighted in Search Results</li>
                                <li><i class="fas fa-check"></i>Fraud protection</li>
                                <li><i class="fas fa-check"></i>Featured Listing</li>
                            </ul>
                            <a class="btn btn-third" href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plan_box plan_box_hoverd">
                            <div class="populer_plan">
                                Most Populer
                            </div>
                            <h3>Standard Plan</h3>
                            <p>One time fee for one listing or task highlighted in search results.</p>
                            <div class="plan_price">
                                <h4><strong>$36</strong>/ monthly</h4>
                            </div>
                            <div class="plan_price pl-yearly hide">
                                <h4><strong>$396</strong>/ yearly</h4>
                            </div>
                            <h5>Features of Standard Plan</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> 6 Listing</li>
                                <li><i class="fas fa-check"></i> 65 Days Visibility</li>
                                <li><i class="fas fa-check"></i> Highlighted in Search Results</li>
                                <li><i class="fas fa-check"></i>Fraud protection</li>
                                <li><i class="fas fa-check"></i>Featured Listing</li>
                            </ul>
                            <a class="btn btn-third" href="#">Buy Now</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plan_box">

                            <h3>Extended Plan</h3>
                            <p>One time fee for one listing or task highlighted in search results.</p>
                            <div class="plan_price">
                                <h4><strong>$79</strong>/ monthly</h4>
                            </div>
                            <div class="plan_price pl-yearly hide">
                                <h4><strong>$850</strong>/ yearly</h4>
                            </div>
                            <h5>Features of Extended Plan</h5>
                            <ul>
                                <li><i class="fas fa-check"></i> Unlimited Listings Listing</li>
                                <li><i class="fas fa-check"></i> 100 Days Visibility</li>
                                <li><i class="fas fa-check"></i> Highlighted in Search Results</li>
                                <li><i class="fas fa-check"></i>Fraud protection</li>
                                <li><i class="fas fa-check"></i>Featured Listing</li>
                            </ul>
                            <a class="btn btn-third" href="#">Buy Now</a>
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
