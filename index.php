<?php
	include('lib/_init_.php');
	init();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Cedar Ridge</title>
	
	<link type="text/css" rel="stylesheet" href="res/css.css" />
	<link type="text/css" rel="stylesheet" href="engine1/style.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="res/gal/galleria-1.2.5.min.js"></script>
	<script type="text/javascript" src="res/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="res/js.js"></script>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	
</head>

<body>
	<div class="header">
		
		<div class="head-info">
			1205 18th Street<br>
			Woodward, OK 73802<br>
			ofc (580) 254-8066<br>
			fax (580) 256-8346<br>
			<a href="mailto:info@cedarridgegc.net">info@CedarRidgeGC.net</a>
		</div>
	</div>
	<div class="coaster-bar" id="bar">
		<div class="best-bar-link point" onclick="barScrollAtIndex(0)"></div>
		<div class="build-bar-link point" onclick="barScrollAtIndex(1)"></div>
		<div class="world-bar-link point" onclick="barScrollAtIndex(2)"></div>
		<div class="contact-bar-link point" onclick="barScrollAtIndex(3)"></div>
		<div class="login-bar-link point" onclick="jsLink('conf.php')"></div>
		<div class="clear"></div>
	</div>
	<div class="rails-container">
		
		<div class="inner-header">
			<div class="inner-indicator best-bar"></div>
		</div>
		
		<div class="project-gallery inner">
			<h3>We Offer the BEST in Industrial Construction</h3>
			<center>
				<!-- Start WOWSlider.com BODY section -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/012.jpg" alt="012" title="012" id="wows1_0"/></li>
<li><img src="data1/images/dsc00408.jpg" alt="DSC00408" title="DSC00408" id="wows1_1"/></li>
<li><img src="data1/images/dsc00421.jpg" alt="DSC00421" title="DSC00421" id="wows1_2"/></li>
<li><img src="data1/images/construction_photo_004.jpg" alt="construction_photo_004" title="construction_photo_004" id="wows1_3"/></li>
<li><img src="data1/images/construction_photo_002.jpg" alt="construction_photo_002" title="construction_photo_002" id="wows1_4"/></li>
<li><img src="data1/images/003.jpg" alt="003" title="003" id="wows1_5"/></li>
<li><img src="data1/images/005.jpg" alt="005" title="005" id="wows1_6"/></li>
<li><img src="data1/images/006.jpg" alt="006" title="006" id="wows1_7"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="012"><img src="data1/tooltips/012.jpg" alt="012"/>1</a>
<a href="#" title="DSC00408"><img src="data1/tooltips/dsc00408.jpg" alt="DSC00408"/>2</a>
<a href="#" title="DSC00421"><img src="data1/tooltips/dsc00421.jpg" alt="DSC00421"/>3</a>
<a href="#" title="construction_photo_004"><img src="data1/tooltips/construction_photo_004.jpg" alt="construction_photo_004"/>4</a>
<a href="#" title="construction_photo_002"><img src="data1/tooltips/construction_photo_002.jpg" alt="construction_photo_002"/>5</a>
<a href="#" title="003"><img src="data1/tooltips/003.jpg" alt="003"/>6</a>
<a href="#" title="005"><img src="data1/tooltips/005.jpg" alt="005"/>7</a>
<a href="#" title="006"><img src="data1/tooltips/006.jpg" alt="006"/>8</a>
</div></div>
<!-- Generated by WOWSlider.com v2.5 -->
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
			</center>
			<!--
<div class="pics">
				<div class="gallery" id="gallery">
					<?php
						for($i=1; $i<28; $i++){
							echo("<img src=\"res/gal/img/cr$i.jpg\" />");
						}
					?>
				</div>
			</div>
-->
			<div class="clear padding30"></div>
			<p>We have a growing list of satisfied clients who choose Cedar Ridge General Contracting & Construction to fulfill their building needs. Check back from time to time for updates to our gallery.</p>
			
			<div class="return-to-top js-link" onclick="barScrollAtIndex('top')">Back to Top</div>
		</div>
		
		<div class="inner-header">
			<div class="inner-indicator build-bar"></div>
		</div>
		
		<div class="about inner">
			<h3>Cedar Ridge General Contracting & Construction<br>
			Building a Better World</h3>
			<p>Cedar Ridge General Contracting & Construction is all about you. We exist to help you build the perfect residential, industrial or commercial facility - on schedule and on target. Our team of professionals can tackle a wide variety of projects - residential structures, oilfield industrial facilities, factories, shopping centers, even Class I, Div 2 facilities. Moreover, we always go above and beyond to meet and exceed customer expectations.</p>
			<p>Our passionate and dedicated team will work with you to develop the ideal design to fit your needs. And with our ability to "design on the fly," we can adapt to the most challenging circumstances in order to bring your project in on time and under budget. If you need it done right Cedar Ridge General Contracting & Construction delivers!</p>
			<div class="return-to-top js-link" onclick="barScrollAtIndex('top')">Back to Top</div>
		</div>
		
		<div class="inner-header">
			<div class="inner-indicator world-bar"></div>
		</div>
		
		<div class="world-wide inner">
			<h3>Worldwide Service</h3>
			<div class="world-map"></div>
			<p>Cedar Ridge General Contracting & Construction is a worldwide builder. Our home office is based in the heart of the United States in Woodward, Oklahoma, but our service is without borders. Have a project in mind? Don't hesitate to give us a call. Guaranteed, we can help you work out the right solution to your problem. Big or small and around the globe, we are industry leaders who are here for you!</p>
			<div class="return-to-top js-link" onclick="barScrollAtIndex('top')">Back to Top</div>
		</div>
		
		<div class="inner-header">
			<div class="inner-indicator contact-bar"></div>
		</div>
	
		<div class="contact-us">
			<h3>Contact Us Today!</h3>
			<div class="map">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;safe=off&amp;ie=UTF8&amp;q=cedar+ridge+general+contracting&amp;fb=1&amp;gl=us&amp;hq=cedar+ridge+general+contracting&amp;cid=0,0,2099290637036765633&amp;sqi=2&amp;t=m&amp;vpsrc=6&amp;ll=36.436976,-99.402452&amp;spn=0.006042,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?hl=en&amp;safe=off&amp;ie=UTF8&amp;q=cedar+ridge+general+contracting&amp;fb=1&amp;gl=us&amp;hq=cedar+ridge+general+contracting&amp;cid=0,0,2099290637036765633&amp;sqi=2&amp;t=m&amp;vpsrc=6&amp;ll=36.436976,-99.402452&amp;spn=0.006042,0.00912&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</div>
			<div class="contact-copy">
			 	Cedar Ridge General<br>
			 	Contracting & Construction, LLC<br>
			 	P.O. Box 1689<br>
			 	Woodward, OK 73802<br>
			 	ofc (580) 254-8066<br>
				fax (580) 256-8346<br>
				<a href="mailto:info@cedarridgegc.net">info@CedarRidgeGC.net</a>
			</div>
			<div class="clear"></div>
			<div class="return-to-top js-link" onclick="barScrollAtIndex('top')">Back to Top</div>
		</div>
		
	</div>
	<div class="footer">
		<div class="footer-content">
			&copy;<?php echo date('Y'); ?> Cedar Ridge General Contracting & Construction, LLC | site by <a href="http://quietsight.com">Quiet Sight Inc</a>
		</div>
	</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25981600-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4fd42ff7613f5d4d08000079');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>

</body>
</html>