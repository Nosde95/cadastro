<?php
      #estabelecer conexão com o banco de dados
      $con = mysqli_connect("localhost","root","","cadastro");
      //$con = mysqli_connect("sql101.epizy.com","epiz_33149526","G85MckvjXf","epiz_33149526_cadastro");
      # Check connection
      
      if (mysqli_connect_errno())
      {
          echo "Falha: ".mysqli_connect_error();
      }
?>