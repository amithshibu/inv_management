
$(document).ready(function()
{
  $("#btn").on("click",function(e)
  {
    var sl1=$("#slct1").val();
    var sl2=$("#slct2").val();
    console.log(sl1);
    console.log(sl2);
  console.log("submit key pressed");
  var element=document.getElementById('table');
  console.log(element);
  element.classList.remove('hide');

    $.ajax({
           
        url:"show.php",
        type:"POST",
        data:{select1:sl1,select2:sl2},
        success:function(data)
        {
           $("#my-data").html(data)
        }

    })
  })

})