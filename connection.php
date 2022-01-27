<?php




$username ="root";
$userpassword= "";
$server ='localhost';
$db = 'point_of_sale' ;

 $con = mysqli_connect($server,$username,$userpassword,$db);

if($con){
//echo"connection successfull";
  ?>
  <script>
     // alert('connection successfull');
   </script>
   <?php
}else
{ echo "no connection";
     
}




?>