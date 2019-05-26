<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>spotify - Music, Audio and Radio web application</title>
  <meta name="description" content="Music, Musician, Bootstrap" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
  
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mediaelementplayer.min.css" type="text/css" />
  <link rel="stylesheet" href="libs/mediaelement/build/mep.css" type="text/css" />

  <!-- endbuild -->
</head>
<body>
  <div class="app dk" id="app">

<!-- ############ LAYOUT START-->

  <!-- content -->
  <div id="content" class="app-content" role="main">
    <div class="app-header navbar-md black box-shadow-z1">
        <div class="navbar" data-pjax>
              <a data-toggle="collapse" data-target="#navbar" class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                <i class="material-icons">menu</i>
              </a>
              <!-- brand -->
              <a href="index.php" class="navbar-brand md">
              	
              
              	<img src="images/logo.png" alt="." class="hide">
              	<span class="hidden-folded inline">spotify</span>
              </a>
              <!-- / brand -->
      
              <!-- nabar right -->
              <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                  <a href="player/register.php" class="nav-link">
                    Signup
                  </a>
                </li>
                <li class="nav-item">
                  <a href="player/register.php" class="nav-link">
                    <span class="btn btn-sm rounded primary _600">
                      Signin
                    </span>
                  </a>
                </li>
              </ul>
              <!-- / navbar right -->
      
              <!-- navbar collapse -->
              <div class="collapse navbar-toggleable-sm l-h-0 text-center" id="navbar">
                <!-- link and dropdown -->
                <ul class="nav navbar-nav nav-md inline text-primary-hover">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link">
                      <span class="nav-text">Home</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="player/browse.php" class="nav-link">
                      <span class="nav-text">Web App</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="player/browse.php" class="nav-link">
                      <span class="nav-text">Chart</span>
                    </a>
                  </li>
                </ul>
                <!-- / link and dropdown -->
              </div>
              <!-- / navbar collapse -->
        </div>
    </div>
    <div class="app-body">
<!-- ############ PAGE START-->

<div class="container">

  <h1>About Us</h1>

  <div class="row">
    <div class="col-md-7">
      <p>With Spotify, it’s easy to find the right music for every moment – on your phone, your computer, your tablet and more.</p>
 
<p>There are millions of tracks on Spotify. So whether you’re working out, partying or relaxing, the right music is always at your fingertips. Choose what you want to listen to, or let Spotify surprise you.</p>
 
<p>You can also browse through the music collections of friends, artists and celebrities, or create a radio station and just sit back.</p>
 
<p>Soundtrack your life with Spotify. Subscribe or listen for free.</p>
      <h2>Customer Service and Support</h2>
            <ol>
<li><a href="https://support.spotify.com"><strong>Help site</strong></a>.
Check out our help site for answers to your questions and to learn how to get the most out of Spotify and your music.</li>
<li><strong><a href="https://community.spotify.com/">Community</a></strong>.
Get fast support from expert Spotify users. If there isn't already an answer there to your question, post it and someone will quickly answer. You can also suggest and vote on new ideas for Spotify or simply discuss music with other fans.</li>
<li><strong><a href="https://support.spotify.com/us/contact-spotify-support">Contact us</a></strong>. Contact our Customer Support if you don't find a solution on our support site or Community.</li>
<li><a href="https://twitter.com/SpotifyCares"><strong>@SpotifyCares</strong></a>. Feeling sociable? Simply tweet the team and they'll do all they can to help.</li>
</ol>

      <h2>Or pick a topic:</h2>
            <ul>
<li>Advertising on Spotify? <a href="/brands/">Advertisers section</a></li>
<li>Press query? <a href="https://press.spotify.com">Press section</a></li>
<li>Applying for a job? <a href="https://www.spotifyjobs.com/">Jobs section</a></li>

</ul>
      <p>
        Spotify USA, Inc. provides the Spotify service to users in the United States. Spotify AB provides the Spotify service to users in all other markets.
      </p>
    </div>

    <div class="col-md-5">
      <div class="office-local">
        <h2>Spotify HQ</h2>
          <address class="office">
          <strong>Spotify USA Inc</strong><br>
              4 World Trade Center<br>
              150 Greenwich Street, 62nd Floor<br>
              New York, NY 10007<br>
              USA<br>
              office@spotify.com
        </address>

      </div>

      <div class="offices-list-container">
        <h2>Spotify around the world</h2>

                              <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Belgium</strong><br>
              Square de Meeus 37<br>
              4th floor<br>
              1000 Brussels<br>
              Belgium<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify GmbH</strong><br>
              Leipziger Straße 125<br>
              10117 Berlin<br>
              Germany<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Canada Inc.</strong><br>
              179 John St. Suite 403<br>
              M5T 1X4 Toronto<br>
              Canada<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Denmark ApS</strong><br>
              Vestergade 27, 1 th<br>
              1456 København K<br>
              Denmark<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>SPOTIFY SPAIN SL</strong><br>
              Paseo de Recoletos, 7-9<br>
              28004 Madrid<br>
              Spain<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Finland Oy</strong><br>
              Merimiehenkatu 36 D<br>
              FI-00150 Helsinki<br>
              Finland<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify France SAS</strong><br>
              29-31 rue de Courcelles<br>
              75008 Paris<br>
              France<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify India Pvt Ltd</strong><br>
              Regus 5th &amp; 6th Floor Mafatlal House (“Building”) H.T.Parekh Marg, Backbay Reclamation<br>
              Mumbai 400020<br>
              India<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Italy S.r.l.</strong><br>
              c/o Fintech District<br>
              Via Filippo Sassetti 32<br>
              20124 Milano<br>
              Italy<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Netherlands</strong><br>
              Singel 540 3h<br>
              1017AZ, Amsterdam<br>
              Netherlands<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Norway AS</strong><br>
              Tordenskioldsgate 2<br>
              0160 Oslo<br>
              Norway<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Poland Sp. z o.o.</strong><br>
              Warsaw Skylight Skylight Building, 14th floor<br>
              c/o Regus<br>
              Ul. Zlota 59<br>
              00-120 Warszawa<br>
              Poland<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
          
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify AB</strong><br>
              Regeringsgatan 19<br>
              SE-111 53 Stockholm<br>
              Sweden<br>
              Reg no: 556703-7485<br>
              office@spotify.com
        </address>

          </div>

                            
          <div class="col-sm-6">
              <address class="office">
          <strong>Spotify Limited</strong><br>
              1-11 John Adam Street<br>
              London WC2N 6AG<br>
              United Kingdom<br>
              office@spotify.com
        </address>

          </div>

                      </div>
                                        <div class="row">
        

                            
          

                      </div>
                                        <div class="row">
          
        
                            
          

                      </div>
                        </div>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
    <div class="white dk pos-rlt">
      <div class="p-a-md">
        <div class="footer p-y-md text-primary-hover">
        	<div class="row">
        		<div class="col-md-3">
        			<div class="clearfix m-b-lg">
        				<!-- brand -->
        				<a href="index.php" class="navbar-brand md">
        					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
        						<circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)"/>
        						<circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color"/>
        						<circle cx="24" cy="24" r="10" fill="#ffffff"/>
        						<circle cx="13" cy="13" r="2"  fill="#ffffff" class="brand-animate"/>
        						<path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
        						<circle cx="24" cy="24" r="3" fill="#000000"/>
        					</svg>
        				
        					<img src="images/logo.png" alt="." class="hide">
        					<span class="hidden-folded inline">spotify</span>
        				</a>
        				<!-- / brand -->
        			</div>
        		</div>
        		<div class="col-sm-2 col-xs-6">
        			<h6 class="text-u-c m-b text-muted">About</h6>
        			<div class="m-b-md">
        				<ul class="nav l-h-2x _600">
        					<li class="nav-item">
        						<a class="nav-link" href="about.php">About us</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Mobile apps</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Blog</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Jobs</a>
        					</li>
        				</ul>
        			</div>
        		</div>
        		<div class="col-sm-2 col-xs-6">
        			<h6 class="text-u-c m-b text-muted">Links</h6>
        			<div class="m-b-md">
        				<ul class="nav l-h-2x _600">
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Help</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Support</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="404.php">Legal</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="505.php">Copyright</a>
        					</li>
        				</ul>
        			</div>
        		</div>
        		<div class="col-sm-2 col-xs-6">
        			<h6 class="text-u-c m-b text-muted">Connect</h6>
        			<div class="m-b-md">
        				<ul class="nav l-h-2x _600">
        					<li class="nav-item">
        						<a class="nav-link" href="#">Facebook</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="#">Twitter</a>
        					</li>
        					<li class="nav-item">
        						<a class="nav-link" href="#">Google+</a>
        					</li>
        				</ul>
        			</div>
        		</div>
        		<div class="col-md-3 col-xs-6">
        			<h6 class="text-u-c m-b text-muted">Subscribe</h6>
        			<p>Do not want to miss our newsletter?</p>
        			<form class="m-b-lg">
        			    <input type="text" class="form-control" placeholder="Your email">
        			    <button type="submit" class="btn btn-sm btn-outline b-dark rounded m-t">Subscribe</button>
        			</form>
        		</div>
        	</div>
        	<div class="b b-b m-b m-t-lg"></div>
        	<div class="row">
        		<div class="col-sm-8">
        			<a href="#"="#" class="text-muted text-sm">Cookies</a>
                </div>
                <div class="col-sm-4">
                	<div class="text-sm-right text-xs-left">
                		<small class="text-muted">&copy; Copyright 2019. All rights reserved.</small>
                	</div>
                </div>
        	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

<!-- ############ LAYOUT END-->
  </div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/tether/dist/js/tether.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery.stellar/jquery.stellar.min.js"></script>
  <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="libs/jscroll/jquery.jscroll.min.js"></script>
  <script src="libs/PACE/pace.min.js"></script>
  <script src="libs/jquery-pjax/jquery.pjax.js"></script>

  <script src="libs/mediaelement/build/mediaelement-and-player.min.js"></script>
  <script src="libs/mediaelement/build/mep.js"></script>
  <script src="scripts/player.js"></script>

  <script src="scripts/config.lazyload.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
  <script src="scripts/ui-taburl.js"></script>
  <script src="scripts/app.js"></script>
  <script src="scripts/site.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>