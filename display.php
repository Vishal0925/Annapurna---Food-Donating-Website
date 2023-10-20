<?php
session_start();
?>
<!-- connection with database-->
<?php

$con = mysqli_connect('localhost','root','','annapurna');

if ($con) {
	echo "Connection Done";
}else{
	echo "Something went wrong";
}

// select query started //
$query="SELECT * FROM userinfodata";
$connect=mysqli_query($con,$query);
$num=mysqli_num_rows($connect);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- latest compiled javascript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Donor's Information</h1>
		<table class="table table-border">
			<thead>
			<tr>
				
				<th>Id</th>
				<th>Donor Name</th>
				<th>Email Id</th>
				<th>Mobile No</th>
				<th>Donor's Address</th>

			</tr>
			</thead>
			<tbody>
				<?php
				if($num>0){
					while($data=mysqli_fetch_assoc($connect)){
						echo "
						<tr>
	
								<td>".$data['id']."</td>
								<td>".$data['donor']."</td>
								<td>".$data['email']."</td>
								<td>".$data['mobile']."</td>
								<td>".$data['address']."</td>
						</tr>
						";
					}
				}
				?>
				


	</tbody>
	</table>
		<div style="text-align:center;">
      <a href="index.php" class="btn btn-success">LogOut</a>
  </div>

	</div>

</body>
</html>