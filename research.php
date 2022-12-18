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
                <a href="research.php">Research</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->

    <!-- research overview start -->
    <section id="research-overview" class="text-center pt-5">
        <p class="overview">Research Overview</p>
        <div class="row py-3" id="overview-info">
            <div class="col-10 mx-auto">
                <p>Our research team uses data science fundamental and technical research to generate the best quality
                    signals for all big and small investors globally. Stock analysis also involves EIC (Economy,
                    Industry
                    and Company) approach. Buy and sell recommendation of various companies are generated on a regular
                    basis
                    to serve our customers with the best possible support. We also provide rich research reports on
                    timely
                    basis to our customers to enhance their analytics.
                </p>
            </div>
        </div>
    </section>
    <!-- research overview end -->

    <!-- research focus start -->
    <section id="research-overview" class="text-center">
        <p class="overview">Research Focus</p>
        <div class="row py-3" id="overview-info">
            <div class="col-10 mx-auto">
                <p>Our recommendations are generated on the basis of time and tested technical research analysis models
                    to generate the best possible signals for our customers.</p>
            </div>
        </div>
        <div class="container py-5">
            <div class="row  research-image">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <img src="assets/images/research-image.png" class="img-fluid rounded">
                </div>
                <div class="col-lg-8 col-md-6 info d-flex align-items-stretch ">
                    <div class="information">
                        <p>Our core areas of expertise are Equities, Commodities, Currencies, Derivatives and
                            International
                            market research. Our views are purely based of technical analysis and are independent,
                            unbiased
                            and balanced.<br><br>
                            Our team understands that every investor has a different need and hence our comprehensive
                            approach helps our customers meet their financial goals. Our time to time research reports
                            helps
                            our customers understand their investment decisions wisely.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- research focus end-->

    <!-- trading principles start -->
    <section class="bg-light" id="Trade-principle">
        <div class="container">
            <div class="title text-center">
                <h3>Trading Principles</h3>
            </div>
            <div class="row">
                <div class="first text-center">
                    <h2 class="pt-4">1</h2>
                    <p>Always invest with a margin of safety</p>
                </div>
                <div class="first text-center">
                    <h2>2</h2>
                    <p>Expect volatility and Profit from it</p>
                </div>
                <div class="first text-center">
                    <h2>3</h2>
                    <p>Know what kind of investor you are</p>
                </div>
                <div class="first text-center">
                    <h2>4</h2>
                    <p>Use equal risk and reward in each trade</p>
                </div>
                <div class="first text-center">
                    <h2>5</h2>
                    <p>Strictly follow stop loss levels</p>
                </div>
                <div class="first text-center">
                    <h2>6</h2>
                    <p>Strictly follow the levels provided in each signal</p>
                </div>
                <div class="first text-center">
                    <h2>7</h2>
                    <p>Keep patience while investing in stock market</p>
                </div>
            </div>

            <!-- client-trusted start-->
            <?php
                     include 'Includes/client-trust.php';
              ?>
            <!-- client-trusted end-->
        </div>
    </section>
    <!-- trading principles end -->

     <!-- contact form start -->
    <div class="container-fluid">
    <?php
    include 'Includes/contactus.php';
    ?>
    </div>
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