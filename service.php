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
    <img src="assets/images/service-banner.jpg" class="img-fluid">
    <!-- banner end -->

    <!-- breadcrumb start -->
    <div class="breadcrumbsection">
        <ul class="breadcrumb ">
            <li class="breadcrumb-item ">
                <a href="index.php" >Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="service.php">service</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->

    <!-- service section start -->
    <div class="container" id="services">
        <div class="row">
            <div class="service-title">
                <h3 class="text-center fw-bold">SERVICES</h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 mb-sm-5 mb-0 ">
                        <div class="service-buttons">
                            <div class="nav flex-column nav-pills buttons">
                                <button class="btn btn-success shadow mb-3 p-3 text-start ">EQUITY</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">HNI EQUITY</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">STOCK OPTIONS</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">NIFTY TIPS</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">INTRADAY TIPS</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">STOCK TIPS</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">COMMODITY TIPS</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start">BULLION METALS PACK</button>
                                <button class="btn btn-white shadow mb-3 p-3 text-start"> BEST METALS PACK</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="row">
                            <div class="col-12">
                               <div class="service-info bg-white shadow p-5">
                               <h4>Equity</h4>
                                <p class="text-muted mb-2 font-italic">Equity market or stock market is the market for trading equity instruments. We at
                                    Green Corner Advisory guide traders and investors to achieve their financial goals
                                    in stipulated time. Our past records have shown that we provide high accuracy level
                                    to our clients in terms of tips and recommendations. We generate high level signals
                                    after in-depth research, technical analysis and charting techniques. We provide
                                    subscription based services to our clients.</p>
                                <p class="text-muted mb-2 font-italic">We provide tips in NSE cash segment after rigorous data analysis compiled with
                                    technical analysis. We provide timely updates to our clients with the help of our
                                    super fast Whatsapp, SMS and E-mail delivery service. Our tips provide a huge
                                    support to traders who need real time analysis for perfect entry and exit into the
                                    trades. Most of our trades are intraday recommendations which are closed within one
                                    trading day which helps to avoid over-night risk to our clients.</p>
                                <p class="text-muted mb-2 font-italic">Equity Tips is ideal for:
                                    Traders who work on intraday basis to open and close the recommendation on the same
                                    day
                                    Medium or low risk traders who are willing to trade on intraday basis multiple times
                                    during the day
                                    Traders who are prompt and responsive on the trades provided on SMS, E-mail and
                                    Whatsapp.</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end -->
    <!-- How to work -->
   <?php
   include 'Includes/howitworks.php';
   ?>
    <!-- How to work end -->

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

     <!-- green corner info start -->
     <?php
    include 'Includes/greencornerinfo.php';
    ?>
    <!-- green corner info end -->


    <!-- footer section start-->
    <?php
    include 'Includes/footer.php';
    ?>
    <!-- footer section end-->


</body>

</html>