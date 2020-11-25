<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./teacher-profile-view.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>
   <?php include "./header.php" ?>
<!--START OF PROFILES SECTION -->


<section class="student-panel">
    <div class="container user-profile">
        <div class="row">
            <div class="col-md-4  profileBox text-center">
                <div class="profilePicture">                
                    <img src="reviewPic-5.jpg" alt="" class="img-fluid mt-3">
                </div>
                <p class="h3 d-inline-flex text-center mt-2 mb-0">John Doe</p>
                <span class="ml-2 d-inline-flex verified" data-toggle="tooltip" data-placement="top" title="verified"><img src="./verified.png" alt="Verified" style="width:22px"></span>
                
                <div class="stars mt-3">
                    <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                </div>
                <hr>
                <div class="buttons d-block">
                    <a href="#/" class="btn text-decoration-none">Enroll</a>
                    <a href="#/" class="btn text-decoration-none">Write Review</a>
                    <hr>
                </div>
               
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


            <div id="divider"></div>


            <div class="col-md-7 editBox ml-md-4 mt-md-0 mt-4">
                <!-- Nav pills -->

                <ul class="nav nav-pills">
                    <li class="nav-item mr-4">
                        <a class="nav-link active" data-toggle="pill" href="#profile">
                            <i class="fas fa-user "></i>
                            <span class="badge badge-danger">7</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#reviews">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    
                    <!-- Profile -->

                    <div class="tab-pane container active" id="profile">    
                        <div class="row mt-4 text-dark">
                            <div class="col-sm-12 col-lg-6 mt-2">
                            
                                <p><span class="font-weight-bold">Bio :</span> Software Engineer, Programmer</p>
               
                            </div>
    
                            <div class="col-sm-12  col-lg-6 mt-2">
                                <p><span class="font-weight-bold">Hobbies :</span> Football, cricket, mobile games</p>
                            
                            </div>   
                           

                            <div class="col-sm-12  col-lg-6 mt-2">
                                <p><span class="font-weight-bold">Phone no :</span> +977 9808806688</p>
                        

                            </div>

                            <div class="col-sm-12  col-lg-6 mt-2">
                                <p><span class="font-weight-bold">Subjects :</span> Science, Math, Computer</p>
                              
                            </div>


                            <div class="col-sm-12  col-lg-6 mt-2">
                                <p><span class="font-weight-bold">Available Address : </span>Maipi, Thamel, Jamal</p>
                     
                            </div>


                            <div class="col-sm-12  col-lg-6 mt-2">
                                <p><span class="font-weight-bold">Ideology : </span>I believe in myself.</p>
        
                            </div>

                           

                        </div>
   

                    </div>

                    <!-- RECENT ACTIVITIES -->
                    
                    <div class="tab-pane container fade" id="reviews">
                       
                        <div class="reviewBox mt-2">
                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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

                            <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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
                                <hr>
                            </div>

                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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
                                <hr>
                            </div>

                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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

                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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

                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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


                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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


                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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


                             <hr class="m-0 p-0">

                            <div class="media p-3">
                                <img src="reviewPic-5.jpg" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
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
            </div>
        </div>
    </div>
</section>


 <?php include "./footer.php" ?>

<!--Javascipt-->
    <script src="./js/script.js"></script>
    <!--JAVSCRIPT CDN OF BOOTSTRAP-->

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>


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