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
    echo"<br>";
    $Emai=$_POST['email'];
    
    echo $sql = "SELECT*from form where Email_Address='$Emai'";
    $query = mysqli_query($connect,$sql);
    if($query)
    {
        echo "halo";
        $row = mysqli_fetch_array($query);
        if($row>0)
        {
        echo "Here is your data";
        echo "<br>";
      echo "<table border='1'>";
      echo "<tr>";
      echo "<th>";
      echo "Email";
      echo "</th>";
      echo "<tr>";
      echo "<th>";
      echo "Password";
      echo "</th>";
      echo "<tr>";
      echo "<tr>";
      echo "<td>";
      echo "$row[Email_Address]";
      echo "</td>";
      echo "<tr>";
      echo "<td>";
      echo "$row[Password]";
      echo "</td>";
        }
    }
    else
    {
        echo "locho";
    }
}
?>