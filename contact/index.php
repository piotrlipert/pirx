<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pirx 3d Printer - About us</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>  

    <!-- META DATA -->
    <meta charset="utf-8">
    
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="description" content="Pirx 3d Printer">
    <meta name="keywords" content="pirx, 3d, printer, 3d printer, 3d print, community, pirx3d, hardware">  

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!-- STYLESHEETS -->
		<link href="styles/normalize.css" rel="stylesheet">
    <link href="styles/foundation.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <link href="styles/lightbox.css" rel="stylesheet">
    
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.stellar.js"></script>
    <script type="text/javascript" src="js/retina.js"></script>
    <script type="text/javascript" src="js/lightbox-2.6.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

		<!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- JS FUNCTIONS -->   
    

  </head>
  <body>
  	<div id="wrapper">
      <header id="header">
        <div class="row">
          <div class="large-3 small-12 columns">
            <div class="logo">
            </div>
          </div>
          <div class="large-9 small-12 columns">
            <ul class="nav right">
              <li><a href="/">home</a></li>
              <li><a href="about.html">about</a></li>
              <li><a href="https://facebook.com/clockwork3d">blog</a></li>
              <li><a id="contact-us">contact</a></li>
              <li><a href="" class="btn btn-small btn-order">buy now</a></li>
            </ul>
          </div>
        </div>
      </header>

      <section id="caption">
        <div class="row caption">
          <div class="large12 columns">
            <h2>Contact us</h2>
          </div>
        </div>
      </section>

      <section id="about-us">
        <div class="row">
          <div class="large-3 columns">
            <ul class="nav sidebar-nav">
              <li><a href="../">Home<span></span></a></li>
              <li><a href="about.html">About<span></span></a></li>
              <li><a href="press.html">Press Kit<span></span></a></li>
              <li><a href="#" class="active">Contact<span></span></a></li>
            </ul>
          </div>
          <div class="large-9 columns contact-us">

<script>
    $(function(){
      $('form').submit(function(e){
        var thisForm = $(this);
        //Prevent the default form action
        e.preventDefault();
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
  </script>

	          <h2>Drop us a message</h2>


           
            <form action="scripts/sm.php" method="POST">
              <fieldset>
                <label>Name:</label>
                <input type="text" name='name' placeholder="John Doe">
                <label>Email:</label>
                <input type="text" name='email' placeholder="johndoe@example.com">
                <label>Message:</label>
                <textarea type="text" name='message' placeholder="I'd like to know whether..."></textarea>
                <input type="submit" class="btn btn-small btn-order">
              </fieldset>
            </form>
            <center>
          <div id="loading" style="display: none;"> 
    Sending your message....
    </div>
  <div id="success" style="display: none;">
    Message sent.
  </div>
</center>


          </div>



        </div>
      </section>

      <footer id="footer">
        <div class="row">
          <div class="large-3 columns">
            <h3>Pirx</h3>
            <ul>
              <li><a href="about.html">Meet the team</a></li>
              <li><a href="contact.html">Support</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <h3>Media</h3>
            <ul>
              <li><a href="https://www.facebook.com/clockwork3d">Blog</a></li>
              <li><a href="press.html">Press kit</a></li>
              <!-- <li>Privacy policy</li>
              <li>Terms & Conditions</li> -->
            </ul>
          </div>
          <div class="large-3 columns">
            <h3>Newsletter</h3>
            <p>Subscribe to the newsletter to be up to date with our stuff.</p>
            <input type="text" placeholder="enter your email...">
            <button class="btn btn-small btn-order">send</button>
          </div>
          <div class="large-3 columns address">
            <h3>Contact</h3>
            <address>
              Pirx<br>  
              Berka Joselewicza 21<br>
              31-031 Kraków<br>
              Małopolska, Poland
            </address>
          </div>
        </div>
        <div class="row">
          <div class="large-6 large-centered columns social">
            <ul class="social-icons">
              <li><a class="fb"></a></li>
              <li><a class="tw"></a></li>
              <li><a class="gp"></a></li>
              <li><a class="yt"></a></li>
              <li><a class="vi"></a></li>
            </ul>
          </div>
        </div>
      </footer>

      <footer id="copyright">
        <div class="row">
          <div class="large-6 columns"><p>© 2013 Pirx</p></div>
          <div class="large-6 columns"><p class="right">Handcrafted in Kraków</p></div>
        </div>
      </footer>
    </div>
  </body>
</html>