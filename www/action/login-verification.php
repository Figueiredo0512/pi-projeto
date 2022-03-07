<?php
    $ldapusername  = $_POST["nome_login"];
    $ldappassword = $_POST["senha_login"];
    $ldapconn = ldap_connect("fitcard.infra.br") or die("Conexão não estabelecida..");

    if ($ldapconn) {

        $ldapbind = ldap_bind($ldapconn, $ldapusername, $ldappassword);

        if ($ldapbind) {

            session_start();
            $_SESSION['nome'] = $nome;
            header("location:../web-pages/assinatura.php");

        } else {

            header("location:../index.php?error=1");    
            die();	
            
        }
    }
?>
