$(document).ready(function()
{

    $("#search").on("keyup",function()
    {
        var search_term=$(this).val();
        console.log(search_term);
        $.ajax({
            url:"live search.php",
            type:"POST",
            data:{search:search_term},
            success: function(data)
            {
                
                $("#table").html(data);
                
             
                
            }
        })

    })

})
