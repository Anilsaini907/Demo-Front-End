<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item" style="background: #047acf;">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" >
        <a href="http://localhost/AdminLTE_PHP/dashboard.php" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
         
            <div class="media">
              <img src="/AdminLTE_PHP/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
           
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           
            <div class="media">
              <img src="/AdminLTE_PHP/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
           
            <div class="media">
              <img src="/AdminLTE_PHP/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <li class="nav-item " ><a href="#" class="nav-link" data-toggle="modal"
            data-target="#sign-out"><i class="fas fa-sign-out-alt fa-lg"></i>
                      </a><p id="username" style="color:black;"></p>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- <script src="../js/pages/nav.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
  <!-- <script src="http://localhost/AdminLTE_PHP/assets/js/common.js"></script> -->
 <script>
  //  function decryptData(encryptedData, key) {
  //   const bytes = CryptoJS.AES.decrypt(encryptedData, key);
  //   const decryptedData = bytes.toString(CryptoJS.enc.Utf8);
  //   console.log("decryptedData", decryptedData);
  //   return JSON.parse(decryptedData);
  // }
 //const encryptionKey = 'Cemtics@123';
// const retrievedEncryptedData = sessionStorage.getItem('IS_VALID');
// console.log("nav",retrievedEncryptedData);
// const decryptedData = decryptData(retrievedEncryptedData, 'Cemtics@123');
// console.log("nav",decryptedData); // Output: { username: 'john', role: 'admin' }

let userName = JSON.parse(sessionStorage.getItem("IS_VALID"));
//let userName=decryptedData;
document.getElementById('username').textContent += userName.username; 
function logout(){
    let userName = sessionStorage.getItem("IS_VALID");
    //console.log("logout",userName);
    sessionStorage.clear();
    window.location.href = "http://localhost/AdminLTE_PHP/index.php";
  }
// Set session expiration time to 30 minutes (30 * 60 * 1000 milliseconds)
var sessionExpirationTime = 2* 60 * 1000;
// Start a timer for session expiration
var sessionTimer = setTimeout(logout, sessionExpirationTime);
// Optionally, reset the timer when user interacts with the page (e.g., mouse move or key press)
document.addEventListener("mousemove", resetSessionTimer);
document.addEventListener("keypress", resetSessionTimer);

// Function to reset session timer when user interacts with the page
function resetSessionTimer() {
  clearTimeout(sessionTimer); // Clear existing timer
 // console.log("Session timer new");
  sessionTimer = setTimeout(logout, sessionExpirationTime); // Start a new timer
}
  </script>