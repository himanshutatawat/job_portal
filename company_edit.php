<?php   
include('connection/db.php');
include('include/header.php');



 $id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM `company` WHERE `company`.`id`=$id");


while ($row=mysqli_fetch_array($query)){
	$company_name=$row['company'];
	$des=$row['des'];
}

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Company</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Update Company</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Update Company</h1>

        

        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            <a class="btn btn-primary" href="add_customer.php">+Add Customer</a> -->
          </div>
        </div> -->
      </div>
      <div>
        <div style="width: 50%; margin-left: 25%; background-color:#B2EBF2  ;">
          <div id="msg"></div>
        <form action="" method="post"style="margin: 3%; padding: 3%;" name="customer_form" id="customer_form">

          <div class="form-group">
            <label for="Company Name">Enter Company Name</label>
            <input type="Company"Company  name="Company" id="Company" value="<?php echo $comoany_name; ?>" class="form-control" placeholder="Enter Company Name" >
          </div>
          <div class="form-group">
            <label for="Description">Enter Description</label>
            <textarea name="des" id="des" class="form-control" cols="30" rows="10"><?php echo "des";?> </textarea>
          </div>
          
            <input type="hidden" name="id" value= "<?php echo $_GET['edit'];  ?>">
            <div class="form-group">
              <input type="submit" class="btn btn-block btn-success" placeholder="Update" text-center name="submit" id="submit">
              <br>
              <!-- <p>Go To Top<input type="submit" class="btn navbar-toggler-icon btn-success" placeholder="Go To Top" text-center name="Go to Top" id="Go to Top"></p> -->
            </div>
            </div>
          </div>
        </form>
      </div>

     


      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  </div>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

      <!-- Datatables plugin -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script>$(document).ready(function() {
    $('#example').DataTable();
} );
</script>



  </body>
</html>
<?php   
include('connection/db.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$company=$_POST['Company'];
	$des=$_POST['des'];
	$query1=mysqli_query($conn,"UPDATE Company set company='$company',des='$des' where id='$id'");
if ($query) {
	echo "<script>alert('Record has been updated successfully !!!!')</script>";
}else{
	echo "<script>alert('Some error Please try again !!!!')</script>";
}
}
?>