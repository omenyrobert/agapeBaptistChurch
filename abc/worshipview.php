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
    <body id="top">

        <!-- start preloader -->
       
        <!-- end preloader -->

        <!-- start header -->
        <!-- end header -->

        <!-- start navigation -->
                        <nav style="background-color: #101945;" class="navbar navbar-default templatemo-nav" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="images/logo.png" width="150"></a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" style="color: white;">HOME</a></li>
                        <li><a href="bukeerere.html" style="color: white;">BUKEERERE CAMPUS</a></li>
                        <li><a href="about.html" style="color: white;">ABOUT</a></li>
                        <li><a href="contact.html" style="color: white;">CONTACT/ADDRESS</a></li>
                        <li><a href="ministries.html" style="color: white;">MINISTRIES</a></li>
                        <li><a href="sermons.php" style="color: white;">SERMONS</a></li>
                        <li><a href="staff.html" style="color: white;">STAFF</a></li>
                        <li><a href="blog.php" style="color: white;">BLOG</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navigation -->

        <!-- start home -->
        <section style="        background: url('images/woship.jpg') no-repeat;
        background-size: cover;
        background-color: white;
        background-position: center;
        min-height: 650px;
        background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 100px;">
                        
                        <h2 style="font-size: 50px;" class="wow bounceIn" data-wow-offset="50" data-wow-delay="1s"><b>Worship</b><br/><span data-wow-delay="2s" style="color: #24a0ed;">Ministries</span></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home -->

<div class="container-fluid" style="background-color: white; color: black;">
  <h1>Current Events</h1>
         <div class="container">
      
                          <?php
                            $sql = "select * from worship where event='current' ";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div style="color: black;" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="50%">
                            <h3><?php echo $row['name'] ?></h3>
                            <h4><?php echo $row['contact'] ?></h4>
                            <h4><?php echo $row['email'] ?></h4>
                            <h4><?php echo $row['venue'] ?></h4>
                             <textarea readonly="readonly" style="width: 500px; font-size: 20px; height: 200px; border: none; background-color: white;" ><?php echo $row['description'] ?></textarea>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        <div>
                          <?php
                            $sql = "select * from worshipmore where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
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
                            $sql = "select * from videworship where event='current' ";
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





                         
                        <h1>Previous Events</h1>
         <div class="container">
      
                          <?php
                            $sql = "select * from worship where event='previous'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div style="color: black; margin-bottom: 10px;" >
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="50%">
                            <h3><?php echo $row['name'] ?></h3>
                            <h4><?php echo $row['contact'] ?></h4>
                            <h4><?php echo $row['email'] ?></h4>
                            <h4><?php echo $row['venue'] ?></h4>
                            <textarea readonly="readonly" style="width: 500px; height: 150px; font-size: 20px; border: none; background-color: white;" ><?php echo $row['description'] ?></textarea>
                          </div>
                          <?php
                              }
                            }
                          ?>
                        <div>
                          <?php
                            $sql = "select * from worshipmore where event='previous'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-4">
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
                            $sql = "select * from videworship where event='previous' ";
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
    
</div>
        <!-- start contact -->
 












        <!-- end contact -->

    

       
        <!-- end copyright -->

    </body>
</html>