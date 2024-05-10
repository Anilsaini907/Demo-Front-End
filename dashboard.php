<!DOCTYPE html>
<html>

<?php include "assets/inc/meta.php"; ?> 

<style>
  #filterForm{
    background: #047acf;
  }
  #resetForm{
    background: #047acf;
  }
    /* Custom CSS to change pagination colors */
    .dataTables_paginate .paginate_button.current{
      color: #fff; /* Text color */
      background: #047acf !important; /* Background color */
      border-color: #007bff; /* Border color */
    }
    
  /* table responsive */
@media (max-width: 767.98px) {
  #dataTable {
      overflow-x: auto;
  }
}
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include "assets/inc/nav.php"; ?>
<?php include "assets/inc/sidebar.php"; ?> 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-prepend">
                        <span style="background: #047acf;" class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                </div>
                <input type="text" class="form-control float-right  d-inline"  name=""  id="daterange">
                <div class="ml-2 d-inline">
                  <button id="filterForm" type="button" class="btn btn-block btn-primary d-inline">Filter</button>
                  
                </div>
                <div class="ml-2 d-inline"> 
                  <button id="resetForm" type="button" class="btn btn-block btn-primary d-inline">Reset</button>
                </div>
            </div>
            
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="Totaltechusagebyname">150</h3>

                <p>Total tech usage by name</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="Totaltechusagebydate">53<sup style="font-size: 20px">%</sup></h3>

             <p>Total tech usage by date</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="Totalusers">44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->



        <!-- Main row -->
        <div class="row">
          <section class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="text-muted text-center mb-3">Total Usage for Each Technology</h6>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div id="chartContainer" style="height: 400px;">
                  </div>
              </div>
              <!-- /.card-body -->

                  
            </div>
          </section>
          <section class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h6 class="text-muted text-center mb-3">Daily Technology Usage By Date</h6>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">

              <div id="chartContainer1" style="height: 400px;">
                  </div>
              </div>
              <!-- /.card-body -->

                  
            </div>
          </section>
          <section class="col-lg-12">

            <div class="card">
              <div class="card-header">
              <h6 class="text-muted text-center mb-3">Usage Table with TechNames</h6>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
              <table id="dataTable" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Tech Name</th>
                      <th>Total Usage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Table body will be populated dynamically -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

                  
            </div>
        

          </section>
        </div>
         
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      <!-- modal -->
  <div class="modal fade" id="sign-out">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Want to leave?</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          Press logout to leave
        </div>
        <div class="modal-footer">
          <button type="button" style="background-color:#047acf;" class="btn btn-success" data-dismiss="modal">Stay Here</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="logout()">Logout</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end of modal -->
 
  <?php include "./assets/inc/right-sidebar.php"; ?>
  <?php include "./assets/inc/footer.php"; ?>

</div>
<!-- ./wrapper -->

<script src="./assets/js/pages/dashboard.js"></script>



</body>
</html>
