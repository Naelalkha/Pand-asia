<?php
include "db.php";
$data=array();
$email= <script>localstorage.email</script>;
$q=mysql_query("select * from `phonegap_login` where `email`='$email'");
while ($row=mysql_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data);
?>