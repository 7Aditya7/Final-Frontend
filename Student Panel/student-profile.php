<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./student-profile.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>

<!--START OF PROFILES SECTION -->
    <?php include "./header.php" ?>

<section class="student-panel">
    <div class="container user-profile">
        <div class="row">
            <div class="col-md-4 profileBox text-center">
                <div class="profilePicture">                
                    <img src="reviewPic-4.jpeg" alt="" class="img-fluid mt-3">
                    <a href="#/" class="text-decoration-none "><span class="d-block editButton" data-toggle="tooltip" data-placement="top" title="Edit Profile" ><i class="fas fa-edit"></i></span></a>
                </div>                   
                
                 <p class="h3 d-inline-flex text-center mt-2 mb-0">John Doe</p>
                <span class="ml-2 d-inline-flex verified" data-toggle="tooltip" data-placement="top" title="verified" style="color: rgb(7, 230, 26);"><i class="fas fa-check-circle"></i></span>
                <div class="changeImage mt-2">
                    <input type="file" id="file-button" hidden>
                    <label for="file-button"><button class="btn">Choose photo</button></label>
                    <button class="btn">Upload Photo</button>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><i class="fas fa-chalkboard-teacher mr-2"></i>Teachers: <span>20</span></li>
                </ul>
                <hr>
               
            </div>

            <div id="divider"></div>


            <div class="col-md-7 editBox ml-md-4 mt-md-0 mt-4">
                 <!-- Nav pills -->
                <ul class="nav nav-pills">
                    <li class="nav-item mr-2">
                        <a class="nav-link active" data-toggle="pill" href="#profile">
                            <i class="fas fa-user"></i>
                        </a>
                    </li>

                    <li class="nav-item mr-2">
                        <a class="nav-link" data-toggle="pill" href="#notifications">
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-danger">7</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link payement" data-toggle="pill" href="#payments">
                            <i class="fab fa-amazon-pay"></i>
                            <span class="badge badge-danger">1</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->

                <div class="tab-content">
                    <!-- Profile -->
                    <div class="tab-pane container active" id="profile">
                        <div class="row text-DARK mt-4">
                            <div class="col-lg-6 col-md-12">
                                <span class="mr-2 font-weight-bold">Full Name :</span>
                                <span>Shubha Pradhan</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                                <span class="mr-2 font-weight-bold">Address :</span>
                                <span>New Baneshwor</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="font-weight-bold">Email :</span>
                                <span>johndoe@gmail.com</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="mr-2 font-weight-bold">Phone No :</span>
                                <span>9862258732</span>
                            </div>                    
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="mr-2 font-weight-bold">Grade :</span>
                                <span>8</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="mr-2 font-weight-bold">Bio :</span>
                                <span>Blissfull life makes perfect</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="mr-2 font-weight-bold">Hobbies :</span>
                                <span>Swimming , Hiking , Rafting</span>
                            </div>
                            <div class="col-lg-6 col-md-12 mt-4">
                                <span class="mr-2 font-weight-bold">Previous Tutions :</span>
                                <span>Yes<span> (4)</span></span>
                            </div>
                            <div class="col-12 mt-4">
                                <span class="mr-2 font-weight-bold">Certificates :</span>
                                <div class="card text-dark mt-3"style="width:150px">
                                    <img class="card-img-top" src="./info.jpg"alt="identificationProof" style="width:100%"data-toggle="modal"
                                        data-target="#myModal">
                                    <span>
                                        <p class="card-title text-center mb-0">Identification Proof</p>
                                    </span>
                                </div>

                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                
                                            <!-- Modal body -->
                                            <div class="modal-body p-0">
                                                <button type="button" class="close mr-1" data-dismiss="modal" aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <img class="img-fluid mt-n4" src="./info.jpg" alt="Card image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notifications -->
                    
                    <div class="tab-pane container fade" id="notifications">
                        <div class="alert alert-success alert-dismissible mt-4">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> Indicates a successful or positive action.
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <tbody class="text-dark">
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-check"></i>
                                        </td>
                                        <td>
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
                                        </td>
                                        <td>
                                            2020/00/00 1:00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Payments -->

                    <div class="tab-pane container fade" id="payments">
                        <div class="table-responsive mt-4">
                            <table class="table">
                                <tbody class="text-dark">
                                    <tr>
                                        <td class="text-center">
                                            <i class="fa fa-check"></i>
                                        </td>
                                        <td>
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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
                                            This is a notification about a student
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


      <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>






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