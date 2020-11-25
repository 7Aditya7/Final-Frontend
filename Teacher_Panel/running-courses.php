<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Courses</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./running-courses.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
       <?php include "./header.php" ?>
    <section class="subjects">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card h-100">
                        <img src="./physics.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Physics</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 10</span></div>
                            <span class="card-text d-block mt-2">Group Id: 10</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card h-100">
                        <img src="./maths.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Maths</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 4</span></div>
                            <span class="card-text d-block mt-2">Student: Biki Pun</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>



                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card h-100">
                        <img src="./chemistry.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body h-100">
                            <h5 class="card-title d-inline mr-2">Chemistry</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 8</span></div>
                            <span class="card-text d-block mt-2">Group Id: 2</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>



                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card">
                        <img src="./biology.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body h-100">
                            <h5 class="card-title d-inline mr-2">Biology</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 3</span></div>
                            <span class="card-text d-block mt-2">Student: Sahana Gurung</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>



                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card h-100">
                        <img src="./account.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Account</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 2</span></div>
                            <span class="card-text d-block mt-2">Student: John Doe</span>
                
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>



                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card h-100">
                        <img src="./digitallogics.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Digital Logics</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 1</span></div>
                            <span class="card-text d-block mt-2">Student: Gautam Adhikary</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card h-100">
                        <img src="./english.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">English</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 2</span></div>
                            <span class="card-text d-block mt-2">Group Id: 4</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card h-100">
                        <img src="./socialstudies.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Social Studies</h5>
                            <div class="mt-2"><span class="badge-pill badge-danger">Code: 6</span></div>
                            <span class="card-text d-block mt-2">Student: Shubha Pradhan</span>
                            <a href="#/" class="btn d-inline-block mt-2 stretched-link">View More</a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

     <?php include "./footer.php" ?>

    <!--JAVSCRIPT CDN OF BOOTSTRAP-->
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