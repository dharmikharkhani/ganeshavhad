<?php
require "config.php";
//echo "new password";

if(isset($_POST['submit']))
{   $str = $_POST['password']; 
        $salt = "JafeelAhmed";
        $enc = sha1($salt);
        $s = $str.$enc;
        $password = md5($s);
    echo $password;
    $name=$_POST['name'];
    $sql="SELECT * FROM `admin` WHERE `username`='$name'";
    $result =$conn->query($sql);
    if($result->num_rows==1)
    {
        $row=$result->fetch_assoc();
        $password=$row['password'];
        if (password_verify($_POST['password'], $password)) 
        {
            echo 'Password is valid!';
        }
        else
        {
            echo "password is invalid";
        }
    }
    else 
    {
        echo 'Invalid Id.';
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="text" name="name" placeholder="username">
<input type="text" name="password" placeholder="password">
<input type="submit" name="submit" placeholder="submit">
</form>