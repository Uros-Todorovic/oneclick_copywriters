<?php 
      require_once('init.php');
      Helper::not_signed_in($session);

      $copywriter = new Copywriter;

      if (isset($_POST['submit'])) {
          if ($copywriter) {
            
            $copywriter->name = $_POST['name'];
            $copywriter->description = $_POST['description'];
            $copywriter->price = $_POST['price'];
            $copywriter->set_file($_FILES['image']);
            $copywriter->save_copywriter_and_img();
            $copywriter->create();
          }
      }
      
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Copywriter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <a href="admin.php" class="text-muted">Admin Dashboard</a>
      </div>
      <div class="list-group list-group-flush">
        <a href="copywriters.php" class="list-group-item list-group-item-action bg-light">Copywriters</a>
        <a href="comments.php" class="list-group-item list-group-item-action bg-light">Comments</a>
        <hr>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header mt-3">Add New Copywriter</h1>
                        <form action="" method="post" enctype="multipart/form-data" class="mt-5" >
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
