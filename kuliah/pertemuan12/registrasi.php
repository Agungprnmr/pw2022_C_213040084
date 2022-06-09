<?php 
require 'functions.php';

if(isset($_POST["registrasi"]) ) {

    if(registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
                document.location.href = 'login1.php';
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../php/css2/bootstrap.min.css.map">

    <link rel="stylesheet" href="../php/css2/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="">
    
    <!-- Style -->
    <link rel="stylesheet" href="../php/css2/style2.css">

    <title>Sign Up #10</title>
  </head>
  <body>
  
          <div class="col-lg-5 contents">
            <div class="form-block">
            <div class="mb-4 text-center">
                  <h3>Register</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                </div>
                <form action="" method="post">
                  <div class="form-group first">
                    <label for="username">Name</label>
                    <input type="text" class="form-control" name="username" id="username">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                    
                  </div>
                  <div class="form-group last mb-4">
                    <label for="password2">Re-type Password</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                    
                  </div>
                    <span class="ml-auto"><a href="login1.php" class="btn btn-primary" class="forgot-pass">Sign In</a></span>
                    <span class="ml-auto"><a href="index.php" class="btn btn-primary" class="forgot-pass">Home</a></span> 

                  <input type="submit" value="Daftar" id="registrasi" name="registrasi"class="btn btn-pill text-white btn-block btn-primary">

                  
                  
                  
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>