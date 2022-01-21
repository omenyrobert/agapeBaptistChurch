<?php
     session_start();
   // if (isset($_SESSION['ID'])) {
   //   header("Location:dashboard.php");
   //  exit();
    //}
  // Include database connectivity
    
  include_once('connection.php');
  
  if (isset($_POST['submit'])) {

      $errorMsg = "";

      $username = $conn->real_escape_string($_POST['username']);
      $password = $conn->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM admins WHERE username = '$username'";
        $result = $conn->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
          }
            if ($_POST['username'] == 'Youth'){
              header("Location:youth.php");
              die(); 
            }
             
           if ($_POST['username'] == 'Children'){
              header("Location:children.php");
              die(); 
            }

            if ($_POST['username'] == 'Admin'){
              header("Location:signup.php");
              die(); 
            }

             if ($_POST['username'] == 'Blog'){
              header("Location:blog.php");
              die(); 
            }
            
           if ($_POST['username'] == 'Men'){
              header("Location:men.php");
              die(); 
            }
            
             if ($_POST['username'] == 'Women'){
              header("Location: women.php");
              die(); 
            }
            
             if ($_POST['username'] == 'Worship'){
              header("Location: worship.php");
              die(); 
            }

             if ($_POST['username'] == 'Marriage'){
              header("Location: marriage.php");
              die(); 
            }
            
            if ($_POST['username'] == 'Pastral'){
              header("Location: pastral.php");
              die(); 
            }


           if ($_POST['username'] == 'Pastor'){
              header("Location:pastor.php");
              die(); 
            }

            if ($_POST['username'] == 'Bukerere'){
              header("Location:buk.php");
              die();            
                                         
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <title>Agape Baptist Church Uganda</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- new --><!-- new -->
        <link rel="shortcut icon" type="image/ico" href="favicon.ico">
        <!-- new -->
        
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        
                <!-- new -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <!-- new -->


        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

                <script type="text/javascript">
            new WOW().init();
        </script>

    </head>
 

<body style=" background-color: #24a0ed;
  color: white;
}" >


<div class="container">
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
<h2>Login </h2>
<center>
        <form action="" method="POST" style="width: 300px;">

          <div class="form-group">  
            <label for="username">Username:</label> 
            <input type="text" class="form-control" name="username" placeholder="Enter Username" >
          </div>
          <div class="form-group">  
            <label for="password">Password:</label> 
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Login"> 
          </div>

        </form>
      </center>
      </div>
</body>
</html>

