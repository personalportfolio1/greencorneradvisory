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
                <a href="career.php">Career</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->

    <!-- form start -->
    <section id="contact-form">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="contact-need text-center">
                    <h6 class="text-success fw-bold">fill form</h6>
                    <h4 class="pb-1">CAREER WITH US</h4>
                    <div class="line5" style="border-bottom:3px solid green;width:90px;margin-left:500px;">
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-4  " id="contact-details">
                        <div class="row pt-3 fs-4">
                            <p class="text-success">Current Opening</p>
                        </div>
                        <div class="row input-fields">
                            <div class="col-12">
                                <form>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="HR Manager/HR Executive">
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="text" class="form-control" placeholder="Sales Manager">
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="text" class="form-control" placeholder="Sales Executive">
                                    </div>
                                    <div class="form-group my-3">
                                        <input type="text" class="form-control" placeholder="Graphic Designer">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mt-md-0 mt-5 ms-5" id="form-details">
                        <div class="form-input">
                            <form class=" p-4">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" placeholder="Your Name"
                                            class="rounded-pill form-control mb-3 ">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" placeholder="Your Email"
                                            class="rounded-pill form-control mb-3">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" placeholder="Your Number"
                                            class="rounded-pill form-control mb-3">
                                    </div>
                                    <div class="col-6">
                                        <select placeholder="Select Service" class="rounded-pill form-control mb-3">
                                            <option>Industry Tips</option>
                                            <option>Stock Options</option>
                                            <option>Nifty Tips</option>
                                            <option>HNI Enquity</option>
                                            <option>Stock Options</option>
                                            <option>Commodity Pack</option>
                                            <option>Base metals Pack</option>
                                            <option>Boolean metals Pack</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <textarea placeholder="Message" class="form-control mb-3 p-5">
                                </textarea>
                                </div>
                                <div class="button text-center" id="submit-btn">
                                    <button class="btn  mt-5 ">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    


    <!-- footer section start-->
    <?php
    include 'Includes/footer.php';
    ?>
    <!-- form end -->

</body>

</html>