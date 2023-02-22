<?php 
include('include/header.php');
include('include/sidebar.php');
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Company</a></li>
  </ol>
</nav>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Company</h1>

        

        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            <a class="btn btn-primary" href="add_company.php">+Add Company</a>
          </div>
        </div>
      </div>

      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Serial No.</th>
                
                <th>Company Name</th>
                <th>Job Description</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <?php
include('connection/db.php');


$query=mysqli_query($conn,"select* from company");
while($row=mysqli_fetch_array($query)){


  ?>

        <tbody>
            
            </tr>
            <tr>
                <td><?php echo $row['company_id']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['des']; ?></td>
                
                <td>
                  <div class="row">
                    <div class="btn-group">
                      <a href="company_edit.php?edit=<?php echo $row['company_id'];  ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                      <a href="company_delete.php?del=<?php echo $row['company_id'];  ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                    </div>
                  </div>
                </td>
                
                
            </tr>
          <?php }  ?>
        </tbody>
        <?php
        include('connection/db.php');
        $query=mysqli_query($conn,"select * from admin_login")
        ?>

        <tfoot>
            <tr>
                <th>Serial No.</th>
                
                <th>Company Name</th>
                <th>Job Description</th>
                <th>Action</th>
                
            </tr>
        </tfoot>

    </table>


      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

    </main>
  </div>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

      <!-- Datatables plugin -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" >$(document).ready(function() {
    $('#example').DataTable();
} );</script>
  </body>
</html>
