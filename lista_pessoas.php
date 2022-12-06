<div style="padding:20px; display:grid; "> 
    <?php
        require_once "./dataBase.php";
        $sql="SELECT * FROM pessoas";
        $resultado=$con->query($sql);
        
        while($pessoa=$resultado->fetch_array()){
            echo '<div>
                    <div id="lista" class="card" style="width:20vw;">
                    <img class="card-img-top" src="'.$pessoa['foto'].'" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">'.$pessoa['nome'].'</h5>
                        <p class="card-text">'.$pessoa['email'].'</p>
                        
                    </div>
                </div>';

        }
    ?>
        
    </div>
    