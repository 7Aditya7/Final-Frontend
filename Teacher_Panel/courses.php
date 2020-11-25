<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./courses.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />
    
    <!--AJAX AND JAVASCRIPT-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <?php include "./header.php" ?>
    <section class="subjects">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card h-100">
                        <img src="./physics.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Physics</h5>
                            <div><span class="badge-pill badge-danger">10% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 12</span>
                            <span class="card-text d-block font-weight-bold">Price: 3000</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#oneUpdate">Update Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#oneDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="oneUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="3000">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="10%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>

                <!-- DELETE  Modal -->
                <div class="modal fade" id="oneDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Physics"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card h-100">
                        <img src="./maths.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Maths</h5>
                            <div><span class="badge-pill badge-danger">8% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 11</span>
                            <span class="card-text d-block font-weight-bold">Price: 4000</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#twoUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#twoDelete">Delete</a>
                        </div>
                    </div>

                </div>

            <!-- UPDATE  Modal -->
            <div class="modal fade" id="twoUpdate">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
            
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update Price & Discount</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
            
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="updatedPrice">Price</label>
                                    <input type="number" class="form-control" id="updatedPrice" value="4000">
                                </div>
                                <div class="form-group">
                                    <label for="updatedDiscount">Discount</label>
                                    <input type="text" class="form-control" id="updatedDiscount" value="8%">
                                </div>
                                <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
            
            
                    </div>
                </div>
            </div>
            
            <!-- DELETE  Modal -->
            <div class="modal fade" id="twoDelete">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
            
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Confirm Delete</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
            
                        <!-- Modal body -->
                        <div class="modal-body">
                            Are you sure you want to delete <span class="font-weight-bold">"Maths"</span> from your subjects.
                        </div>
            
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        </div>
            
                    </div>
                </div>
            </div>


                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card">
                        <img src="./chemistry.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Chemistry</h5>
                            <div><span class="badge-pill badge-danger">12% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 12</span>
                            <span class="card-text d-block font-weight-bold">Price: 3200</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#threeUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#threeDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="threeUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="3200">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="12%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="threeDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Chemistry"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-3">

                    <div class="card">
                        <img src="./biology.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Biology</h5>
                            <div><span class="badge-pill badge-danger">6% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 11</span>
                            <span class="card-text d-block font-weight-bold">Price: 4000</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#fourUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#fourDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="fourUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="4000">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="6%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="fourDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Biology"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card">
                        <img src="./account.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Account</h5>
                            <div><span class="badge-pill badge-danger">4% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 10</span>
                            <span class="card-text d-block font-weight-bold">Price: 2000</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#fiveUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#fiveDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="fiveUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="2000">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="4%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="fiveDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Account"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card">
                        <img src="./digitallogics.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Digital Logics</h5>
                            <div><span class="badge-pill badge-danger">8% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: Bachelors</span>
                            <span class="card-text d-block font-weight-bold">Price: 5000</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#sixUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#sixDelete">Delete</a>
                        </div>
                    </div>

                </div>

                <!-- UPDATE  Modal -->
                <div class="modal fade" id="sixUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="5000">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="8%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                          
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="sixDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Digital Logics"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card">
                        <img src="./english.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">English</h5>
                            <div><span class="badge-pill badge-danger">2% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 11</span>
                            <span class="card-text d-block font-weight-bold">Price: 2500</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#sevenUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#sevenDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="sevenUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="2500">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="2%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                
                
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="sevenDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"English"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 mt-4">

                    <div class="card">
                        <img src="./socialstudies.jpg" class="card-img-top img-fluid" alt="Subjects">
                        <div class="card-body">
                            <h5 class="card-title d-inline mr-2">Social Studies</h5>
                            <div><span class="badge-pill badge-danger">5% off</span></div>
                            <span class="card-text d-block mt-2 font-weight-bold">Grade: 10</span>
                            <span class="card-text d-block font-weight-bold">Price: 2800</span>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#eightUpdate">Update
                                Price</a>
                            <a href="#/" class="btn d-inline-block mt-2" data-toggle="modal" data-target="#eightDelete">Delete</a>
                        </div>
                    </div>

                </div>


                <!-- UPDATE  Modal -->
                <div class="modal fade" id="eightUpdate">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Price & Discount</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="updatedPrice">Price</label>
                                        <input type="number" class="form-control" id="updatedPrice" value="2800">
                                    </div>
                                    <div class="form-group">
                                        <label for="updatedDiscount">Discount</label>
                                        <input type="text" class="form-control" id="updatedDiscount" value="5%">
                                    </div>
                                    <button type="submit" class="btn d-inline-block updateButton">Update</button>
                                    <button type="button" class="btn d-inline-block btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
           
                        </div>
                    </div>
                </div>
                
                <!-- DELETE  Modal -->
                <div class="modal fade" id="eightDelete">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Confirm Delete</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                
                            <!-- Modal body -->
                            <div class="modal-body">
                                Are you sure you want to delete <span class="font-weight-bold">"Social Studies"</span> from your subjects.
                            </div>
                
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                
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