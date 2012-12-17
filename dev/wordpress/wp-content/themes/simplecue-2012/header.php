<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<title><?php wp_title(); ?></title>

      <?php
			wp_head();
		?>
		
		<meta name="author" content="Cloudzillr Inc." />


      	<script type="text/javascript">
      	  var _kmq = _kmq || [];
      	  var _kmk = _kmk || '64eca1463b7f4a4bf9d1d9b630ba5da317c04131';
      	  function _kms(u){
      	    setTimeout(function(){
      	      var d = document, f = d.getElementsByTagName('script')[0],
      	      s = d.createElement('script');
      	      s.type = 'text/javascript'; s.async = true; s.src = u;
      	      f.parentNode.insertBefore(s, f);
      	    }, 1);
      	  }
      	  _kms('//i.kissmetrics.com/i.js');
      	  _kms('//doug1izaerwt3.cloudfront.net/' + _kmk + '.1.js');
      	</script>

    <link href="<?php echo get_template_directory_uri(); ?>/basemedia/css/homepage.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/basemedia/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />

    <script src="<?php echo get_template_directory_uri(); ?>/basemedia/javascript/jquery.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(function(){
         closeAlert();
      });

      function closeAlert(){

          $(".close-alert").click(function(){
            $(".home-alert").slideUp(500);
            return false;
          });

      }
    </script>

		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-24829332-1']);
		_gaq.push(['_trackPageview']);

		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>

      <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
	</head>

	<body>
		<?php
			/*if(is_front_page()) {
		?>
				<div class="home-alert">
				  <p>
					 <a href="#" class="close-alert">x</a>
					 <b>GYMSTICK INSTRUCTORS:</b>
					 Are you looking for access to Simplecue? Received an email about Simplecue? Learn More  <a href="/gymstick">Learn More</a>
				  </p>
				</div>
		<?php
			}*/
		?>
    <div class="homepage">
        <div class="header">
<!--                <p class="signin">Already Registered? <a href="https://app.simplecue.com/login?locale=en" class="btn secondary">Sign In</a></p>-->
                <a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/basemedia/images/simplecue-blue.png" /></a>
        </div>