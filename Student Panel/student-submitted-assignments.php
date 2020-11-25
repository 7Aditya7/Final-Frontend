<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./student-submitted-assignments.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>

<!--START OF TEACHER-PANEL SECTION -->

<?php include "./header.php" ?>

<section class="student-panel">
    <div class="container asssignmentSubmissions border pt-3">

        <h4 class="ml-3 mb-3">Assignment-1<span class="badge badge-success badge-pill ml-2">Submitted</span></h4>

        <div class="row pl-3">
            <div class="col-12 col-sm-5 col-md-7">
                <h4>Description</h4>
                <p>Complete in time</p>
            </div>
            
            <div class="col-12 col-sm-7 col-md-5">
                <div class="row">
                    <div class="col">
                        <h4>Due date</h4>
                        <p>2020-11-12</p>
                    </div>

                    <div class="col">
                        <h4>Files</h4>
                        <p>asssignment.pdf</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="col-12 d-sm-inline-flex">

            <h5 class="font-weight-bold mb-3">Upload assignment</h5>
            <div class="parent ml-auto d-inline-flex ">
                <label for="identificationProof" class="btn text-white ">
                <span class="ml-auto"><i class="fas fa-cloud-upload-alt mr-2 "></i></span>Choose File
                <input id="identificationProof" class="file-upload " type="file" hidden required />
                </label>
                <p class="file-upload-filename "></p>
            <a href="#/" role="button" class="btn text-decoration-none text-white mt-0 ml-2 upload-btn">Upload  <span><i class="fas fa-upload"></i></span></a>
            </div>
        </div>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete  <span><i class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete  <span><i class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete  <span><i class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete  <span><i class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete  <span><i class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
        <hr>

    </div>
</section>

<?php include "./footer.php" ?>

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