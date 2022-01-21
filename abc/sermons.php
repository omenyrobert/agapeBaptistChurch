<?php


    include_once('connection.php');


    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `sermon` (`id`, `name`, `message`)VALUES (NULL, '$name', '$message')";


        //use for MySQLi OOP
        if($conn->query($sql)){
            header("location: sermons.php");
            exit;
        }
        
        else{
            $_SESSION['error'] = 'Something went wrong while adding';
        }
    }
    else{
        $_SESSION['error'] = 'Fill up add form first';
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
    <body style="background-color: white;">

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
        <section style=" background-color: white;  background: url('images/serm-min.jpg') no-repeat;
        background-size: cover;
         background-position: center; background-color: white;
        height: 100vh;
        background-attachment: fixed;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 100px;">
                        <br/><br/><br/><br/><br/><br/><br/><br/>
                        <h2 style="font-size: 30px;" class="wow bounceIn" data-wow-offset="50" data-wow-delay="1s"><b>CATCH UP</b><br/><span data-wow-delay="2s" style="color: #24a0ed;">WITH  SERMONS</span></h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end home -->


        <!-- start contact -->
 






<div class="container-fluid" style="background-color: white;">
    <div class="container" style="padding: 50px;" >
   <?php
                            $sql = "select * from pastor";
                            $result = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($result)){
                              while($row = mysqli_fetch_assoc($result)){
                          ?>
                          <div class="row" >
                            <div class="col-md-12">
                            <textarea readonly="readonly" style="width: 100%; font-size: 20px; height: 500px; border: none; color: black;" ><?php echo $row['serm'] ?></textarea>
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

<div class="container-fluid" style="background-color: #24a0ed;">
    <div class="container">
            <h1>Tell Us about the sermon</h1>
            <form method="POST" action="sermons.php">
                <div class="row form-group">
                <label class="control-label modal-label">Name:</label>
                <input type="text" class="form-control" name="name" required>
                </div>
                <div class="row form-group">
                        <label class="control-label modal-label">Message</label>
                        <input type="text" class="form-control" name="message" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" onclick="return mess();">Submit</a></button>
            </form>

<div>

<script type="text/javascript">
    
    function mess(){
        alert ("Comment added sucessfully");
        return true;
    }
</script>
            
                        <?php
                            include_once('connection.php');
                            $sql = "SELECT * FROM sermon";

                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                echo 
                                "<div style='background-color: white; margin-top: 20px; color: black; padding: 20px; margin-bottom: 50px;'>
                                    <h1>".$row['name']."</h1><br/>
                                    <p>".$row['message']."</p>
                                </div>";
                            }

                        ?>
            

                    </div>


        
    </div>
    
</div>



        <!-- end contact -->
<?php    
        include "footer.php"; 
        ?>
        <!-- end copyright -->

    </body>
</html>