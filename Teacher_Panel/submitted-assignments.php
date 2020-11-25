<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Assignments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./submitted-assignments.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   
</head>

<body>
   <?php include "./header.php" ?>

<!--START OF TEACHER-PANEL SECTION -->

<section class="teacher-panel">
    <div class="container asssignmentSubmissions border py-4">

        <h4 class="ml-3 mb-3">Assignment-1</h4>

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
            <div class="col-md-12 d-sm-inline-flex  justify-content-sm-between">

                <div>
                    <h5 class="mb-3">Gautam Adhikari</h5>
                    <p> <strong>File name</strong>: messi.docx</p>
                </div>
            
                <div>
                    <p> <strong>Submitted on</strong>: 2020-10-14</p>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0">View File</a>
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#feedbackModal">Send feedback  <span><i class="fas fa-comment-dots"></i></span></a>

                    <!-- The Modal -->
                        <div class="modal fade" id="feedbackModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <div class="row">
                                        <div class="col-7">
                                            <h4>Send feedback</h4>
                                        </div>
                                        <div class="col-5">
                                             <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                                        </div>
                                    </div>
                                    <form action="#" class="mt-0">      
                                        <div class="form-group ">
                                            <label for="feedbackTitle" class="font-weight-bold ">Title</label>
                                            <div class="input-group">
                                                <input type="text" id="feedbackTitle" class="form-control" placeholder="Feedback topic"
                                                    required />
                                            </div>

                                            <label for="noteDescription" class="font-weight-bold mt-2">Description</label>
                                            <div class="input-group">
                                                <textarea id="noteDescription" class="form-control" > </textarea>
                                            </div>

                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="btn text-white mt-1 px-3">
                                                Send Feedback<span><i class="fas fa-paper-plane ml-2"></i></span>
                                            </button>
                                        </div>         
                                    </form>

                                </div>
                            </div>
                        </div>

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
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#feedbackModal">Send feedback  <span><i class="fas fa-comment-dots"></i></span></a>

                    <!-- The Modal -->
                        <div class="modal" id="feedbackModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                                    <form action="#" class="mt-0 text-white">      
                                        <div class="form-group ">
                                            <label for="feedbackTitle" class="font-weight-bold ">Title</label>
                                            <div class="input-group">
                                                <input type="text" id="feedbackTitle" class="form-control" placeholder="Feedback topic"
                                                    required />
                                            </div>

                                            <label for="noteDescription" class="font-weight-bold mt-2">Description</label>
                                            <div class="input-group">
                                                <textarea id="noteDescription" class="form-control" > </textarea>
                                            </div>

                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="btn text-white mt-1 px-3">
                                                Send Feedback<span><i class="fas fa-paper-plane ml-2"></i></span>
                                            </button>
                                        </div>         
                                    </form>

                                </div>
                            </div>
                        </div>

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
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#feedbackModal">Send feedback  <span><i class="fas fa-comment-dots"></i></span></a>

                    <!-- The Modal -->
                        <div class="modal" id="feedbackModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                                    <form action="#" class="mt-0 text-white">      
                                        <div class="form-group ">
                                            <label for="feedbackTitle" class="font-weight-bold ">Title</label>
                                            <div class="input-group">
                                                <input type="text" id="feedbackTitle" class="form-control" placeholder="Feedback topic"
                                                    required />
                                            </div>

                                            <label for="noteDescription" class="font-weight-bold mt-2">Description</label>
                                            <div class="input-group">
                                                <textarea id="noteDescription" class="form-control" > </textarea>
                                            </div>

                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="btn text-white mt-1 px-3">
                                                Send Feedback<span><i class="fas fa-paper-plane ml-2"></i></span>
                                            </button>
                                        </div>         
                                    </form>

                                </div>
                            </div>
                        </div>

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
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#feedbackModal">Send feedback  <span><i class="fas fa-comment-dots"></i></span></a>

                    <!-- The Modal -->
                        <div class="modal" id="feedbackModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                                    <form action="#" class="mt-0 text-white">      
                                        <div class="form-group ">
                                            <label for="feedbackTitle" class="font-weight-bold ">Title</label>
                                            <div class="input-group">
                                                <input type="text" id="feedbackTitle" class="form-control" placeholder="Feedback topic"
                                                    required />
                                            </div>

                                            <label for="noteDescription" class="font-weight-bold mt-2">Description</label>
                                            <div class="input-group">
                                                <textarea id="noteDescription" class="form-control" > </textarea>
                                            </div>

                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="btn text-white mt-1 px-3">
                                                Send Feedback<span><i class="fas fa-paper-plane ml-2"></i></span>
                                            </button>
                                        </div>         
                                    </form>

                                </div>
                            </div>
                        </div>

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
                    <a href="#/" role="button" class="btn text-decoration-none text-white mt-2 mt-md-0" data-toggle="modal" data-target="#feedbackModal">Send feedback  <span><i class="fas fa-comment-dots"></i></span></a>

                    <!-- The Modal -->
                        <div class="modal" id="feedbackModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">

                                    <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                                    <form action="#" class="mt-0 text-white">      
                                        <div class="form-group ">
                                            <label for="feedbackTitle" class="font-weight-bold ">Title</label>
                                            <div class="input-group">
                                                <input type="text" id="feedbackTitle" class="form-control" placeholder="Feedback topic"
                                                    required />
                                            </div>

                                            <label for="noteDescription" class="font-weight-bold mt-2">Description</label>
                                            <div class="input-group">
                                                <textarea id="noteDescription" class="form-control" > </textarea>
                                            </div>

                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="btn text-white mt-1 px-3">
                                                Send Feedback<span><i class="fas fa-paper-plane ml-2"></i></span>
                                            </button>
                                        </div>         
                                    </form>

                                </div>
                            </div>
                        </div>

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