<?php 
include('include/header.php');
include('include/sidebar.php');
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Add Customer</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Customer</h1>

        

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
        <form action="customer_add.php" method="post"style="margin: 3%; padding: 3%;" name="customer_form" id="customer_form">

          <div class="form-group">
            <label for="Customer Email">Enter Email</label>
            <input type="email"  name="email" id="email" class="form-control" placeholder="Enter Customer Email" >
          </div>
          <div class="form-group">
            <label for="Customer Username">Enter Username</label>
            <input type="text" name="Username" id="Username" class="form-control" placeholder="Enter Customer Username" >
          </div>
          <div class="form-group">
            <label for="Customer Password">Enter Password</label>
            <input type="text" name="Password" id="Password" class="form-control" placeholder="Enter Customer Password" >
          </div>
          <div class="form-group">
            <label for="First name">Enter First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter First Name" >
          </div>
          <div class="form-group">
            <label for="Last name" >Enter Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Last Name" >
          </div>
          <div class="form-group">
            <label for="Admin Type">Admin Type</label>
            <select name="admin_type" name="admin_type" class="form-control" id="admin_type">
              <option value="1">Super Admin</option>
              <option value="2">Customer Admin</option>
            </select>
            <br>
            <p>By signing in to your account, you agree to Indeed's Terms of Service and consent to our Cookie Policy and Privacy Policy.</p>
            <div class="form-group">
              <input type="submit" class="btn btn-block btn-success" placeholder="Save" text-center name="submit" id="submit">
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
<script>
  $(document).ready(function(){
    $("#submit").click(function(){
    var email=$("#email").val();
    var Username=$("#Username").val();
    var Password=$("#Password").val();
    var first_name=$("#first_name").val();
    var last_name=$("#last_name").val();
    var admin_type=$("#admin_type").val();
    alert(Username);
    var Data=("#customer_form");.serialize();

      $.ajax({
            type:"POST",
            url:"customer_add.php",
            data:data,
            success:function(data){
              $("#msg").html(data);

            };
      });
    });



  
</script>
<!-- <script >
  $(document).ready(function(){
   $("#submit").click(function(){
    var email=$("#email").val();
    var Username=$("#Username").val();
    var Password=$("#Password").val();
    var first_name=$("#first_name").val();
    var last_name=$("#last_name").val();
    var admin_type=$("#admin_type").val();
    alert(Username);
    var data=$(form).serialize();

      $.ajax({
            type:"POST",
            url:"customer_add.php",
            data:data,
            success:function(data){
              $("#msg").html(data);

            };
      });

   })

  })
</script> -->

  </body>
</html>
