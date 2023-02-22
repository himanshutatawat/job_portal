<?php   
include('connection/db.php');


 $delete=$_GET['del'];


$query=mysqli_query ($conn,"DELETE FROM `company` WHERE `company`.`id`=$delete");
if ($query) {
	echo "<script>alert('Record has been successfully Deleted!!!!')</script>";
	header('location:customers.php');
}else{
	echo "<script>alert('Record has been successfully Deleted!!!!')</script>";

}
