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
		<link href="../styles/normalize.css" rel="stylesheet">
    <link href="../styles/foundation.css" rel="stylesheet">
    <link href="../styles/style.css" rel="stylesheet">
    <link href="../styles/lightbox.css" rel="stylesheet">
    
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.stellar.js"></script>
    <script type="text/javascript" src="../js/retina.js"></script>
    <script type="text/javascript" src="../js/lightbox-2.6.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    
		<!-- FAVICON -->
    <link rel="shortcut icon" href="../images/favicon.ico">

    <!-- JS FUNCTIONS -->   
    
    <script type="text/javascript" src="../scripts/orderscript.js"></script>

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
              <li><a href="../about/">about</a></li>
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
            <h2>Order Pirx</h2>
          </div>
        </div>
      </section>

      <section id="about-us">
        <div class="row">
          <div class="large-3 columns">
            <ul class="nav sidebar-nav">
              <li><a href="../">Home<span></span></a></li>
              <li><a href="../about/">About<span></span></a></li>
              <li><a href="../press/">Press Kit<span></span></a></li>
              <li><a href="#" class="active">Order<span></span></a></li>
            </ul>
          </div>
          <div class="large-9 columns contact-us">
<script language="javascript">
function wysylka()
{
  $("#shipping_adress").fadeToggle();

  
  }

function same_adress()
{
     $("#shipping_adress_details").fadeToggle();


}

    </script>
	          <h2>Order your 3D printer:</h2>


           
            <form action="../scripts/order.php" method="POST" name="orderform">
              <fieldset>

<div id ="billing_adress">
<label>Billing Address</label>
<label>Name:</label>
<input type="text" name='name' placeholder="">
<label>Company name:</label>
<input type="text" name='companyname' placeholder="">
<label>City:</label>
<input type="text" name='billingcity' placeholder="">
<label>Street:</label>
<input type="text" name='billingstreet' placeholder="">
<label>Postal code:</label>
<input type="text" name='billingcode' placeholder="">
<label>Email adress:</label>
<input type="text" name='email' placeholder="">
<label>Tax identification number:</label>
<input type="text" name='tax' placeholder="">



<div id="country_list"></div>
<script type="text/javascript">
$(function(){
   $("#country_list").load("../scripts/countries.html");
})
</script>

</div>

<div id ="shipping">

<label>Shipping Method</label>
<label>Personal pickup:</label>
<input type=checkbox onClick="wysylka()" id="personal"> 

</div>

<div id ="shipping_adress">

<label>Shipping Address</label>
<label>Same as billing:</label>

<input type=checkbox onClick="same_adress()" id="same"> 
<div id ="shipping_adress_details">
 
                <label>City:</label>
                <input type="text" name='city'>
                <label>Street:</label>
                <input type="text" name='street'>
                <label>Postal code:</label>
                <input type="text" name='postal_code'>
</div>

</div>

<div id ="payment">

<label>Payment Method</label>
</div>

                
                <label>Additional info:</label>
                <textarea type="text" name='message' placeholder="I'd like to know whether..."></textarea>
                <input type="submit" class="btn btn-small btn-order">
              </fieldset>
            </form>
            <center>
          <div id="loading" style="display: none;"> 
    Sending your order....
    </div>
  <div id="success" style="display: none;">
    Order sent. We will contact you shortly.
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
                  <form action="http://pirx3d.us3.list-manage.com/subscribe/post?u=29dd98989c038680bd9fdbcec&amp;id=46fdd7bcd3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
  
    <button class="btn btn-small btn-order"input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" >send
    </button>
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