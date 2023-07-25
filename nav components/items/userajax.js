$(document).ready(function()
{
 $(document).on("click",".reject",function()
 {
    if(confirm("Do you realy Want to REJECT the record ?"))
    {
    console.log("button clicked");
    var email=$(this).data("email");
    var element=this;
    console.log(email);
    console.log(element);

    $.ajax({
      url: "userajaxb.php",
      type: "POST",
      data:{email: email},
      success: function(data)
      { echo(data);
        if(data==1)
        {
            $(element).closest("tr").fadeOut();
        }
        else{
                 alert("data cant be removed");
        }
      }
    })
}
 })


})