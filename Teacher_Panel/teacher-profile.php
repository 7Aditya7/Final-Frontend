<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./teacher-profile.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>
   <?php include "./header.php" ?>
<!--START OF PROFILES SECTION -->


<section class="teacher-panel mb-5">
    <div class="container user-profile mt-4">
        <div class="row">
            <div class="col-md-4  profileBox text-center">
                <div class="profilePicture">                
                    <img src="reviewPic-5.jpeg" alt="" class="img-fluid mt-3">
                    <a href="#/" class="text-decoration-none "><span class="d-block editButton" data-toggle="tooltip" data-placement="top" title="Edit Profile" ><i class="fas fa-edit"></i></span></a>
                </div>
                <p class="h3 d-inline-flex text-center mt-2 mb-0">John Doe</p>
                <span class="ml-2 d-inline-flex verified" data-toggle="tooltip" data-placement="top" title="verified" style="color: rgb(7, 230, 26);"><i class="fas fa-check-circle"></i></span>
                
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
            <button class="btn px-5">Edit profile</button>

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
                        <a class="nav-link" data-toggle="pill" href="#recent-activities">
                            <i class="far fa-bell "></i>
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    
                    <!-- Profile -->

                    <div class="tab-pane container active" id="profile">    
                        <div class="row mt-4 text-dark">
                            <div class="col-12 col-sm-6">
                                <p class=" h5">Bio</p>
                                <p>Software Engineer, Programmer</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Hobbies</p>
                                <p>Football, cricket, mobile games</p>
                            </div>    

                            <div class="col-12 col-sm-6">
                                <p class="h5">Email:</p>
                                <p>johndoe@gmail.com</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Permanent Address:</p>
                                <p>Dhading,Nepal</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Temporary Address:</p>
                                <p>Kathmandu,Nepal</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Phone no:</p>
                                <p>+977 9808806688</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Subjects:</p>
                                <p>Science, Math, Computer</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Experience:</p>
                                <p>Five year experience</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Available Address:</p>
                                <p>Maipi, Thamel, Jamal</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Available Time:</p>
                                <p>Morning and Evening</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Available Districts:</p>
                                <p>Dhading, Kathmandu, Bhaktapur</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Trial:</p>
                                <p>Two years</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class="h5">Ideology:</p>
                                <p>I believe in myself.</p>
                            </div>

                            <div class="col-12 col-sm-6">
                                <p class=" h5">About me:</p>
                                <p>I'm a good boy</p>
                            </div>
                        </div>

                        <p class="h4 mb-1 text-white text-center">Certificates</p>

                        <div class="row justify-content-center">
                            
                            <div class="col-12 col-sm-6 col-lg-4 mt-3">


                                <div class="card pb-n1 mx-auto" style="width:150px">
                                    <img class="card-img-top" src="reviewPic-5.jpeg" alt="Card image" style="width:100%" data-toggle="modal" data-target="#myModal">
                                        <span><p class="card-title text-center mb-0">Identification Proof</p></span>
                                </div>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">

                                      <!-- Modal body -->
                                      <div class="modal-body p-0">
                                        <button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <img class="img-fluid mt-n4" src="reviewPic-5.jpeg" alt="Card image">
                                      </div>

                                    </div>
                                  </div>
                                </div>


                            </div>


                            <div class="col-12 col-sm-6 col-lg-4 mt-3">


                                <div class="card pb-n1 mx-auto" style="width:150px">
                                    <img class="card-img-top" src="reviewPic-5.jpeg" alt="Card image" style="width:100%" data-toggle="modal" data-target="#myModal">
                                        <span><p class="card-title text-center mb-0">Education Proof</p></span>
                                </div>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">

                                      <!-- Modal body -->
                                      <div class="modal-body p-0">
                                        <button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <img class="img-fluid mt-n4" src="reviewPic-5.jpeg" alt="Card image">
                                      </div>

                                    </div>
                                  </div>
                                </div>


                            </div>

                            <div class="col-12 col-sm-6 col-lg-4 mt-3">


                                <div class="card pb-n1 mx-auto" style="width:150px">
                                    <img class="card-img-top" src="reviewPic-5.jpeg" alt="Card image" style="width:100%" data-toggle="modal" data-target="#myModal">
                                        <span><p class="card-title text-center mb-0">Payment Detail</p></span>
                                </div>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">

                                      <!-- Modal body -->
                                      <div class="modal-body p-0">
                                        <button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <img class="img-fluid mt-n4" src="reviewPic-5.jpeg" alt="Card image">
                                      </div>

                                    </div>
                                  </div>
                                </div>


                            </div>
                        
                            
                        </div>    

                    </div>

                    <!-- RECENT ACTIVITIES -->
                    
                    <div class="tab-pane container fade" id="recent-activities">
                        <div class="alert alert-success alert-dismissible mt-4">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Attention!</strong> Thank you for your attention.
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <tbody class="text-dark">
                                    <tr>
                                        <td class="text-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </td>
                                        <td>
                                            You were just logged in from Nepaltar,Kathmandu.
                                        </td>
                                        <td>
                                            2020/08/09 12:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fas fa-key"></i>
                                        </td>
                                        <td>
                                            Your password was changed 12minutes ago.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-check"></i>
                                        </td>
                                        <td>
                                            New student successfully enrolled.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-clock"></i>
                                        </td>
                                        <td>
                                            Your class is about to start.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-check"></i>
                                        </td>
                                        <td>
                                            Your task has been completed.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </td>
                                        <td>
                                            You were just logged in from Nepaltar,Kathmandu.
                                        </td>
                                        <td>
                                            2020/08/09 12:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fas fa-key"></i>
                                        </td>
                                        <td>
                                            Your password was changed 12minutes ago.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-check"></i>
                                        </td>
                                        <td>
                                            New student successfully enrolled.
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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