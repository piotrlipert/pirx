 $(function(){
      $('form').submit(function(e){
        var thisForm = $(this);
        alert("JAZDA");

        if(thisForm.attr('name') != 'orderform')
          return;
       
        


        e.preventDefault();

        var name = $('#name').value;

        alert(name);
        if (name==null || name=="")
        {
        alert("First name must be filled out");
        return false;
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


