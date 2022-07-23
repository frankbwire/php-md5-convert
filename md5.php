<!--author frankline bwire-->
<!--Notchcom Solutions Kenya-->
<?php


//CONVERT TEXT TO MD5 ENCRYPTION
echo $pass='p@s5w0rd';
echo '<br>';
echo $password=md5($pass);


//CONVERT MD5 TO TEXT (CHECK)
echo '<br>';
echo $pass1='p@sw0rd';
echo '<br>';

if($password != md5($pass1)){
    
    echo "WRONG PASSWORD";
}
else if($password == md5($pass1)){
    
    echo "CORRECT";
}

else
    
{
    
    echo "ERROR 404";
};
?>