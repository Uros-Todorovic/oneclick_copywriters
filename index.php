<?php
  require_once("includes/autoloader.php");
  require_once("admin/init.php");

  $copywriters = Copywriter::find_all();
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Oneclick Copywriters</title>
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Founded and managed by copywriters, we exist to elevate the profession of copywriting, provide learning and development opportunities, and help our members showcase their skills, raise their profiles and find work.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <a href="admin/login.php" class="text-white" style="text-decoration:none"><h4 class="text-white">Admin</h4></a>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
  
            <a href="index.php" class="text-white h4" style="text-decoration:none"><strong>Oneclick Copywriters</strong></a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    
    <main role="main">
    
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Meet our copywriters</h1>
          <p class="lead text-muted">We can help you tell your story in a way that makes people stop, listen and take action.</p>
        </div>
      </section>
    
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">

          <?php foreach ($copywriters as $copywriter) { ?>
            
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="card-img-top" src="admin/<?php echo $copywriter->image_path_and_placeholder(); ?>" data-holder-rendered="true">
                  <div class="card-body">
                    <p class="card-text"><?php echo $copywriter->name ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="copywriter.php?id=<?php echo $copywriter->id; ?>" class="btn btn-sm btn-outline-secondary">View more</a>
                      </div>
                      <small class="text-muted">Price: <?php echo $copywriter->price; ?> eur/h</small>
                    </div>
                  </div>
                </div>
              </div>
          
          <?php } ?>

          </div>
        </div>
      </div>
    
    </main>
    
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Oneclick Copywriters</p>
      </div>
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

