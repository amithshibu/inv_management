<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Login</title>
</head>

<body>



    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #181818;">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>


            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>INVENTORY MANAGEMENT-SOE</h2>
                        <p>LOGIN FORM</FORM>
                        </p>
                    </div>
                    <form action="javascript:void(0)" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email" id="email">
                    </div>

                    <div class="input-group mb-1">
                        
                        <input class="input-field form-control form-control-lg bg-light fs-6" type="password"  placeholder="password" name="password" id="password">
                        <i class="far fa-eye fa-eye-slash" id="togglePassword"></i>
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="forgot">
                            <small><a href="passwordreset.php">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" id ="submit" name="submit" value="Login" class="btn btn-lg btn-primary w-100 fs-6">
                    </div>
             </form>
                     <div class="row">
                        <small>Don't have account? <a href="reg.php">Sign Up</a></small>
                    </div>
                </div>
            </div>

        </div>
 </div>
</body>
    <script type="module">
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');

      togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash'); })

        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword,onAuthStateChanged} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
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
        submit.addEventListener("click", () => 
        {
      let email = document.getElementById('email').value;
      let password = document.getElementById('password').value
      console.log(email);
      console.log(password);
      signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
         const user = userCredential.user;
          console.log(user);
          sessionStorage.setItem("status","yes");
          sessionStorage.setItem("email",email);
          onAuthStateChanged(auth, (user) => {
        if (user)
         {
    
            const uid = user.uid;
            
            } 
    else {
    alert("user not signed in")
        }
        });
          
          $.ajax({
      url: "loginb.php",
      type: "POST",
      data:{email: email},
      success: function(data)
      { 
        if(data==1)
        {
            window.location.replace('./nav components/items/adminhome.php');
        }
        if(data==0)
        {   
            window.location.replace('./nav components/items/userhome.php');
        }
      }
    })

        })
        .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          alert(errorMessage);
        });
      
        })
      
        </script>


        

</html>
