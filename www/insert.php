<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nom=$_POST['nom'];
 $description=$_POST['description'];
 $type=$_POST['type'];
 $origine=$_POST['origine'];
 $cout=$_POST['cout'];
 $difficulte=$_POST['difficulte'];
 $q=mysql_query("INSERT INTO `recette` (`nom`,`description`,`type`,`origine`,`cout`,`difficulte`) VALUES ('$nom','$description','$type','$origine','$cout','$difficulte')");
 if($q)
  echo "ok";
 else
  echo "error";
 }
 ?>