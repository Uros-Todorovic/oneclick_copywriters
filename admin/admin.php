<?php 
      require_once('init.php');
      Helper::not_signed_in($session);
      
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

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
        <h1 class="mt-4">Uputstvo</h1>
        <p class="lead">Pritiskom na tab "Copywriters" dobijaju se svi copywriteri sa mogucnoscu dodavanja novih, izmene i brisanja postojecih.</p>
        <p class="lead">Pritiskom na tab "Comments" dobijaju se svi komentari za svakog copywritera sa mogucnoscu njihovog odobravanja.</p>
      </div>
      
      <?php 
         /*  
         $copywriter = Copywriter::find_all();
          print_r($copywriter);  */

         /*  $id = 3;
          $copywriter = Copywriter::find_by_id($id);
          print_r($copywriter); */

         /*  $id = 6;
          $copywriter = Copywriter::find_by_id($id);
          $copywriter->delete(); */

     /*      $id = 8;
          $copywriter = Copywriter::find_by_id($id);
          $copywriter->name = "test";
          $copywriter->description = "test";
          $copywriter->price = 1;
          $copywriter->save(); */

         /*  $copywriter = new Copywriter;
          $copywriter->name = "Darko";
          $copywriter->description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie justo augue, vel ullamcorper justo volutpat sit amet. Praesent mattis condimentum feugiat. Sed lacinia eu velit sed ultricies. Cras eu lectus ut dolor cursus viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In et suscipit nisi, a sagittis arcu. Vestibulum vestibulum sollicitudin sem, vitae tincidunt risus aliquam eu. Nulla hendrerit tincidunt dolor at eleifend.";
          $copywriter->price = 80;
          $copywriter->save();   */

        /*   $photo = new Photo;
          $photo->title = "uros"; 
          $photo->filename = "todorovic";
          $photo->type = "jpg";
          $photo->size = 123;
          $photo->save(); */

          /* $id = 2;
          $photo = Photo::find_by_id($id);
          $photo->delete(); */

          /* $id = 3;
          $photo = Photo::find_by_id($id);
          $photo->title = "test"; 
          $photo->filename = "test";
          $photo->type = "jpg";
          $photo->size = 222;
          $photo->save(); */

          


      ?>

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
