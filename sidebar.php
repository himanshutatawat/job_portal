<?php
$conn=mysqli_connect("localhost","root","","job_portal");
$query=mysqli_query($conn,"SELECT *  from admin_login where admin_email='{$_SESSION['email']}' and admin_type='1'");
if (mysqli_num_rows($query)>0){

?>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#dashboard.php">
               Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="job_create.php">
              <span data-feather="bar-chart-2"></span>
              Job Create
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_company.php">
              <span data-feather="layers"></span>
              Company
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>
  

<?php
}else{
  ?>
<!-- <h1>Customer_admin</h1> -->


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#dashboard.php">
               Dashboard
            </a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="customers.php">
              <span data-feather="users"></span>
              Customers
            </a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="job_create.php">
              <span data-feather="bar-chart-2"></span>
              Job Create
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul> -->

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <!-- <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a> -->
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a> -->
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a> -->
          </li>
        </ul>
      </div>
    </nav>
<h1>Customer admin </h1>

<?php 
 }
?>