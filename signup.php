<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diffler - NFT Marketplace </title>
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="webstoragestyle.css">
    <script src="webstoragescript.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>

<body>
    <div class="main">
        <?php include 'header.php' ?>
        <!-- ***** Signup Area Start ***** -->
        <section class="author-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7">
                        <!-- Intro -->
                        <div class="intro text-center">
                            <span>Signup</span>
                            <h3 class="mt-3 mb-0">Create an Account</h3>
                            <p>Create your account using your email and password.</p>
                        </div>
                        <!-- Item Form -->
                        <form class="item-form card no-hover">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <input type="email" id="email" placeholder="Enter your email" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <input type="password" id= "pw" placeholder="Enter your password" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input id="rgstr_btn" type="submit" value="Register" onclick="store()">
                                </div>
                                <div class="col-12">
                                    <span class="d-block text-center mt-4">Already have an account?<br><a href="login.php">Login</a></span>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <div class="other-option">
                                        <span class="d-block text-center mb-4">Or</span>
                                        <!-- Social Icons -->
                                        <div class="social-icons d-flex justify-content-center">
                                            <a class="facebook" href="#">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="twitter" href="#">
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="google-plus" href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Signup Area End ***** -->
        <?php include 'footer.php'?>
        <!--====== Modal Search Area Start ======-->
        <div id="search" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Search <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 align-self-center">
                                <div class="row">
                                    <div class="col-12 pb-3">
                                        <h2 class="search-title mt-0 mb-3">What are you looking for?</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group mt-4">
                                        <input type="text" placeholder="Enter your keywords">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group align-self-center">
                                        <button class="btn btn-bordered-white mt-3">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Search Area End ======-->

        <!--====== Modal Responsive Menu Area Start ======-->
        <div id="menu" class="modal fade p-0">
            <div class="modal-dialog dialog-animated">
                <div class="modal-content h-100">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="far fa-times-circle icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Modal Responsive Menu Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/vendor/all.min.js"></script>
    <script src="assets/js/vendor/slider.min.js"></script>
    <script src="assets/js/vendor/countdown.min.js"></script>
    <script src="assets/js/vendor/shuffle.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/main.js"></script>

    <!--CUSTOM ALERTS-->
    <script src="sweetalert2.all.min.js"></script>
</body>

</html>