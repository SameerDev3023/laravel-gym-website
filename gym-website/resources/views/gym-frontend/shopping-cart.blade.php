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
    <title>Cart</title>
  </head>
  <body>
      <div class="container m-5">
    <button type="button" class="btn btn-danger "><a href=
    "{{url('/')}}" class="text-decoration-none text-white mt-2">Back</a></button>
    <h1 class="text-center mb-5">Your Cart</h1>
    <table class="table border-2 border-dark">
        <thead>
          <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Package</th>
            <th scope="col">Price</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
           
          @foreach($cartData as $Data)
          <tr>
            <th scope="row">{{$Data['cart_items']}}</th>
            <td>{{$Data['package_duration']}}</td>
            <td>{{$Data['package_price']}}</td>
            <td>
      
            <button type="button" class="btn btn-danger"><a href="{{url('shopping-cart/remove')}}/{{$Data['cart_items']}}" class="text-decoration-none text-white">Remove</a></button>
      
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
     

       <div class="text-center"> <button type="button" class="btn btn-success"><a href="{{url('/shopping-cart/buy')}}" class="text-decoration-none text-white">Buy Membership</a></button></div>
      
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
