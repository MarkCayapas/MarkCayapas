<?php
$host="localhost";
$user="root";
$password="";
$db="lms";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    $sql="select * from login where username= '".$username."' AND password= '".$password."' ";
    
    $result=mysqli_query($data,$sql);
    
    $row=mysqli_fetch_array($result);
    
    if($row ["usertype"]=="user")
    {
         $_SESSION["username"]=$username;
        header("location:Stud_page.php");
        
    }
    elseif($row ["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        
        header("location:Admin_page.php");
    }
    else
    {   
        echo "username or password incorrect";
    }
}
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <title>Document</title>
</head>
<body background="123.jpg">


<center>
<h2>Log In Page</h2>
<br><br><br><br>
 
  
  <form action="#" method="POST">
   
   <br><br>
   <div>
       <label>Username</label>
       <input type="text" name="username" required>
   </div>
   <br><br>
   
   <div>
       <label>Password</label>
       <input type="password" name="password" required>
   </div>
    <br><br>
    <div>
        <label class ="form-label">Select User Type</label>
    </div>
    
    <div>
        <select class="form-select mb-3"
        aria-label="Default select example">
           <option selected value="User">User</option>
            <option value="Admin">Admin</option>
        </select>
    </div>
    
    <br><br>
    
    <div>
       <input type="submit" name="Submit" required>
   </div>
    <br>
     <p>Don't have an account? <a href="Reg_form.php">Sign up now</a>.</p>
   <br><br>
   
   </form>
   
</div>
</center>
   


</body>
</html>