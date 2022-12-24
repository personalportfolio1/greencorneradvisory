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
    <img src="assets/images/rpm-banner.jpg" class="img-fluid">
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

    <!-- risk profile management start -->
    <section id="risk-profile">
        <div class="container">
            <div class="row align-items-center">
                <h3 class="text-center">RISK PROFILE MANAGEMENT</h3>
            </div>
            <div class="row pt-3">
                <p>The questionnaire returns a score on the basis of which clients fall in either of the category
                    mentioned below. This assessment is made solely on the basis of the financial situation of the
                    client and the answers selected by him / her.</p>
                <h4 class="py-3">Risk assessment and product Recommendations</h4>
                <p>The maximum total is 70, if client scores less than 25 he is a low risk appetite client, if client
                    scores between 25-44, he is a medium risk appetite client and if scores above 45 he is high risk
                    appetite client.</p>
                <p class="py-2"> Low risk appetite client will not be offered any services.</p>
                <h4>Risk Based Classification of the Services</h4>
                <div class="tables">
                    <table class=" table table-bordered table-hover table-striped">
                        <thead class="bg-success text-white text-center">
                            <tr>
                                <th>SI No.</th>
                                <th>Product </th>
                                <th>Range</th>
                                <th>Risk Classification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>All Normal Plans</td>
                                <td>0-18</td>
                                <td>Low</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>All Normal Plus & premium plans</td>
                                <td>19-36</td>
                                <td>Medium</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>All Premium & Premium HNI Plans</td>
                                <td>37-57</td>
                                <td>Moderate</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>All Premium & Premium HNI Plans</td>
                                <td>>57</td>
                                <td>High</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- risk profile management end -->
    <!-- profile start -->
    <div class="profile">
        <div class="container">
            <div class="row align-items-center">
                <h3 class="text-center">IDENTIFYING YOUR INVESTMENT PROFILE</h3>
            </div>

            <div class="row py-4 my-3 id-details bg-white">
                <h4>IDENTITY DETAILS</h4>
                <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-md-6  ">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Number">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>1. What is your Age Group?</p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            2. What is your income source?</p>
                        <p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>3. How many financially dependent persons you have?</p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            4. What is your income range per annum?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>5. What is your total asset value?</p>
                    </div>
                    <div class="col-md-6">
                        <p >6. What is your total liability value ?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>7. What is your investment capital ?</p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            8. What percentage of monthly income is allocated to all EMI ?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p >9. Which investment avenue you are quite experienced with?</p>
                    </div>
                    <div class="col-md-6">
                        <p >10. Have you planned for expenses like child’s higher education, marriage,
                            purchase of house,
                            medical, hospitalization, retirement etc.?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>11. What is your investment horizon and when do you want to start withdrawing the money from
                            your portfolio ?</p>                    </div>
                    <div class="col-md-6">
                        <p>12. What is your experience with investment in stock market &/or commodity market ?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="py-2">13. What would you do if your investment amount is making loss ?</p>
                    </div>
                    <div class="col-md-6">
                        <p >14. Which of the following best describes you as an investor?</p>
                    </div>
                </div>
                <div class="row">
                <div class="buttons">
                    <button class="btn btn-success text-white">CALCULATE</button>
                    <hr>
                </div>
                <div class="declaration">
                    <h4>APPLICANT DECLARATION</h4>
                    <span><input type="checkbox" value="">
                        <span>
                            I hereby declare that the details furnished above are true and correct to the best of my
                            knowledge and
                            belief and
                            I undertake to inform you of any changes therein, immediately. In case any of the above
                            information is
                            found to be false
                            or untrue or misleading or misrepresenting, I am aware that I may be held liable for it. I
                            hereby
                            declare that
                            I am not making this application for the purpose of contravention of any Act, Rules,
                            Regulations or any
                            statute of
                            legislation or any notifications/directions issued by any governmental or statutory
                            authority from time
                            to time.
                        </span>
                </div>
                <div class="button-sub text-center my-3">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
                
            </div>
            
        </div>
    </div>
    <!-- profile end -->
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