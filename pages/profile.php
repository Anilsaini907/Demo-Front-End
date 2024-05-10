<!DOCTYPE html>
<html>

<?php include "../assets/inc/meta.php"; ?> 
<style>
    .error-msg {
    width: 100%;
    font-family: 'nobelregular';
    color: #ff0002;
    text-align: center;
    display: none;
}
  </style>
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
  <div class="">

<!-- Main content -->
<section class="content">
<div class="container-fluid">
        <div class="row mb-5 pt-md-5 mt-md-5">
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                <div class="card card-common">
                    <div class="card-header">
                    <h6 class="text-muted text-center mb-3">User Profile</h6>
                    </div>
          <div class="row align-items-center card-body">
          <div class="error-msg"></div>
                <div class="col-xl-12 col-md-8">
                <form style="width: 50%;margin:0 auto;" id="profileForm">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter name" disabled>
                </div>
                <div class="form-group">
                  <label for="oldPassword">Old Password</label>
                  <input type="password" class="form-control" id="oldPassword" placeholder="Old Password">
                  <input type="hidden" class="form-control" id="oldpasswordhidden" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                  <label for="newPassword">New Password</label>
                  <input type="password" class="form-control" id="newPassword" placeholder="New Password">
                </div>
            
                <div class="form-group">
                  <label for="roleName">Role Name</label>
                  <select class="form-control" id="roleName" disabled>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    <!-- Add more options as needed -->
                  </select>
                </div>
                <button style="background-color:#047acf;" type="submit" class="btn btn-success btn-lg">Update</button>
              </form>
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
<script src="../assets/js/pages/profile.js"></script>

</body>
</html>
