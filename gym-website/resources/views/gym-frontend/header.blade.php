<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="{{URL::asset('css/header.css')}}"
    />
    @stack('title')
  </head>
  <body>
    <div class="header-wrapper">
</div>
<header>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">STAR GYM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{url('about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/packages')}}">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/contact')}}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/gallery')}}">Gallery</a>
        </li>
        <li class="nav-item">
          <a id="login" class="nav-link text-center" aria-current="page" href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            Login
          </a>
        </li>
        <li class="nav-item">

        <a id="signup" class="nav-link text-center" aria-current="page" href="{{url('/sign-up')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            Sign In
          </a>
        </li>
      </ul>

      
    </div>
  </div>
</nav>

 <div class="heading-wrapper">
        <h1 class="header-heading">
        Where Fitness<br>
        Becomes Your 
        <br>Lifestyle
        </h1>
    <div class="buy-membership btn btn-danger rounded text-center">
       <a href="{{url('/packages')}}"> Buy Membership</a>
    </div>
</div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{URL::asset('js/header-slider.js')}}"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- https://cdnjs.com/libraries/popper.js/2.5.4 -->
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"
    ></script> -->

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->

</body>
</html>