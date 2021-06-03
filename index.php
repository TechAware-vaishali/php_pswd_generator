<form method="post" action="index.php" align="center">
<?php
    $password=$_POST['password'];
    $string="1234567890!@$%^&*abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $pswd="";
    
    for($i=1;$i<=$password;$i++)
    {
    $a=substr(str_shuffle($string),0,1);
    $pswd = $pswd.$a;
     }

    echo "Your Password String = ";
    echo $string;
    echo "<br>";
    echo "<br>";
    echo "Your Password = ";
    echo $pswd;



?>

   <br>
    <input type="number" name="password" value="10"/>

    <button>submit</button>
</form>

