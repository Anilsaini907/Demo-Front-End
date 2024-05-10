<!DOCTYPE html>
<html>

<?php include "../assets/inc/meta.php"; ?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include "../assets/inc/nav.php"; ?>
<?php include "../assets/inc/sidebar.php"; ?> 
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Test</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="input-group">
                <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                </div>
                <input type="text" class="form-control float-right  d-inline" id="reservation">
                <div class="ml-2 d-inline">
                  <button type="button" class="btn btn-block btn-secondary d-inline">Filter</button>
                  
                </div>
                <div class="ml-2 d-inline"> 
                  <button type="button" class="btn btn-block btn-secondary d-inline">Reset</button>
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
        



        <!-- Main row -->
        <div class="row">
          <section class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Chart 1</h3>
              </div>
              <!-- /.card-header -->
          
              <div class="card-body">
                    
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
    
  <?php include "../assets/inc/right-sidebar.php"; ?>
  <?php include "../assets/inc/footer.php"; ?>

</div>
<!-- ./wrapper -->


</body>
</html>
