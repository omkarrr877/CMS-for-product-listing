<?php include('include/connection.php'); 
include('include/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php  
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = " SELECT * FROM `login` WHERE email='$email' and password='$password' ";
        $res = mysqli_query($con,$sql);
        $count = mysqli_num_rows($res);
        if($count>0){
            $_SESSION['ADMIN_LOGIN']='yes';
		    $_SESSION['ADMIN_USERNAME']=$email;
            header("Location:index.php");
            die();
        }else {
            echo"Please enter valid email or password";
        }
    }
    ?>
    <div class="main">
        <div class="container">   
            <form action="" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="submit">
            </form>    
        </div>
    </div>
</body>
</html>