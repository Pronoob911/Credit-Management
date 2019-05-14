<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<style type="text/css">
			.data{
				left: 50%;
				margin-top:10px;
				transform: translate(-50%);
				font-size: 19px;
			}
		</style>

		
</head>

<?php

$con=mysqli_connect("fdb24.awardspace.net","3043707_creditmanagement","pranabpradha","3043707_creditmanagement","3306");	
	if(!$con){
		echo "error";
	}

	$name=$_GET['name'];
		
		$sql="SELECT * FROM user WHERE name='$name'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($result);
		

		mysqli_free_result($result);

		 mysqli_close($con);

		
				?>
				<div class="well">
				<div class="card card-body data" style="width: 28rem;">
					
						
				<?php

				echo "Name: ".$row['name']."<br>";
				echo "Email: ".$row['email']."<br>";
				echo "Age: ".$row['age']."<br>";
				echo "Current Credit: Rs ".$row['currentCredit']."<br>";
				?>
				<br><br>
				<a href="transfers.php" class="btn btn-primary btn-lg waves-effect waves-light mt-4">Transfer Credit</a>
				
				
				

				
						
			
			</div>

				</div>
			
				