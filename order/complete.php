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
              <li><a href="../order/" class="active">Order<span></span></a></li>
              <li><a href="../recruit/">Jobs<span></span></a></li>
              <li><a href="../press/">Press Kit<span></span></a></li>
              <li><a href="../contact/">Contact<span></span></a></li>
            </ul>
          </div>
          <div class="large-9 columns order">
            <center>
               <?php
               switch ((isset($_GET['status']) ? $_GET['status'] : false))
               {
                  case 'PENDING';
                     echo 'Payment is pending.<br /><br />Authorization ID of the transaction: ' . $_GET['id_authorization'] . '<br />The transaction ID: ' . $_GET['id_sale'];
                     break;
                  case 'PERFORMED';
                     echo 'Payment is confirmed.<br /><br />Authorization ID of the transaction: ' . $_GET['id_authorization'] . '<br />The transaction ID: ' . $_GET['id_sale'];
                     break;
                  case 'CLEARED';
                     echo 'Measures have been taken (obtained confirmation from the bank).<br /><br />Authorization ID of the transaction: ' . $_GET['id_authorization'] . '<br />The transaction ID: ' . $_GET['id_sale'];
                     break;
                  case 'ERROR';
                     echo 'The payment failed.<br /><br />Error ID: ' . $_GET['id_error'];
                     break;
                  default:
                     echo 'The payment failed.';
                     break;
               }
               ?>
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
              <li>Terms & Conditions</li>
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