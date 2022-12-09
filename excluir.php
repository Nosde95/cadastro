<?php
require_once "./dataBase.php";
$id=$_GET['id'];
$sql="DELETE FROM pessoas WHERE idnome=$id";
$resultado=$con->query($sql);
header("Location: index.php");