<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <!-- https://cdnjs.com/libraries/twitter-bootstrap/5.0.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="{{URL::asset('css/signup-form.css')}}"
    />
    <!-- Icons: https://getbootstrap.com/docs/5.0/extend/icons/ -->
    <!-- https://cdnjs.com/libraries/font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    @push('title')
    <title>Log In</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="container">
        <div class="form-wrapper bg-dark mt-5 p-5 rounded-2">
            <div class="form-heading text-center text-white">
                <h2>⭐️ Login ⭐️</h2>
            </div>
     
  {!! Form::open(['url' => '/check']) !!}
            <div class="form-group p-3">
             {{Form::label('Email', 'Email', ['for' => 'email','class'=>'text-white',])}}
             {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter Your Email','id'=>'email'])}}
             {{Form::label('', '', ['for' => 'email','id'=>'error_messg_email'])}}
            </div>
            <div class="form-group p-3">
             {{Form::label('Password', 'Password', ['for' => 'address','class'=>'text-white'])}}
                <i id="show-pass" class="fa fa-eye" style="color:white;float
                :right">
                </i>
             {{Form::password('password', ['class' => 'form-control','placeholder'=>'Enter Your Password','id'=>'password'])}}
             {{Form::label('', '', ['for' => 'email','id'=>'error_messg_pass'])}}
            </div>
            <div style="margin-left:20px">
              {{Form::submit('Login!',['class'=>'btn btn-danger','id'=>'submitForm'])}}
            </div>
             <p class="text-center text-white">Don't Have An Account?<a href="{{url('/sign-up')}}"> Sign In</a></p>
             <p class="text-center text-white"><a href="{{url('/')}}" class="text-white"> Back</a></p>
            {!! Form::close() !!}
            </div>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{URL::asset('js/login-form.js')}}"></script>
    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
