<?php 
include('include/header.php');
include('include/sidebar.php');
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Add Company</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add Company</h1>

        

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
        <form action="company_add.php" method="post"style="margin: 3%; padding: 3%;" name="Company_form" id="Company_form">

          <div class="form-group">
            <label for="Customer Email">Company Name</label>
            <input type="text"  name="Company" id="Company" class="form-control" placeholder="Enter Company Name" >
          </div>
          <div class="form-group">
            <label for="Customer Username">Description</label>
           <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
          </div>
          
            
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
    
    var Description=$("#Description").val();
    var Company=$("#Company").val();
      if (Description=="") {
          alert("Please Enter Description !!");
          return false;
        }
      if (Company=="") {
          alert("Please Enter Company Name !!");
          return false;
        }
      
    
    var Data=("#Company_form");.serialize();

      $.ajax({
            type:"POST",
            url:"company_add.php",
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
