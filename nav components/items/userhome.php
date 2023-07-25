<?php // checking user logged in or not
 session_start();
 $email=$_SESSION['email'];
 $dsgn=$_SESSION['dsgn'];

 include('./config.php');
 $sql="SELECT * FROM `users` where email='$email' ";
 $res = $conn->query($sql);
 $row = mysqli_fetch_assoc($res);
 $imageloc=$row['image'];
 if(is_null($imageloc))
 {
    $imageloc="user_images/user.png";
 }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dropdown Menu | Korsat X Parmaga</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home Page</title>
<meta charset="utf-8">
   <!--bootstrap CDN-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--css link -->
  <link rel="stylesheet" href="styleuser.css">
  <link rel="stylesheet" href="css/stylecards.css">
</head>

<body>
<nav class="navbar navbar-light" style="background-color:#088395; height: 78px;">
<div class="date-container">
    <span id="currentDateTime" class="ml-auto" style="color:white; text-align: right;"></span>
</div>
</nav>

<script>
  // Function to update the current date and time
  function updateDateTime() {
    var now = new Date();
    var dateTimeElement = document.getElementById('currentDateTime');
    
    // Format the date and time without seconds
    var formattedDateTime = now.toLocaleString([], { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' });
    
    dateTimeElement.innerHTML = formattedDateTime;
  }

  // Update the date and time initially
  updateDateTime();

  // Update the date and time every minute (60000 milliseconds)
  setInterval(updateDateTime, 60000);
</script>
<div class="sidebar" style="background-color:#1f363d" >
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="logo-name">INVENTORY MANAGEMENT</div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="./userhome.php" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="./userhome.php" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>
            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="./user_info.php" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Users</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                   
                    
                    <a href="./user_info.php" class="link">User Details</a>

                </div>
            </li>
            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="./card_category.php" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Categories</span>
                    </a>
                    
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Items</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                
                <?php
                    if($dsgn=="staff")
                    {?>
                      
                        <div class="submenu">
                            <a href="./insert.php" class="link">Add New Item</a>
                        </div>

                        <div class="submenu">
                            <a href="./update.php" class="link">Update and Delete</a>
                        </div>
                        
                        <div class="submenu">
                            <a href="./product_filter.php" class="link">Display</a>
                        </div> 

                    <?php }
                    else
                    {?> 
                      <div class="submenu">
                        <a href="./product_filter.php" class="link">Display</a>
                      </div> 
                      
                   <?php } ?>
            </li>


            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="./purchasereport.php" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Purschase Summary </span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Chart</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    
                        <i class='bx bx-extension'></i>
                        <span class="name">Report</span>
                        <i class='bx bxs-chevron-down'></i>
                    </a>          
                </div>
                <div class="submenu">
                    <a href="./report.php" class="link">Request Items</a>
                    <a href="./my_request.php" class="link">My Requests<span id="req_count"></span></a>               
                </div>
            </li>


        </ul>
    </div>


    <!-- ============= Home Section =============== -->
    <section class="home" style="position: relative;">
   
   <div class="toggle-sidebar" style="position: absolute; bottom: 19px; left: -10px; color: white;">
     <i class="bx bx-menu" style="color: white;"></i>-
     <div class="text" style="color: white;left: 100px; font-size: 18px;">INVENTORY MANAGEMENT</div>
   </div>
 </section>
 


    <!-- IMAGE DROPDOWM START-->
       <div class="img-container" >
       <?php echo '<img src=../'.$imageloc.' '; echo 'class="user-pic" onclick="toggleMenu()">'; ?>
                <div class="sub-menu-wrap dropdown" id="subMenu">
                    <div class="submenu dropdown-item">
                        <div class="user-info">
                        <?php echo '<img src=../'.$imageloc.' ' ; echo'class="user-pic inside-user">
                            <h3>USER</h3>'; ?>
                        </div>
                       
                        <div class="dropdown-item">
                            <a href="./user_info.php" class="sub-menu-link">
                                <img src="images/profile.png">
                                <p>Edit Profile</p>
                                <span>></span>
                            </a>
                        </div>

                        <div class="dropdown-item">
                        <a href="#" class="sub-menu-link">
                            <img src="images/help.png">
                            <p>Help and support</p>
                            <span>></span>
                        </a>
                        </div>
                        <div class="dropdown-item">
                        <a href="http://localhost/project/login/logout.php" class="sub-menu-link">
                            <img src="images/logout.png">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                        </div>
                    </div>
                </div>
        </div> 

        <script>
            let subMenu=document.getElementById("subMenu")
            function toggleMenu()
            {
                subMenu.classList.toggle("open-menu");
            }

        </script>








    <!--IMAGE DROP DOWN ENDS-->
    
    

    <!--CARDS IN HOME PAGE-->
    <div class="cards">

        <div class="child child-1" onclick="user()">
            <div class="card">
                <div class="card-image-user">
                    <img src="images/user1.png">
                </div>
                <div class="card-content">
                    <div class="card-content-1 "><a href="" class="user-link">USERS</a>
                    </div>    
                </div>
                </div>
              
        </div>

        <!--CARD2 -->

        <div class="child child-2" onclick="category()">
            <div class="card">
                <div class="card-image-user">
                    <img src="images/categories1.png" class="img-cat">
                </div>
                <div class="card-content">
                    <div class="card-content-2">
                        <a href="" class="user-link cat-link">CATEGORIES</a>
                    </div>
                </div>
            </div>
        </div>

        <!--CARD3-->

        <div class="child child-3" onclick ="items()">
            <div class="card">
                <div class="card-image-user">
                    <img src="images/trolley.png" class="image-items">
                </div>
                <div class="card-content">
                    <div class="card-content-3">
                        <a href="" class="user-link item-link">ITEMS</a>
                    </div>
                </div>
            </div>
        </div>

            <!--CARD-4-->

        <div class="child child-4" id="card4" onclick="purchase()">
            <div class="card">
                <div class="card-image-user">
                    <img src="images/purchasing.png" class="image-summary" height="75px" width="75px">
                </div>
                <div class="card-content">
                    <div class="card-content-4">
                        <a href="" class="user-link summary-link">PURCHASE SUMMARY</a>
                    </div>
                </div>
            </div>
        </div>

          <!--card 5-->
        <div class="child" onclick="report()">
            <div class="card">
                <div class="card-image-user">
                    <img src="images/report.png" alt="image loading" class="image-last">
                </div>
                    <div class="card-content">
                        <div class="card-content-5">
                            <a href="" class="user-link report-link">Report </a>
                        </div>
                    
                    </div>
            </div>
        </div>
        </div>
     
     
         </div>
    <!-- Link JS -->
    <script src="assets/js/main.js"></script> 
    <script>
        function purchase()
        {
            location.href ="./purchasereport.php";

        }

        function user()
        {
            location.href = "./user_info.php";
        }

        function items()
        {
            location.href= "./itemsdisplay.php"
        }
        function report()
        {
            location.href ="./report.php"
        }

        function category()
        {
            location.href = "./card_category.php"
        }

        
                $(document).ready(function()
        {
            $.ajax({
            url:"my_request_count.php",
            type:"POST",
            success:function(data)
             { if(data>0)
                {
                 $("#req_count").html(data);
                }
                else{
                    $("#req_count").css('display','none')
                }
             }
            })
        })


    



    </script>
</body>

</html>
