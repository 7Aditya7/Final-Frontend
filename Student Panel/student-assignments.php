<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="student-assignments.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>

<!--START OF TEACHER-PANEL SECTION -->

<?php include "./header.php" ?>
<section class="student-panel">

    <div class="container assignmentUpload">

        <h3 class="ml-3 ">Assignment</h3>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1<span class="badge badge-success badge-pill ml-2">Submitted</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1<span class="badge badge-danger badge-pill ml-2">Unsubmitted</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1<span class="badge badge-danger badge-pill ml-2">Overdue</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1<span class="badge badge-success badge-pill ml-2">Submitted</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1 <span class="badge badge-success badge-pill ml-2">Submitted</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

        <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1 <span class="badge badge-success badge-pill ml-2">Submitted</span></h5>
                    <p>This is some description of a assignment</p>
                </div>
            
                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View Assignment</a>
                </div>

            </div>
        <hr>

    </div>

</section>

<?php include "./footer.php" ?>

<!--Javascipt-->

    <script>

        var fileNames = document.querySelectorAll('.upload-notes .card .file-upload');
        Array.from(fileNames).forEach(function (fileName) {
            fileName.addEventListener('change', function (e) {

                const exactfile = e.target.files[0].name;
                const write = $(e.target).parent().parent().find('.file-upload-filename');
                write.text(exactfile);

            });
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