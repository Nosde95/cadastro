<?php
session_start();
include "database.php";

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);
    $sql="SELECT idusuario, nome, email FROM usuario 
    Where email='$email' AND senha='$senha'";
    $resultado=$con->query($sql);
    if($resultado){
        if($resultado->num_rows>0){
            $user=$resultado->fetch_array();
            $_SESSION['user']=$user;
            $msg['msg']="Sucesso!";
            $msg['class']="success";
            $_SESSION['msgs'][]=$msg;
        }
    }else{
        $msg['msg']="Falhao!";
        $msg['class']="danger";
        $_SESSION['msgs'][]=$msg;
    }
    header("Location: index.php");
}
