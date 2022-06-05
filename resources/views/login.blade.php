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
        .bg_image {
            background-image: url("{{ asset('images/log1.jpg') }}");
            background-repeat: no-repeat;
            /* width: 5000px; */
            /* height: 400px; */
            background-size: cover;


        }

        .form_style {
            border: 1px dotted rgb(8, 8, 0);
            border-radius: 30px;
            width: 450px;
            background-color: yellow;
            height: 300px;


            /* margin-top: 300px;
      margin-left: 300px; */

        }

        .font_style {
            /* font-style: bold; */
            text-decoration-color: #cc3100;
        }

        .input_style {
            padding-left: 50ex;
            width: 400px;
        }

        .label_style {
            font-size: medium;
        }

        .row>.col {
            padding-top: .75rem;
            padding-bottom: .75rem;
        }

        .reel {
            font-size: large;
            background-image: url("{{ asset('images/reel4.jpg') }}");
            width: 100%;
            height: 100px;
            margin-left: 0%;
        }
    </style>

</head>

<body class="bg_image">

    <div class="container-fluid">
        <div class="row row-sm-8" width="100%;">
            <div class="col col-sm-12">
                <div class="reel">
                    <span style="margin-top:20px ; margin-right: 30px;">
                        <img src=" {{ asset('images/icon1.jpg') }}" alt="" width="50px" height="50px" >
                    </span>


                    <span>

                        <h1 style="color:#090000fe; float: left; padding-left: 30px; padding-top: 20px;"
                            class="font-italic font-weight-bold">MyCinema</h1>
                    </span>

                    <span>
                         <!-- <a href=""> -->
                            <h5 style="float: right; padding-right: 30px; padding-top: 30px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New user ?</button></h5>
                        <!-- </a> -->
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>

        <div class="row justify-content-center" >
            <div class="col col-sm-8 offset-sm-1 text-center">
                <form action="" class="form_style  justify-content-center align-items-center container">
                    <div class="form-group" >
                        <H1 align="center">Login</H1>
                        <label for="UName" class="label_style">Username</label>
                        <input type="text" class="form-control input_style" id="UName" ">
                  </div>
                  <div class=" form-group">

                        <label for="psw">Password</label>
                        <input type="password" class="form-control input_style" id="psw">
                    </div>
                    <!-- ?<button type="button" class="btn btn-primary" width="90px" ><< Back</button> -->
                    <button type="button" class="btn btn-primary"  width="120px" style="align-content: center;" >&nbsp; &nbsp;&nbsp; ok &nbsp; &nbsp; &nbsp;   </button>
                </form>
            </div>

        </div>
    </div>
    

</body>

</html><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="form_style  justify-content-center align-items-center container">
            <div class="form-group" >
                        <label for="UName" class="label_style">Username</label>
                <input type="text" class="form-control input_style" id="UName" >
          </div>
      
            <div class="form-group" >
            <label for="UName" class="label_style">Password</label>
            <input type="password" class="form-control input_style" id="UName" >
            </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>