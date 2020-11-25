<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./teacher-assignment.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>

<body>
       <?php include "./header.php" ?>
    <!--START OF TEACHER-PANEL SECTION -->

    <section class="teacher-panel">

        <div class="container assignmentUpload">

            <h3 class="ml-3 ">Assignment</h3>

            <hr>

            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <h5 class="font-weight-bold mb-3">Upload assignment</h5>
                <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal"
                    data-target="#myModal">Upload <span><i class="fas fa-cloud-upload-alt"></i></span></a>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="row">
                            <div class="col-7">
                                <h4>Upload Assignments</h4>
                            </div>
                            <div class="col-5">
                                 <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                            </div>
                    </div>
                            <form action="#" class="mt-0 ">
                                <div class="form-group ">
                                    <label for="noteTitle">Title</label>
                                    <div class="input-group">
                                        <input type="text" id="noteTitle" class="form-control"
                                            placeholder="Title of the assignment" required />
                                    </div>

                                    <label for="noteDescription" class="mt-2">Description</label>
                                    <div class="input-group">
                                        <textarea id="noteDescription" class="form-control"> </textarea>
                                    </div>

                                    <label for="startDate" class="mt-3 d-block">Start date:</label>
                                    <input class="form-control" type="datetime-local" value="2020-12-19T13:45:00" id="startDate" name="startDate">


                                    <label for="dueDate" class="mt-3 d-block">Due date:</label>
                                    <input class="form-control" type="datetime-local" value="2021-10-19T13:45:00" id="dueDate" name="dueDate">
                                </div>

                                <div class="form-group text-center ">
                                    <div class="parent">
                                        <label for="uploadAssignment" class="btn text-white mb-0">
                                            <span><i class="fas fa-cloud-upload-alt mr-2"></i></span>Choose File
                                            <input id="uploadAssignment" class="file-upload" type="file" hidden
                                                required />
                                        </label>
                                        <p class="file-upload-filename"></p>
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button type="button" class="btn text-white px-3">
                                        Upload<span><i class="fas fa-paper-plane ml-2"></i></span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <h4 class="text-center font-weight-bold">Uploaded assignments</h4>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

            <hr>
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Assignment 1</h5>
                    <p>This is some description of a assignment</p>
                </div>

                <div>
                    <p>Due date: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View
                        Assignment</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">Delete <span><i
                                class="far fa-trash-alt"></i></span></a>
                </div>

            </div>
            <hr>

        </div>

    </section>



     <?php include "./footer.php" ?>

    <!--Javascipt-->

    <script>

        var fileNames = document.querySelectorAll('.assignmentUpload .modal .file-upload');
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