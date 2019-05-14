
<?php
  if(isset($_POST['transfer'])){
    $fromName=$_POST['fromName'];
    $toName=$_POST['toName'];
    $amount=$_POST['transferAmount'];
    

$con=mysqli_connect("fdb24.awardspace.net","3043707_creditmanagement","pranabpradha","3043707_creditmanagement","3306");   
	 if(!$con){
      echo "error";
    }
    
    $sql1="select currentCredit from user where name='$fromName'";
    $result1=mysqli_query($con,$sql1);
    $row1=mysqli_fetch_assoc($result1);
    $newFromCredit=$row1['currentCredit']-$amount;
    

    $sql2="update user set currentCredit='$newFromCredit' where name='$fromName'";
    $result2=mysqli_query($con,$sql2);

    $sql3="select currentCredit from user where name='$toName'";
    $result3=mysqli_query($con,$sql3);
    $row2=mysqli_fetch_assoc($result3);

    $newToCredit=$row2['currentCredit']+$amount;

    $sql4="update user set currentCredit='$newToCredit' where name='$toName'";
    $result4=mysqli_query($con,$sql4);

    if($result2 && $result4){
      echo "Transfer Successfull";
    }

    $sql5="insert into transfer values ('$fromName','$toName','$amount')";
    $result5=mysqli_query($con,$sql5);

  }




?>


<!DOCTYPE html>
<html>
<head>
  <title>Transfer Credit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style type="text/css">

    

      canvas {
        display:block;
        background: rgb(200,216,233);
       position: fixed;
         z-index: -1;
}

        #particles-js{
          /*position: absolute;*/
          height: 100%;
          width: 100%;
        }


    
      .row {
        padding: 1.5rem;
        margin-left: 50%;
        margin-top: 110px;
        transform: translateX(-25%);
      }
      form {
        background-color: #212121;
        border-radius: 15px;
        padding: 1.5rem;
      }

      .form-group > input:focus {
        box-shadow: 0 0 0 0.2rem rgba(255,165,0,.25);  
      }

      .form-group > select:focus {
          box-shadow: 0 0 0 0.2rem rgba(255,165,0,.25);  
      }

      .but{
        margin-left: 115px;
      }

  </style>

</head>
<body>
<div id="particles-js"></div>
  
  <div class="row">
    <div class="column">
      <form action="" method="post">
  <div class="form-group">
    <label  class="text-light">From</label>
    <input type="text" class="form-control" name="fromName" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-light">To</label>
    <input type="text" class="form-control" name="toName" placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-light">Amount</label>
    <input type="text" class="form-control" name="transferAmount" placeholder="Enter Amount">
    <small style="color: #dd1a1a;">Amount must not exceed the current credit of the user</small>
  </div>
  
  <input type="submit" class="btn btn-warning" name="transfer" value="Transfer">
  <a href="http://localhost/credit/viewUsers.php" class="btn btn-primary waves-effect waves-light but">View Users</a>
</form>
    </div>
  

</div>
<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
</body>
</html>