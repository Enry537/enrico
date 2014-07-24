<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conf_Registrazione</title>
</head>
<?php 
$host="localhost"; // Hostname 
$username="programmarealpc"; // Mysql username 
$password=""; // Mysql password 
$db_name="ammunci"; //Nome del Database 
$tbl_name="utenti"; // Nome della Tabella 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$ammnunci")or die("cannot select DB");  
// Nome utente e password inviate attraverso il form 
$username=$_POST['username']; 
$password=$_POST['password']; 
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'"; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 
// If result matched $myusername and $mypassword, table row must be 1 row 
if($count==1){ 
// Register $myusername, $mypassword and redirect to file "login_success.php" 
session_register("username"); 
session_register("password"); 
header("location:login_success.php"); 
} 
else { 
echo "Attenzione username o password errati"; 
} 
?>
</html>