<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<!-- Navigation menu bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Annapurna</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success ml-4 my-2 my-sm-0 mr-2" href="Donate.php">Donate Now</a>
    </form>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-success ml-4 my-2 my-sm-0 mr-2" href="ngologin.php">NGO LOGIN</a>
    </form>
  </div>
</nav>
<!-- Carousel slides -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Little by Little a Little becomes A LOT!</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>"GIVING IS NOT JUST ABOUT MAKING A DONATION.</h3>
        <p>IT IS ABOUT MAKING A DIFFRENCE."</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>"BE THE CHANGE YOU WANT TO SEE IN THE WORLD."</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- About Us page -->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/img4.jpg" class="img-fluid" aboutimg>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">ANNAPURNA</h2>
				<h4 class="py-3">Donating to the needy is a great way to improve the conditions in your neighborhood or community. Donating food to the worthy people or organizations helps counter poverty, hunger and at the same time, it can improve harmony, friendliness, and trust among residents.</h4>
				<a href="about.php" class="btn btn-success">Know More</a>
			</div>
		</div>
	</div>
</section>

<!-- Team page -->
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Team</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="images/vj.jpeg" alt="Card image">
  					<div class="card-body">
    				<h4 class="card-title">Vijay Shukla</h4>
    				<p class="card-text">0829CS201179</p>
  				</div>
			</div>
		</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="images/vishal.jpg" alt="Card image">
  					<div class="card-body">
    				<h4 class="card-title">Vishal Kushwah</h4>
    				<p class="card-text">0829CS201185</p>
  				</div>
			</div>
		</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="images/piyush.jpg" alt="Card image">
  					<div class="card-body">
    				<h4 class="card-title">Piyush Patidar</h4>
    				<p class="card-text">0834CS201179</p>
  				</div>
			</div>
		</div>
	</div>
</div>

</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">Let's Help Together!</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
