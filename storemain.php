<!DOCTYPE html>
<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<head>

    <link rel="stylesheet" href="./css/storemain.css"></link>
    <script type="text/javascript" src="./JS/sidenavbar.js"></script>
    <script type="text/javascript" src="./JS/text.js"></script>
</head>


<body>

<!--  New to navigation  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a href="#" class="navbar-brand">My Store</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="#" class="nav-link" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">My cart</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">About us</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">Contact us</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
              </li>



          </div>


  </nav>

<!--    Login form in progress    -->

<div id="id01" class="modal">

<form class="modal-content animate" action="/action_page.php">
  <div class="imgcontainer">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>




<!--    Cart form      -->
<div id="id02" class="modal">
    <form class="modal-content animate" action="">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
            <button type="Checkout">Checkout</button>
        </div>


    </form>
</div>





<!-- Carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./img/download.jpeg" alt="First slide" height="400px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/download.jpeg" alt="Second slide" height="400px">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./img/download.jpeg" alt="Third slide" height="400px">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



  <!-- Card menu -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
          <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Detail</a>
          </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
          <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Add</a>
              <a href="#" class="btn btn-primary">Detail</a>
          </div>
      </div>
    </div>

      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

    </div>


    <div class="row">
      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add</a>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
      </div>

    </div>



  </div>
</div>







<!--<img class="card-img-top" src="./img/download.jpeg" alt="Card image cap">-->
 <div class="container my-container">
    <div class="row my-row">
        <div class="col-md-4 my-col">
          row 1 col 1
        </div>
        <div class="col-md-8 my-col">
          row 1 col 2
        </div>
    </div>
    <div class="row my-row">
        <div class="col-md-6 my-col">
          row 2 col 1
        </div>
        <div class="col-md-6 my-col">
          row 2 col 2
        </div>
    </div>

</div>










</body>













</html>
