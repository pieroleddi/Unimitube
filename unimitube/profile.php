<?php 
    session_start();
    include "./php/db.php";
    $sqlemail="SELECT email FROM utente WHERE email='".$_SESSION["email"]."'";
    $sqlnickname="SELECT nickname FROM utente WHERE email='".$_SESSION["email"]."'";
    $sqlcitta_n="SELECT citta_n FROM utente WHERE email='".$_SESSION["email"]."'";
    $sqldata_n="SELECT data_n FROM utente WHERE email='".$_SESSION["email"]."'";
    $sqlsesso="SELECT sesso FROM utente WHERE email='".$_SESSION["email"]."'";
    $sqlfoto="SELECT foto FROM utente WHERE email='".$_SESSION["email"]."'";
    $resemail=$mysqli->query($sqlemail);
    $resnickname=$mysqli->query($sqlnickname);
    $rescitta_n=$mysqli->query($sqlcitta_n);
    $resdata_n=$mysqli->query($sqldata_n);
    $ressesso=$mysqli->query($sqlsesso);
    $resfoto=$mysqli->query($sqlfoto);

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
    <title>Unimitube | Profile</title>
</head>
<body>
    Unimitube
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <a class="navbar-brand" id="brand" href="home.php">Unimitube</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin-left: auto">
                <li class="nav-item">
                    <div class="dropdown">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-first" data-toggle="modal" data-target="#exampleModalScrollable">
                            My Channels
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php" tabindex="-1" aria-disabled="true"> 
                         <?php while($row = $resnickname->fetch_assoc()) {
                          print_r($row["nickname"]);
                           }?>    
                       </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Log out</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron p-2">
        <h1 class="text-center">Profile</h1>
        <hr>
        <p class="text-center">Here you can find info about your friends, channels and more</p>
    </div>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-3">
                <img src="..." class="" style="height: 150px; width: 150px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="php/update.php" id="formupdate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="mail" class="form-control" 
                                placeholder=
                          		<?php while($row = $resemail->fetch_assoc()) {
                          print_r($row["email"]);
                           }?> >
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="nickname" class="form-control" 
                                placeholder=
                                <?php while($row = $resnickname->fetch_assoc()) {
                          print_r($row["nickname"]);
                           }?> >
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" 
                                placeholder="*********">
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" name="citta_n" class="form-control" 
                                placeholder=
                                <?php while($row = $rescitta_n->fetch_assoc()) {
                          print_r($row["citta_n"]);
                           }?>   >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of birth</label>
                                <input type="date" name="data_n" class="form-control" 
                                placeholder=
                                <?php while($row = $resdata_n->fetch_assoc()) {
                          print_r($row["data_n"]);
                           }?>   >
                            </div>
                            <div class="form-group">
                                <label>Genre</label>
                                <select name="sesso" class="form-control" 
                                placeholder=
                                <?php while($row = $ressesso->fetch_assoc()) {
                          print_r($row["sesso"]);
                           }?>   >
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            <label>Choose profile image</label>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input">
                                <label class="custom-file-label">Choose image</label>
                            </div>
                            <button type="submit" name="update" class="btn btn-outline-primary my-5" style="float: right">Modify</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>