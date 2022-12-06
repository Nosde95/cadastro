<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
include "config.php";
include "./template/header.php";
include "./template/nav.php";
include "./template/msg.php";
?>
<main>
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
            <input type="submit" name="enviar" value="Cadastrar" class="btn btn-primary" />
        </div>

        </form>
    </div>
    <hr/>
    <?php
        if(isset($_POST['enviar'])){
            $arquivo="./imagens/".$_FILES["foto"]["name"];
            if(move_uploaded_file($_FILES["foto"]["tmp_name"], $arquivo)){
                
                require_once "dataBase.php";
                #executar consulta no BD
                $sql="INSERT INTO pessoas (nome, email, foto)
                VALUES 
                ('{$_POST['nome']}','{$_POST['email']}','{$arquivo}')";
                if(!$con->query($sql)){
                    echo "Falha ao salvar registro!";
                }

            }
        }
        include "lista_pessoas.php";
    ?>
</main>
<?php
    include "./template/footer.php";
?>
</body>
</html>