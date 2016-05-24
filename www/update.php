<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $recette_id=$_POST['id'];
 $nom=$_POST['nom'];
 $description=$_POST['description'];
 $type=$_POST['type'];
 $origine=$_POST['origine'];
 $cout=$_POST['cout'];
 $difficulte=$_POST['difficulte'];
 $q=mysql_query("UPDATE `recette` SET `nom`='$nom',`description`='$description',`type`='$type',`origine`='$origine',`cout`='$cout',`difficulte`='$difficulte' where `id`='$recette_id'");
 if($q)
 echo "ok";
 else
 echo "error";
 }
 ?>
 
