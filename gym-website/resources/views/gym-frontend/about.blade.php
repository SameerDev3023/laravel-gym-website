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
    <title>About us</title>
  </head>
  <body >
    <div class="container-fluid  g-5">
        <div class="content-wrapper mt-5 ">
          <h1 id="about-wrap" class=" bg-danger">About</h1>
            <div class="row m-2">
                <div class="first-grid  g-5 col-md-6 col-12 col-lg-6 col-sm-12 col-xs-12 order-2 order-md-1 order-lg-1">
                  <div class="image-wrapper ">
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

@endsection