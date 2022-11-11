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

<h1>THIS IS STUDENT HOME PAGE</h1><?php echo $_SESSION["username"] ?>
<br>
<a href="S_page.php">Select your Books</a>
<br>
<a href="S_page.php">Books Listed</a>
<br>
<a href="S_page.php">Books Returned</a>
<br>
<a href="S_page.php">Books Issued</a>
<br>
<br>

<?php echo $_SESSION["username"] ?>
<a href="logout.php">Logout</a>
</body>
</html>
