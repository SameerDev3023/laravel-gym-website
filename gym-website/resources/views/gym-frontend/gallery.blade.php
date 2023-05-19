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
    <title>Gallery</title>
  </head>
  <body >
  <section class="gallery-block grid-gallery">
	<div class="container">
		<div class="heading mt-4">
        <h1 id="about-wrap" class=" bg-danger">Gallery</h1>

		</div>
		<div class="row">
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1544033527-b192daee1f5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1616279967983-ec413476e824?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1752&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1637666062717-1c6bcfa4a4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1637666218229-1fe0a9419267?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
					<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1630703178161-1e2f9beddbf8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1584863231364-2edc166de576?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1518609571773-39b7d303a87b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
			<div class="col-md-6 col-lg-4 item">
				<a class="lightbox" >
        	<img class="img-fluid image scale-on-hover" src="https://images.unsplash.com/photo-1518310383802-640c2de311b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80">
        </a>
			</div>
		</div>
	</div>
</section>







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