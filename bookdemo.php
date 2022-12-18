<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
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

    <!-- carousel start -->
    <?php
    include 'Includes/carousel.php';
    ?>
    <!-- carousel end -->





    <div id="demo ">
        <div class="modal  " id="modal">
            <div class="modal-dialog modal-xl ">
                <div class="modal-content bg-dark text-white p-3">
                    <div class="header ">
                        <h4 class=" fw-bold text-center  pt-4">BOOK A DEMO NOW <h4>
                    </div>
                    <div class="modal-body">
                        <div class="text" id="demo-info">
                            <p>Experience Green Corner Advisory products with a personalized demo
                            </p>
                            <p class="pb-3">Fill in your details below and we will contact you for a personalized
                                presentation at a
                                time and venue convenient to you.

                                Alternatively you can call on +919122442032 to speak to a sales specialist now. The
                                demos are not charged.</p>
                        </div>
                        <div class="bookdemoform" id="demo-form">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="input-box">
                                                <input type="text" name="name" required>
                                                <label>Name</label>
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="state" required>
                                                <label>State</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="input-box">
                                                <input type="text" name="mobile No." required>
                                                <label>Mobile No.</label>
                                            </div>
                                            <div class="input-box">
                                                <input type="text" name="pincode" required>
                                                <label>Pincode</label>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="input-box">
                                                <input type="text" name="city" required>
                                                <label>City</label>
                                            </div>
                                            <div class="select-box d-flex ">
                                                <select class="form-control " required>
                                                    <option value="0">Category</option>
                                                    <option value="equity-cash">EQUITY CASH</option>
                                                    <option value="equity-future">EQUITY FUTURE</option>
                                                    <option value="eqity-option">EQUITY OPTION</option>
                                                    <option value="equity-mcx">EQUITY MCX</option>
                                                    <option value="mcx-boolean">MCX BULLION</option>
                                                    <option value="mcx-metals">MCX METALS</option>
                                                    <option value="mcx-energy">MCX ENERGY</option>
                                                    <option value="index">INDEX</option>
                                                </select>
                                                <div class="close-btn text-end ">
                                                    <button type="button"
                                                        class="close bg-dark text-light border-0 fs-2 ms-3  "
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                        </div>
                        </form>
                        <div class="row">
                            <span><input type="checkbox" required><span>
                                    <span style="color:green;">By signing up you agree to being contact by Green
                                        Corner Advisory through sms, email
                                        or whatsapp. Any information you give us is held with the utmost care
                                        and
                                        security.
                                        Trade Show Advisory does not sell, rent or loan any identifiable
                                        information
                                        of
                                        customers or prospects to any third party.</p><span>
                        </div>
                    </div>
                    <div class="footer" id="submit-btn">
                    <button class="btn btn-light m-3 ">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Submit
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <script>
        $(document).ready(function(){
$('.close').click(function(){
$('#demo').fadeToggle();
});
        }); -->

    </script>

</body>

</html>