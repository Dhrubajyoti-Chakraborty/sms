<?php

session_start();
if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
    <h1 align="center">Admin Login</h1>
    <form method="post" action="login.php">
    <table align="center">
        <tr>
           <td>username</td><td><input type="text" name="uname" required> </td>
        </tr>

        <tr>
           <td>Password</td><td><input type="password" name="pass" required> </td>
        </tr>

        
        <tr>
           <td colspan="2" align="center"><input type="submit" name="login" value="Login" required> </td>
        </tr>
    </table>
    </form>
<?php

include('dbcon.php');

if(isset($_POST['login'])){
    $username=$_POST['uname'];
    $password=$_POST['pass'];

    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' ";

 $run=mysqli_query($con,$qry);
 $row=mysqli_num_rows($run);
 if($row<1){
     ?>
     <script>
     alert('username or password not match !!');
     window.open('login.php','_self');
     </script>
     <?php 
 } else {
   $data=mysqli_fetch_assoc($run);
   $id=$data['id'];
   $_SESSION['uid']=$id;
   header('location:admin/admindash.php');
 }
 
}
?>
</body>
</html>    