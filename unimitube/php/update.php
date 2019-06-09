<?php
        session_start();
        include "db.php";

	if (isset($_POST['update'])) {
         $mail = $_POST['mail'];
         $password = $_POST['password'];
         $nickname = $_POST['nickname'];
         $data_n = $_POST['data_n'];
         $citta_n = $_POST['citta_n'];
         $sesso = $_POST['sesso'];
         $foto = $_POST['foto'];

        
         $mysqli->query("UPDATE utente SET email='$mail', password='$password', nickname='$nickname', data_n='$data_n', citta_n='$citta_n', sesso='$sesso', foto='$foto'  WHERE email='".$_SESSION["email"]."'" ) or
        die($mysqli->error);
    }
?>
