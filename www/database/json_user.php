<?php
include "db.php";

$data=array();

$q=mysql_query("select * from `phonegap_login` where `email`='$email'");
while ($row=mysql_fetch_object($q)){
 $data[]=$row; 
}
echo json_encode($data);

$recette=mysql_query("select * from `recette`");
while ($row=mysql_fetch_object($recette)){
 $data[]=$row; 
}
echo json_encode($data);
?>