<?php
 include('connect.php');
 $query="select * from `users` where status='pending'";
 $result=mysqli_query($conn,$query);


    if(isset($_POST['approve']))
    {
       
        $id=$_POST['id'];
        $query="update `users` set status='approved' where email='$id' ";
        $results=mysqli_query($conn,$query);
        header("home screen/adminhome.php");
        

    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="pendingstyle.css?v=<?php echo time(); ?>">
<script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
<script  src="pendingajax.js"></script>

</head>

<body>
<div class="heading">
    <h> Pending User requests </h>
</div>
<div class="back">
    <button onclick="back()">Go Back </button>
</div>
<div class="table-container">
<table id="users">
    <tr>
        <th> email address </th>
        <th> designation </th>
        <th> role </th>
        <th> Actions </th>

    </tr>
    
     <?php
      if(!mysqli_num_rows($result))
      {?> <td> No Pending Requests </td>
      <?php }
      else
    {
     // LOOP TILL END OF DATA
     while($row=$result->fetch_assoc())
     { $email=$row['email'];
 ?>
    <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                
                <td id="email"><?php echo $row['email'];?></td>
                <input id="password" type="hidden" value=<?php echo $row['password'];?> disabled />
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['role'];?></td>
                <td> <form method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['email'];?>"/>
                    <input type="submit" name="approve" id="approve" value="accept">
                    <button name="reject" id="reject" class="reject" data-email='<?php echo "$email"; ?>' >REJECT</button></td>
            </tr>
            <?php
                }
            }
            ?>
</table>

</div>
</body>
<script>
function back()
  {
    
    window.location.replace('http://localhost/project/login/home%20screen/adminhome.php');

  }

</script>

<script type="module">

  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-app.js";
  import { getDatabase } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-database.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-analytics.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.22.0/firebase-auth.js";
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
 
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  const database = getDatabase(app);
  const auth = getAuth(app);
  const element= document.getElementById('approve');
  console.log(element);
  element.addEventListener('click',(e) =>{
    var email = document.getElementById('email').innerText;
    var password = document.getElementById('password').value;
    console.log("button clicked");
    console.log(email);
    console.log(password);
    createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    console.log("success");
    alert('user created');
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
    // ..
  });
  })
  
</script>
</html>