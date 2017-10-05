<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 echo $_REQUEST['nombre'];
  echo "<br>";
  if ($_REQUEST['edad']>=18)
  {
    echo "Es mayor de edad";
  }
  else
  {
    echo "No es mayor de edad";
  }
?>

</body>
</html>