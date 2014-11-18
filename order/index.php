<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Pirx 3d Printer - Order Pirx!</title>
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
    <link href="../styles/checkstyle.css" rel="stylesheet">

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
    <script language="javascript">
      function wysylka() {
        $("#shipping_adress").fadeToggle();
      }
      function same_adress() {
        $("#shipping_adress_details").fadeToggle();
      }
    </script>
    <script type="text/javascript">
      $(function() {
         $("#country_list").load("../scripts/countries.html");
      });
    </script>

  	<div id="wrapper">
      <header id="header">
        <div class="row">
          <div class="large-3 small-12 columns">
            <div class="logo">
            </div>
          </div>
          <div class="large-9 small-12 columns">
            <ul class="nav right">
              <li><a href="../">home</a></li>
              <li><a href="../about/">about</a></li>
              <li><a href="https://facebook.com/clockwork3d">blog</a></li>
              <li><a href="../contact/">contact</a></li>
              <li><a href="../order/" class="btn btn-small btn-order">buy now</a></li>
            </ul>
          </div>
        </div>
      </header>

      <section id="caption">
        <div class="row caption">
          <div class="large12 columns">
            <h2><span class="order-img"></span>Order your Pirx 3D printer</h2>
          </div>
        </div>
      </section>

      <section id="about-us">
        <div class="row">
          <div class="large-3 columns">
            <ul class="nav sidebar-nav">
              <li><a href="../">Home<span></span></a></li>
              <li><a href="../about/">About<span></span></a></li>
              <li><a href="#" class="active">Order<span></span></a></li>
              <li><a href="../recruit/">Jobs<span></span></a></li>
              <li><a href="../press/">Press Kit<span></span></a></li>
              <li><a href="../contact/">Contact<span></span></a></li>
            </ul>
          </div>
          <div class="large-9 columns order">
            <form action="../scripts/order.php" method="POST" name="orderform" id="orderform">
              <fieldset>
                <h2>Billing information<span>1</span></h2>
                <div id="billing_adress">
                  <label>Name:</label>
                  <input type="text" name='name' placeholder="" id="name">
                  <label>Company name:</label>
                  <input type="text" name='companyname' placeholder="" id="companyname">
                  <label>Street:</label>
                  <input type="text" name='billingstreet' placeholder="" id='billingstreet'>
                  <div class="address">
                    <div class="city">
                      <label>City:</label>
                      <input type="text" name='billingcity' placeholder="" id='billingcity'>
                    </div>
                    <div class="zip">
                      <label>Postal code:</label>
                      <input type="text" name='billingcode' placeholder="" id='billingcode'>
                    </div>
                  </div>
                  <label>Email adress:</label>
                  <input type="text" name='email' placeholder="" id='email'>
                  <label>Tax identification number:</label>
                  <input type="text" name='tax' placeholder="" id='tax'>
                  <label>Type of payment:</label>
                  <select name="type_of_payment" id="type_of_payment">
                     <option value="0">select...</option>
                     <option value="1">VISA, MasterCard</option>
                     <option value="2">Maestro</option>
                     <option value="3">Diners, Discover, JCV</option>
                     <option value="4">Polish wired transfer</option>
                     <option value="5">PayPal</option>
                  </select>
                </div>

                <h2>Shipping Information<span>2</span></h2>
                <div id="shipping">
                  <label>Shipping method:</label>
                  <div>
                    <input type="radio" name="shipping" onClick="wysylka()" id="personal" class="lite-orange-check" value="2"><span>Personal pickup</span>
                    <input type="radio" name="shipping" onClick="wysylka()" class="lite-orange-check" value="1" checked="checked"><span>Courier</span>
                  </div>
                </div>

                <div id="shipping_adress">
                  <div id="shipping_adress_check">
                    <label>Shipping address:</label>
                    <div class="check">
                      <input type="checkbox" onClick="same_adress()" name='same' id="same" class="lite-orange-check"><span>Same as billing</span>
                    </div>
                  </div>
                  <div id="shipping_adress_details">
                    <label>Street:</label>
                    <input type="text" name='shipstreet' id="street">
                    <div class="shipaddress">
                      <div class="city">
                        <label>City:</label>
                        <input type="text" name='shipcity' placeholder="" id='shipcity'>
                      </div>
                      <div class="zip">
                        <label>Postal code:</label>
                        <input type="text" name='shipcode' placeholder="" id='shipcode'>
                      </div>
                    </div>
                  </div>
                </div>

                <!--<h2>Payment Information<span>3</span></h2>
                <div id="payment">
                  <label>Payment Method</label>
                </div>
                  !-->
                <h2>Miscellaneous<span>3</span></h2>
                <div id="miscellaneous">
                  <label>Additional info:</label>
                  <textarea type="text" name='message' placeholder="I'd like to know whether..."></textarea>
                </div>

                <button type="submit" class="btn btn-small btn-order">Place your order</button>
					By placing an order you agree with <a href="www.pirx3d.com/pdf/ToS.pdf">Terms & Conditions</a>.
              </fieldset>
            </form>

            <center>
              <div id="loading" style="display: none;">
                Sending your order....
              </div>
              <div id="success" style="display: none;">
                Order sent. We will contact you shortly.
              </div>
              <div id="error" style="display: none;">
                Fill in the form properly.
              </div>
              <div id="error_email" style="display: none;">
                Fill in a proper email address.
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
              <li><a href="../about/">Meet the team</a></li>
              <li><a href="../order/">Buy your printer</a></li>
              <li><a href="../recruit">Join the crew</a></li>
              <li><a href="../contact/">Ask a question</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <h3>Media</h3>
            <ul>
              <li><a href="https://www.facebook.com/clockwork3d">Blog</a></li>
              <li><a href="../press/">Press kit</a></li>
              <li>Privacy policy</li>
              <li><a href="www.pirx3d.com/pdf/ToS.pdf">Terms & Conditions</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <h3>Newsletter</h3>
            <p>Subscribe to the newsletter to be up to date with our stuff.</p>
            <form action="http://pirx3d.us3.list-manage.com/subscribe/post?u=29dd98989c038680bd9fdbcec&amp;id=46fdd7bcd3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
              <button class="btn btn-small btn-order"input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" >send</button>
            </form>
          </div>
          <div class="large-3 columns address">
            <h3>Contact</h3>
            <address>
              Pirx<br>
              Ślusarska 9<br>
              30-710 Kraków<br>
              Małopolska, Poland
            </address>
          </div>
        </div>
        <div class="row">
          <div class="large-6 large-centered columns social">
            <ul class="social-icons">
              <li><a class="fb" href="https://www.facebook.com/clockwork3d"></a></li>
              <li><a class="tw" href="https://twitter.com/Pirx3d"></a></li>
              <li><a class="gp" href="#"></a></li>
              <li><a class="yt" href="http://www.youtube.com/channel/UCxX_m_BNkDkPaL6noSeaL2A"></a></li>
              <li><a class="vi" href="http://vimeo.com/user23517214"></a></li>
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