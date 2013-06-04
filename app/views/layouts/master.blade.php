<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">  
    <head>
        <meta charset="utf-8">

            <link rel='image_src' href="http://ia.media-imdb.com/images/M/MV5BMTM3MTczOTM1OF5BMl5BanBnXkFtZTYwMjc1NDA5._V1_SY317_CR4,0,214,317_.jpg">
            <meta property='og:image' content="http://ia.media-imdb.com/images/M/MV5BMTM3MTczOTM1OF5BMl5BanBnXkFtZTYwMjc1NDA5._V1_SY317_CR4,0,214,317_.jpg" />
        
            <meta property='og:type' content="video.movie" />
        <meta property='fb:app_id' content='115109575169727' />
        <meta property='og:title' content="The Rock (1996)" />
        <meta property='og:site_name' content='IMDb' />
        <meta name="title" content="The Rock (1996) - IMDb" />
            <meta name="description" content="Directed by Michael Bay.  With Sean Connery, Nicolas Cage, Ed Harris, John Spencer. A renegade general and his group of U.S. Marines take over Alcatraz and threaten San Francisco Bay with biological weapons. A chemical weapons specialist and the only man to have ever escaped from the Rock attempt to prevent chaos." />
            <meta property="og:description" content="Directed by Michael Bay.  With Sean Connery, Nicolas Cage, Ed Harris, John Spencer. A renegade general and his group of U.S. Marines take over Alcatraz and threaten San Francisco Bay with biological weapons. A chemical weapons specialist and the only man to have ever escaped from the Rock attempt to prevent chaos." />
           
        <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">-->
        <link href="{{ url('css/main.css')}}" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
    });
		</script>
        <style>
         /*CSS*/  
        </style>
    </head>

    <body>
	  <div id="main">
        <header>
			<h1>FutureSystems</h1>
			<div id="share">
			<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
			<fb:share-button type="button_count" href="http://<?php echo($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);?>"></fb:share-button>
			 <a id="fb-share" style='text-decoration:none;' type="icon_link" onClick="window.open('http://www.facebook.com/sharer.php?s=100&p[title]=YOUR_TITLE&p[summary]=YOUR_DESCRIPTION&p[url]=YOUR_URL&p[images][0]=YOUR_IMAGE','sharer','toolbar=0,status=0,width=580,height=325');" href="javascript: void(0)">Share</a> 
<a href="https://twitter.com/share" class="twitter-share-button" data-via="FutureSystems" data-hashtags="RateMe">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
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

		<footer>All Designs here are copyrighted to <a href="http://futuresystems-me.com">FutureSystems</a></footer>
	  </div>
    </body>

</html>