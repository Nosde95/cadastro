<?php
      #estabelecer conexão com o banco de dados
      $con = mysqli_connect("localhost","root","","cadastro");
      //$con = mysqli_connect("sql309.epizy.com","epiz_32051382","uTKVwyy7ff","epiz_32051382_cadastro");
      # Check connection
      if (mysqli_connect_errno())
      {
          echo "Falha: ".mysqli_connect_error();
      }
?>