<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .reel {
            font-size: large;
            background-image: url("{{ asset('images/reel4.jpg') }}");
            width: 100%;
            height: 100px;
            /* margin-left: 0%; */
        }

        .icon_padd {
            width: 70px;
            height: 65px;
            padding-top: 20px;
            float: left;

        }

        h1 {
            /* padding-left: 50px; */
            /* padding-bottom: 1000px; */
            float: left;
            padding-top: 10px;
            font-style: italic;
        }

        text_len {
            max-width: 80px;
            padding-top: 10px;


        }

        .carousel .carousel-item {
            height: 500px;
        }

        .carousel-item img {
            position: absolute;
            object-fit: cover;
            top: 0;
            left: 0;
            min-height: 500px;
        }

        body {

            background-color: rgb(240, 247, 219);
        }
    </style>
</head>

<body>
    <!-- flex -->

    <div class="d-flex flex-row bd-highlight align-items-center reel mb-3">
        <div class="p-2 bd-highlight"><span><img src="{{ asset('images/icon1.jpg') }}" alt="" class="icon_padd"></span>
        </div>
        <div class="p-2 bd-highlight">
            <h1 class="font-italic font-weight-bold">My Cinema</h1>
        </div>
        <div class="p-2 flex-fill bd-highlight text_len">
            <form>
                <div class="form-group">

                    <input type="email" class="form-control flex-fill" id="text1" placeholder="search">
                </div>
            </form>
        </div>
        <div class="p-2 bd-highlight"><b> Notification</b></div>
        <div class="p-2 bd-highlight">
            <form class="form-inline">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b> Location</b></label>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>kozhikode</option>
                    <option value="1">KZD</option>
                    <option value="2">TVM</option>
                    <option value="3">KOCHI</option>
                </select>
            </form>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Movies</a></li>
            <li class="breadcrumb-item"><a href="#">stream</a></li>
            <li class="breadcrumb-item "><a href="#">coming Soon</a></li>
            <li class="breadcrumb-item"><a href="#">Filter</a></li>
            <li class="breadcrumb-item"><a href="#">Offer</a></li>
            
        </ol>
    </nav> -->
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">New Releases</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Coming Soon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Library</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Filter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Offer</a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="#">Events</a> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">Events</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Online events</a>
                      <a class="dropdown-item" href="#">Stage Shows</a>
                      <a class="dropdown-item" href="#">Shows for kids</a>
                    </div>
                  </li>
            </li>
        </ul>
    </nav>
    <hr>
    <h2>Movies in Kozhikode</h2>
    <br>

<!--     
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
              <h5>Type</h5>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-light">Light</button>
            </div>
            <div class="col-8">
                <h4>select language</h4>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
             <div class="col-4"></div> 
            <div class="col-12">
                <img src="{{ asset('images/mov1.jpg') }}" class="d-block w-100" alt="..." width="100px">
                <img src="{{ asset('images/mov1.jpg') }}" class="d-block w-100" alt="..." width="100px">

            </div>
        </div>
    </div>
    <br><br> -->
    

    <div class="container-fluid">
        <div class="row" style="display: inline; padding-left: 15px;">
            <div class="col-3" style="display:inline-block;">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/mov1.jpg') }}" class="card-img-top" alt="..." height="350px"
                        style="border-radius:30px ;">
                    <div class="card-body">
                        <h5 class="card-title">Filim Name</h5>
                        <p class="card-text">discription/type of movie</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-3" style="display:inline-block ;">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/mov1.jpg') }}" class="card-img-top" alt="..." height="350px"
                        style="border-radius:30px ;">
                    <div class="card-body">
                        <h5 class="card-title">Movie Nmae</h5>
                        <p class="card-text">discription/type of movie</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-3" style="display:inline-block ; ">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/mov1.jpg') }}" class="card-img-top" alt="..." height="350px"
                        style="border-radius:30px ;">
                    <div class="card-body">
                        <h5 class="card-title">Filim Name</h5>
                        <p class="card-text">discription/type of movie</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-3" style="display:inline-block ;">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/mov1.jpg') }}" class="card-img-top" alt="..." height="350px"
                        style="border-radius:30px ;">
                    <div class="card-body">
                        <h5 class="card-title">Movie name</h5>
                        <p class="card-text">discription/type of movie</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>





    <h2 style="padding-left:20px; background-color: black; color:antiquewhite">New releases</h2>
    <br><br>
    <!-- Carousel -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="padding: 50px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/mov1.jpg') }}" class="d-block w-100" alt="..." width="100px">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mov2.jpg') }}" class="d-block w-100" alt="..." width="100px">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/mov3.jpg') }}" class="d-block w-100" alt="..." width="100px">
            </div>
        </div>
    </div>
    <hr>
   


    <h2 style="padding-left: 20px; background-color: black;color: rgb(250, 251, 252);">Coming Soon</h2><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <!-- <h4>4:3 aspect ratio</h4> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FsH9XDsSSV8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-4">
                <!-- <h4>4:3 aspect ratio</h4> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FsH9XDsSSV8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-4">
                <!-- <h4>4:3 aspect ratio</h4> -->
                <div class="embed-responsive embed-responsive-4by3">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/DCUuYTKulWk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                    <video controls src="{{ asset('images/globe.mp4') }}"></video>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br><br>

    <!-- Footer -->
    <footer class="page-footer font-small teal pt-4" >

        <!-- Footer Text -->
        <div class="container-fluid text-center text-md-left" style="background-color:rgb(118, 118, 208) ;">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-12">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold text-center">My Cinema</h5>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">


            </div>
            
        </div>
        

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="/">www.MyCinema.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



</body>

</html>