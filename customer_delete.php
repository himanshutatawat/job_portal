<?php   
include('connection/db.php');

include('include/sidebar.php');
 $delete=$_GET['del'];


$query=mysqli_query ($conn,"DELETE FROM `admin_login` WHERE `admin_login`.`id`=$delete");
if ($query) {
	echo "<script>alert('Record has been successfully Deleted!!!!')</script>";
	header('location:customers.php');
}else{
	echo "<script>alert('Record has been successfully Deleted!!!!')</script>";

}

