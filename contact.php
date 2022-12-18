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
    <img src="assets/images/contact-banner.jpg" class="img-fluid">
    <!-- banner end -->

    <!-- breadcrumb start -->
    <div class="breadcrumbsection">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="product.php.php">Contact</a>
            </li>
        </ul>
    </div>
    <!-- breadcrumb end -->
    
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