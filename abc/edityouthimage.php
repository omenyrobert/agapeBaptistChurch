<?php
	require_once'connection.php';

if(isset($_POST['editimage'])){
		//image upload

	$msg = "";
	$image = $_FILES['homeimage']['name'];
	$target = "uploads/".basename($image);

	if (move_uploaded_file($_FILES['homeimage']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	$insert_data = "UPDATE contacts SET homeimage='$image'";
  	$run_data = mysqli_query($conn,$insert_data);

  	if($run_data){
  			echo "<script>alert('information saved successfully')</script>";
          	echo "<script>window.location='youth.php'</script>";
  	}else{
 			echo "<script>alert('information not saved successfully')</script>";
	 echo "<script>window.location='youth.php'</script>";
}
}



	

?>





