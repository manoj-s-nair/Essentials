<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="ASSET">
    <meta name="author" content="JARMS">
    <link rel="icon" href="/favicon.ico">
    <title>LED Experiments | Blink</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/updown.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  	<script>
      $(document).ready(function(){
          $('[data-toggle="popover"]').popover();  
      });
    </script>
    <script type="text/javascript">
          $(document).ready(function(){
          $("#check").click(function(){
            if ($("#delay").attr("disabled")) {
                $("#delay").removeAttr("disabled");
                $("#submit").removeAttr("disabled");
            }else {
                $("#delay").attr('disabled', true);
                $("#submit").attr('disabled', true);
            }
          });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#delay').updown({
            step: 100,
            shiftStep: 1000,
            min: 100,
            max: 180000,
            circle: true
        });
      });
    </script>
    <script type="text/javascript">
     //  $(document).ready(function(){
     //    $("#submit").click(function(){
     //      $.load("http://localhost/cgi-bin/ledonoff.cgi");
     //  });
     // });     
    </script>
  <div class="container">
    <!-- Nav Menu -->
    <div class="header clearfix">
      <nav>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="led_experiments.php">Home</a></li>
          <li role="presentation" class="active"><a href="#">Blink</a></li>
          <li role="presentation"><a href="#">Fade</a></li>
          <li role="presentation"><a href="#">Logout</a></li>
        </ul>
      </nav>
      <!-- Page Heading -->
      <h3 class="page-header"><strong>LED Experiments</strong></h3>
    </div>
      <!-- Experiment Section -->
    <div class="exp_info">
      <h2 class="text-center">LED-Blinking</br>
      <small class="text-center">Demonestration of digital read & write.</small></h2></br>
      <p class="text-center"> Make a LED blink with the delay that you specify.</p> 
    </div>

    <div class="jumbotron">
      <div class="container">
        <!-- Video Feed Section -->
        <div class="row">
            <div class="col-md-6">
                <video id="rt_feed" width="100%" poster="poster.jpg" controls>
           			<source src="live_feed.mp4" type="video/mp4">
           			<source src="live_feed.ogg" type="video/ogg">
          			<p>Please use a modern browser to view this video.</p>
        		</video>
        		</br></br>
        		  <button id="feed" class="btn btn-default btn-sm" onclick="playPause()">
        		  <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Start Live Feed</button> 
            </div>
        <!-- Experiment Control Panel -->
    	<div class="col-md-6">
    		<div class="row">
    			<div class="col-md-3">
    			    <h4><small><span class="glyphicon glyphicon-off" aria-hidden="true"></span> LED</small></h4>
    			</div>
    			<div class="col-md-3">
    				<div class="onoffswitch  center-block">
    			    	<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
    			    	<label class="onoffswitch-label" for="myonoffswitch" data-toggle="popover" data-trigger="hover" data-content="Turn ON/OFF">
    			        	<span class="onoffswitch-inner"></span>
    			        	<span class="onoffswitch-switch"></span>
    			    	</label>
    				</div>
    			</div>
    		</div>
    		</br>
        </br>
    	</div>	
    	<div class="col-md-6">
    		  	<div class="checkbox col-md-6">
    			    <label>
    			      <input id="check" type="checkbox"> Enable Blink
    			    </label>
    			  </div>
    		</br>
        </br>
    			  <div class="col-md-12 center-block">  
              <form class="form-inline" role="form">
                <div class="form-group center-block">
      				      <label>Delay</label>
        				      <input id="delay" class="form-control center-block" type="text" value="1000" style="width:35%" disabled/>
        					      <a id="submit" type="submit" href="http://localhost/cgi-bin/ledonoff.cgi" class="btn btn-success" data-toggle="popover" data-trigger="hover" data-content="Delay in ms" disabled>
        					      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp;Submit</a>
        				</div>
        			</form>       
            </div>
      </div>
  	</div>
  </div>
</div>
<footer class="footer">
	<p>&copy; 2016 JARMS</p>
</footer>
    	</div> 




<!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>