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
      <h2>Admin</h2>
      <a class="btn btn-primary" href="/lms/edit.php?" role="button">New Book</a>
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Quantity</th>
                  <th>Author</th>
                  <th>Title</th>
                  <th>Availability</th>
              </tr>
          </thead>
             <body>
             <?php
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $db = "lms";
                 
                 $connection = new mysqli($servername,$username,$password,$db);
                 
                 if ($connection->connect_error){
                     die("Connection Failed." . connection->connect_error);
                 }
                 $sql = "SELECT * FROM books";
                 $result = $connection->query($sql);
                 
                 if (!$result){
                     die("invalid query:" . $connection_error);
                 }
                  while($row = $result->fetch_assoc()){
                      echo"
                        <tr>
                            <td>$row[Id]</td>
                            <td>$row[Quantity]</td>
                            <td>$row[Author]</td>
                            <td>$row[Title]</td>
                            <td>$row[Availability]</td>
                            <td>
                                <a class=' btn btn-primary btn-sm' href=' /lms/eddit.php? Id=$row[Id]'>Edit</a>
                                <a class=' btn btn-danger btn-sm' href='/lms/A_delete.php? Id=$row[Id]'>Delete</a>
                            </td>   
                        </tr>  
                      ";
                  }
                 
                 ?>
 
             </body>
      </table>
       
   </div>
    
</body>
</html>