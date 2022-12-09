<div style="display:grid;grid-template-columns: auto auto auto;grid-gap: 30px;padding: 20px;"> 
    <?php
        require_once "./dataBase.php";
        $sql="SELECT * FROM pessoas";
        $resultado=$con->query($sql);
        
        while($pessoa=$resultado->fetch_array()){
            echo '  <div id="lista" class="card" >
                        <img class="card-img-top" style="width:100%;" src="'.$pessoa['foto'].'" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">'.$pessoa['nome'].'</h5>
                            <p class="card-text">'.$pessoa['email'].'</p>
                            
                        </div>
                        
                        <div style="display:grid;grid-template-columns: auto auto;grid-gap: 30px;padding: 20px;">
                            <a href="editar.php?id='.$pessoa['idnome'].'">editar</a>
                            <a style="text-align: center;" href="excluir.php?id='.$pessoa['idnome'].'">excluir</a>
                        </div>
                    </div>';

        }
    ?>
        
</div>
    