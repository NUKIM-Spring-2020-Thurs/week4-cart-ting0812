<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
ob_start();
session_start();

$id = $_POST["id"];
$pwd =$_POST["pwd"];

$uid="amy";
$upwd="12345";

if( $id==$uid && $pwd==$upwd)
    {
        $_SESSION["login"]="S";
        $_SESSION["ID"]="id";
        header('Location:loginsuccess.php');
        #echo "login success";

    }
else
    {
        $_SESSION["login"]="F";
        header('Location:failed.php');
       # echo "login faied, please back to login page in 3 second";
       # echo "<meta http-equiv='refresh' content'1;url=login.php'/>";
    }


#echo "Your id:" .$id."<br/>";
#echo "Your password:" .$pwd."<br/>";

?>