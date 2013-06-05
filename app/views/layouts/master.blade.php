<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">  
    <head>
		<title>RATE ME</title>
        <meta charset="utf-8">
		<link rel='image_src' href="https://dl.dropboxusercontent.com/u/62351819/rateme/rate-me.png">
		<meta property='og:image' content="https://dl.dropboxusercontent.com/u/62351819/rateme/rate-me.png" />
		<?php $url =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
		<meta property='og:url' content="http://{{$url}}" />
		<meta property='og:type' content="website" />
        <meta property='fb:app_id' content='646242248723359' />
        <meta property='og:title' content="Please Vote For My Designs" />
        <meta property='og:site_name' content='FutureSystems' />
        <meta name="title" content="Please Vote For My Design2" />
        <meta name="description" content="Please Vote For My Design3"  />
        <meta property="og:description" content="Please Vote For My Designs To Help Me Choose What's better!" />
        <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">-->
        <link href="{{ url('css/main.css')}}" rel="stylesheet">
        <link href="{{ url('css/msdropdown/dd.css')}}" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="{{ url('js/msdropdown/jquery.dd.min.js')}}" type="text/javascript"></script>
        <script>
		//Custom JavaScript
		$(document).ready(function() {
        //move the image in pixel
        var move = -15;
        //zoom percentage, 1.2 =120%
        var zoom = 1.2;
        //On mouse over those thumbnail
        $('.item').hover(function() {
            
            //Set the width and height according to the zoom percentage
            width = $('.item').width() * zoom;
            height = $('.item').height() * zoom;
            
            //Move and zoom the image
            $(this).find('.img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:200});
            
            //Display the caption
            $(this).find('div.caption').stop(false,true).fadeIn(200);
        },
        function() {
            //Reset the image
            $(this).find('.img').stop(false,true).animate({'width':$('.item').width(), 'height':$('.item').height(), 'top':'0', 'left':'0'}, {duration:100});    
            //Hide the caption
            $(this).find('div.caption').stop(false,true).fadeOut(200);
        });

		$("#showimg").click(function() {
			$("#imgdiv").show();
			});
				$(".btn").click(function() {
			$("#imgdiv").hide();
			});
		$("#tech").msDropdown({visibleRows:4});
			
		});
		</script>

    </head>

    <body>
 
	  <div id="main">
        <header>
			<h1>@yield('title')</h1>
			<div id="share">
			<p>share me</p>
			<div id="fb-root"></div>
			<script src="http://connect.facebook.net/en_US/all.js"></script>
			<script>
			FB.init({
					 appId  : '646242248723359',
					 status : true, // check login status
					 cookie : true, // enable cookies to allow the server to access the session
					 xfbml  : true  // parse XFBML
			});
			</script>
			<fb:share-button href="http://<?php echo($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);?>" type="button"> </fb:share-button>
			<div id="twitter">
			<a href="https://twitter.com/share" class="twitter-share-button" data-via="FutureSystems" data-hashtags="RateMe">Tweet</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>		
			</div>
		</header>
        <div id="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')
        </div>

		<footer>
	 	  <div class="footer">
			<p class="box">
				<img src="http://futuresystems-me.com/images/logo.png" alt="" class="left" style="padding:10px;"/>
				Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scriber, at pro fugit erts verterem moliae,
				sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur At vix scripta patrioque scribentur...
			</p>
			<p class="box">
				<img src="http://futuresystems-me.com/images/logo.png" alt="" class="left" style="padding:10px;"/>
				Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scriber, at pro fugit erts verterem moliae,
				sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur At vix scripta patrioque scribentur...
			</p>
			<p class="box" style="text-align:center;padding:80px 0 0 0;">
				<a href="http://www.w3.org/html/logo/">
				<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-device-graphics-semantics.png" width="229" height="64" alt="HTML5 Powered with CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, Graphics, 3D &amp; Effects, and Semantics">
				</a>
 			</p>
		
		  </div>

		</footer>
		<p class="copy">All Designs here are copyrighted to <a href="http://futuresystems-me.com">FutureSystems</a><p>

	  </div>
    </body>

</html>