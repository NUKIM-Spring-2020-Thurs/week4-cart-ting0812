<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
if(isset($_COOKIE["ID"]))
{
     echo "歡迎再度光臨".$_COOKIE["ID"];
}
else
{
    echo "歡迎新朋友"; 
}
?>





<html>
    <h1>Login</h1>
    <form action="logincheck.php" method="POST">
        Please input your username :<input type="text" name="id" value="<?php $_COOKIE['ID']?>" required><br>
        Please input your password:<input type="password" name="pwd" required> <br>
        <input type="submit"><br>

    </form>
</html>