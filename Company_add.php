<?php  
include('connection/db.php');

echo $Company=$_POST['Company'];
echo $Description=$_POST['Description'];


$query=mysqli_query($conn, "insert into company(company,des)values('$Company','$Description')");
// var_dump($query);
if ($query){
	echo "Data has been successfully Inserted";
}else{
   echo "Some error Please Try Again.";
}
?>