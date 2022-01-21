<?php

include_once('connection.php');
if(isset($_POST['editwords'])){
    $homewords=$_POST['homewords'];

    $sql="UPDATE children set homewords='$homewords'";
    $result = mysqli_query($conn, $sql);
      $successMsg = 'New record added successfully';
      header('Location: children.php');
  
}
?>