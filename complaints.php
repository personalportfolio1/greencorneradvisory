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
    <img src="assets/images/complaints-banner.jpg" class="img-fluid">
    <!-- banner end -->

    <!-- breadcrumb start -->
    <div class="breadcrumbsection">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="product.php">Complaints</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->
    <!-- complaint-table start -->
    <div class="container complaint-table">
        <div class="row ">
            <h3 class="text-center">COMPLAINT BOARD</h3>
        </div>
        <div class="row py-4 bg-light">
            <div class="table-of-complaints">
                <table class="table tabled-striped table-hover table-bordered my-3">
                    <thead class="bg-success ">
                        <tr>
                            <th>SI No.</th>
                            <th>Received Form</th>
                            <th>PENDING AT END OF LAST MONTH</th>
                            <th>RECEIVED</th>
                            <th>RESOLVED</th>
                            <th>TOTAL PENDINGS</th>
                            <th>PENDING COMPLAINTS >3MONTHS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Directly from Investor</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>  Other Sources (if any)</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
     
    </div>
    <!-- form start -->
   <div class="form-start">
    <div class="container ">
        <div class="row text-center">
            <h4>WE ARE HERE TO ASSIST YOU!</h4>
            <p class="py-3 fs-3">Please complete the form below for your complaints.</p>
        </div>
        <div class="row bg-white">
            <div class="forms">
                <div class="row py-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control mb-3" placeholder="Your Email">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3" placeholder="Your Number">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3" placeholder="Name of the executive">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control mb-3" placeholder="Name of the executive">
                    </div>

                </div>
                <div class="submit my-4  text-center">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
       </div>
   </div>
        <!-- form end -->
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