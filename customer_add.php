<?php  
include('connection/db.php');

echo $email=$_POST['email'];
echo $username=$_POST['Username'];
echo $Password=$_POST['Password'];
echo $first_name=$_POST['first_name'];
echo $last_name=$_POST['last_name'];
echo $admin_type=$_POST['admin_type'];


$query=mysqli_query($conn, "insert into admin_login(admin_email,admin_pass,admin_username,first_name,last_name,admin_type)values('$email','$Password','$username','$first_name','$last_name','$admin_type')");
var_dump($query);
if ($query){
	echo "<div class='alert alert-success'>Data has been successfully inserted</div>";
}else{
   echo "<div class='alert alert-success'>Some error Please Try Again</div>";
}
?>








