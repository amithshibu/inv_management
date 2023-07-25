<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgotpassword.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
<div class="card text-center carddiv" style="width: 400px;">
    <div class="card-header h5 heading text-white bg-primary"><h3>Password Reset</h3></div>
    <div class="spacer"></div>
    <div class="card-body px-5">
        <p class="card-text py-2">
            Enter your email address and we'll send you an email with instructions to reset your password.
        </p>
        <div class="spacer"></div>
        <div class="form-outline">
            <input type="email" id="email" class="form-control my-3"  placeholder="enter your email"/>
        </div>
        <div class="spacer"></div>
        <button class="btn btn-primary w-100" id="submit">Reset password</button>
        <div class="d-flex justify-content-between mt-4">
        <div class="spacer"></div>
            <a class="login" href="http://localhost/project/login/login.php">Login</a>
            <div class="spacer"></div>
            <a class="register" href="http://localhost/project/login/reg.php">Register</a>
        </div>
    </div>
</div>
</body>
<script type="module">

  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
  import { getAuth, sendPasswordResetEmail } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDqPi8NKMoG61jlfy6fBXahHwyXO0Mgu0o",
    authDomain: "mini-project-login-6893a.firebaseapp.com",
    databaseURL: "https://mini-project-login-6893a-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "mini-project-login-6893a",
    storageBucket: "mini-project-login-6893a.appspot.com",
    messagingSenderId: "905486507652",
    appId: "1:905486507652:web:7d07363c0c03cca0ed2cd1",
    measurementId: "G-5NGV8V7GFH"
  };
  const app = initializeApp(firebaseConfig);



  

  // Initialize Firebase

  const auth = getAuth(app);
  const element = document.getElementById('submit');
  console.log(element);
  submit.addEventListener("click", () => 
  {
let email = document.getElementById('email').value;
sendPasswordResetEmail(auth, email)
  .then(() => {
   alert("email sent successfully");
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
  });

  })

  </script>
</html>