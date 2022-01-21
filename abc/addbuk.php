<?php
  require_once('connection.php');
  $upload_dir = 'uploads/';
      

  if (isset($_POST['bukadd'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $event = $_POST['event'];
    $ministry = $_POST['ministry'];

    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

    if(empty($name)){
      $errorMsg = 'Please input name';
    }elseif(empty($contact)){
      $errorMsg = 'Please input contact';
    }elseif(empty($email)){
      $errorMsg = 'Please input email';
    }else{

      $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

      $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

      $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

      if(in_array($imgExt, $allowExt)){

        if($imgSize < 5000000){
          move_uploaded_file($imgTmp ,$upload_dir.$userPic);
        }else{
          $errorMsg = 'Image too large';
        }
      }else{
        $errorMsg = 'Please select a valid image';
      }
    }


    if(!isset($errorMsg)){
      $sql = "insert into buk (name, contact, email, image,venue,description,event, ministry)
values('".$name."', '".$contact."', '".$email."', '".$userPic."','".$venue."','".$description."','".$event."','".$ministry."')";
      $result = mysqli_query($conn, $sql);
      if($result){
        $successMsg = 'New record added successfully';
        header('Location: buk.php');
      }else{
        $errorMsg = 'Error '.mysqli_error($conn);
      }
    }
  }
?>