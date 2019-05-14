





<!DOCTYPE html>
<html>
<head>
	<title>Credit Management</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>


	<!-- <script >
		
		
	</script> -->
	<style type="text/css">
		 @import url('https://fonts.googleapis.com/css?family=Monda');
		 @import url('https://fonts.googleapis.com/css?family=Crete+Round');

		 body{
		 	background: url('bg1.jpeg')center/cover fixed no-repeat;

		 }
		#head{
			height: 90px;
			width:100%;
			background-color: #8835cc;
			text-align: center;
		}

		.viewUsers{
			position: fixed;
			left: 50%;
			margin-top: 50px;
			transform: translateX(-50%);
			font-size: 20px;
			padding: 10px;
			font-family: 'Monda', sans-serif;


		}

		.transfer{
			position: fixed;
			left:50%;
			margin-top:150px;
			transform: translateX(-50%);
			font-size: 20px;
			padding: 10px;
			font-family: 'Monda', sans-serif;


		}

		h1{
		

    		font-family: 'Crete Round', serif;
    		padding-top: 10px;
    		font-size: 50px;
		}
		footer{
			width: 100%;
			height: 30px;
			bottom: 0;
			background-color: #8835cc;
			position: absolute;
		}


		}
	</style>
</head>
<body>
<div id="head">
	<h1>Home Page</h1>
</div>
<div>
<form action="viewUsers.php" method="post">
	<button class="btn btn-large btn-success viewUsers" name="viewUsers">View all Users</button>

	
</form>

<a href="transfers.php"><button class="btn btn-large btn-primary transfer" name="transferCredit">Transfer Credit</button></a>
</div>

	


<footer>
	
</footer>

</body>
</html>