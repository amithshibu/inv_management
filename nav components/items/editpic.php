<div class="editpic-form">
<form enctype="multipart/form-data" id="form">
    <div class="image"></div>
    <div class="button-block">
        <div class="file-btn">
            <input type="file" name="file" id="file">
        </div>

        <div class="submit-btn">
            <input type="submit" name="submit" id="submit" class="editpicbtn" value="change">
        </div>
    </div>
</form>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#form").on('submit',function(e)
        {
            e.preventDefault();
            if(!$("#file").val())
            {
                alert("please choose a file")
            }
            var formData = new FormData(this);
            const values = [...formData.entries()];
            console.log(values);

            $.ajax({
                url:"editpicb.php",
                type:"POST",
                data:formData,
                processData: false,
                cache:false,
                contentType:false,
                success:function(data)
                {
                    
                    location.reload();
                    
                    
                }
            })
        
            

        });

        $("#file").change(function()
        {
            
            var file = this.files[0]
            var filetype = file.type;
            var match = ['image/jpeg','image/jpg','image/png'];

            if(!((filetype == match[0]) || (filetype == match[1]) || (filetype == match[2]) ))
            {
                alert("please select a image file of format jpeg ,jpg,png");
                $("#file").val('');
                return false;
            }
        });
    });


</script>