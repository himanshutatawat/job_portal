<?php   
include('connection/db.php');
include('include/header.php');
include('include/sidebar.php');


 $id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM `admin_login` WHERE `admin_login`.`id`=$id");


while ($row=mysqli_fetch_array($query)){
	$email=$row['admin_email'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$admin_pass=$row['admin_pass'];
	$admin_username=$row['admin_username'];
	$admin_type=$row['admin_type'];
}

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Update Customer</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Update Customer</h1>

        

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            <!-- <a class="btn btn-primary" href="add_customer.php">+Add Customer</a> -->
          </div>
        </div>
      </div>
      <div>
        <div style="width: 50%; margin-left: 25%; background-color:#B2EBF2  ;">
          <div id="msg"></div>
        <form action="" method="post"style="margin: 3%; padding: 3%;" name="customer_form" id="customer_form">

          <div class="form-group">
            <label for="Customer Email">Enter Email</label>
            <input type="email"  name="email" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter Customer Email" >
          </div>
          <div class="form-group">
            <label for="Customer Username">Enter Username</label>
            <input type="text" name="Username" id="Username" value="<?php echo $admin_username; ?>" class="form-control" placeholder="Enter Customer Username" >
          </div>
          <div class="form-group">
            <label for="Customer Password">Enter Password</label>
            <input type="text" name="Password" id="Password" value="<?php echo $admin_pass; ?>" class="form-control" placeholder="Enter Customer Password" >
          </div>
          <div class="form-group">
            <label for="First name">Enter First Name</label>
            <input type="text" name="first_name" id="first_name" value="<?php echo $first_name; ?>" class="form-control" placeholder="Enter First Name" >
          </div>
          <div class="form-group">
            <label for="Last name" >Enter Last Name</label>
            <input type="text" name="last_name" id="last_name" value="<?php echo $last_name; ?>" class="form-control" placeholder="Enter Last Name" >
          </div>
          <div class="form-group">
            <label for="Admin Type">Admin Type</label>
            <select name="admin_type" name="admin_type" value="<?php echo $admin_type; ?>" class="form-control" id="admin_type">
              <option value="1">Super Admin</option>
              <option value="2">Customer Admin</option>
            </select>
            <br>
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
	$email=$_POST['email'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$admin_type=$_POST['admin_type'];
	$query1=mysqli_query($conn,"UPDATE admin_login set admin_email='$email',admin_username='$Username',admin_pass='$Password',first_name='$first_name',last_name='$last_name',admin_type='$admin_type' where id='$id'");
if ($query) {
	echo "<script>alert('Record has been updated successfully !!!!')</script>";
}else{
	echo "<script>alert('Some error Please try again !!!!')</script>";
}
}
?>