<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "lms";

$connection = new mysqli($servername,$username,$password,$db);

if ( isset($GET["Id"]) ){
    header("location: /lms/SelectionS_page.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<body>
   <div class="container my-5">   
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Quantity</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Availability</th>
              </tr>

              <?php
                  $sql = "SELECT * FROM Selection" ;
                  $result = $connection->query($sql);  
              ?>
             </body>
      </table>
       
   </div>
    
</body>
</html>