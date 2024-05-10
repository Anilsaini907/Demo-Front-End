
// console.log("common.js")
var apiUrl = "http://localhost/demo/rest_api";
const encryptionKey = 'Cemtics@123'; // Replace with your secret key
// Function to encrypt data
  function encryptData(data, key) {
    return CryptoJS.AES.encrypt(JSON.stringify(data), key).toString();
  }
  
  // Function to decrypt data
  function decryptData(encryptedData, key) {
    const bytes = CryptoJS.AES.decrypt(encryptedData, key);
    const decryptedData = bytes.toString(CryptoJS.enc.Utf8);
   // console.log("decryptedData", decryptedData);
    return JSON.parse(decryptedData);
  }