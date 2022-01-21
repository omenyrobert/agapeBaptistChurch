<?php
  include('connection.php');
  $upload_dir = 'uploads/';

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select * from worshipmore where id = ".$id;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_assoc($result);
      $image = $row['image'];
      unlink($upload_dir.$image);
      $sql = "delete from worshipmore where id=".$id;
      if(mysqli_query($conn, $sql)){
        header('location:worship.php');
      }
    }
  }
?>