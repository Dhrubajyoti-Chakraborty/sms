

<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body style="background-color:orange;">
<h5 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h5>

<h1 align="center">Welcome to Student Management System</h1>



<form method="post" action="index.php">
<table style="width:30%;" align="center" border="1" >

    <tr>
        <td colspan="2" align="center">Student Information</td>
        </tr>
        <tr>
        <td>Choose standard</td>
        <td>
            <select name="standard" required style="width:50%;">
               <option value="1">1st</option>
               <option value="2">2nd</option>
               <option value="3">3rd</option>
               <option value="4">4th</option>
               <option value="5">5th</option>
               <option value="6">6th</option>
             </select>  
               
        </td>
    </tr>

   


    <tr>
        <td>Enter Rollno</td>
        <td><input type="text" name="rollno" required style="width:50%"></td>
    </tr>
   
    <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="show info" style="background-color:#c33541;"></td>
    </tr>

</table>
</form>
</body>
</html>
<?php

if(isset($_POST['submit'])){
    $standard=$_POST['standard'];
    $rollno=$_POST['rollno'];

    include('dbcon.php');
    include('function.php');

    showdetails($standard,$rollno);
}



?>




