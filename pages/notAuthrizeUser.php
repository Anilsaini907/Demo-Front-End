<!DOCTYPE html>
<html>

<?php include "../assets/inc/meta.php"; ?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include "../assets/inc/nav.php"; ?>
<?php include "../assets/inc/sidebar.php"; ?> 
 
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
  <!-- Content Wrapper. Contains page content -->
  <div class="">

    <!-- Main content -->
    <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto mt-auto">
          <div class="row pt-md-5 mt-md-5">
            <div class="col-xl-12 col-sm-6 p-2">
              <div class="card card-common" >
                <div class="card-body">
                <h5 class="card-title">Unauthorized Access</h5>
    <p class="card-text">You are not authorized to view this page.</p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
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
