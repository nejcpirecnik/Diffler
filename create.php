<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Diffler - NFT Marketplace </title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="main">
        <?php include 'header.php' ?>
        <!-- ***** Create Area Start ***** -->
        <section class="author-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-4">
                        <!-- Author Profile -->
                        <div class="card no-hover text-center">
                            <div class="image-over">
                                <img class="card-img-top" src="assets/img/content/auction_2.jpg" alt="">
                                <!-- Author -->
                                <div class="author">
                                    <div class="author-thumb avatar-lg">
                                        <img class="rounded-circle" src="assets/img/content/avatar_8.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Card Caption -->
                            <div class="card-caption col-12 p-0">
                                <!-- Card Body -->
                                <div class="card-body mt-4">
                                    <h5 class="mb-3">Artnox</h5>
                                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="ZqpthncaYTsd0579hasfu00st">
                                        <div class="input-group-append">
                                          <button><i class="icon-docs"></i></button>
                                        </div>
                                    </div>
                                    <!-- Social Icons -->
                                    <div class="social-icons d-flex justify-content-center my-3">
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
                                        <a class="vine" href="#">
                                            <i class="fab fa-vine"></i>
                                            <i class="fab fa-vine"></i>
                                        </a>
                                    </div>
                                    <a class="btn btn-bordered-white btn-smaller" href="#">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <!-- Intro -->
                        <div class="intro mt-5 mt-lg-0 mb-4 mb-lg-5">
                            <div class="intro-content">
                                <span>Share your creation with the world!</span>
                                <h3 class="mt-3 mb-0">Create Item</h3>
                            </div>
                        </div>
                        <!-- Item Form -->
                        <form class="item-form card no-hover">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group form-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="inputGroupFile01">
                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="name" placeholder="Item Name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="textarea" placeholder="Description" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="price" placeholder="Item Price" required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="royality" placeholder="Royality" required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Size" required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="copies" placeholder="No of Copies" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Put on Sale</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Instant Sale Price</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Unlock Purchased</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn w-100 mt-3 mt-sm-4" type="submit">Create Item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Create Area End ***** -->
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
</body>

</html>