<?php
    require '../functions.php';
    if( isset($_POST["login"]) ){

      $email = $_POST["email"];
      $passwords = $_POST["password"];

      $result = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
      $result1 = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
      //cek email
      if ( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($passwords, $row["password"]) ){
          header("Location: ../Home.html");
          exit;
        }
      } elseif ( mysqli_num_rows($result1) === 1) {
        $row = mysqli_fetch_assoc($result1);
        if (password_verify($passwords, $row["password"]) ){
          header("Location: ../admin/Homeadmin.html");
          exit;
        }
      }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Sign In</title>
</head>
<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="../Home.php"><img src="../undiksha.png" alt=""> Rumah Tipat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          </form>
        </div>
    </nav>
    <div class="card">
        <h3 class="card-title">Sign In</h3>
        <form class="form" action="" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" autocomplete="on" required />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" autocomplete="on" required />
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
    </div>
</body>
</html>