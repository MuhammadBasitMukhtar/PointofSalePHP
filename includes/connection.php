<?php




$username ="root";
$userpassword= "";
$server ='localhost';
$db = 'point_of_sale' ;

 $con = mysqli_connect($server,$username,$userpassword,$db);

if($con){
//echo"connection successfull";
  ?>
 
   <?php
}else
{ echo "no connection";
     
}

?>