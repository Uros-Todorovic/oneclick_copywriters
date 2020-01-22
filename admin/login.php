<?php
require_once('init.php');



if ($session->is_signed_in()) {
    Helper::redirect("admin.php");
}

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    

   $user_found = User::verify_user($username, $password);

   if ($user_found) {
        $session->login($user_found);
        Helper::redirect("admin.php");
    } else {
        print_r($message = "User not found");
    }
} else {
    $message  = "";
    $username = "";
    $password = ""; 
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Sign in CSS -->
    <link rel="stylesheet" href="css/signin.css">
    <title>Document</title>
</head>
<body>
    <form class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <h3 class="h3 mb-3 font-weight-normal"><?php echo $message; ?></h1>

        <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" value="<?php echo htmlentities($username); ?>" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" value="<?php echo htmlentities($password); ?>" required>

        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login">
    </form>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


