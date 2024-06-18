
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    </head>

<body>
   <div class="container-fluid bg-dark " style="height: 50px;" >
     <div class="row">
       <div class="col-3 text-warning mt-2"><i class="fa-solid fa-envelope text-light mx-3"></i>shailesh228146@gmail.com</div>
       <div class="col-3 text-warning mt-2"><i class="fa-solid fa-phone-volume mx-3 text-light"></i>+91 8853046467</div>
       <div class="col-3 text-warning mt-2">eCommerce website</div>
       <div class="col-3 text-warning mt-2"> <i class="fa-solid fa-location-dot mx-3 text-light"></i>kadipur Sultanpur  Pin -(228145)</div>
     </div>
   </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid bg-dark text-light">
    <a class="navbar-brand" href="/"><img src="img/logo.png " style="height: 50px; width: 200px;" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active px-4 text-light" aria-current="page" href="/"> <i class="fa-solid fa-house mx-2 text-warning"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active px-4 text-light" aria-current="page" href="{{url('/about')}}"><i class="fa-solid fa-square-check mx-2 text-warning"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active px-4 text-light" aria-current="page" href="{{url('/service')}}"> <i class="fa-brands fa-product-hunt mx-2 text-warning"></i>Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active px-4 text-light" aria-current="page" href="{{url('/gallary')}}"> <i class="fa-solid fa-photo-film mx-2 text-warning"></i> Gallary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active px-4 text-light" aria-current="page" href="{{url('/contact')}}"> <i class="fa-solid fa-phone-volume mx-2 text-warning"></i>Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-4 text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pages
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">courses</a></li>
            <li><a class="dropdown-item" href="#">Teams</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Pricing</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-4 text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Blog</a></li>
            <li><a class="dropdown-item" href="#">Single post</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--slider start -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/a1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/a8.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/a2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--slider end-->