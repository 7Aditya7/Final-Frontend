<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Courses</title>

    <link rel="stylesheet" href="organization-hire-form.css">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    
    <!--AJAX AND JAVASCRIPT-->
    <!-- <script src="./notices.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</head>
<body>

<?php include "./header.php" ?>

    <section class="teacher-hire-form">
    
        <div class="container organization-hire-form-container mt-5 px-4 py-3">

             <h4 class="text-center mb-4 font-weight-bolder d-inline-flex"><div class="heading-line mr-2"></div>Hire Now</h4>

                <form action="#/">

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="orgName"><i class="fas fa-building mr-2"></i>Organization Name</label>
                            <input type="text" class="form-control" placeholder="Enter organization name" id="orgName">
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="orgEmail"><i class="fas fa-envelope mr-2"></i>Organization Email</label>
                            <input type="email" class="form-control" placeholder="Enter organization email" id="orgEmail">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="orgAddress"><i class="fas fa-map-marker-alt mr-2"></i>Organization Address</label>
                            <input type="text" class="form-control" placeholder="Enter organization address" id="orgAddress">
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="orgPhone"><i class="fas fa-phone-alt mr-2"></i>Organization Phone</label>
                            <input type="tel" class="form-control" placeholder="Enter organization phone number" id="orgPhone">
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-12 col-md-6">
                            <label for="teachingLevel"><i class="fas fa-chart-line mr-2"></i>Teaching Level</label>
                            <input type="tel" class="form-control" placeholder="Enter required teaching level" id="teachingLevel">
                        </div>

                        <div class="form-group col-12 col-md-6">
                            <label for="hireType"><i class="fas fa-clock mr-2"></i>Timing</label>
                            <select class="form-control" id="hireType">
                                <option>Full Time</option>
                                <option>Part Time</option>
                            </select>
                        </div>


                    </div>

                    <div class="form-row">
                        
                        <div class="form-group col-12 sub">
                            <label for="subjects"><i class="fas fa-book mr-2"></i>Subjects</label>
                            <select class="selectpicker form-control" multiple data-live-search="true" id="subjects">
                              <option>Science</option>
                              <option>Maths</option>
                              <option>English</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group mx-auto">
                            <button type="submit" class="btn text-white ">Request for Hire<span class="text-white send"><i class=" ml-2 fas fa-paper-plane"></i></span></button>
                        </div>
                    </div>

                </form>

        </div>
    
    </section>

<?php include "./footer.php" ?>

    <script>

    // $('select').selectpicker();
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