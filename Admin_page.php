<?php   
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:log_in.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1>

<a href="Books.php">Manage Books</a>
<br>
<a href="S_page.php">Select your Books</a>
<br>
<a href="S_page.php">Books Listed</a>
<br>
<a href="S_page.php">Books Not Returned Yet</a>
<br>
<a href="S_page.php">Books Issued</a>
<br>
<a href="S_page.php">Registered Users</a>
<br>
<br>

<div></div>
<?php echo  $_SESSION["username"]?>
<a href="logout.php">Logout</a>

</body>
</html>
