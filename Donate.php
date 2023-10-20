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
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Donor Information</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php"method="post">
			<div class="form-group">
				<label>NAME</label>
				<input type="text" name="donor" autocomplete="off" class="form-control" placeholder="Enter Your Name" required>
				
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Your Email Id" required>
				
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter Your Mobile Number" required>
				
			</div>
			<div class="form-group">
				<label>Donor's Address</label>
				<input type="text" name="address" autocomplete="off" class="form-control" placeholder="Enter Your Address For The Collection of Food" required>
				
			</div>
			<button type="submit" class="btn btn-outline-success ml-0 my-2 my-sm-0 mr-2">Submit</button>
			
		</form>
	</div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">Let's Help Together!</p>
</footer>


</body>
</html>