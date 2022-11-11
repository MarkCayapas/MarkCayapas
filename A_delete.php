<?php
if(isset($_GET["Id"])){
    $ID =$_GET["Id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "lms";
    
    $_connection = new mysqli($servername, $username, $password,$db);

    $sql = "DELETE FROM books Where Id =$ID";
    $_connection->query($sql);
} 
header("location: /lms/Books.php");
exit;
?>