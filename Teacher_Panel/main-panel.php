<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Panel</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./main-panel.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
       <?php include "./header.php" ?>
    <section class="teacherPanel d-none d-md-block">
        <div class="container-fluid mainTeacherPanel">
            <div class="row justify-content-between">
                <div class="col-lg-8 col-md-7 mt-5">
                    
                    <div class="hello">
                    <div class="row panels mr-md-2 p-4">
                            <h4 class="col-12 text-center mb-4">Teacher Panel</h4>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./profile.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2 ">
                                        <p class="mb-0">Profile</p>
                                        <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>
                       
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./running-courses.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Running Courses</p>
                                         <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-lg-0 mt-3 mt-sm-0 mt-md-3 notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./calendar.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Calendar</p>
                                         <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-xl-0 mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./enroll.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Enroll Requests</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./hiring.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Hire Requests</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./book.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Courses</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./certificate.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Certificates</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./review.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Reviews</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./padlock.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Change Password</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./chat.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Chat / Feedbacks</p>
                                    </div>
                                </a>
                            </div>

                             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./edit.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Edit Profile</p>
                                    </div>
                                </a>
                            </div>

                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 p-0 notifications mt-5">
                    <h4 class="ml-3 mt-3 mx-2">Notifications</h4>
                    <hr class="bg-danger">
                    <a href="#/" class="text-decoration-none font-weight-lighter ml-3">Mark All as Read</a>
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#one">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="one">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#two">
                        <p class="font-weight-bold m-0">You have a new hire request.</p>
                        <p class="mt-1">7th Jan, 2020<span class="ml-3">8:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="two">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>



                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#three">
                        <p class="font-weight-bold m-0">You have a new message.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="three">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#four">
                        <p class="font-weight-bold m-0">You have a.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="four">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#five">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="five">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#six">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="six">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#seven">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="seven">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2"  data-toggle="modal" data-target="#eight">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="eight">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#nine">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="nine">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="text-center py-3">
                        <a href="#/" class="text-decoration-none">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smallTeacherPanel d-block d-md-none ">
        <div class="container-fluid mainTeacherPanel">
            <!-- <div class="row justify-content-between"> -->
                <!-- <div class="col-lg-8 col-md-7 mt-5"> -->
                    
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item mr-4 active">
                        <a class="nav-link active homeIcon" data-toggle="pill" href="#teacherPill">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link notificationIcon" data-toggle="pill" href="#teacherNotificationPill">
                            <i class="fas fa-bell "></i>
                            <span class="badge badge-danger">1</span>
                        </a>
                    </li>
                </ul>

                <div class=" tab-content">
                <div class="tab-pane fade show active mt-3" id="teacherPill">

                <div class="hello">
                    <div class="row panels mr-md-2 p-4">
                            <h4 class="col-12 text-center mb-4">Teacher Panel</h4>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./profile.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Profile</p>
                                         <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>
                       
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./running-courses.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Running Courses</p>
                                         <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-lg-0 mt-3 mt-sm-0 mt-md-3 notificationCount">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./calendar.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Calendar</p>
                                         <span class="badge ">3</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-xl-0 mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./enroll.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Enroll Requests</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./hiring.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Hire Requests</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./book.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Courses</p>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./certificate.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Certificates</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./review.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Reviews</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./padlock.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Change Password</p>
                                    </div>
                                </a>
                            </div>


                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./chat.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Chat / Feedbacks</p>
                                    </div>
                                </a>
                            </div>

                             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-4 col-6 text-center mt-3">
                                <a href="#/" class="card mr-1 px-2 py-3 h-100">
                                    <div>
                                        <img src="./edit.png" alt="Profile-Icon">
                                    </div>
                                    <div class="mt-2">
                                        <p class="mb-0">Edit Profile</p>
                                    </div>
                                </a>
                            </div>

                    </div>
                </div>

            </div>

                <!-- </div> -->
                <div class="col-lg-4 col-md-5 p-0 notifications mt-3 tab-pane fade" id="teacherNotificationPill">
                    <h4 class="ml-3 mt-3 mx-2">Notifications</h4>
                    <hr class="bg-danger">
                    <a href="#/" class="text-decoration-none font-weight-lighter ml-3">Mark All as Read</a>
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallOne">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallOne">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallTwo">
                        <p class="font-weight-bold m-0">You have a new hire request.</p>
                        <p class="mt-1">7th Jan, 2020<span class="ml-3">8:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallTwo">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>



                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallThree">
                        <p class="font-weight-bold m-0">You have a new message.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallThree">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallFour">
                        <p class="font-weight-bold m-0">You have a.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallFour">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallFive">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallFive">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallSix">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallsix">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallSeven">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallSeven">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <div class="mt-3 p-2 notification mx-2"  data-toggle="modal" data-target="#teacherSmallEight">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallEight">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    
                    <div class="mt-3 p-2 notification mx-2" data-toggle="modal" data-target="#teacherSmallNine">
                        <p class="font-weight-bold m-0">You have got a bonus.</p>
                        <p class="mt-1">19th Oct, 2020<span class="ml-3">7:00 AM</span></p>
                    </div>


                    <!-- The Modal -->
                    <div class="modal fade" id="teacherSmallNine">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Notification</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, perspiciatis!
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>

                    <div class="text-center py-3">
                        <a href="#/" class="text-decoration-none">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <?php include "./footer.php" ?>

     
    <script>
        $(".notification").click(function () {
            $(this).css("background-color", "#f5f5f5");
             $(this).css("border-left", "none");
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