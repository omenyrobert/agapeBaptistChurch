<?php
  include('connection.php');
  $upload_dir = 'uploads/';
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
    <body style="background-color: white; ">
                <?php    
        include "header.php"; 
        ?>

        <!-- start preloader -->
        
        <!-- end preloader -->

        <!-- start header -->
        <!-- end header -->

        <!-- start navigation -->
          
        <!-- end navigation -->
 <br/><br/>
        <img src="images/marriage.jpg" width="100%" >
         <h2 style="font-size: 35px; margin-top: -100px;" class="wow bounceIn" data-wow-offset="50" data-wow-delay="1s"><b style="background-color: #24a0ed; " >Marriage's</b><br/><span data-wow-delay="2s" style="color: #24a0ed;">Ministries</span></h2>
        <!-- start home -->
      
        <!-- end home -->

<div class="container-fluid" >
  <h1 style="color: #24a0ed; text-align: center; " ><b>Current Events</b></h1>
         <div class="container">
      
                          <?php
                            $sql = "select * from marriage where event='current' ";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                          <div class="col-md-6" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%">
                          </div>
                          <div class="col-md-6" >
                            <h1 style="display: flex; color: #24a0ed;"><b><?php echo $row['name'] ?></b></h1>
                            <div style="color: #24a0ed;">                            
                            <h4>Date:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['contact'] ?></h4>
                            <h4>Time:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?></h4>
                            <h4>Venue:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['venue'] ?></h4>
                          </div>
                            
                             <textarea readonly="readonly" style="width: 100%; font-size: 20px; height: 300px; border: none; background-color: white; color: black; " ><?php echo $row['description'] ?></textarea>
                          </div>
                        </div>
                          <?php
                              }
                            }
                          ?>
                        <div>
                          <?php
                            $sql = "select * from marriagemore where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4" style="margin: 10px;" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="80%">
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                    </div>
                       
                        <div class="container" style="margin-top: 50px;" >

                            <?php
                            $sql = "select * from videomarriage where event='current' ";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
                            <td>
                                <video  width="100%" controls>
                                <source src="uploads/<?php echo $row['image'] ?>" type="video/mp4">
                            </video></td><br/>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                      </div>





                         
                        
         <div class="container">
      <h1 style="color: #24a0ed; text-align: center;" ><b>Previous Events</b></h1>
                          <?php
                            $sql = "select * from marriage where event='previous'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                           <div class="row" >
                          <div class="col-md-6" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%">
                          </div>
                          <div class="col-md-6" >
                            <h1 style="display: flex; color: #24a0ed;"><b><?php echo $row['name'] ?></b></h1>
                            <div style="color: #24a0ed;">                            
                            <h4>Date:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['contact'] ?></h4>
                            <h4>Time:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?></h4>
                            <h4>Venue:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['venue'] ?></h4>
                          </div>
                            
                             <textarea readonly="readonly" style="width: 100%; font-size: 20px; height: 300px; border: none; background-color: white; color: black; " ><?php echo $row['description'] ?></textarea>
                          </div>
                        </div>
                          <?php
                              }
                            }
                          ?>
                        <div>
                          <?php
                            $sql = "select * from marriagemore where event='previous'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4" style="margin: 10px;" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="80%">
                          </div>
                          <?php
                              }
                            }
                          ?>
                        </div>
                    </div>


                      <div class="container" style="margin-top: 50px;">

                            <?php
                            $sql = "select * from videomarriage where event='previous' ";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
                            <td>
                                <video  width="100%" controls>
                                <source src="uploads/<?php echo $row['image'] ?>" type="video/mp4">
                            </video></td><br/>
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
      </div>


                    </div>


        
    </div>
        <!-- start contact -->
 <?php    
        include "footer.php"; 
        ?>
        <!-- end copyright -->

    </body>
</html>