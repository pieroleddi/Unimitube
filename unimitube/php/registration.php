<?php
	include "db.php";

	if (isset($_POST['registration'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nickname = $_POST['nickname'];
        $data_n = $_POST['data_n'];
        $citta_n = $_POST['citta_n'];
        $sesso = $_POST['sesso'];
        $foto = $_POST['foto'];

        $mysqli->query("INSERT INTO utente (email, password, nickname, data_n, citta_n, sesso, foto) VALUES ('$email', '$password', '$nickname', '$data_n', '$citta_n', '$sesso', '$foto')") or
        die($mysqli->error);
    }
?>
<!-- DEVO FARE UNA PAGINA APPOSTA PER LA CONFERMA DELLA REGISTRATION -->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Unimitube CSS -->
    <link rel="stylesheet" href="../style/homestyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--Title-->
    <title>Unimitube | Registration</title>
</head>
<body>
<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <a role="button" href="../index.php" class="btn btn-outline-primary">Return to login form</a>
</nav>

<div class="jumbotron jumbotron-fluid pb-2">
    <h1 class="display-6 text-center pt-2">Congratulations! You are a <b>Unimitube</b> member</b></h1>
</div>


	