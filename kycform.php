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
    <img src="assets/images/kyc-banner.jpg" class="img-fluid">
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

    <!-- kyc form start -->
    <section id="kyc-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h3 class="text-center fw-bold">FILL YOUR KYC HERE</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container   p-5 my-3" id="kycForm">
            <div class="kyc-details ">
                <div class="row">
                    <h4 class="pb-3">IDENTITY DETAILS</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-field">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Number" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="dd-mm-yy" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select class="form-control" required>
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="input-field">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="fathe/Spouse Name" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select class="form-control" required>
                                                <option>Select</option>
                                                <option>Married</option>
                                                <option>Single</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <select class="form-control" required>
                                                <option>Select</option>
                                                <option>S-service</option>
                                                <option>Private Sector</option>
                                                <option>Public sector</option>
                                                <option>Government Sector</option>
                                                <option>Professional</option>
                                                <option>Self Employed</option>
                                                <option>Retired</option>
                                                <option>Housewife</option>
                                                <option>Student</option>
                                                <option>B-bussiness</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4 class="title pb-3">PROOF OF IDENTITY</h4>
                    <div class="col-md-6 col-sm-12">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Aadhar Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="PAN Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="fathe/Spouse Name" required>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4 class="address pb-3">PROOF OF ADDRESS</h4>
                    <div class="col-md-6 col-sm-12">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Door/Apartment/Suite" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pincode" required>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Street/Address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="State/Province" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Country" required>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="row">
                        <h4 class="pb-2">PLEASE UPLOAD THE FOLLOWING DOCUMENTS</h4>

                    </div>
                    <div class="row py-4 " id="file">

                        <div class="col-md-3 mt-3 mt-lg-0">
                            <div class="file">
                                <input type="file" class="form-control-file " placeholder="Choose File" required>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3 mt-lg-0">
                            <div class="file">
                                <input type="file" class="form-control-file " placeholder="Choose File" required>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3 mt-lg-0">
                            <div class="file">
                                <input type="file" class="form-control-file " placeholder="Choose File" required>
                            </div>
                        </div>
                        <div class="col-md-3 mt-3 mt-lg-0">
                            <div class="file">
                                <input type="file" class="form-control-file " placeholder="Choose File" required>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <h4>APPLICANT DECLARATION</h4>
                    <span><input type="checkbox" required>
                      <span class="agree-info">  I hereby declare that the details furnished above are true and correct to the best of my
                        knowledge and belief and
                        I undertake to inform you of any changes therein, immediately. In case any of the above
                        information is found to be false
                        or untrue or misleading or misrepresenting, I am aware that I may be held liable for it. I
                        hereby declare that
                        I am not making this application for the purpose of contravention of any Act, Rules, Regulations
                        or any statute of
                        legislation or any notifications/directions issued by any governmental or statutory authority
                        from time to time.
                    </span>
                     </span>
                    <div class="submit-btn text-center my-3 kyc-submit-bnt" >
                        <button class="btn  ">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>

        </div>

        </div>
    </section>
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

    <!-- kyc form end -->

</body>

</html>