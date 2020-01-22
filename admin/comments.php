<?php 
      require_once('init.php');
      Helper::not_signed_in($session);

      $comments = Comment::find_all();
      
      
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comments</title>

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
        <h1 class="mt-4">Comments</h1>
      </div>
      
      <table class="table table-hover mt-5">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Comment for copywriter</th>
                        <th>Author</th>
                        <th>Body</th>
                        <th>Aprooved</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                      if (!empty($comments)) {
                          foreach ($comments as $comment)  {  
                            $copywriter = Copywriter::find_by_id($comment->copywriter_id)
                              ?>
                                <tr>
                                  <td>
                                  <?php echo $comment->id; ?></td>
                                  <td>
                                    <p><?php echo $copywriter->name;?></p>
                                    <img src="<?php echo $copywriter->image_path_and_placeholder() ?>" id="comment_image">
                                    <div class="action_link mt-1">
                                        <a href="comment_approved.php?id=<?php echo $comment->id; ?>" class="btn btn-primary btn-sm">Approve</a>
                                    </div>
                                  </td>
                                  <td><?php echo $comment->author; ?></td>
                                  <td><?php echo $comment->body; ?></td>
                                  <td>
                                      <?php
                                        if ($comment->aprooved == 1) {
                                            echo "Yes"; 
                                        } else {
                                            echo "No";
                                        }
                                        ?>
                                  </td>
                                </tr>
                      <?php }
                      } ?>
                </tbody>
            </table>

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
