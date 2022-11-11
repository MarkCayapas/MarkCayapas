<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "lms";

$connection = new mysqli($servername,$username,$password,$db);


$ID = "";
$Quantity = "";
$Author = "";
$Title = "";
$Availability = "";

$errorMessage = "";
$SuccessMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
        
    if ( isset($GET["Id"]) ){
        header("location: /lms/Books.php");
        exit;
    }
        $ID = $_GET["Id"];
        
        $sql = "SELECT * FROM books where Id=$ID";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

            if (!$row){
                header("location: /lms/Books.php");
                exit;
            }
            $ID = $row["Id"];
            $Quantity = $row["Quantity"];
            $Author = $row["Author"];
            $Title = $row["Title"];
            $Availability = $row["Availability"];
            }
else{   
    $ID = $_POST["Id"];
    $Quantity= $_POST["Quantity"];
    $Author = $_POST["Author"];
    $Title = $_POST["Title"];
    $Availability = $_POST["Availability"]; 

    do{
        if(empty($ID) || empty($Quantity) || empty($Author) || empty($Title) || empty($Availability) ) {
            $errorMessage = "All Fields are Required";
            break;
    } 
            $sql = "UPDATE books " .
                "SET Id = '$ID', Quantity = '$Quantity', Author = '$Author', Title = '$Title', Availability = '$Availability' "  .
                "Where Id = $ID";

            $result = $connection->query($sql);

            if(!$result){
                $errorMessage = "Invalid Query" . $connection->error;
                break;
            }

            $SuccessMessage = "Books Updated";

            header("location: /lms/books.php");
            exit;
            


        }while (false);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div clas="container m-5">
        <h2>New Book</h2>

        <?php
        if( !empty($errorMessage)){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' ari-label='Close'></button>
                </div>
                ";
        }
        ?>

        <form Method="post">
            <input  type="hidden" name="Id" value="<?php echo $ID; ?>">
            <div class=row mb-3>
                <label class="col-sm-3 col-form-label">ID</label>
                <div class="col sm-6">
                    <input type="text" class="form-control" name="ID" value="<?php echo $ID;?>">
                </div>
            </div>
            <div class=row mb-3>
                <label class="col-sm-3 col-form-label">Quantity</label>
                <div class="col sm-6">
                    <input type="text" class="form-control" name="Quantity" value="<?php echo $Quantity;?>">
                </div>
            </div>
            <div class=row mb-3>
                <label class="col-sm-3 col-form-label">Author</label>
                <div class="col sm-6">
                    <input type="text" class="form-control" name="Author" value="<?php echo $Author;?>">
                </div>
            </div>
            <div class=row mb-3>
                <label class="col-sm-3 col-form-label">Title</label>
                <div class="col sm-6">
                    <input type="text" class="form-control" name="Title" value="<?php echo $Title;?>">
                </div>
            </div>
            <div class=row mb-3>
                <label class="col-sm-3 col-form-label">Availability</label>
                <div class="col sm-6">
                    <input type="text" class="form-control" name="Availability" value="<?php echo $Availability;?>">
                </div>
            </div>
            
            <?php
            if (!empty($SuccessMessage)){
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                            <strong>$SuccessMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' ari-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";

            }
            ?>
            <div class="col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="/lms/Books.php" role="button">Cancel</a>
            </div>     
                
        </form>
    </div>
</body>
</html>