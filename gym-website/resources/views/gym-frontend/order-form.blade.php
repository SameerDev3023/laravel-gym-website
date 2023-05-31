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
    <link
      rel="stylesheet"
      href="{{URL::asset('css/signup-form.css')}}"
    />
    @push('title')
    <title>Order</title>
  </head>
  <body>
<div class="container m-5" style="width:100%;">
   <div class="row bg-dark p-2 rounded-2 ">
        <div class="col-md-8">
        <div class="form-wrapper  p-5 rounded-2 " style="width:100%;">
                 <!--  Form Action Dynamically Coming from js file  base on payment method -->
                 <!-- if payment method is paytm then the action will be automatically set base on paytm -->
             {!! Form::open(['id'=>'checkout-form']) !!}
            <div class="form-heading text-center text-white">
                <h2 class="mt-4">⭐️ Billing Details ⭐️</h2>
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_name', 'Name', ['for' => 'name','class'=>'text-white',])}}
            {{Form::text('customer_name', '',['class'=>'form-control','placeholder'=>'Enter Your Name']);}}
            </div>

            <div class="form-group p-3">
            {{Form::label('customer_email', 'Email', ['for' => 'email','class'=>'text-white',])}}
            {{Form::text('customer_email', '',['class'=>'form-control','placeholder'=>'Enter Your Email']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_gender', 'Gender', ['for' => 'Gender','class'=>'text-white',])}}
            </div>
            <div class="form-group p-3">
            {{Form::label('Male', 'Male', ['for' => 'Gender','class'=>'text-white',])}}
            {{Form::radio('customer_gender', 'Male',['class'=>'form-control']);}}
            {{Form::label('Female', 'Female', ['for' => 'customer_gender','class'=>'text-white',])}}
            {{Form::radio('customer_gender', 'Female',['class'=>'form-control']);}}
            {{Form::label('Other', 'Other', ['for' => 'customer_gender','class'=>'text-white',])}}
            {{Form::radio('customer_gender', 'Other',['class'=>'form-control']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_number', 'Number', ['for' => 'Number','class'=>'text-white',])}}
            {{Form::number('customer_number', '',['class'=>'form-control','placeholder'=>'Enter Your Number']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_country', 'Country', ['for' => 'country','class'=>'text-white',])}}
            {{Form::text('customer_country', '',['class'=>'form-control','placeholder'=>'Enter Your Country']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_state', 'State', ['for' => 'State','class'=>'text-white',])}}
            {{Form::text('customer_state', '',['class'=>'form-control','placeholder'=>'Enter Your State']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('customer_city', 'City', ['for' => 'city','class'=>'text-white',])}}
            {{Form::text('customer_city', '',['class'=>'form-control','placeholder'=>'Enter Your City']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('Address', 'Address', ['for' => 'Address','class'=>'text-white',])}}
            {{Form::text('Address', '',['class'=>'form-control','placeholder'=>'Enter Your Address']);}}
            </div>

            <div class="form-group p-3">
            {{Form::label('customer_pincode', 'Pincode', ['for' => 'address','class'=>'text-white'])}}
            {{Form::text('customer_pincode', '',['class'=>'form-control','placeholder'=>'Enter Your Pincode']);}}
            </div>


      
        </div>
         </div>

            <div class="col-md-4">
            <h4 class="d-flex text-center mb-3">
        <span class="text-white bg-danger p-2 rounded-2">Your cart</span>
        
      </h4>
      @php
$totalPrice = 0; // Variable to store the total package price
@endphp
      <ul class="list-group mb-3">
    
          <h6 class="my-0 text-white">Membership</h6>
          @if(session('cartAllData') && is_array(session('cartAllData')))
          @foreach(session('cartAllData') as $product)
          @foreach($product as $products)
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <h6> 
            {{$products['package_duration']}}
          </h6>
        <!-- <div>
            <small class="text-muted">Brief description</small>
          </div> -->
          <span class="text-muted">{{$products['package_price']}}</span>
        </li> 
        @php
                $priceWithoutCurrency = str_replace('₹', '', $products['package_price']);
                $totalPrice += $priceWithoutCurrency; // Convert string to integer and increment the total price
                @endphp

            @endforeach
        @endforeach
        @else
        <div>
            <small class="text-muted">No Products Available In Cart</small>
          </div>
     
          @endif
        
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (INR)</span>
          <strong>₹{{$totalPrice}}</strong>
         @php
                session()->put('total_price',$totalPrice)
         @endphp
        </li>
      </ul>




  
    @csrf
    <ul class="list-group mb-3">
        <h6 class="my-0 text-white">Payment Method</h6>
        @php
            $paymentOptions = [
                [
                    'name' => 'Paytm',
                    'logo' => 'data:image/png;base64,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',
                    'value' => 'Paytm',
                    'width'=> 50
                ],
                [
                    'name' => 'Google Pay',
                    'logo' => 'https://logowik.com/content/uploads/images/google-pay.jpg',
                    'value' => 'Google_Pay',
                    'width'=> 50
                ],
                [
                    'name' => 'Pay After Visit',
                    'logo' => 'https://png.pngtree.com/png-clipart/20210606/original/pngtree-cash-on-delivery-or-cod-icon-png-png-image_6388553.jpg',
                    'value' => 'COD',
                    'width'=> 50
                ],
                // Add more payment options here
            ];
        @endphp
        @foreach($paymentOptions as $option)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6>{{$option['name']}}</h6>
                    <input type="radio" name="payment_option" value="{{$option['value']}}" >
                </div>
                <img src="{{$option['logo']}}" alt="{{$option['name']}} Logo" class="payment-logo" width="{{$option['width']}}">
            </li>
        @endforeach
    </ul>
    <div class="btn-wrapper text-center">
    <p class="text-center text-white"><a href="{{url('/shopping-cart')}}" class="text-white">Back</a></p>
    
        <button type="submit" class="btn btn-danger m-2 btn-lg text-center" >Proceed to Checkout</button>
    </div>
    {!! Form::close() !!}
</div>
     </div>
 </div>

    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="{{URL::asset('js/order-form-validation.js')}}"></script>

</html>
