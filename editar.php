<?php
include "./template/header.php";
include "./template/nav.php";
require_once "./dataBase.php";
$id=$_GET['id'];
?>
<div style="padding:15px;">
        <form method="POST"  enctype="multipart/form-data" style="padding-top:130px;">
        <div class="row g-3">
            <div class="col-sm-4">
                <input type="text" name="nome" class="form-control" placeholder="Nome" aria-label="nome">
            </div>
            <br>
            <div class="col-sm-4">
                <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email">
            </div>
            
            <div class="col-sm-4">
                <input type="file" name="foto" class="form-control" >
            </div>
        </div>
        <div class="row g-3" style="padding-top:10px;width:180px;">
            <input type="submit" name="atual" value="Atualizar" class="btn btn-primary" />
        </div>
        </form>
</div>
<?php
if(isset($_POST['atual'])){
    $arquivo="./imagens/".$_FILES["foto"]["name"];
    if(move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)){
        require_once "dataBase.php";
        $sql="UPDATE pessoas SET nome='{$_POST["nome"]}' ,email='{$_POST["email"]}', foto='{$arquivo}' WHERE idnome={$id};";
        if(!$con->query($sql)){
            echo "Falha ao salvar registro!";
        }
    }
    header("Location: index.php");
}

