$(document).ready(function(){
    $('.regestration_form').validate({
        rules:{
            "reg_login":{
                remote:{
                    type: "post",
                    url: "/include/check_login.php"
                }
            }
        },
        messages:{
            "reg_login":{
                remote: "Логін зайнятий!"
            }
        },
        submitHandler: function(form){
            $(form).ajaxSubmit({
               success: function(data){
                if(data == 'true'){
                    $(".regestration_form").fadeOut(300,function(){
                            $(".return_to_main_page").fadeIn(400);
                            $(".regestration_block_title").fadeOut(300);
                            $("#reg_message").removeClass("reg_message_error").addClass("reg_message_good").fadeIn(400).html("Ви успішно зареєструвалися!");
                        });
                    }
                    else{
                        $("#reg_message").addClass("reg_message_error").fadeIn(400).html(data);
                    }
                } 
            });
        }
    });
});