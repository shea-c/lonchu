<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lonchu &mdash; A better way to buy and sell used study materials</title>
        <meta name="description" content="Lonchu is a better way to buy and sell used AP, SAT, etc. test-prep study materials online. A nonprofit, made for students, by students, it's designed to be as simple and affordable as possible. Try it.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/stylesheets/main.css">
        <link rel="stylesheet" href="/stylesheets/landing.css">
    </head>
    <body>
        <div id="hero" class="section responsive_image">
	    	<nav id="navigation_bar">
	    		<img id="logo" src="/media/images/logo.png">
	    		<h1 id="title">Lonchu</h1>
	    		<button id="navigation_open" class="icon_open mobile"></button>
	    		<ul id="navigation">
	    			<button id="navigation_close" class="icon_close mobile"></button>
					<li class="navigation_item"><a class="navigation_link" href="/about">About</a></li>
					<li class="navigation_item"><a class="navigation_link" href="/buy">Buy</a></li>
					<li class="navigation_item"><a class="navigation_link" href="/sell">Sell</a></li>
					<li class="navigation_item"><a class="navigation_link" href="/dashboard">Dashboard</a></li>
					<li class="navigation_item"><a class="navigation_link" href="/help">Help</a></li>
	    		</ul>
	    		<div class="clear"></div>
	    	</nav>
	    	<p id="lead">A better way to buy and sell used study materials online &mdash; try it!</p>
        </div>
        <div id="features" class="section">
        	<div class="feature">
        		<img class="feature_image" src="/media/images/easier.png">
        		<h3 class="feature_pitch">Forget the hassle.</h3>
        		<p class="feature_description">
        			<span class="less">At Lonchu, go from start to finish in just <strong>5</strong> minutes.</span>
        			<span class="more">You'll never have to scour stores, ask your 500 online friends, or use auction sites again. At Lonchu, go from start to finish in just <strong>5</strong> minutes.</span>
        		</p>
        	</div>
        	<div class="feature">
        		<img class="feature_image" src="/media/images/save.png">
        		<h3 class="feature_pitch">Save money.</h3>
        		<p class="feature_description">
        			<span class="less">We're a nonprofit, so you know you're getting the best deal.</span>
        			<span class="more">We're a nonprofit, so you know you're getting the best deal. You can recieve your item(s) in as few as 2 days for just <strong>$2</strong> or overnight for <strong>$6</strong>.</span>
        		</p>
        	</div>
        	<div class="feature">
        		<img class="feature_image" src="/media/images/more.png">
        		<h3 class="feature_pitch">Get more.</h3>
        		<p class="feature_description">
        			<span class="less">A strategy and advice booklet written by people who've aced it is included free with some tests.</span>
        			<span class="more">A strategy and advice booklet written by people who've aced it is included free with some tests. If you have any questions, just <a href="/contact">email us</a>.</span>
        		</p>
        	</div>
        	<div class="clear"></div>
        </div>
        <div id="testimonials" class="section">
        	<h3 id="testimonial_title">Don't just take our word for it.</h3>
        	<blockquote class="testimonial">
        		<p class="quote"><span class="left_quote">"</span>Lonchu was a lot cheaper than Amazon and my stuff came really fast! I would defientley reccommend them for BayLyfe living.<span class="right_quote">"</span></p>
        		<div class="testimonial_attribution">Diana Chu <a href="facebook.com/diana.chu.94">on Facebook</a></div>
        		<img class="testimonial_image" src="/media/images/example_testimonial.png">
        		<div class="clear"></div>
        	</blockquote>
        	<blockquote class="testimonial">
        		<p class="quote"><span class="left_quote">"</span>Lonchu was a lot cheaper than Amazon and my stuff came really fast!<span class="right_quote">"</span></p>
        		<div class="testimonial_attribution">Shea Conlon <a href="facebook.com/shea.150">on Twitter</a></div>
        		<img class="testimonial_image" src="/media/images/shea_testimonial.png">
        		<div class="clear"></div>
        	</blockquote>
        </div>
        <div id="call" class="section">
        
        </div>

		<script>
			/* Cookies */
			function readCookie(name) {var nameEQ = name + "=";var ca = document.cookie.split(';');for(var i=0;i < ca.length;i++) {var c = ca[i];while (c.charAt(0)==' ') c = c.substring(1,c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length,c.length);}return null;}
			var is_self=readCookie('is_self');
			/* Google Analytics */
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			if(!is_self){
				ga('create', 'UA-43099299-1', 'lonchu.tk');
				ga('send', 'pageview');
			}
			/* Mixpanel */
			(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"===e.location.protocol?"https:":"http:")+'//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f);b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2}})(document,window.mixpanel||[]);
			if(!is_self){
				mixpanel.init("a703eaf99327263262b6e919e5a31674");
				mixpanel.track("Video played", {
					"length": 213,
					"id": "hY7gQr0"
				});
			}
		</script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="/scripts/main.js"></script>
    </body>
</html>