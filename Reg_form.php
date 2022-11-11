<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <title>Document</title>
</head>
<body>

<center>

<h2>Sign Up</h2>
<p>Please fill this form to create an account.</p>
<div style="background-color: grey; widht: 500px;">
  
  
   <div>
      <br><br>
       <label>ID no.</label>
       <input type="Int" name="id_n" required>
   </div>
   <br>
   
   <div>
       <label>First Name</label>
       <input type="text" name="Fname" required>
   </div>
   <br>
   
   <div>
       <label>Midle Name</label>
       <input type="text" name="Mname" required>
   </div><br>
   
   <div>
       <label>Last Name</label>
       <input type="text" name="Lname" required>
   </div> 
   <br>
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
   
</div>

</center> 
  
</body>
</html>
