<?php
include "db.php";
$data=array();
$q=mysql_query("select * from `recette`");
while ($row=mysql_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>