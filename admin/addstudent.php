<?php

session_start();

   if(isset($_SESSION['uid'])){
       echo "";
   } else {
       header('location: ../login.php');
   }

?>

<?php

include('header.php');
include('titlehead.php');

?>



<form method="post" action="addstudent.php" enctype="multipart/form-data">

<table align="center" border="1">

<tr>
    <td>Roll no</td>
    <td><input type="text" name="rollno" placeholder="Enter roll no" required></td>
</tr>

<tr>
    <td>Full name</td>
    <td><input type="text" name="name" placeholder="Enter Full name" required></td>
</tr>

<tr>
    <td>City</td>
    <td><input type="text" name="city" placeholder="Enter City" required></td>
</tr>

<tr>
    <td>Parent's contact no</td>
    <td><input type="text" name="pcon" placeholder="Enter Parent's contact no" required></td>
</tr>

<tr>
    <td>Standard</td>
    <td><input type="number" name="standard" placeholder="Enter Standard" required></td>
</tr>

<tr>
    <td>Image</td>
    <td><input type="file" name="simg" required></td>
</tr>

<tr>
        <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" required></td>
</tr>
</table>

</form>
</body>
</html>

<?php

include('dbcon.php');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$standard=$_POST['standard'];
$imagename = $_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];

move_uploaded_file($tempname,"../dataimg/$imagename");

$qry="INSERT INTO `student`(`rollno`,`name`,`city`,`pcon`,`standard`,`image`) VALUES('$rollno','$name','$city','$pcon','$standard','$imagename');";
$run=mysqli_query($con,$qry);

if($run==true){
    ?>
    <script>
        alert('data inserted successfully');
    </script>
<?php
}

?>
