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
		<link href="../../styles/normalize.css" rel="stylesheet">
    <link href="../../styles/foundation.css" rel="stylesheet">
    <link href="../../styles/style.css" rel="stylesheet">
    <link href="../../styles/lightbox.css" rel="stylesheet">
    
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.stellar.js"></script>
    <script type="text/javascript" src="../js/retina.js"></script>
    <script type="text/javascript" src="../js/lightbox-2.6.min.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    
		<!-- FAVICON -->
    <link rel="shortcut icon" href="../../images/favicon.ico">

    <!-- JS FUNCTIONS -->   
    
    <script type="text/javascript" src="../../scripts/recruitscript.js"></script>

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
              <li><a href="../../">home</a></li>
              <li><a href="../../about/">about</a></li>
              <li><a href="https://facebook.com/clockwork3d">blog</a></li>
              <li><a href="../../contact/">contact</a></li>
              <li><a href="../../order/" class="btn btn-small btn-order">buy now</a></li>
            </ul>
          </div>
        </div>
      </header>

      <section id="caption">
        <div class="row caption">
          <div class="large12 columns">
            <h2>Expension Officer</h2>
          </div>
        </div>
      </section>

      <section id="about-us">
        <div class="row">
          <div class="large-3 columns">
            <ul class="nav sidebar-nav">
              <li><a href="../../">Home<span></span></a></li>
              <li><a href="../../about/">About<span></span></a></li>
              <li><a href="../../order/">Order<span></span></a></li>
              <li><a href="../../recruit/">Join us!<span></span></a>
                <ul class="sidebar-subnav">
                  <li><a href="#" class="active">Expension Officer<span></span></a></li>
                  <li><a href="/recruit/office/">Office Manger<span></span></a></li>
                </ul>
              </li>
              <li><a href="../../press/">Press Kit<span></span></a></li>
              <li><a href="../../contact/">Contact<span></span></a></li>
            </ul>
          </div>
          <div class="large-9 columns jobs">
	          <h2>We are looking for an Expension Officer.</h2>

            <label> Requirements </label>
            <p>
              If you are a highly creative 
            person with amazing communication and copywriting skills please fill out
            the form below. English proficiency is a must. Experience in social media
            and sales is a bonus.
                         </p>
            <label> Responsibilities </label>

            <p>
            You will be both responsible and measured by sales growth. You will also
            participate in the process of introducing our product to new markets.
            </p>
            <label> Perks and benefits </label>

            <p>
            We offer : <br>
            - Flexible working hours and vacation policy <br>
            - Base salary + piece work rate<br>
            - Friendly and creative work enviroment<br>
            - Lots of challanges<br>
            - Many more challanges<br>


            </p>

            <form action="../../scripts/recruit.php" method="POST" name="recruitform" id="recruitform">
              <fieldset>    
                <div class="question">
	                <p>Are you ready to beat unfavorable odds, carry out seemingly impossible tasks and work with us to change the world?</p>
                  <button type="checkbox" name="sane" id="sane" class="btn btn-small btn-order" onClick="is_sane()">Yes I am!</button>
                </div>

	              <div id="form_section" style="display: none;">
	                <label><span>1</span>What is your name?</label>
	                <input type = "text" name="name" id="name">

	                <label><span>2</span>Have you ever dreamt of space travel?</label>
                  <div class="check">
  	                <input type="checkbox" name="space" id="space" onClick="" class="lite-orange-check">
                  </div>

	                <label><span>3</span>Do you want to be filthy rich?</label>
	                <div class="check">
                    <input type="checkbox" name="rich" id="rich" onClick="" class="lite-orange-check">
                  </div>

	                <label><span>4</span>You have a week and no budget at all. Your goal is to reach as many potential Pirx customers as you can. Be creative. Bonus points for scenarios that end up with sold printers.</label>   
	                <textarea type="text" name="question_1" id="question1"></textarea>
	                
                  <label><span>5</span>You are a prisoner of a nasty cannibal tribe. Things went very bad
	                 and they are just about to cook you in a large, brass cauldron. You are hanging upside down by the ankle, all tied up. Somehow you miraculously managed to free one hand. Just by accident, there is a 
	                 laptop connected to a Pirx 3D printer just within your reach. What will you do to save yourself?
	                </label>
	                <textarea type="text" name="question_2" id="question2"></textarea>
	                
                  <label><span>6</span>What amazing thing would you print on Pirx?</label>
	                <textarea type="text" name="question_3" id="question3"></textarea>
	                
                  <label><span>7</span>How would you market our 3D printer to Bruce Wayne?</label>
	                <textarea type="text" name="question_4" id="question4"></textarea>

	                <label><span>8</span>Email address:</label>
	                <input type = "text" name="email" id="email">
	                  
	                <label><span>9</span>Is there anything else we need to know?</label>
	                <textarea type="text" name='message' placeholder=""></textarea>

	                <button type="submit" class="btn btn-small btn-order">Apply for this position</button>
                </div>
              </fieldset>
            </form>
            

            <center>
		          <div id="loading" style="display: none;"> 
		            Sending your application.
					    </div>
						  <div id="success" style="display: none;">
						    Application sent, we will probably contact you.
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
              <li><a href="../../about/">Meet the team</a></li>
              <li><a href="../../order/">Buy your printer</a></li>
              <li><a href="../../recruit">Join the crew</a></li>
              <li><a href="../../contact/">Ask a question</a></li>
            </ul>
          </div>
          <div class="large-3 columns">
            <h3>Media</h3>
            <ul>
              <li><a href="https://www.facebook.com/clockwork3d">Blog</a></li>
              <li><a href="../../press/">Press kit</a></li>
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

		<script language="javascript">
			function is_sane()
			{
			  $("#form_section").fadeToggle();
			  }
    </script>
  </body>
</html>