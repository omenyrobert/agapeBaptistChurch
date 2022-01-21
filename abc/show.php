<?php
  require_once('connection.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from contacts where id=".$id;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  </head>
  <body style="background-color: white; color: black;" >

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
          <a class="navbar-brand" href="index.php">View</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto"></ul>

          </div>
        </div>
      </nav>

      <div class="container" style="font-size: 40px; color: black;" >
        <div class="row justify-content-center">
          <div class="card">
            <div class="card-header">
              Event Details
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md">
                    <img src="<?php echo $upload_dir.$row['image'] ?>" width="80%" >
                </div>
                <div class="col-md">
                    <h5 class="form-control" style="font-size: 20px;" >
                      <span><?php echo $row['name'] ?></span>
                    </h5>
                    <h5 class="form-control" style="font-size: 20px;"><span><?php echo $row['contact'] ?></span>
                    </h5>
                    <h5 class="form-control" style="font-size: 20px;"><span><?php echo $row['email'] ?></span>
                    </h5>
                    <h5 class="form-control" style="font-size: 20px;"><span><?php echo $row['venue'] ?></span>
                    </h5>
                    <textarea class="form-control" style="font-size: 20px; color: black;"><?php echo $row['description']; ?></textarea> 
                    </i></h5>
                    <h5 class="form-control" style="font-size: 20px;"><span><?php echo $row['event'] ?></span>
                    </h5>

                      <a class="btn btn-outline-danger" href="youth.php"><i class="fa fa-sign-out-alt"></i><span style="color: black;" >Back</span></a>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <script src="js/bootstrap.min.js" charset="utf-8"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
      <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
        } );
      </script>
    </body>
  </html>
