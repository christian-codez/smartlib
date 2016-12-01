       $("#submit").click(function(){
            var name = $("#name").val();
            var email = $("#email").val();
            var comment = $("#comments").val();
     
            if(name.length < 1 || email.length < 1 || comment.length <1){
                 $("#infoM").text("Please complete the form below first.").delay(3000).fadeOut(800);
            }else{
                 $("#infoM").text("Message was successfully sent.").delay(3000).fadeOut(800);
                
            }
            
        });