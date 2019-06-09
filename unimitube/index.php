<?php 
    session_start();
    include "./php/db.php";
    $sql="SELECT nickname FROM utente WHERE email='".$_SESSION["email"]."'";
    $result=$mysqli->query($sql);
    ?>   
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Unimitube CSS -->
      <link rel="stylesheet" href="style/homestyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Title-->
    <title>Unimitube | Registration</title>
  </head>
  <body>
    <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light" id="navbar">
      <a class="navbar-brand" id="brand" href="">Unimitube</a>
    </nav>

    <div class="jumbotron jumbotron-fluid pb-2">
      <h1 class="display-6 text-center pt-2">Welcome to <b>Unimitube</b></h1>
      <p class="lead text-center">For students, by students</p>
      <hr class="my-4">
      <p class="lead text-center">Upload your contents, find your friends, like, comment and much more... </p>
    </div>

    <!--Form Login -->
    <div class="row">
        <div class="col-md-12 offset-md-1">
            <h3>Login</h3>
            <form method="post" action="php/login.php" id="formlogin">
                <div class="row">
                    <div class="col-md-5">
                        <label>Email</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr>

    <!-- Form Sign in -->
    <div class="row">
        <div class="col-md-12 offset-md-1">
            <h3>Register</h3>
            <form method="post" action="php/registration.php" id="formsignin">
                <div class="row">
                <div class="col-md-5">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="nickname" class="form-control" placeholder="Enter your nickname">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="citta_n" class="form-control" placeholder="Enter your city">
                </div>
                <div class="form-group">
                    <label>Date of birth</label>
                    <input type="date" name="data_n" class="form-control" placeholder="yyyy/mm/dd">
                </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Genre</label>
                        <select name="sesso" class="form-control" placeholder="Enter your genre">
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                    </div>
                    <label>Choose profile image</label>
                    <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input">
                        <label class="custom-file-label">Choose image</label>
                    </div>
                    <button type="submit" name="registration" class="btn btn-outline-primary my-5" >Sign In</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
