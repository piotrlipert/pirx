 $(function(){
      $('form').submit(function(e){
        var thisForm = $(this);
        
        if(thisForm.attr('name') != 'orderform')
          return;
       
        
      $.fn.goTo = function() {
        $('html, body').animate({
            scrollTop: $(this).offset().top + 'px'
        }, 'fast');
        return this; // for chaining...
        }

        e.preventDefault();
        var filled = true;
        var email_proper = true;
        
        var required_inputs = new Array();
        required_inputs[0] = "name";
        required_inputs[1] = "email";
        required_inputs[2] = "billingcity";
        required_inputs[3] = "billingstreet";
        required_inputs[4] = "billingcode";
        required_inputs[5] = "country";


        alert(required_inputs.lenght);
        for(var i=0;i<required_inputs.lenght;i++)
        {

        var check = $('#'+required_inputs[i],'#orderform').val();
        alert(check);
        if (check==null || check==""){
          filled = false;}
        }

        

        if(filled == false)
        {
          $('#error').fadeIn();
          $('#error').goTo();
          return;
        }

        var check = $('#email','#orderform').val();

        var atpos=check.indexOf("@");
        var dotpos=check.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=check.length)
        {
          email_proper = false;
        }



        if(email_proper == false)
        {
          $('#error_email').fadeIn();
          $('#error_email').goTo();
          return;
        }
        

        //Hide the form
        $(this).fadeOut(function(){
          //Display the "loading" message
          $("#loading").fadeIn(function(){
            //Post the form to the send script
            $.ajax({
              type: 'POST',
              url: thisForm.attr("action"),
              data: thisForm.serialize(),
              //Wait for a successful response
              success: function(data){
                //Hide the "loading" message
                $("#loading").fadeOut(function(){
                  //Display the "success" message
                  $("#success").text(data).fadeIn();
                  
                });
              }
            });
          });
        });
      })
    });


