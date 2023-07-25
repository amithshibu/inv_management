<?php
 session_start();
 if($_SESSION['role']=='admin')
 {include ('./adminnav.php');}
 else
 {
    include ('./usernav.php');
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->

<!-- ajax file-->
<script src="itemdisplay.js"></script>

<link rel="stylesheet" href="itemdisplay.css?v=<?php echo time(); ?>">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.4.js" crossorigin="anonymous"></script>
    <div class="slct1">
    <select id="slct1" name="slct1" onchange="populate(this.id,'slct2')" >
        <option value="">Select an Option</option>
        <option value="category">category</option>
        <option value="location">location</option>
    </select>
    </div>
    <hr/>
    <div class="slct2">
    <select id="slct2" name="slct2" ></select>
    </div>
    <hr/>
    <button value="show" id="btn" onclick="show()">show </button>
    
    <div class="table-container">
    <table class="table table-striped table-dark hide" id="table">
    <thead>
        <tr>
      <th scope="col">id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Serial No</th>
      <th scope="col">Product Code</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Fund</th>
      <th scope="col">Count</th>
      <th scope="col">Price</th>
      <th scope="col">Date of Purchase</th>
      <th scope="col">Warranty Period</th>
      <th scope="col">Seller Details</th>
      <th scope="col">specification</th>
        </tr>
  </thead>
  <tbody id="my-data">
 
  </tbody>
</table>
</div>
<!--JQUERY CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--ajax js -->
<script>
    function populate(s1,s2)
    {
        var s1=document.getElementById(s1);
        var s2=document.getElementById(s2);
        s2.innerHTML="";
        if(s1.value=="category")
        {
            var optionArray=["|select any option","classroom|Classroom","lab|Lab","staffroom|Staffroom"];
        }
        else if(s1.value=="location")
        {
            var optionArray=["|select any option","dsa|DSA LAB","dbms|DBMS LAB","csa|CS-A","csb|CS-B","prjlab|PROJECT LAB","staffroom|Staffroom"];
        }
        for(var option in optionArray)
        { var pair=optionArray[option].split("|");
          var newOption=document.createElement("option");
          newOption.value=pair[0];
          newOption.innerHTML=pair[1];
          s2.options.add(newOption);

        }
    }
</script>
</body>

</html>