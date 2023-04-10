<?php
echo "Welcome";
echo"<br>";
if(isset($_POST['email']))
{
    echo "Hii";
    echo"<br>";
    $server="localhost";
    $username="root";
    $password="";
    $database="form2";
    $connect= mysqli_connect($server,$username,$password,$database);
    if(!$connect)
    {
        die(mysqli_connect_error());
    }
    echo "connected";
    echo "<br>";
    $Emai=$_POST['email'];
    $Password=$_POST['Password'];
    echo $sql="INSERT INTO form (Email_Address, Password) VALUES ('$Emai','$Password')";
    echo "<br>";
   $query=mysqli_query($connect,$sql);
    if($query)
    {
        echo  "Data Inserted Sucessfullly";
    }
    else
    {
        echo"Data Lost";
    }
}
?>