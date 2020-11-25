<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./header.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" />

    <!--AJAX AND JAVASCRIPT-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <header id="navbar-section" class="navbar-section">
        <nav class="navbar fixed-top navbar-expand-lg">

            <a class="navbar-brand" href="#">
            	<img src="./logo.jpg" height="60px" width="60px">
            </a>
               

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>
             <div class="navbardropdowns d-lg-none p-2 mt-1 ml-2">
                <img src="./reviewPic-4.jpeg" alt="DropdownProfilePicclass="img-fluid">
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#/">Dashboard</a>
                    <a class="dropdown-item" href="#/">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#/">Logout</a>
                </div>
            </div>
            <div class="collapse navbar-collapse text-light justify-content-start row" id="navbarSupportedContent">

                
                <div class="col-12">
                    <ul class="navbar-nav">
                        <form action="#/" class="form form-1">
                            <input class="form-control input-1" type="search" placeholder="Search..">
                            <span><i class="fa fa-search"></i></span>
                        </form>
                        <li class="nav-item mr-3">
                            <a class="nav-link hover" href="#"><span class="span mr-2"><i
                                        class="fas fa-home"></i></span>Home</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link hover" href="#"><span class="span mr-2"><i
                                        class="fas fa-chalkboard-teacher"></i></span>Teacher</a>
                        </li>
                        <li class="nav-item dropdown hover mr-3">
                            <a class="nav-link pb-0" href="#/">
                                <span><i class="fas fa-user-check"></i></span>
                                Tutor Login
                            </a>
                        </li>
                        <li class="nav-item  mr-3">
                            <a class="nav-link hover" href="#"><span class="span mr-2"><i
                                        class="fas fa-scroll"></i></span>About Us</a>
                        </li>
                        <li class="nav-item ml-auto mr-0 form-2 d-none d-lg-block" id="searchNavItem">
                            <!-- <form> -->
                                <input class="searchBar" placeholder='Search...' type="search" id="searchBarId">
                                <span id="searchSpan"><i class="fa fa-search" id="search-icon"></i> </span>
                            <!-- </form> -->
                        </li>
                        <li class="nav-item dropdown hover mr-4">
                            <a class="nav-link pb-0" href="#/">
                                <span><i class="fas fa-user-check"></i></span>
                                Login
                            </a>
                        </li>
                        <li class="nav-item mr-3 profilePicDropdown p-2 hover mt-1 d-none d-lg-block">
                           <div class="dropdowns">
                                <img src="./reviewPic-4.jpeg" alt="DropdownProfilePic" class="img-fluid">
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="#/">Dashboard</a>
                                    <a class="dropdown-item" href="#/">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#/">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
    </header>
    <!--END OF NAVBAR-->

   
    <!--Javascipt-->

    <script>
        var search=document.getElementById("search-icon");
        var inputField= document.getElementById('searchBarId');
        search.addEventListener("mouseover", mouseOver);
        inputField.addEventListener("mouseover", mouseOver);
        inputField.addEventListener("focusin", mouseOver);
        inputField.addEventListener("focusout", mouseOut);
        function mouseOver(){
        
            searchBarId.style.width="190px";
        }
        function mouseOut(){
            searchBarId.style.width="0px";
        }
    </script>
   
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