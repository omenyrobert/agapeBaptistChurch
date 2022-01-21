<?php
   session_start();
// Include database connection file
include_once('connection.php');

 if (!isset($_SESSION['ID'])) {
   header("Location:login.php");
  exit();
 }

if(isset($_POST['addd'])){
    $name = $_POST['name'];
    $message = $_POST['message'];

    //image upload

    $msg = "";
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

    $insert_data = "INSERT INTO `blog`(name, message, image) VALUES
     ('$name', '$message', '$image')";
    $run_data = mysqli_query($conn,$insert_data);

    if($run_data){
            echo "<script>alert('information saved successfully')</script>";
            echo "<script>window.location='blog.php'</script>";
    }else{
            echo "<script>alert('information not saved successfully')</script>";
     echo "<script>window.location='blog.php'</script>";
}
}


  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select * from blog where id = ".$id;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $image = $row['image'];
      unlink($upload_dir.$image);
      $sql = "delete from blog where id=".$id;
      if(mysqli_query($conn, $sql)){
        header('location:blog.php');
      }
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
        <link rel="shortcut icon" type="image/ico" href="favicon.png">
        <!-- new -->
        
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/templatemo-style.css">


                <!-- new -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <!-- new -->


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

                <script type="text/javascript">
            new WOW().init();
        </script>

    </head>
    <body id="top">

        <!-- start preloader -->
       

        <!-- end preloader -->

        <!-- start header -->
        <!-- end header -->

        <!-- start navigation -->
                         <?php    
        include "header.php"; 
        ?>
        <!-- end navigation -->

        <!-- start home -->
        <section style="        background: url('images/m2.jpg') no-repeat;
        background-size: cover;
         background-position: center;background-color: white;
       height: 70vh;
        background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 100px;">
                        
                       <center>
                        <h1 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.7s" ><b style=" color: #24a0ed; background-color: white; " >Tell Us</b><span style=" color: white; background-color: #24a0ed; "><b>Your Thoughts</b></span></h1>
                    </center>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home -->

<div class="container-fluid" style="background-color: #24a0ed;">
    <div class="container">
            
            <form action="blog.php" method="post" enctype="multipart/form-data">
        <div class="row" >
                    <div class="form-group col-md-3">
                      <label for="name">Topic</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group col-md-3">
                      <label for="contact">Message</label>
                      <textarea  class="form-control" name="message">
                          
                      </textarea>
                    </div>

                    <div class="form-group col-md-3">
                      <label>Choose Image</label>
                      <input type="file" class="form-control" name="image">
                    </div>                      
                    <div class="form-group col-md-3">
                      <button type="submit" name="addd" class="btn btn-primary waves">Submit</button>
                    </div>
                </div>
                </form>


<div>
<script type="text/javascript">
     
    function mess(){
        alert ("Comment added sucessfully");
        return true;
    }
</script>

<div class="container">

 <table class="table table-bordered" style="width:100%; color: black; background-color: white; ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Top</th>
                                <th>Message</th>                               
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "select * from blog";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <tr style="color: black;" >
                            <td><?php echo $row['id'] ?></td>
                            <td><img src="uploads/<?php echo $row['image'] ?>" width="100"></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['message'] ?></td>
                            <td class="text-center">
                              <a href="blog.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
                            </td>
                          </tr>
                          <?php
                              }
                            }
                          ?>
                        </tbody>
                      </table>

    </div>

            
                        <?php
                            include_once('connection.php');
                           
                            $sql = "SELECT * FROM blog";

                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo 
                                "<div class='row'>
                                <div class='col-md-6'>
                               <img src=uploads/".$row['image']." width='100%'>
                                </div>
                                <div class='col-md-6'  style='background-color: white;  color: black; padding: 20px; margin-bottom: 50px;'>
                                    <h3><b>".$row['name']."</b></h3><br/>
                                    <textarea style='border:none; width:90%; height:200px;' >".$row['message']."</textarea>
                                    <h4><b>
<a href='#'' class='fa fa-facebook'></a>
                            <a href='#' class='fa fa-twitter'></a>
                            <a href='#'' class='fa fa-instagram'></a>
                            </b>
                            </h4>
                                </div>

                                </div>
                                <br/>
                                ";
                            }

                        ?>
            

                    </div>


        
    </div>
    
</div>


<br/><br/>
                    <?php
                             include_once('connection.php');
                            $sql = "select * from blog LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
<div class="container-fluid" style="background-color: white;" >
    <div class="row" style="padding: 20px;" >
        <div class="col-md-6 " >
          <h1>Video Home Page</h1>
            <video src="uploads/<?php echo $row['homevideo'];?>" width="100%">
            <br/>

            <form action="homevideo.php" enctype="multipart/form-data"  method="post">
              <input type="file" name="homevideo" style="width: 250px;" class="form-control">
              <br/>
                           <button class="btn btn-primary" type="submit" name="homevideo">Update</button>
            </form>
        </div>

        <div class="col-md-6" style="color: black;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h4>Give Image</h4>
            <img src="uploads/<?php echo $row['giveimage'];?>" width="100%">
            <br/>

            <form action="giveimage.php" enctype="multipart/form-data"  method="post">
              <input type="file" name="giveimage" style="width: 250px;" class="form-control">
              <br/>
                           <button class="btn btn-primary" type="submit" name="giveimage">Update</button>
            </form>
          
        </div>

        <div class="col-md-6" style="color: black;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h4>Program Photo</h4>
            <img src="uploads/<?php echo $row['programphoto'];?>" width="100%">
            <br/>

            <form action="programphoto.php" enctype="multipart/form-data"  method="post">
              <input type="file" name="programphoto" style="width: 250px;" class="form-control">
              <br/>
                           <button class="btn btn-primary" type="submit" name="programphoto">Update</button>
            </form>
          
        </div>
        
    </div>

    <?php
                              }
                            }
                          ?>

    
<?php    
        include "footer.php"; 
        ?>
        <!-- end copyright -->

    </body>
</html>