<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Courses</title>

    <link rel="stylesheet" href="./rating-teachers.css">
    
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

    <section class="review-section">
    
        <div class="container review-section-container ">


            <div class="row">
                <div class="col-md-5 col-lg-4">
                        <div class="card h-100 profileBox text-center m-0">
                            <div class="profilePicture">                
                                <img src="reviewPic-5.jpg" alt="" class="img-fluid mt-3">
                            </div>
                            <div class="text-center">
                                <p class="h3 d-inline-flex text-center mt-2 mb-0">John Doe</p>
                                <span class="ml-2 d-inline-flex verified" data-toggle="tooltip" data-placement="top" title="verified"><img src="./verified.png" alt="Verified"></span>
                            </div>
                            <div class="stars mt-3">
                                <span class="font-weight-bold rating"><i class="fas fa-star"></i><i class="fas  fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> 4.5 </span>
                            </div>
                            <hr>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-eye mr-2"></i>Popularity: <span>400</span></li>
                                <li><i class="fas fa-user-graduate mr-2"></i>Students: <span>20</span></li>
                            </ul>
                            <hr>
                        </div>
                         
                </div>


                <div class="col-md-7 col-lg-8 mt-md-0 mt-3">
                    <div class="card h-100 write-ratings p-3 m-0">
                        <form action="#/" class="row">
                            <div class="heading col-12 text-center">
                                <h3>Give us your Reviews</h3>
                                <p>Provide us with the reviews</p>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <h5>Friendliness : </h5>
                                <div class="p-0 m-0 star-rating d-block">
                                    <span class="font-weight-bold p-0 m-0 star-ratings-top" id="spanRating">
                                        <i class="far fa-star rating" id="star"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                    </span>
                                    <span class="font-weight-bold p-0 m-0 star-ratings-bottom" id="bottomRating">
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                    </span>
                                    <h4 class="demo" class="font-weight-bold ml-4 d-block"></h4>
                                </div>
                            
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <h5>Understanding : </h5>
                                <div class="p-0 m-0 star-rating d-block">
                                    <span class="font-weight-bold p-0 m-0 star-ratings-top" id="spanRating">
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                    </span>
                                    <span class="font-weight-bold p-0 m-0 star-ratings-bottom" id="bottomRating">
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                    </span>
                                    <h4 class="demo" class="font-weight-bold ml-4 d-block"></h4>
                                </div>
                            
                            </div>


                            <div class="col-lg-4 col-md-6">
                                <h5>Seriousness : </h5>
                                <div class="p-0 m-0 star-rating d-block">
                                    <span class="font-weight-bold p-0 m-0 star-ratings-top" id="spanRating">
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                    </span>
                                    <span class="font-weight-bold p-0 m-0 star-ratings-bottom" id="bottomRating">
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                    </span>
                                    <h4 class="demo" class="font-weight-bold ml-4 d-block"></h4>
                                </div>
                            
                            </div>


                            <div class="col-lg-4 col-md-6 mt-lg-4 mt-md-0">
                                <h5 class="mr-3">Strictness : </h5>
                                <div class="p-0 m-0 star-rating d-block">
                                    <span class="font-weight-bold p-0 m-0 star-ratings-top" id="spanRating">
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                    </span>
                                    <span class="font-weight-bold p-0 m-0 star-ratings-bottom" id="bottomRating">
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                    </span>
                                    <h4 class="demo" class="font-weight-bold ml-4 d-block"></h4>
                                </div>
                            
                            </div>

                            <div class="col-lg-4 col-md-6 mt-lg-4">
                                <h5 class="mr-3">Time Management : </h5>
                                <div class="p-0 m-0 star-rating d-block">
                                    <span class="font-weight-bold p-0 m-0 star-ratings-top" id="spanRating">
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                        <i class="far fa-star rating"></i>
                                    </span>
                                    <span class="font-weight-bold p-0 m-0 star-ratings-bottom" id="bottomRating">
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                        <i class="fas fa-star rating"></i>
                                    </span>
                                    <h4 class="demo" class="font-weight-bold ml-4 d-block"></h4>
                                </div>
                                
                            </div>
                        
                            <div class="col-12 mt-2">
                                <div class="form-group">
                                    <label for="reviewArea">Description</label>
                                    <textarea class="form-control" id="reviewArea" rows="3" maxlength="400">
                                    </textarea>
                                </div>
                            </div>  

                        
                            <div class="col-12 form-group text-center">
                                <button type="submit" class="btn text-white ">Submit</button>
                            </div>
                        </form>
                    </div>
        
                    </div>
            </div>

            </div>
        </div>
       
    
    </section>

    <?php include "./footer.php" ?>


    <script>
       
         var star = document.getElementById('star');
  
        document.querySelectorAll('#spanRating').forEach(item => {
        item.addEventListener('mousemove', event => {




            var showRating = $(item).siblings( ".demo" );

            var bottomRating = $(item).siblings("#bottomRating")
        

            var starWidth = star.offsetWidth;
            var split = starWidth/10; 
            

            var currentRating, finalRating;
            mousePosition = event.layerX; 
           
            currentRating = mousePosition/split;
         
            finalRating = (currentRating/10).toFixed(1);
            if(finalRating == '5.1' || finalRating > '5.1')
            {
                finalRating = '5.0';
            } 
            showRating.html(finalRating);

         
             var show = (finalRating*1.85) * 10;

            
            
          
            bottomRating.css("width", show + 'px');
            bottomRating.css("zIndex", '2');
           
      

             
            

        })
        })

         document.querySelectorAll('#bottomRating').forEach(item => {
        item.addEventListener('mousemove', event => {

            


            var showRating = $(item).siblings( ".demo" );

           
        

            var starWidth = star.offsetWidth;
            var split = starWidth/10; 
            

            var currentRating, finalRating;
            mousePosition = event.layerX; 
           
            currentRating = mousePosition/split;
         
            finalRating = (currentRating/10).toFixed(1);
            if(finalRating == '5.1' || finalRating > '5.1')
            {
                finalRating = '5.0';
            } 
            showRating.html(finalRating);

         
             var show = (finalRating*1.85) * 10;

            
          
            $(item).css("width", show + 'px');
            $(item).css("zIndex", '2');
           
      

             
            

        })
        })

    

  
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