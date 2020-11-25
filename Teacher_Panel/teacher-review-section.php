<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="teacher-review-section.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>

<!--START OF PROFILES SECTION -->
   <?php include "./header.php" ?>

<section class="teacher-panel">
    <div class="container user-profile">
        <div class="row border py-4">
            <div class="col-12  col-md-5 profileBox text-center">                    
                <img src="reviewPic-5.jpeg" alt="" class="img-fluid mt-3">
                <p class="h3 text-center mb-4">John Doe</p>
                <div class="stars mt-3">
                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><i class="fas fa-eye mr-2"></i>Popularity: <span>400</span></li>
                    <li><i class="fas fa-user-graduate mr-2"></i>Students: <span>20</span></li>
                </ul>
                <hr>
                <div class="personality">
                    <span>Friendly</span>
                    <div class="progress mb-3">
                        <div class="progress-bar  " style="width:70%">70%</div>
                    </div>
                    <span>Understanding</span>
                    <div class="progress mb-3">
                        <div class="progress-bar " style="width:60%">60%</div>
                    </div>
                    <span>Seriousness</span>
                    <div class="progress mb-3">
                        <div class="progress-bar " style="width:90%">90%</div>
                    </div>
                    <span>Time Management</span>
                    <div class="progress mb-3">
                        <div class="progress-bar " style="width:57%">57%</div>
                    </div>
                    <span>Strictness</span>
                    <div class="progress mb-3">
                        <div class="progress-bar " style="width:40%">40%</div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-md-7 reviewBox">
                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>

                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>

                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>

                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>

                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>

                <div class="media border p-3">
                    <img src="reviewPic-5.jpeg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                    <div class="media-body">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                            <h4>John Doe <small><i>(February 19, 2016)</i></small></h4>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="stars mt-1">
                                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                                </div>
                            </div>   
                        </div>
                        <div class="row ml-1">
                            <span> <p><i class="fas fa-quote-left fa-2x mr-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> </span>
                        </div>
                    </div>
                </div>
            </div>   

        </div>
    </div>
</section>


 <?php include "./footer.php" ?>






<!--Javascipt-->
    <script src="./js/script.js"></script>
    <!--JAVSCRIPT CDN OF BOOTSTRAP-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>