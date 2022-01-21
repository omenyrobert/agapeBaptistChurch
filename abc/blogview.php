<?php
    require_once'connection.php';

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
    <br/>
    <br/>
    <div class="container">
            
           
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


                 <form action="https://formsubmit.co/macrobert000@gmail.com" method="POST" class="container" style="display: flex;">
    <input type="hidden" name="_next" value="http://localhost/abc/index.php">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_autoresponse" value="Thanks for contacting us, we will get back to you shortly. You can also contact us +256 772 402 378 (24 hour)
+256 751 013 555 (24 hour)">
<div>
    <label   >Name</label><br/>
     <input type="text" name="name" class="form-control" style="color: black; background-color: white;" required>
     
 </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div>
     <label   >Email</label><br/>
     <input type="email" name="email" class="form-control" style="color: black; background-color: white;" required>
     
 </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div>
          <label >Message</label><br/>
     <textarea type="text" name="name" class="form-control" style="color: black; background-color: white;" required></textarea>

 </div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div>
    <br/>
     <button type="submit" class="form-control" class="btn btn-primary">Send</button>
 </div>
</form>
    </div>
    
</div>
        <!-- start contact -->
 












        <!-- end contact -->

    
<?php    
        include "footer.php"; 
        ?>
        <!-- end copyright -->

    </body>
</html>