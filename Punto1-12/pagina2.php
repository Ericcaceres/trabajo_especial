

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>
<head>
<title>Problema</title>
</head>
<body>

<?
  echo $_REQUEST['nombre'];
  if ($_REQUEST['ingresos']==3)
  {
    echo " debe pagar impuestos.";
  }
  else
  {
    echo " no debe pagar impuestos a las ganancias.";	
  }

?>

</body>
</html>