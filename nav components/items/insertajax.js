

$(document).ready(function()
{
  $("#form").on("submit",function(e)
  {
    e.preventDefault();
    var pname=$("#productname").val();
    var formData = new FormData(this);

    
    if(pname!="")
    {
    $.ajax({
        url:"insertb.php",
        type:"POST",
        data:formData,
       contentType:false,
        processData:false,
        success:function(data)
        {
          
          $('#msg').html("<h>data insert successfully</h>").fadeIn('slow') //also show a success message 
          $("#msg").css("background-color", "#cbf7d6");
          $("#msg").css("border", "1px solid green");
          $('#msg').delay(2000).fadeOut('slow');
           
        }

    })
  }

  })

})