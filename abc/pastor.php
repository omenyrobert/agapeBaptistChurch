<?php
  
session_start();
// Include database connection file
include_once('connection.php');

 if (!isset($_SESSION['ID'])) {
   header("Location:login.php");
  exit();
 }


  
  $upload_dir = 'uploads/';

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select * from pastor where id = ".$id;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $image = $row['image'];
      unlink($upload_dir.$image);
      $sql = "delete from pastor where id=".$id;
      if(mysqli_query($conn, $sql)){
        header('location:pastor.php');
      }
    }
  }

  
  if(isset($_POST['sermon'])){
  $serm = $_POST['serm'];

  //image upload
    $insert_data = "INSERT INTO pastor (serm) VALUES ('$serm')";
    $run_data = mysqli_query($conn,$insert_data);

    if($run_data){
        echo "<script>alert('information saved successfully')</script>";
            echo "<script>window.location='pastor.php'</script>";
    }else{
      echo "<script>alert('information not saved successfully')</script>";
   echo "<script>window.location='pastor.php'</script>";
}
}


if(isset($_POST['addvid'])){
  //image upload

  $msg = "";
  $image = $_FILES['image']['name'];
  $target = "uploads/".basename($image);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }

    $insert_data = "INSERT INTO videopastor (image) VALUES ('$image')";
    $run_data = mysqli_query($conn,$insert_data);

    if($run_data){
        echo "<script>alert('information saved successfully')</script>";
            echo "<script>window.location='pastor.php'</script>";
    }else{
      echo "<script>alert('information not saved successfully')</script>";
   echo "<script>window.location='pastor.php'</script>";
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
                       
        <!-- end navigation -->

        <!-- start home -->
        <!-- end home -->

<div class="container-fluid" style="background-color: white; color: black;">
         <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                     <form class="" action="" style="width: 300px;" method="post" enctype="multipart/form-data">
                        <h1>Add Sermon</h1>
                    <div class="form-group">
                      <label for="image">Sermon</label>
                      <textarea type="text" name="serm" class="form-control" ></textarea>
                    </div>                      
                    <div class="form-group">
                      <button type="submit" name="sermon" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
                         

                          <form class="" action="" style="width: 300px;" method="post" enctype="multipart/form-data">
                        <h1>Add Vidoes</h1>
                    <div class="form-group">
                      <label for="image">Choose Video</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>                      
                    <div class="form-group">
                      <button type="submit" name="addvid" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>

                </div>
                 <?php
                            $sql = "select * from pastor";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-12">
                            <textarea readonly="readonly" style="width: 100%; font-size: 20px; height: 500px; border: none; background-color: white;" ><?php echo $row['serm'] ?></textarea>
                            <td class="text-center">
                              <a href="pastor.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
                            </td>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                         <div class="container">

                            <?php
                            $sql = "select * from videopastor";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                                <video  width="60%" controls>
                                <source src="uploads/<?php echo $row['image'] ?>" type="video/mp4">
                            </video></td><br/>
                            <td class="text-center">
                              <a href="deletevideopastor.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
                            </td>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                      </div>
            </div>
        </div>
      </div>

      <br/><br/>
                    <?php
                             include_once('connection.php');
                            $sql = "select * from pastor LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
<div class="container-fluid" style="background-color: white;" >
    <div class="row" style="padding: 20px;" >
        <div class="col-md-6 " >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
            <br/>

            <form action="editpastorimage.php" enctype="multipart/form-data"  method="post">
              <input type="file" name="homeimage" style="width: 250px;" class="form-control">
              <br/>
                           <button class="btn btn-primary" type="submit" name="editimage">Update</button>
            </form>
        </div>

        <div class="col-md-6" style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h1><b>Pastor Martin</b></h1>
            <h3><?php echo $row['homewords'];?></h3>
            <form action="edithomepastor.php" method="post">
              <textarea name="homewords" class="form-control" style="height: 250px;">

              </textarea>
              <button class="btn btn-default" type="submit" name="editwords">Update</button>
            </form>
          
        </div>
        
    </div>

    <?php
                              }
                            }
                          ?>

                    </div>


        
    </div>
    
</div>
          

    </body>
</html>