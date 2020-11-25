<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>


    <link rel="stylesheet" href="./student-notices.css">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    
    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>

<?php include "./header.php" ?>
    <section class="student-panel-notices">



        <div class="row">



            
                 <!-- DROPOWN FOR THE FILTER BELOW 992PX -->

                <div class="col-12 mt-md-0 mt-3 mb-0">
                    <div class="dropdown d-md-none d-block col-sm-12 filterNotices">
                        <h5 onclick="myNotice()" class="dropbtn d-block p-2">Filter By Subjects : <span class="float-right mr-2"><i class="fas fa-chevron-down"></i></span></h5>
                        <div id="myDropdownNotice" class="dropdown-content d-none">
                            <form action="#/" class="mr-2 p-2">


                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="subjectFilter" id="Physics1" value="Physics1">
                                    <label class="form-check-label" for="Physics1">
                                        Physics
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subjectFilter" id="Maths1" value="Maths1">
                                    <label class="form-check-label" for="Maths1">
                                        Maths
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="suvjectFilter" id="Chemistry1" value="Chemistry1">
                                    <label class="form-check-label" for="Chemistry1">
                                        Chemistry
                                    </label>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                    

                <!-- END OF DROPDOWN FOR FILTER BELOW 992PX -->



            <div class="col-lg-3 col-md-4">

                <div class="card filterNotices h-100 d-none d-md-block">

                    <form action="#/" class="p-4">

                            <h5>Filter By Subjects : </h5>


                            <div class="form-check mt-2">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Online" value="Online">
                                <label class="form-check-label" for="Online">
                                    Physics
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Home" value="Home">
                                <label class="form-check-label" for="Home">
                                    Maths
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="methodologyFilter" id="Group" value="Group">
                                <label class="form-check-label" for="Group">
                                    Chemistry
                                </label>
                            </div>

                        </form>
                
                </div>

            </div>


            <div class="col-lg-9 col-md-8 mt-1 mt-md-0">

                <div class="student-notices card">
                    
                    <h4 class="ml-3 pt-3">Announcements</h4>
                        
                        <hr>

                        <div class="student-notices-content">
                        
                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="studentNotice col-sm-12 p-3">
                            <p class="mb-0 d-inline"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted
                                    on</strong>: 2020-10-14</p>
                            <span class="badge badge-pill ml-5 p-2">Science Announcement</span>
                            <p class="ml-5 mt-2 mt-md-0">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

</div>
                
                 </div>

                </div>
                
            </div>

        </div>

    </section>

    <?php include "./footer.php" ?>




     <script>

    function myNotice() {
        
        document.getElementById("myDropdownNotice").classList.toggle("d-block");
        console.log("Hello");

        }
    
    </script>


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