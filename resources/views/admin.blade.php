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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
            padding-top: 25px;
            float: left;
        }

        h1 {
            /* padding-left: 50px; */
            /* padding-bottom: 1000px; */
            float: left;
            padding-top: 10px;
        }

        text_len {
            max-width: 80px;


        }

        btn_style {
            background-color: rgb(213, 229, 243);
            border: 0px;

        }
    </style>
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</head>

<body>

    <div class="d-flex flex-row bd-highlight align-items-center reel mb-3">
        <div class="p-2 bd-highlight"><span><img src="{{ asset('images/icon1.jpg') }}" alt="" class="icon_padd"></span>
        </div>
        <div class="p-0 bd-highlight">
            <h1 class="font-italic font-weight-bold">My Cinema</h1>
        </div>
        <div class="p-2 flex-fill bd-highlight text_len">
            <form>
                <div class="form-group">

                    <input type="text" class="form-control" id="text1" placeholder="search">
                </div>
            </form>


        </div>
        <div class="p-2 bd-highlight"><span style="font-size: 20px">Message</span></div>
    </div>



    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <div class="">
                    <button class="btn_style" onclick="w3_open()"  style="border: none;">☰</button>
                  </div>
            </li>
            <li class="breadcrumb-item"><a href="#">Movies</a></li>
            <li class="breadcrumb-item"><a href="#">stream</a></li>
            <li class="breadcrumb-item "><a href="#">coming Soon</a></li>
            <li class="breadcrumb-item"><a href="#">Transactions</a></li>
            <li class="breadcrumb-item"><a href="#">Viewed As</a></li>
            <li class="breadcrumb-item"><a href="#">Offer</a></li>
            <li class="breadcrumb-item"><a href="#">Send Message</a></li>
        </ol>
    </nav> -->



    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- <a class="nav-link" href="#">New Releases</a> -->
                <div class="">
                    <button class="btn_style" onclick="w3_open()" style="border: none;">☰</button>
                </div>
            </li>
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
                <a class="nav-link" href="#">Events</a>

            </li>
        </ul>
    </nav>


    <hr>
    <h2>New Releases</h2>
    
    <form style="padding-left:20px ; padding-right:10px;">
        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="inputEmail4">Movie Name</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>

</body>

</html>