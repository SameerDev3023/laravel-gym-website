@extends('gym-frontend.main')
@section('main-section')
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

    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    @push('title')
    <title>Home</title>
  </head>
  <body >
<div class="container-fluid  g-5">
        <div class="content-wrapper mt-5 ">
          <h1 id="about-wrap" class=" bg-danger">About</h1>
            <div class="row m-2">
                <div class="first-grid  g-5 col-md-6 col-12 col-lg-6 col-sm-12 col-xs-12 order-2 order-md-1 order-lg-1">
                  <div class="image-wrapper ">
                  <!-- <img src="https://images.unsplash.com/photo-1594381898411-845e7d193883?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"/> -->
                     </div>
                 </div>

            <div class="second-grid  g-5 bg-dark col-md-6 col-12 col-lg-6 col-sm-12 col-xs-12 order-1 order-md-2 order-lg-2">
                <div class="about-heading">
                    <h2 id="about-h">About Star<br> Gym</h1>
                </div>
                <div class="about-paragraph">
                <p id="about-p">Star Gym is a premier fitness facility that caters to fitness enthusiasts of all levels. With state-of-the-art equipment and a team of experienced trainers, it offers a comprehensive range of fitness programs and services. From weight training and cardio exercises to group classes and personal training sessions, Star Gym ensures that individuals can achieve their fitness goals effectively. The gym's modern and spacious environment provides a motivating atmosphere for members to push their limits and make progress. With its commitment to excellence and a focus on customer satisfaction, Star Gym has established itself as a go-to destination for those seeking a top-notch fitness experience.
                </p>
                <div class="btn btn-danger" id="read-more">
                   Read More
                    </div>
                </div>
            </div>
</div>
</div>
</div>



<!-- price package section start -->

<div class="container mt-5">
  <h1 id="about-wrap" class=" bg-danger">Packages</h1>
    <div class="card-wrapper">
      <div class="row">
        <div class="card-body col-md-4 col-12  mt-3 col-xs-6 col-lg-4 ">
          <form action="{{url('/shopping-cart')}}" method="post"  id="cart-form">
            @csrf
            <div class="image-wrapper">
                <img class="card-img" src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" />
            </div>
            <div class="package-title ">
                <h3 class="package-months bg-danger">3 Month Package</h3>
                <input type="hidden" value="3 Month Package" name="package_duration"/>
                <p class="price bg-sucess"><del>₹6000</del> ₹4500</p>
                <input type="hidden" value="₹4500" name="package_price"/>

            </div>  
            <div class="card-text">
            Experience the ultimate convenience with our special 3-month Star Gym package. Get access to top-notch facilities, personalized training, and exclusive perks. Don't wait, seize this opportunity to transform your fitness journey today!
            </div>
            <!-- <div class="but-btn-wrapper mt-3"><a href="#" class="buy-button btn btn-danger">Add to Bag</a></div> -->
            <input type="submit" class="buy-button btn btn-danger" value="Add to Bag"/>

          </form>
         </div>
         <div class="card-body col-md-4 col-12 mt-3 col-xs-6 col-lg-4 ">
           <form action="{{url('/shopping-cart')}}" method="post"  id="cart-form">
                      @csrf
            <div class="image-wrapper">
                <img class="card-img" src="https://images.unsplash.com/photo-1571731956672-f2b94d7dd0cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1772&q=80"/>
            </div>
            <div class="package-title ">
                <h3 class="package-months bg-danger">6 Month Package</h3>
                <input type="hidden" value="6 Month Package" name="package_duration"/>
                <p class="price bg-sucess"><del>₹12000</del> ₹8000</p>
                <input type="hidden" value="₹8000" name="package_price"/>
            </div>  
            <div class="card-text">
            Upgrade your fitness commitment with our 6-month Star Gym package. Unleash your potential with extended access to premium facilities, personalized training, and exclusive member benefits. Don't hesitate, embark on a transformative fitness journey now!
            </div>
            <!-- <div class="but-btn-wrapper mt-2"><a href="#" class="buy-button btn btn-danger">Add to Bag</a></div> -->
            <input type="submit" class="buy-button btn btn-danger" value="Add to Bag"/>


          </form>
         </div>
     
         <div class="card-body col-md-4 col-12 col-xs-12 mt-3 col-lg-4">
          <form action="{{url('/shopping-cart')}}" method="post"  id="cart-form">
                 @csrf
            <div class="image-wrapper">
                <img  class="card-img" src="https://images.unsplash.com/photo-1574680088814-c9e8a10d8a4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1769&q=80"/>
            </div>
            <div class="package-title ">
                <h3 class="package-months bg-danger">12 Month Package</h3>
                <input type="hidden" value="12 Month Package" name="package_duration"/>

                <p class="price bg-sucess"><del>₹24000</del> ₹12000</p>
                <input type="hidden" value="₹12000" name="package_price"/>

            </div>  
            <div class="card-text">
            Elevate your fitness journey with our 12-month Star Gym package. Unlock a year of unlimited access to state-of-the-art facilities, expert guidance, and exclusive member perks. Don't miss out on this transformative opportunity to achieve your fitness goals!
            </div>
            <input type="submit" class="buy-button btn btn-danger" value="Add to Bag"/>
         </div>
        </div>
      </div>
    </form>
</div>








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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="{{URL::asset('js/cart.js')}}">
</script>
</html>

@endsection