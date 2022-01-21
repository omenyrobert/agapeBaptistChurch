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
    $sql = "select * from women where id = ".$id;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $image = $row['image'];
      unlink($upload_dir.$image);
      $sql = "delete from women where id=".$id;
      if(mysqli_query($conn, $sql)){
        header('location:women.php');
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

    

<div class="container-fluid" style="background-color: white; color: black;">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto"></ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-primary" href="createwomen.php"><i class="fa fa-user-plus"></i>Add</a></li>
              </ul>
          </div>
         <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contact List</div>
                      <div class="card-body">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Event</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Venue</th>
                                <th>Description</th>
                                <th>Current/Prev</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $sql = "select * from women";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <tr style="color: black;" >
                            <td><?php echo $row['id'] ?></td>
                            <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="40"></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['venue'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['event'] ?></td>
                            <td class="text-center">
                              <a href="editwomen.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-user-edit"></i>Edit</a>
                              <a href="women.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
                            </td>
                          </tr>
                          <?php
                              }
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                     <form class="" action="addmorewomen.php" style="width: 300px;" method="post" enctype="multipart/form-data">
                        <h1>Add More Pictures</h1>
                     <div class="form-group">
                      <label for="email">Current or Previous</label>
                      <SELECT name="event" class="form-control" >
                        <option>Select</option>
                        <option>Current</option>
                        <option>Previous</option>
                      </SELECT>
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>                      
                    <div class="form-group">
                      <button type="submit" name="photo" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
                         

                          <form class="" action="addvideowomen.php" style="width: 300px;" method="post" enctype="multipart/form-data">
                        <h1>Add Vidoes</h1>
                     <div class="form-group">
                      <label for="email">Current or Previous</label>
                      <SELECT name="event" class="form-control" >
                        <option>Select</option>
                        <option>Current</option>
                        <option>Previous</option>
                      </SELECT>
                    </div>
                    <div class="form-group">
                      <label for="image">Choose video</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>                      
                    <div class="form-group">
                      <button type="submit" name="photo" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>

                </div>
                 <?php
                            $sql = "select * from womenmore";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
                            <td><?php echo $row['event'] ?></td><br/>
                            <td><img src="<?php echo $upload_dir.$row['image'] ?>" width="80%"></td><br/>
                            <td class="text-center">
                              <a href="deletewomenpic.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
                            </td>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                         <div class="container">

                            <?php
                            $sql = "select * from videowomen";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
                            <td><?php echo $row['event'] ?></td><br/>
                            <td>
                                <video  width="100%" controls>
                                <source src="uploads/<?php echo $row['image'] ?>" type="video/mp4">
                            </video></td><br/>
                            <td class="text-center">
                              <a href="deletevidwomen.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i>Del</a>
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


                    </div>
<br/><br/>
                    <?php
                             include_once('connection.php');
                            $sql = "select * from women LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
<div class="container-fluid" >
    <div class="row" style="padding: 20px;" >
        <div class="col-md-6 " >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
            <br/>

            <form action="editwomenimage.php" enctype="multipart/form-data"  method="post">
              <input type="file" name="homeimage" style="width: 250px;" class="form-control">
              <br/>
                           <button class="btn btn-primary" type="submit" name="editimage">Update</button>
            </form>
        </div>

        <div class="col-md-6" style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h1><b>Women Ministries</b></h1>
            <h3><?php echo $row['homewords'];?></h3>
            <form action="edithomewomen.php" method="post">
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

<br/><br/>


        
    </div>
    
</div>

    </body>
</html>