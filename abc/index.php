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
        <link rel="stylesheet" href="style.css">
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

        <script src="jquery.countTo.js"></script>

                <script type="text/javascript">
            new WOW().init();
        </script>

        <style type="text/css">
      .hhh{
        color: white;
        padding: 20px;
    }
    .hhh:hover{
        border: 5px #24a0ed solid;
        color: white;

    }



.htt{
        color: #24a0ed;
        padding: 20px;
    }
    .htt:hover{
        border: 5px white solid;
color: #24a0ed;
    }


</style>

    </head>
    <body style="background-color: white;">

        <!-- start preloader -->
        <!-- end preloader -->

        <!-- start header -->
        <!-- end header -->

        <!-- start navigation -->
                         <?php    
         include "header.php"; 
        ?>
  <iframe src="https://player.vimeo.com/video/558966385" width="700" height="560" frameborder="0" autoplay loop allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    
</video>
 </div>
 
<img src="images/giving-min.jpg" width="100%" >
  <center>
 <a href="giving.php"> <button style="margin-top: -15%;" class="btn btn-primary rounded-pill " ><h4>More About the Giving</h4></button></a>
</center>



<div class="container-fluid"  style="height: 100%;  background-image: url('images/prb-min.png');   background-position: center; background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover; padding: 30px; "  >
  <div class="container"  >

  <?php
                             include_once('connection.php');
                            $sql = "select * from pastor LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
  <div class="row">
    <div class="col-md-6 wow slideInLeft" style="animation-duration: 1s;" >
      <img src="uploads/<?php echo $row['homeimage'];?>" width="100%" >
    </div>
       <div class="col-md-6 wow slideInRight" style="animation-duration: 1s; padding: 20px; background-color: white; " >
      <h1 style="color: #24a0ed; font-size: 50px;"><b>Pr Martin Kakaire</b></h1>
                                <h1 style="color: #24a0ed; font-size: 32px; " >Senior Pastor</h1>
                                <div style="background-color: #24a0ed; color: white; padding: 20px;" >
                                  <h4><?php echo $row['homewords'];?></h4>
                                </div>
    </div>
    <?php
                              }
                            }
                          ?>
    </div>
  </div>
</div>
      
        <!-- end about -->

        <!-- start team -->
        <section  style="background: url('images/program-min.png') no-repeat;
         background-position: center;
        background-size: cover; width: 100%;
        background-attachment: fixed;" >
           <div class="container" style="padding: 70px;" >
               <div class="row">
                <div class="col-md-4" style="text-align: center; ">
                   <!--  <h1>jhhlnbld</h1> -->
                </div>
                
                 <div class="col-md-8 wow slideInLeft " data-wow-offset="50" data-wow-delay="1s" style="color: white; background-color: #24a0ed;">
                    <div    style="color: #24a0ed;   background-position: center; background-color: white; padding: 30px; margin-left: -5px; margin-right: -5px; text-align: center;">
                        <h1 style="font-size: 40px;" ><b>OUR WEEKLY PROGRAM</b></h1>
                    </div>
                    <div style="padding: 10px; font-size: 20px; " >
<p>7 - 8AM Bible study - for First Service</p>
<p>8 - 10AM    First Service (Luganda & English)</p>
<p>9 - 10AM    Bible Study - All ages for Second Service</p>
<p>10AM - 12PM English Service</p>
</div>
                </div>
                   
               </div>
           </div>
        </section>
        <!-- end team -->
        <?php
                             include_once('connection.php');
                            $sql = "select * from contacts LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
<div class="container-fluid" >
    <div class="row" style="padding: 20px;" >
        <div class="col-md-6 wow slideInRight " data-wow-offset="50" data-wow-delay="1s" >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
        </div>

        <div class="col-md-6 wow slideInLeft " data-wow-offset="50" data-wow-delay="1s" style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h1 style="font-size: 60px;" ><b>Youth Ministries</b></h1>
            <h3 style="font-size: 40px;"  ><?php echo $row['homewords'];?></h3>
            <div style="text-align: center; margin-top: 10px;" >
                          <a href="youthview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
        </div>
        
    </div>

    <?php
                              }
                            }
                          ?>




<?php
                             include_once('connection.php');
                            $sql = "select * from women LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
 <div class="row" style="padding: 20px;" >
        <div class="col-md-6 wow slideInRight " data-wow-offset="50" data-wow-delay="1s"  style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
 <h1 style="font-size: 60px;" ><b>Women Ministries</b></h1>
            <h3 style="font-size: 40px;"><?php echo $row['homewords'];?></h3>
            <div style="text-align: center; margin-top: 10px;" >
                          <a href="womenview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
            
        </div>

        <div class="col-md-6 wow slideInLeft " data-wow-offset="50" data-wow-delay="1s" >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
        </div>
        
    </div>
    <?php
                              }
                            }
                          ?>




    <?php
                             include_once('connection.php');
                            $sql = "select * from men LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>    
     <div class="row" style="padding: 20px;" >
        <div class="col-md-6 wow bounceIn" data-wow-offset="50" data-wow-delay="1s" >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
        </div>

        <div class="col-md-6 wow bounceIn " data-wow-offset="50" data-wow-delay="1s" style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
             <h1 style="font-size: 60px;" ><b>Men Ministries</b></h1>
            <h3 style="font-size: 40px;"><?php echo $row['homewords'];?></h3>
            <div style="text-align: center; margin-top: 10px;" >
                          <a href="menview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
            
        </div>
        
    </div>
    <?php
                              }
                            }
                          ?>




    <?php
                             include_once('connection.php');
                            $sql = "select * from children LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
     <div class="row" style="padding: 20px;" >
        <div class="col-md-6 wow slideInRight " data-wow-offset="50" data-wow-delay="1" style="background-color: #24a0ed; color: white;  text-align: center; padding: 30px; padding-top: 50px;" >
            <h1 style="font-size: 60px;" ><b>Children Ministries</b></h1>
            <h3 style="font-size: 40px;"><?php echo $row['homeimage'];?></h3>
            <div style="text-align: center; margin-top: 10px;" >
                          <a href="Childrenview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
        </div>

        <div class="col-md-6 wow slideInLeft " data-wow-offset="50" data-wow-delay="1s" >
            <img src="uploads/<?php echo $row['homeimage'];?>" width="100%">
        </div>
        
    </div>
    <?php
                              }
                            }
                          ?>


    
</div>


        <!-- start service -->
        <section class="container-fluid" style=" margin-top: 20px;" >
            <div class="container">

                
    
                <div class="row">
                    <center>
                    <h1 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.7s" ><b style="color: white; font-size: 45px; background-color: #24a0ed;" >Current</b><span style="color: #24a0ed; font-size: 45px; "><b>Events</b></span></h1>
                </center>
                    <div class="col-md-4 hhh wow slideInRight" data-wow-offset="50" data-wow-delay="0.6s">
                         <?php
                            
                             include('connection.php');
                              $upload_dir = 'uploads/';

                            $sql = "select * from contacts where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/>  
                          <?php
                              }
                            }
                          ?>
                          <div style="text-align: center; margin-top: 10px;" >
                          <a href="youthview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
                    </div>
                    <div class="col-md-4 hhh active wow bounceInDown" data-wow-offset="50" data-wow-delay="0.9s">
                        <?php
                            
                             include('connection.php');
                              $upload_dir = 'uploads/';

                            $sql = "select * from children where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/> 
                          <?php
                              }
                            }
                          ?>
                           <div style="text-align: center; margin-top: 10px;" >
                          <a href="childrenview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
                    </div>
                    <div class="col-md-4 hhh wow slideInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                        <?php
                            
                             include('connection.php');
                              $upload_dir = 'uploads/';

                            $sql = "select * from men where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/>  
                          <?php
                              }
                            }
                          ?>
                           <div style="text-align: center; margin-top: 10px;" >
                          <a href="menview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
                    </div>
                      </div>
                 
            </div>
        </section>
        <!-- end servie -->




        <!-- start service -->
        <section class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
  <center>
                    <h1 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.7s" ><b style="color: white; font-size: 45px; background-color: #24a0ed;" >Previous</b><span style="color: #24a0ed; font-size: 45px; "><b>Events</b></span></h1>
                </center>
                    </div>
                    <div class="col-md-4 hhh wow bounceInDown" data-wow-offset="50" data-wow-delay="0.6s">
                         <?php
                             
                              include('connection.php');
                               $upload_dir = 'uploads/';

                            $sql = "select * from contacts where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/>
                            <p>Venue:<?php echo $row['venue'] ?></p>   
                          <?php
                              }
                            }
                          ?>
                           <div style="text-align: center; margin-top: 10px;" >
                          <a href="youthview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
                    </div>
                    <div class="col-md-4 hhh active wow bounceInUp" data-wow-offset="50" data-wow-delay="0.9s">
                        <?php
                            
                             include('connection.php');
                              $upload_dir = 'uploads/';

                            $sql = "select * from children where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/>  
                          <?php
                              }
                            }
                          ?>
                          
                           <div style="text-align: center; margin-top: 10px;" >
                          <a href="childrenview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>
                    </div>
                    <div class="col-md-4 hhh wow bounceInRight" data-wow-offset="50" data-wow-delay="0.6s">
                        <?php
                            
                             include('connection.php');
                              $upload_dir = 'uploads/';

                            $sql = "select * from men where event='current'";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <img src="<?php echo $upload_dir.$row['image'] ?>" width="100%"><br/>  
                          <?php
                              }
                            }
                          ?>

                            <div style="text-align: center; margin-top: 10px; " >
                          <a href="menview.php"> <button class="btn btn-primary rounded-pill " >Read More</button></a>
                      </div>

                    </div>

                      
                </div>
            </div>
        </section>




 

        <!-- start portfolio -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                  <div class="col-md-6" >
                    <h1 style="color: #24a0ed;" ><b>Find Us On facebook</b></h1>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fagapebaptistchurchntinda%2F&tabs=timeline&width=500&height=1000&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=627522064546807" width="100%" height="1000" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>

<div class="col-md-6">
  <h1 style="color: #24a0ed;" ><b>Find Us On YouTube</b></h1>
  <iframe width="100%" height="315" src="https://www.youtube.com/embed/w3TS8P6IF9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  
 <video  width="100%" controls>
                                <source src="videos/praise.mp4" type="video/mp4">
                            </video>

</div>

                   
                </div>
            </div>
        </section>
               
        <!-- end portfolio -->
      <?php    
        include "footer.php"; 
        ?>
        <!-- end copyright -->

<script>

$(document).ready(function(){

   $('#home_page_finished_video').click(function(){

        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

       $('#infinite_loop').get(0).pause();
        }
   });
});


wistiaJQuery(document).bind("wistia-popover-close", function() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

 $('#infinite_loop').get(0).play();
    }
});

</script>
    </body>
</html>