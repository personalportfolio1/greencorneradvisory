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
    <img src="assets/images/product-banner.jpg" class="img-fluid">
    <!-- banner end -->

    <!-- breadcrumb start -->
    <div class="breadcrumbsection">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="faq.php">FAQ</a>
            </li>
        </ul>
    </div>

    <!-- faq start -->
<section id="faq">
    <div class="container">
        <div class="row">
            <h2 class="text-center">FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        <div class="row">
            <div class="accordion" id="accordionexample">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white text-dark" data-bs-toggle="collapse" data-bs-target="#faqs1">
                            <p>What are the timings of Equity Market?</p>
                        </div>
                </div>
                <div id="faqs1" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>The timings for equity market is morning 9 am to 3.30 pm.
                            Market opens at 9am called as pre-open till 9.07am. Thereafter, normal market resumes
                            from 9.15am to 3.30pm.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button  bg-white text-dark" data-bs-toggle="collapse" data-bs-target="#faqs2">
                            <p>What are the timings for commodities market??</p>
                        </div>
                </div>
                <div id="faqs2" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Agricultural Commodities: 10am to 5pm
Bullion/Metals/Crude oil and internationally linked Agri commodities: 10am to 11.30pm</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white  text-dark" data-bs-toggle="collapse" data-bs-target="#faqs3">
                            <p>What are Derivatives?</p>
                        </div>
                </div>
                <div id="faqs3" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Derivatives are financial instruments that derive their value from the underlying asset. The most commonly used derivative instruments traded in India are: Futures and Options.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white  text-dark" data-bs-toggle="collapse" data-bs-target="#faqs4">
                            <p>What do you understand by Security Market? What are the different types of Security Market?</p>
                        </div>
                </div>
                <div id="faqs4" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Security market is a place where financial securities are traded (Bought and sold).

The different types of security market are:
    Debt Market- Corporate Money Market, Government securities & Corporate Debt market.
Equity Market- Primary Market & Secondary Market
Derivative Market- Futures & Options Market.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button  bg-white text-dark" data-bs-toggle="collapse" data-bs-target="#faqs5">
                            <p>What is Beta of an asset?</p>
                        </div>
                </div>
                <div id="faqs5" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Beta is a method of measuring systematic risk of an asset. It shows the sensitivity of how price of a security responds to changes in its underlying index. Beta is a way of measuring systematic risk of any asset. It shows how price of a security responds to changes in its respective index price. It indicates the extent of movement or price of a stock with respect to the movement of index in market. Assets that are riskier than average will have Beta greater than 1 and assets that are safer than average will have Beta lower than 1. Risk-free assets will have a Beta value of 0.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white  text-dark" data-bs-toggle="collapse" data-bs-target="#faqs6">
                            <p>What do you mean by ‘Bullish view on the market’?</p>
                        </div>
                </div>
                <div id="faqs6" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Bullish view on the market indicates that the traders & investors are expecting the market to rise in the near, short or long term. Positions are usually taken depending on the view a trader has on the market.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white  text-dark" data-bs-toggle="collapse" data-bs-target="#faqs7">
                            <p>What do you mean by ‘Bearish view on the market’?</p>
                        </div>
                </div>
                <div id="faqs7" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>Bearish view on the market indicates that the traders & investors are expecting the market to fall in the near, short or long term. Positions are usually taken depending on the view a trader has on the market.</p>
                    </div>
                </div>
                <div class="accordion-item border-0">
                    <h2 class="accordion-header ">
                        <div class="accordion-button bg-white  text-dark" data-bs-toggle="collapse" data-bs-target="#faqs8">
                            <p>Can you sell shares in the cash market if you don’t hold them?</p>
                        </div>
                </div>
                <div id="faqs8" class="accordion-collapse collapse" data-bs-parent="accordionexample">
                    <div class="accordion-body">
                        <p>This process is called short-selling. Investors and traders are allowed to sell shares in the cash market only on intra-day basis, i.e., short sellers cannot hold positions for the next day and will have to square off their short positions on the same day of execution.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    </div>
</section>
    <!-- faq end -->
    
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