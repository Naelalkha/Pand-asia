
 <?php
include "db.php";
echo $_COOKIE['email_us'];
$email = $_COOKIE['email_us'];

$result=mysql_query("select * from `phonegap_login` where `email`='$email'");
$row = mysql_fetch_array($result);
echo $row[$fullname];

?>