$(function(){
    $(document)
    .on('submit','#loginForm',function(e){
        e.preventDefault();
        var form = document.getElementById('loginForm');
        var formData = new FormData(form);
        
        $.ajax({
            url:"controllers/users.php",
            method: 'post',
            data: formData,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            success: function(res){
                if(res.success){
                    $('#invalidWarning').addClass('d-none');
                    window.location.href="taskwork/";

                }else{
                    $('#invalidWarning').removeClass('d-none');
                }
                    
            }
        })
    })



})