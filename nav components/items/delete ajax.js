$(document).ready(function()
{
 $(document).on("click",".delete-btn",function()
 {
    if(confirm("Do you realy Want to Delete the record ?"))
    {
    var id=$(this).data("id");
    var element=this;

    $.ajax({
      url: "ajax delete.php",
      type: "POST",
      data:{id: id},
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
}
 })


})