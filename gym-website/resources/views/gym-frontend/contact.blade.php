@extends('gym-frontend.main')
@section('main-section')
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/css/bootstrap.min.css">
  <style>
    .grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 20px;
    }

    .grid-item {
      background-color: #f8f9fa;
      padding: 20px;
    }
  </style>
</head>
<body>
    <div class="container">
        <h1 class="bg-danger mt-2 " id="about-wrap">Contact Us</h1>

        
        <div class="row">
            <div class="col-md-6">
                <h1 class="bg-danger text-center"  id="msg-wrap">My Location</h1>
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109740.86931293675!2d76.68112749567369!3d30.735202977371053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed0be66ec96b%3A0xa5ff67f9527319fe!2sChandigarh!5e0!3m2!1sen!2sin!4v1684516749014!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
            <div class="col-md-6">
            {!! Form::open(['url' => 'foo/bar']) !!}
        <h1 class="bg-danger mt-2 " id="msg-wrap">Send Your Enquiry</h1>

            <div class="form-group">
             {{Form::label('Name', 'First Name', ['for' => 'name'])}}
             {{Form::text('Name', '',['class'=>'form-control']);}}
            </div>
            <div class="form-group">
             {{Form::label('Name', 'Last Name', ['for' => 'last-name'])}}
             {{Form::text('Name', '',['class'=>'form-control']);}}
            </div>
            <div class="form-group">
             {{Form::label('Name', 'Number', ['for' => 'number'])}}
             {{Form::text('Number', '',['class'=>'form-control']);}}
            </div>
            <div class="form-group">
             {{Form::label('Name', 'Country', ['for' => 'city'])}}
             {{Form::text('city', '',['class'=>'form-control']);}}
            </div>
            <div class="form-group">
             {{Form::label('Name', 'City', ['for' => 'city'])}}
             {{Form::text('city', '',['class'=>'form-control']);}}
            </div>
            <div class="form-group">
             {{Form::label('Name', 'Address', ['for' => 'address'])}}
             {{Form::text('Name', '',['class'=>'form-control']);}}
            </div>
            {{Form::submit('Submit!',['class'=>'btn btn-danger mt-2']);}}
            {!! Form::close() !!}
            </div>
        </div>
        </div>
               
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

   
</html>
@endsection