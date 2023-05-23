<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @push('title')
  <title>Admin Panel</title>
  <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="{{URL::asset('css/sidenavbar.css')}}" />
</head>

<body>
<?php
  $name =session()->get('user_email');
  $email = str_replace(['@gmail', '.', 'com'], '', $name);
  ?>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-10 ">
      <a href="#" class="nav-link h3 text-white my-2" >
       Welcome {{$email}}
      </a>
      <li  class="nav-link">
        <i class="bx bxs-dashboard"></i>
        <span class="mx-2"><a href="{{url('/')}}" >Home</a></span>
      </li>
      <!-- <li href="#" class="nav-link">
        <i class="bx bx-user-check"></i>
        <span class="mx-2"><a href="{{url('/')}}" >Profile</a></span>
      </li> -->
      <li href="#" class="nav-link">
        <i class="bx bx-cart"></i>
        <span class="mx-2"><a href="{{url('/admin/orders')}}" >Your Orders</a></span>
      </li>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5">
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
  <div class="p-1 my-container active-cont">
   
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
   
   
   <!--  <h3 class="text-dark p-3">{{$email}}
    </h3>
    <p class="px-3">Responsive navigation sidebar built using <a class="text-dark" href="https://getbootstrap.com/">Bootstrap 5</a>.</p>
    <p class="px-3"><a href="https://github.com/harshitjain-hj" class="text-dark">Checkout my Github</a></p>
  </div> -->

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="{{URL::asset('js/side-navbar.js')}}"></script>
</body>

</html>