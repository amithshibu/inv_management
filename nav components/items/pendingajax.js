$(document).ready(function()
{
 $('.reject').click(function(e)
 {
    e.preventDefault()
    console.log("button clicked");
    var email=$(this).data("email");
    var element=this;

    $.ajax({
      url: "ajax_pending.php",
      type: "POST",
      data:{email: email},
      success: function(data)
      { 
        if(data==1)
        {
            $(element).closest("tr").fadeOut();
        }
        else{
                 alert("data cant be removed");
        }
      }
    })

 })


})