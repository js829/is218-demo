<?php
session_start();
include ('jailenes.php'); 


$username = $_POST['username']; 
$password = ($_POST['password']);

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){ // to make sure password and username match


$_SESSION['username']= $username; // keeping name in session to stay logged in

header("location:dashboard.php");
}


else {
    echo '
    <script language="javascript" type="text/javascript">
window.location.href="index.php?message=1";
</script>';

}
?>