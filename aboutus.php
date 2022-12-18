<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'Includes/bootstraplink.php';
    ?>
</head>

<body>
    <!--Tophead section start-->
    <?php
     include 'Includes/tophead.php';
     ?>
    <!--Tophead section end-->

    <!-- banner start -->
    <img src="assets/images/aboutbanner.jpg" class="img-fluid">
    <!-- banner end -->

    <!-- breadcrumb start -->
    <div class="breadcrumbsection">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="aboutus.php">About Us</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->
    <!-- About Us start -->
    <div class="container mt-5 mb-5 pt-4" id="aboutus">
        <div class="row  mt-lg-0 mt-md-5">
            <div class="col-12 mx-auto">
                <div class="row">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="card ">
                            <div class="card-image">
                                <img src="assets/images/aboutus.png" class="img-fluid ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-lg-0 mt-sm-5 aboutinfo">
                        <div class="abousus-info">
                            <div class="whowe-are">
                                <h5 class="text-success text-capitalize fw-bold">Who we are</h5>
                            </div>
                            <div class="about-us">
                                <h4 class="text-uppercase fw-bold pb-2">About Us</h4>
                            </div>
                            <div class="info">
                                <p>
                                    Green Corner Advisory is the symbol of trust, prosperity and courage. We enable
                                    scalable growth by leveraging stock market intelligence and analytics, exercising
                                    judicious investment with risk appetite, operating effectively to deliver business
                                    outcome. Green Corner Advisory is the symbol of trust, prosperity and courage. We
                                    enable scalable growth by leveraging stock market intelligence and analytics,
                                    exercising judicious investment with risk appetite, operating effectively to deliver
                                    business outcome.
                                </p>
                            </div>
                        </div>
                        <div class="row " id="icons">
                            <div class="info">
                                <p>
                                    Green Corner Advisory is the symbol of trust, prosperity and courage. We enable
                                    scalable growth by leveraging stock market intelligence and analytics, exercising
                                    judicious investment with risk appetite, operating effectively to deliver business
                                    outcome. Green Corner Advisory is the symbol of trust, prosperity and courage. We
                                    enable scalable growth by leveraging stock market intelligence and analytics,
                                    exercising judicious investment with risk appetite, operating effectively to deliver
                                    business outcome.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us end-->

    <!-- about company start -->
    <div class="container about-company">
        <div class="row ">
            <div class="company-info text-center ">
                <h5>Details</h5>
                <h4>Company Details</h4>
                <div class="line" style="width:60px;border-bottom:2px solid green;margin-left:47%;"></div>
            </div>
        </div>
        <div class="row  ">
            <div class="info text-center shadow company-shortinfo py-3">
            <div class="icon pt-2">
                            <i class="fa-solid fa-building"></i>
                        </div>
                <p>Green Corner Advisory (Investment Advisor) is a financial market research and consulting company. We are a team of highly qualified professionals who are working with complete dedication towards the achievement of the financial goals of our clients. We strive hard to make our clients satisfied with our return strategy so that the financial future of them is secured.</p>
            </div>
        </div>
    </div>
    <!-- about company end -->

     <!-- client-trusted start-->
     <?php
    include 'Includes/client-trust.php';
    ?>
    <!-- client-trusted end-->

     <!-- contact form start -->
     <?php
    include 'Includes/contactus.php';
    ?>
       <!-- contact form end -->

    <!-- footer section start-->
    <?php
    include 'Includes/footer.php';
    ?>
    <!-- footer section end-->
</body>

</html>