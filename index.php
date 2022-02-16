<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shopping Culture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="">Contact US</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner_lg/b2.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/banner_lg/b2.jpg" alt="Chicago" width="1100" height="500">
      
    </div>
    <div class="carousel-item">
      <img src="images/banner_lg/b2.jpg" alt="New York" width="1100" height="500">
      
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>



<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">

        <div class="card" style="width:400px">
              <img class="card-img-top" src="images/ourservices/shoes.jpg" alt="Card image">
    <div class="card-body">
    <h4 class="card-title">Shoes</h4>
    <a href="shoes.php" class="btn btn-primary">See More</a>
    </div>
        </div>
      </div>
       <div class="col-lg-4 col-md-4 col-12">

        <div class="card" style="width:400px">
              <img class="card-img-top" src="images/ourservices/watch.jpg" alt="Card image">
    <div class="card-body">
    <h4 class="card-title">Watch & Accesories</h4>
    <a href="watch.php" class="btn btn-primary">See More</a>
    </div>
        </div>
      </div>
       <div class="col-lg-4 col-md-4 col-12">

        <div class="card" style="width:400px">
              <img class="card-img-top" src="images/ourservices/glasses.jpg" alt="Card image">
    <div class="card-body">
    <h4 class="card-title">Glasses</h4>
    <a href="glasses.php" class="btn btn-primary">See More</a>
    </div>
        </div>
      </div>
      
    </div>
  </div>    
</section>
<footer>
<p class="p-4 bg-dark text-white text-center">Created by Aladeen Devlpoers</p>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>