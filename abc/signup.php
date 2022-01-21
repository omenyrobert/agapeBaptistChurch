
<?php

session_start();
// Include database connection file
include_once('connection.php');

 if (!isset($_SESSION['ID'])) {
   header("Location:login.php");
  exit();
 }

?>

<?php

  // Include database connection file

  include_once('connection.php');

  if (isset($_POST['submit'])) {
    
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string(md5($_POST['password']));
    $name     = $conn->real_escape_string($_POST['name']);
    $role     = $conn->real_escape_string($_POST['role']);

    $query  = "INSERT INTO admins (name,username,password,role) VALUES ('$name','$username','$password','$role')";
    $result = $conn->query($query);

    if ($result==true) {
      header("Location:login.php");
      die();
    }else{
      $errorMsg  = "You are not Registred..Please Try again";
    }   

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Accounts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style type="text/css">
        .bod{
  background-color: white;
  color: black;
}
  </style>
</head>
<body class="bod">

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">      
        <?php if (isset($errorMsg)) { ?>
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $errorMsg; ?>
          </div>
        <?php } ?>
        <h2>Create Accounts</h2>
        <form action="" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
          </div>
          <div class="form-group">  
            <label for="username">Username:</label>
             <select class="form-control" name="username" required="">
              <option value="Admin">Admin</option>
              <option value="Youth">Youth</option>
              <option value="Children">Children</option>
              <option value="Men">Men</option>
              <option value="Women">Women</option>
              <option value="Worship">Worship</option>
              <option value="Marriage">Marriage</option>
              <option value="Pastral">Pastral</option>
              <option value="Pastor">Pastor</option>
              <option value="Schedules">Schedules</option>
              <option value="Bukerere">Bukerere</option>
              <option value="Blog">Blog</option>
            </select>
          </div>
          <div class="form-group">  
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
          </div>
          <div class="form-group">  
            <input type="hidden" class="form-control" name="role" value="admin" >
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary">
          </div>
        </form>
      
      </div>


  </div>
</div>
</body>
</html>



