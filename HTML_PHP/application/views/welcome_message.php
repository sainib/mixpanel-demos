<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coming Soon Bootstrap 4 Template Demo</title>
    <meta name="description" content="Demo of A Free Coming Soon Bootstrap 4 Template by TemplateFlip.com."/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>static/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>static/styles/main.css" rel="stylesheet">
  </head>
  <body id="top"><div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">Coming Soon</h3>
          <nav class="nav nav-masthead">
            <a class="nav-link nav-social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a class="nav-link nav-social" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </nav>
        </div>
      </div><br>      <div class="inner cover">
<div id="eventLogged" name="eventLogged" class="alert alert-success" style="visibility:hidden;">
  <strong>Success!</strong> Event has been logged..
</div>      
        <h1 class="cover-heading">The adventure Begins</h1>
        <p class="lead cover-copy">Clicking of the button below will magically generate and log an event.</p>
        <p class="lead"><button type="button" id="theButton" name="theButton" class="btn btn-lg btn-default btn-notify">Click Here..</button></p>
      </div>
      <div class="mastfoot">
        <div class="inner">
          <p>&copy; Just a Demo</p>
        </div>
      </div>
      <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="subscribeModalLabel">Get Notified on Launch:</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Enter you e-mail to get notified when we launch</label>
                  <input type="text" class="form-control" id="recipient-name" placeholder="your-name@example.com">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default">Subscribe</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>static/scripts/main.js"></script>


<script type="text/javascript">

	console.log('here 1');

$( "#theButton" ).click(function() {
	console.log('here 2');

 $.get( "<?php echo base_url();?>index.php/welcome/logEvent", function( data ) {
	console.log('here');
    $('#eventLogged').css('visibility','visible');
 });

});
</script>


    
    
  </body>
</html>