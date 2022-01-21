<?php
  require_once('connection.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from children where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }

  if(isset($_POST['Submit'])){
		$name = $_POST['name'];
    $contact = $_POST['contact'];
		$email = $_POST['email'];
    $venue = $_POST['venue'];
    $description = $_POST['description'];
    $event = $_POST['event'];

		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

		if($imgName){

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					unlink($upload_dir.$row['image']);
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}else{

			$userPic = $row['image'];
		}

		if(!isset($errorMsg)){
			$sql = "update children
									set name = '".$name."',

										contact = '".$contact."',

                    email = '".$email."',

										image = '".$userPic."',

                    venue = '".$venue."',
                    description = '".$description."',
                    event = '".$event."'
					where id=".$id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				header('Location:children.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}

	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>abc</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
  </head>
  <body style="background-color: white; color: black;">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                Edit Profile
              </div>
              <div class="card-body" style="color: black; font-size: 20px;">
                <form class="" action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Event</label>
                      <input type="text" class="form-control" name="name"  value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="contact">Date</label>
                      <input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Time</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Venue</label>
                      <input type="text" class="form-control" name="venue" value="<?php echo $row['venue']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Description</label>
                      <textarea type="text" class="form-control" name="description"><?php echo $row['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="email">Current/Prev</label>
                      <p>Select</p>
                     <SELECT name="event" class="form-control" >
                        <option>Select</option>
                        <option>Current</option>
                        <option>Previous</option>
                      </SELECT>
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                        <img src="<?php echo $upload_dir.$row['image'] ?>" width="100">
                        <input type="file" class="form-control" name="image" value="">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </body>
</html>
