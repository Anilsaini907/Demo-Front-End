


function login() {
  event.preventDefault();
  $('.error-message').text('');
   
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    //console.log("Login",username,password);
    // Basic validation
    if (username.trim() === "") {
      $('#usernameError').text('Please enter a username');
      // alert('Please enter a username');
      return ;
    }

    if (password.trim() === "") {
      $('#passwordError').text('Please enter a password');
      // alert('Please enter a password');
      return ;
    }
    // console.log("Login", username, password);
    var dataJson = JSON.stringify({
      "p_username": username,
      "p_password": password
    });
     
      $.ajax({
        type: 'POST',
        url: `${apiUrl}/login.php`,
        data: dataJson,
        success: function(response) {
         // console.log(response);
          if (response.data[0]['NULL'] === null) {
            document.getElementById('loginFailureMessage').style.display = 'block';
            setTimeout(function() {
              document.getElementById('loginFailureMessage').style.display = 'none';
              window.location.href = "http://localhost/AdminLTE_PHP/index.php";
            }, 3000);
          }
          else if(response.data[0]) {
         sessionStorage.setItem("IS_VALID", JSON.stringify(response.data[0]));
            // Encrypt and store data in sessionStorage
            // const encryptedData = encryptData(response.data[0], encryptionKey);
            // sessionStorage.setItem('IS_VALID', encryptedData);
            document.getElementById('loginSuccessMessage').style.display = 'block';
            setTimeout(function() {
              window.location.href = "http://localhost/AdminLTE_PHP/dashboard.php";
              document.getElementById('loginSuccessMessage').style.display = 'none';
            }, 3000);

          }
          

        }
      });
    


  }
 function handleChangeusername(input){
  var inputValue = input.value;
 // console.log(inputValue);
  if(inputValue){
    document.getElementById('divusernameError').style.display = 'none';
  }
 }
 function handleChangePasswrd(input){
  var inputValue = input.value;
  //console.log(inputValue);
  if(inputValue){
    document.getElementById('divPasswordError').style.display = 'none';
  }
 }
 function checkAuthrization() {
  let userName = JSON.parse(sessionStorage.getItem("IS_VALID"));
  
if (userName !== null && userName.role_name !==null) {
  window.location.href = "http://localhost/AdminLTE_PHP/dashboard.php";
    }  
   
}
 $(document).ready(function() {      
  checkAuthrization(); });


