<?php
    session_start();
    if(isset($_SESSION['nome'])){
    } else {
        header('Location: ../index.php'); 
    }
?>