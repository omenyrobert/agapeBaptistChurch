

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
        <a class="navbar-brand" href="index.php">Create Event</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="btn btn-outline-danger" href="women.php" style="color: black;"><h2>back</h2></a></li>
            </ul>
        </div>
      </div>
    </nav>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card" style="color: black; font-size: 20px;">
              <div class="card-header">Create</div>
              <div class="card-body">
                <form class="" action="addwomen.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="name">Event</label>
                      <input type="text" class="form-control" name="name"  placeholder="Enter Venue" value="">
                    </div>
                    <div class="form-group">
                      <label for="contact">Date</label>
                      <input type="text" class="form-control" name="contact" placeholder="Enter date" value="">
                    </div>
                    <div class="form-group">
                      <label for="email">Time</label>
                      <input type="text" class="form-control" name="email" placeholder="Enter time" value="">
                    </div>
                    <div class="form-group">
                      <label for="email">Venue</label>
                      <input type="text" class="form-control" name="venue" placeholder="Enter Venue" value="">
                    </div>
                    <div class="form-group">
                      <label for="email">Description</label>
                      <textarea type="textarea" class="form-control" name="description" placeholder="Enter description"></textarea>
                    </div>
                     <div class="form-group">
                      <label for="email">Current or Previous</label>
                      <SELECT name="event" class="form-control" >
                        <option>Select</option>
                        <option>Current</option>
                        <option>Previous</option>
                      </SELECT>
                    </div>
                    <div class="form-group">
                      <label for="image">Choose Image</label>
                      <input type="file" class="form-control" name="image" value="">
                    </div>                      
                    <div class="form-group">
                      <button type="submit" name="addwo" class="btn btn-primary waves">Submit</button>
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
