<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include('config.php');
    $email=$_SESSION['email'];
    $sql="SELECT * FROM `users` where email='$email'";
    $res = $conn->query($sql);
    $row=mysqli_fetch_array($res);
    $imageloc=$row['image'];
    if(is_null($imageloc))
    {
       $imageloc="user_images/user.png";
    }

    if($_SESSION['role'] == 'admin')
    {
      include 'adminnav.php';
    }
    else
    {
      include 'usernav.php';
    }
  
  

  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_info.css">
    <script src="https://kit.fontawesome.com/2aaeb74de6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div id="dispmsg"></div>
<form id="myform">
    <div class="form">
        <div class="image-container">
            <img class="circular--square" src=<?php echo "../$imageloc" ?> />
        </div>
        <div class="input-container cont1 cont1-edit">
            <i class="fa fa-envelope icon"></i>
            <input class="input-field" type="text" placeholder="Email" name="email" value=<?php echo $row['email']; ?> disabled >
          </div>
        
        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" id="username" placeholder="Username" name="username" value="<?php echo $row['username']; ?>" >
          </div>

          <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password"  placeholder="password" name="password" id="password" value="<?php echo $row['password']; ?>" >
            <i class="far fa-eye-slash fa-eye" id="togglePassword" style="margin-left:-25vw; cursor: pointer;"></i>
          </div>

          <div class="input-container">
            <i class="fa-solid fa-user-tie icon"></i>
            <input class="input-field" type="text" id="dsgn" placeholder="Desigantion" name="dsgn" value="<?php echo $row['designation']; ?>" disabled>
          </div>

          <div class="input-container">
            <i class="fa-solid fa-phone icon"></i>
            <input class="input-field" type="number" id = "num" placeholder="phone number" name="number" value=<?php echo $row['phone']; ?> >
          </div>
          
          <div class="row">
            <div class="cols">
                <input type="submit" name="submitbtn" class="submitbtn" value="update">      
          </div>
     </div>
</form>

  <script type="module">
                          // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
        import { getAuth, updatePassword,onAuthStateChanged} from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
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
       
        console.log(auth);
        

        
    
    $(document).ready(function()
    {      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');

      togglePassword.addEventListener('click', function (e) {
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('fa-eye-slash'); })

        $("#myform").on('submit',function(e)
        {
            e.preventDefault();
            var username = $("#username").val();
            var dsgn = $("#dsgn").val();
            var phone = $("#num").val();
            var password = $("#password").val();
            
            $.ajax({
                url:"editb.php",
                type:"post",
                dataType:"html",
                data:{username:username,dsgn:dsgn,phone:phone,password:password},
                success:function(data)
                {
                    $("#dispmsg").html(data);
                    if(data)
                    { const user = auth.currentUser
                        console.log(user)
                      onAuthStateChanged(auth, (user) => {
                      if (user) {
                        const newPassword = password;
                        updatePassword(user, newPassword).then(() => {
                          alert("information updated successfully");
                          }).catch((error) => {
                            alert(error);
                            alert("fire base error");
                          });

                        ;
                      }       
                      else{
                    alert("user not signed in");
                  }
                        });
                    }
                      
                    
                  
                  }

                })
                $(window).on('resize', function() {
    if($(window).width() < 900) {
        $("#nav-container").addClass('close')
    }else{
      $("#nav-container").removeClass('close')
    }
})


              })
            })
    

  </script>
    
</body>
</html>