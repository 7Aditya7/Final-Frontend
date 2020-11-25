<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>

    <link rel="stylesheet" href="./notices.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    
    <!--AJAX AND JAVASCRIPT-->
    <script src="./notices.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
       <?php include "./header.php" ?>
    <section class="teacher-panel-notices d-none d-md-block">

        <div class="notices mx-3">

            <div class="row">


                <div class="col-md-6">
                    <div class="teacherNotices">
                        <h4 class="ml-4 mt-3">Notices</h4>
                        <hr>
                        <a href="#/" class="btn btns text-light ml-4" data-toggle="modal" data-target="#newNotice">New Notice</a>
    

                        <!-- The Modal -->
                        <div class="modal fade" id="newNotice">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                        
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Upload Notice</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                        
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="#/"></form>
                                        <div class="form-group">
                                            <label for="notice" class="mt-2">Notice:</label>
                                            <textarea class="form-control" id="notice" rows="3" placeholder="Enter Your Notice"></textarea>
                                        </div>
                                        </form>
                                    </div>
                        
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a href="#/" type="button" class="btn text-light btns">Post</a>
                                        <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                    </div>
                        
                                </div>
                            </div>
                        </div>



                    <div class="col-md-12 d-xl-inline-flex justify-content-xl-between teacherNotice mt-2">
                        
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This is to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                           
                            <a href="#/" role="button" class="btn  btns text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#oneDelete">Delete <span><i class="far fa-trash-alt"></i></span></a>                    
                        </div>
                    
                    </div>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="oneEdit">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Notice</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="#/"></form>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Notice:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    </form>
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="#/" type="button" class="btn text-light btns">Post</a>
                                    <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <!-- Delete Modal -->
                    <div class="modal fade" id="oneDelete">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Notice</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                    
                                <!-- Modal body -->
                                <div class="modal-body">
                                   <p class="font-weight-bold">Are you sure you want to delete the Notice?</p>
                                </div>
                    
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="#/" type="button" class="btn text-light btn-danger">Delete</a>
                                    <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                </div>
                    
                            </div>
                        </div>
                    </div>


                    <hr>

                    <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
                    
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6 ">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                           
                            <a href="#/" role="button" class="btn btns text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                                data-target="#oneDelete">Delete <span><i class="far fa-trash-alt"></i></span></a>
                        </div>
                    
                    </div>
                    
                    <hr>

                    <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
                    
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6 ">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                          
                            <a href="#/" role="button" class="btn btns text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                                data-target="#oneDelete">Delete <span><i
                                        class="far fa-trash-alt"></i></span></a>
                        </div>
                    
                    </div>
                    
                    <hr>

                    <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
                    
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6 ">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                           
                            <a href="#/" role="button" class="btn  btns text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                                data-target="#oneDelete">Delete <span><i class="far fa-trash-alt"></i></span></a>
                        </div>
                    
                    </div>
                    
                    <hr>

                    <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
                    
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6 ">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                           
                            <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                                data-target="#oneDelete">Delete <span><i class="far fa-trash-alt"></i></span></a>
                        </div>
                    
                    </div>
                    
                    <hr>

                    <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
                    
                        <div class="col-xl-6 col-12">
                            <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                        </div>
                    
                        <div class="col-xl-6 ">
                            <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                           
                            <a href="#/" role="button" class="btn  btns text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                                data-target="#oneDelete">Delete <span><i class="far fa-trash-alt"></i></span></a>
                        </div>
                    
                    </div>
                    
                    <hr>


                    </div>
                </div>



                <div class="col-md-6">

                    <div class="adminNotices">

                        <h4 class="ml-3 mt-3">Admin Notice</h4>
                        <hr>
                        <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>    
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>


                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>


                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>

                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>
                        
                        <div class="adminNotice col-sm-12">
                            <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                            <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                        </div>
                        <hr>


                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="teacher-panel-notices d-md-none">
    
        <div class="container notices">
    
                <!-- Nav pills -->
                
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item mr-4">
                        <a class="nav-link active" data-toggle="pill" href="#teacherNotices">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#adminNotices">
                            <i class="fas fa-user-cog"></i>
                            <span class="badge badge-danger">1</span>
                        </a>
                    </li>
                </ul>

            <div class="row mt-4">

                <div class="tab-content">

                    <div class="col-md-6 tab-pane active show fade container" id="teacherNotices">
                        <div class="teacherNotices">
                            <h4 class="ml-4 pt-3">Notices</h4>
                            <hr>
                            <a href="#/" class="btn  btns text-light ml-4" data-toggle="modal" data-target="#newNoticeSmallScreen">New Notice</a>
        
        
                            <!-- The Modal -->
                            <div class="modal fade" id="newNoticeSmallScreen">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
        
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Upload Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="#/"></form>
                                            <div class="form-group">
                                                <label for="notice" class="mt-2">Notice:</label>
                                                <textarea class="form-control" id="notice" rows="3" placeholder="Enter Your Notice"></textarea>
                                            </div>
                                            </form>
                                        </div>
        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a href="#/" type="button" class="btn text-light btns ">Post</a>
                                            <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="col-md-12 d-xl-inline-flex justify-content-xl-between teacherNotice mt-2">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This is to notify all my students that i won't be available next thrusday.
                                    </p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0"
                                        data-toggle="modal" data-target="#deleteSmallScreen">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editSmallScreen">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
        
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="#/"></form>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Notice:</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                            </form>
                                        </div>
        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a href="#/" type="button" class="btn  btns text-light">Post</a>
                                            <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
        
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteSmallScreen">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
        
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Notice</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p class="font-weight-bold">Are you sure you want to delete the Notice?</p>
                                        </div>
        
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a href="#/" type="button" class="btn text-light btn-danger">Delete</a>
                                            <button type="button" class="btn text-light btn-primary" data-dismiss="modal">Cancel</button>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
        
        
                            <hr>
        
                            <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                  
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0"
                                        data-toggle="modal" data-target="#deleteSmallScreen">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <hr>
        
                            <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                   
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#deleteSmallScreen">Delete
                                        <span><i class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <hr>
        
                            <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                  
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0"
                                        data-toggle="modal" data-target="#deleteSmallScreen">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <hr>
        
                            <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                    
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0"
                                        data-toggle="modal" data-target="#deleteSmallScreen">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <hr>
        
                            <div class="col-md-12 d-xl-inline-flex  justify-content-xl-between teacherNotice">
        
                                <div class="col-xl-6 col-12">
                                    <p class="d-xl-none mb-1"><strong>Posted on</strong>: 2020-10-14</p>
                                    <p class="mb-1">This to notify all my students that i won't be available next thrusday.</p>
                                </div>
        
                                <div class="col-xl-6 ">
                                    <p class="d-none d-xl-block"><strong>Posted on</strong>: 2020-10-14</p>
                                  
                                    <a href="#/" role="button" class="btn btns  text-decoration-none text-white mt-2 mt-md-0"
                                        data-toggle="modal" data-target="#deleteSmallScreen">Delete <span><i
                                                class="far fa-trash-alt"></i></span></a>
                                </div>
        
                            </div>
        
                            <hr>
        
        
                        </div>
                    </div>
        
        
        
                    <div class="col-md-6 tab-pane fade container" id="adminNotices">
        
                        <div class="adminNotices">
        
                            <h4 class="ml-3 pt-3">Admin Notice</h4>
                            <hr>
                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>
        
                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>
        
                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>

                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>
        
                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>

                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>


                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>

                            
                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>


                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>


                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>


                            <div class="adminNotice col-sm-12">
                                <p class="mb-0"><img src="./megaphone.png" alt="Announcement Icon" class="img-fluid mr-2"><strong>Posted on</strong>: 2020-10-14</p>
                                <p class="ml-5">This to notify all the teacher that server will be down next thrusday from 2pm-6pm.</p>
                            </div>
                            <hr>



        
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