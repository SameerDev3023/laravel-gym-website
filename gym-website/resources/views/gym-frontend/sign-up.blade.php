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
    <title>Sign Up</title>
  </head>
  <body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="container">
        <div class="form-wrapper bg-dark p-5 rounded-2">
            
            {!! Form::open(['url' => '/sign-up']) !!}
            <div class="form-heading text-center text-white">
                <h2 class="mt-4">⭐️ Sign Up ⭐️</h2>
            </div>
            <div class="form-group p-3">
             {{Form::label('Name', 'Name', ['for' => 'name','class'=>'text-white',])}}
             {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter Your Name']);}}
            </div>
            
            <div class="form-group p-3">
             {{Form::label('Email', 'Email', ['for' => 'email','class'=>'text-white',])}}
             {{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter Your Email']);}}
            </div>
            <div class="form-group p-3">
             {{Form::label('Contry', 'Country', ['for' => 'country','class'=>'text-white',])}}
             {{Form::text('country', '',['class'=>'form-control','placeholder'=>'Enter Your Country']);}}
            </div>
            <div class="form-group p-3">
             {{Form::label('City', 'City', ['for' => 'city','class'=>'text-white',])}}
             {{Form::text('City', '',['class'=>'form-control','placeholder'=>'Enter Your City']);}}
            </div>
            <div class="form-group p-3">
             {{Form::label('Address', 'Address', ['for' => 'Address','class'=>'text-white',])}}
             {{Form::text('Address', '',['class'=>'form-control','placeholder'=>'Enter Your Address']);}}
            </div>
            <div class="form-group p-3">
             {{Form::label('Number', 'Number', ['for' => 'Number','class'=>'text-white',])}}
             {{Form::text('Number', '',['class'=>'form-control','placeholder'=>'Enter Your Number']);}}
            </div>
            <div class="form-group p-3">
             {{Form::label('Password', 'Password', ['for' => 'address','class'=>'text-white'])}}
             {{Form::text('password', '',['class'=>'form-control','placeholder'=>'Enter Your Password']);}}
            </div>
            <div class="form-group p-3">
            {{Form::label('password', 'Confirm Password', ['for' => 'password','class'=>'text-white',])}}
            {{Form::text('cpassword', '',['class'=>'form-control','placeholder'=>'Enter Your Confirm password']);}}
            {{Form::submit('Sign Up!',['class'=>'btn btn-danger mt-4']);}}
           </div>
          
             <p class="text-center text-white"> Have An Account?<a href="{{url('/login')}}"> Log In</a></p>
             <p class="text-center text-white"><a href="{{url('/')}}" class="text-white"> Back</a></p>

            {!! Form::close() !!}
            </div>
            </div>
    </div>
    <!-- More: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->
  </body>
</html>
