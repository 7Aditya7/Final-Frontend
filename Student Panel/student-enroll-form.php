<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Courses</title>

    <link rel="stylesheet" href="student-enroll-form.css">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    
    <!--AJAX AND JAVASCRIPT-->
    <!-- <script src="./notices.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


</head>
<body>

<?php include "./header.php" ?>

    <section class="student-enroll-form">
    
        <div class="container student-enroll-form-container mt-5 px-4 py-3">



            <h4 class="text-center mb-4 font-weight-bolder d-inline-flex"><div class="heading-line mr-2"></div>Enroll Now</h4>

                <form action="#/">

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="grade"><i class="fas fa-graduation-cap mr-2"></i>Grade</label>
                            <input type="text" class="form-control" placeholder="Enter your grade" id="grade">
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="courses"><i class="fas fa-book mr-2"></i>Course</label>
                            <select class="form-control" id="courses">
                                <option>Science | Rs.3000 | Discount 10%</option>
                                <option>English | Rs.2000 | Discount 5%</option>
                                <option>Maths | Rs.1500 | Discount 15%</option>
                                <option>Social | Rs.4000 | Discount 20%</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="tution-type"><i class="fas fa-house-user mr-2"></i>Tution type</label>
                            <select class="form-control" id="tution-type">
                                <option>Student Home</option>
                                <option>Teacher Home</option>
                                <option>Online</option>
                            </select>
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="time"><i class="fas fa-clock mr-2"></i>Time</label>
                            <input type="text" class="form-control" placeholder="Format: 1PM-2PM" id="time">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="groupCheck" onclick="myFunction()">
                              <label class="form-check-label" for="groupCheck">
                                Are you in a group?
                              </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row " id="noOfStudents-form">
                        <div class="form-group col-12">
                            <label for="noOfStudents"><i class="fas fa-user-graduate mr-2"></i>No of Students</label>
                            <input type="text" class="form-control" placeholder="No of Students" id="noOfStudents">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group mx-auto">
                            <button type="submit" class="btn text-white ">Request for Enroll<span class="text-white send"><i class=" ml-2 fas fa-paper-plane"></i></span></button>
                        </div>
                    </div>

                </form>

        </div>
    
    </section>

<?php include "./footer.php" ?>

    <script>

    function myFunction(){
        let checkVar= document.getElementById("groupCheck").checked;
        if (checkVar==true) {
            document.getElementById("noOfStudents-form").style.display="block";
        }
        else{
            document.getElementById("noOfStudents-form").style.display="none";
        }
    }
    </script>

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