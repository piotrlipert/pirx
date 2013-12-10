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
        var name = $('#name','#orderform').val());
        alert(name);

        if (name==null || name==""){
          filled = false;}
        

        if(filled == false)
        {
          $('#error').fadeIn();
          $('#error').goTo();
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


