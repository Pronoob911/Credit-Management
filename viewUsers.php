<!DOCTYPE html>
<html>
<head>
	<title>Users</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style type="text/css">
		.card{
			width: 300px;
			margin-left: 50%;
			transform: translateX(-50%);
		}
	</style>
</head>
<body>

	<?php
		$con=mysqli_connect("fdb24.awardspace.net","3043707_creditmanagement","pranabpradha","3043707_creditmanagement","3306");
		if(!$con){
			echo "error";
		}

		$sql="select name from user";

		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				?>
				<div class="card card-body">
					
				<?php
					echo $row['name'];
				?>
				<a class="btn btn-default" href="post.php?name=<?php echo $row['name']; ?>">Details</a>
			</div>
		<?php
	
		}
	}
	?>

</body>
</html>