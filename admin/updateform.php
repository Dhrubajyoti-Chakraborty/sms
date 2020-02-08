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
include('../dbcon.php');

$sid=$_GET['sid'];

$sql="SELECT * FROM `student` WHERE `id`='$sid' ";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);

?>


<form method="post" action="updatedata.php" enctype="multipart/form-data">

<table align="center" border="1">

<tr>
    <td>Roll no</td>
    <td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
</tr>

<tr>
    <td>Full name</td>
    <td><input type="text" name="name" value=<?php echo $data['name']; ?> required></td>
</tr>

<tr>
    <td>City</td>
    <td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
</tr>

<tr>
    <td>Parent's contact no</td>
    <td><input type="text" name="pcon" value=<?php echo $data['pcon']; ?> required></td>
</tr>

<tr>
    <td>Standard</td>
    <td><input type="number" name="standard" value=<?php echo $data['standard']; ?> required></td>
</tr>

<tr>
    <td>Image</td>
    <td><input type="file" name="simg" required></td>
</tr>

<tr>
    <td align="center" colspan="2">
    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
      
      <input type="submit" name="submit" value="Submit" />
      
    </td>
</tr>
</table>

</form>