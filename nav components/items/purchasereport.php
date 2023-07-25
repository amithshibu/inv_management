<!DOCTYPE html>
<html>
<head>
  <title>Table with Search Bar</title>
  <link rel="stylesheet" type="text/css" href="purchasereport.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
   *{
    *{
      font-family: "Roboto";
    }
   }
  </style>
  <?php
  session_start();
  if($_SESSION['role']=='admin')
  {include ('./adminnav.php');}
  else
  {
     include ('./usernav.php');
  }
?>
</head>
<body id="body">
  <div class="container-fluid">
  <header class = "header">
    <div class="row row0"> 
      <div class="col-md-4 heading"><h1 id="report">Purchase Report</h1></div>
      <div class="col-md-2 print_btn"><button style="font-size:18px" id="print_btn">print <i class="fa fa-print"></i></button></div>
    </div>
</header>
  <div class="container">
    <form>
    <div class="form-container row">
      <span class="dates">
        <div class="col-md-3 start_date">
          <label for="date" id="startdate_label" >From:</label>
          <input type="date" name="date" id="start_date">
        </div>
        <div class="col-md-3 end_date">
          <label for="date" id="enddate_label" >To:</label>
          <input type="date" name="date" id="end_date">
        </div>
        </span>
        <div class="col-md-1 submit_btn"><input type="button" value="submit" id="submit"> </div> 
      
    </div>
</form>

    <div class="table-box table-responsive" id="table1" >
    <table class="tb  table-hover" style = "padding:10px;border:1px solid black,border-collapse: collapse;;">
        <h3>Payment summary</h3>
        <thead>
          <tr>
            <th style = "padding:10px;border:1px solid black;">Category</th>
            <th style = "padding:10px;border:1px solid black;">Amount</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td style = "padding:10px;border:1px solid black;">Staffroom</td>
            <td id="Staffroom" style = "padding:10px;border:1px solid black;"> </td>
          </tr>

          <tr>
            <td style = "padding:10px;border:1px solid black;">Classroom</td>
            <td id="classroom" style = "padding:10px;border:1px solid black;"> </td>
          </tr>

          <tr>
            <td style = "padding:10px;border:1px solid black;">Lab</td>
            <td id="lab" style = "padding:10px;border:1px solid black;"> </td>
          </tr>

          <tr>
            <td style = "padding:10px;border:1px solid black;">Others</td>
            <td id="others" style = "padding:10px;border:1px solid black;"> </td>
          </tr>

          <tr>
            <td style = "padding:10px;border:1px solid black;" >Total Amount         </td>
            <td id="total" style = "padding:10px;border:1px solid black;"></td>
          </tr>

        </tbody>
      </table>
    </div>

  <div class="table-box2 table-responsive" id="table2">
    <table class="tb  table-hover" style = "padding:10px;border:1px solid black;" >
        <h3>Purchase summary</h3>
        <thead>
          <tr style = "padding:10px;border:1px solid black;" >
            <th scope="col" style = "padding:10px;border:1px solid black;" >Date</th>
            <th scope="col" style = "padding:10px;border:1px solid black;" >Name</th>
            <th scope="col" style = "padding:10px;border:1px solid black;" >Serial.no</th>
            <th scope="col" style = "padding:10px;border:1px solid black;" >Count</th>
            <th scope="col" style = "padding:10px;border:1px solid black;" >Price</th>

          </tr>
        </thead >
        <tbody id="table-body">
          
        </tbody>
      </table>
    </div>
    </div>
  </body>
  <script >
    $(document).ready(function()
    {
      $("#submit").click(function(e)
      { e.preventDefault();
        var start_date = $("#start_date").val();
        var end_date = $("#end_date").val();

        console.log(start_date);
        console.log(end_date);
        
        if(start_date != '' && end_date != '')
        {
            $.ajax({
              url:"dateselect.php",
              method:"POST",
              data:{start_date:start_date,end_date:end_date},
              success:function(data)
              {
                  console.log(data)
                  let myarray = data.split("$");
                  $("#table-body").html(myarray[0]);
                  console.log(myarray[0])
                  console.log(myarray[1])
                  console.log(myarray[2])
                  console.log(myarray[3])
                  console.log(myarray[4])
                  $("#total").html(myarray[1]+" /-")
                  $("#classroom").html(myarray[2] + "/-")
                  $("#lab").html(myarray[3] + "/-")
                  $("#others").html(myarray[4]+ "/-")
                  $("#staffroom").html(myarray[5] + "/-")
              }
            })
        }
        else if(start_date == ''&& end_date =='')
        {
          alert("select the dates")
        }
        else if(start_date==''&& end_date!='')
        {
          alert("select start date");
        }
        else if(start_date!='' && end_date =='')
        {
          alert("select end date")
        }

      })

      $("#print_btn").click(function(e)
      {var pr1= $("#table1").html();
        var pr2= $("#table2").html();
        var pr3 = $("#start_date").val();
        var pr4 =$("#end_date").val();
        console.log(pr3)
        var WinPrint = window.open('./print.html', '', 'margin-left:20vw,padding:10px');
        WinPrint.document.write("<h style='font-size:35px,margin-left:100px;'> <b>Purchase Report</b> </h>");
        WinPrint.document.write("<p> Start Date: </p>"+pr3);
        WinPrint.document.write("<p> End Date: </p>"+pr4);
        WinPrint.document.write(pr1);
        WinPrint.document.write(pr2);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
      })
      
    })
    $(window).on('resize', function() {
    if($(window).width() < 900) {
        $("#nav-container").addClass('close')
    }else{
      $("#nav-container").removeClass('close')
    }
})
    
  </script>
  </html>