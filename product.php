<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.2.js"
        integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"
        integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
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
                <a href="product.php">Product</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->

    <!-- product section start -->
    <section id="products">
        <div class="container ">
            <div class="row">
                <h2 class="text-center ">Products</h2>
            </div>
            <!-- <div class="container bg-white shadow"> -->
            <div class="row shadow bg-white pt-3" id="product-tabs">
                <ul class="nav nav-tabs d-flex justify-content-evenly   py-3">
                    <li class="nav-item tabsss">
                        <button href="#enquity" class="nav-link  text-secondary fw-bold "
                            data-bs-toggle="tab">Enquity</button>
                    </li>
                    <li class="nav-item">
                        <button href="#mcx" class="nav-link text-secondary fw-bold  "
                            data-bs-toggle="tab">MCX</button>
                    </li>
                    <li class="nav-item">
                        <button href="#index" class="nav-link text-secondary fw-bold  "
                            data-bs-toggle="tab">INDEX</button>
                    </li>
                    <li class="nav-item">
                        <button href="#deliverer" class="nav-link text-secondary fw-bold "
                            data-bs-toggle="tab">DELIVERER</button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane  show fade" id="enquity">
                        <div class="row py-4">
                            <div class="col-lg-2 col-sm-12  mb-lg-0 mb-5">
                                <div class="sidetab">
                                    <ul class="nav nav-tabs flex-column">
                                        <li class="nav-item">
                                            <a href="#equity_cash"
                                                class="nav-link bg-success  shadow text-light m-2 py-3"
                                                data-bs-toggle="tab">Equity Cash</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#equity_future" class="nav-link bg-white text-dark shadow m-2 py-3"
                                                data-bs-toggle="tab">Equity Future </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#equity_option"
                                                class="nav-link bg-white text-dark  shadow m-2 py-3"
                                                data-bs-toggle="tab">Equity Option</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-12 bg-white shadow p-3" id="enquity-info">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success  position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white  rounded-circle">
                                                N</p>
                                            <div class="normal pt-5">
                                                <p>Normal</p>
                                            </div>
                                          
                                                <div class="button  my-2">
                                                    <button class="btn btn-secondary  ">1 Month-rs 9,999</button>
                                                </div>
                                                <div class="button my-2">
                                                    <button class="btn btn-secondary  ">3 Month-rs 24,999</button>
                                                </div>
                                                <div class="button my-2">
                                                    <button class="btn btn-secondary">6 Month-rs 39,999</button>
                                                </div>
                                                <div class="button my-2">
                                                    <button class="btn btn-secondary">12 Month-rs 59,999</button>
                                                </div>
                                           
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class="bg-success position-absolute top-0 start-50 rounded-circle translate-middle py-3 px-4 fw-bold fs-5 text-white">
                                                H</p>
                                            <div class="normal  pt-5">
                                                <p>PREMIUM</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 14,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 29,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 49,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 69,999</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                H</p>
                                            <div class="normal  pt-5">
                                                <p>HNI</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 34,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 66,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 85,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 1,10,000</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane active show fade" id="mcx">
                        <div class="row py-4">
                            <div class="col-lg-2 col-sm-12">
                                <div class="sidetab">
                                    <ul class="nav nav-tabs flex-column">
                                        <li class="nav-item">
                                            <a href="#mcx1" class="nav-link bg-success  text-light m-2  py-3"
                                                data-bs-toggle="tab">MCX</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#mcx-booleon" class="nav-link bg-white  text-dark shadow m-2 py-3 "
                                                data-bs-toggle="tab">MCX BOOLIONS </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#mcx-metals" class="nav-link bg-white text-dark shadow m-2 py-3"
                                                data-bs-toggle="tab">MCX Metals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#mcx-energy" class="nav-link bg-white text-dark shadow m-2 py-3"
                                                data-bs-toggle="tab">MCX ENERGY</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-12 bg-white shadow p-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white  rounded-circle">
                                                N</p>
                                            <div class="normal  pt-5">
                                                <p>Normal</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 9,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 24,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 39,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 59,999</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                P</p>
                                            <div class="normal  pt-5">
                                                <p>PREMIUM</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 14,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 29,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 49,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 69,999</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 mb-lg-0 mb-5">
                                        <div class="card text-center py-3  position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                H</p>
                                            <div class="normal  pt-5">
                                                <p>HNI</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 34,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 66,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 85,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 1,10,000</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="index">
                        <div class="row py-4">
                            <div class="col-lg-2 col-sm-12 mb-0 mb-sm-5">
                                <div class="sidetab">
                                    <ul class="nav nav-tabs flex-column">
                                        <li class="nav-item">
                                            <a href="#index1" class="nav-link bg-success  text-light m-2 "
                                                data-bs-toggle="tab">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 col-sm-12 bg-white shadow p-3">
                                <div class=" ">
                                    <div class="col-lg-6">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                H</p>
                                            <div class="normal  pt-5">
                                                <p>HNI</p>
                                            </div>
                                            <div class="button  my-2">
                                                <button class="btn btn-secondary">1 Month-rs 34,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">3 Month-rs 66,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">6 Month-rs 85,999</button>
                                            </div>
                                            <div class="button my-2">
                                                <button class="btn btn-secondary">12 Month-rs 1,10,000</button>
                                            </div>
                                            <div class="info">
                                                <p>*Above plans are excluding GST</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="deliverer">
                        <div class="row py-4">
                            <div class="col-lg-2">
                                <div class="sidetab">
                                    <ul class="nav nav-tabs flex-column">
                                        <li class="nav-item">
                                            <a href="#long-term"
                                                class="nav-link bg-success  text-light m-2 fs-6 py-3 shadow  "
                                                data-bs-toggle="tab">LONG TERM AND FUTURE PLANS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-10 bg-white shadow p-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card text-center py-3 position-relative">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                N</p>
                                            <div class="normal  pt-5">
                                                <p>NORMAL</p>
                                            </div>
                                            <div class="info text-center">
                                                <h5>FEATURES</h5>
                                                <p>Minimum Investment of ₹ 2 Lakhs</p>
                                                <p>Get 2 to 3 tips in a week</p>
                                                <p>And get monthly 10% to 12% minimum returns</p>
                                                <p>PRICE</p>
                                                <p>2 Months - ₹ 14,000 + GST</p>
                                                <p>Note - 5% of the profit to be paid if the returns are above 25%
                                                    in a month.</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card text-center py-3 position-relative ">
                                            <p
                                                class=" bg-success position-absolute top-0  start-50    translate-middle py-3 px-4 fw-bold fs-5 text-white rounded-circle">
                                                P</p>
                                            <div class="normal  pt-5">
                                                <p>PREMIUM</p>
                                            </div>
                                            <div class="info text-center">
                                                <h5>FEATURES</h5>
                                                <p>Minimum Investment of ₹ 5 Lakhs</p>
                                                <p>Get 2 to 3 tips in a week</p>
                                                <p>And get monthly 10% to 12% minimum returns</p>
                                                <p>PRICE</p>
                                                <p>2 Months - ₹ 21,000 + GST</p>
                                                <p>Note - 5% of the profit to be paid if the returns are above 25%
                                                    in a month.</p>
                                            </div>
                                            <div class="buy-now">
                                                <button class="btn btn-success">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </section>
    <!-- product section end -->
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

    <script>ocument).ready(function () {
                $('#tabs').tabs();
            });
    </script>
</body>

</html>