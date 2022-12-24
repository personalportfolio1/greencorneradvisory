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
        <ul class="breadcrumb ">
            <li class="breadcrumb-item ">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="kycform.php">KYC</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->
    <!-- bank setails start -->
    <div class="container bank-details">
        <div class="row">
            <p class="py-5">You can make Cash Deposits and Bank Transfers to either of the following accounts, to use
                our services.</p>
        </div>
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                    <img src="assets/images/icici.bank-card.jpg" class="img-fluid ">
            </div>
            <div class=" col-lg-8 col-md-6 d-flex align-items-stretch image-description">
                    <ul>
                        <li>ACCOUNT NAME – GREEN CORNER ADVISORY</li>
                        <li>ACCOUNT TYPE – CURRENT ACCOUNT</li>
                        <li>ACCOUNT NUMBER – 0000000000000
                        </li>
                        <li>IFSC CODE – ICIC00000000</li>
                    </ul>
            </div>
        </div>
        <div class="row my-4">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch ">
                    <img src="assets/images/bob.jpg" class="img-fluid ">
            </div>
            <div class="col-lg-8 col-md-6 d-flex align-items-stretch bob">
                    <ul>
                        <li>ACCOUNT NAME – GREEN CORNER ADVISORY
                        </li>
                        <li>ACCOUNT TYPE – CURRENT ACCOUNT
                        </li>
                        <li>ACCOUNT NUMBER – 000000000000000000
                        </li>
                        <li>IFSC CODE – BANK0BANK
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- bank setails end -->
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