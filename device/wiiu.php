<?php include('../module/head.php');?>

<body class="section-device">

<?php include('../module/nav-primary.php');?>

<section class="container-fluid">
	
	<div class="row-fluid">
		
		<div class="span3">
			<?php include('../module/nav-secondary.php');?>
		</div>
		
		<div class="span9">
		
			<h1 class="page-header">Nintendo Wii U</h1>
			
			<p class="lead browser browser-webkit">NetFront® Browser NX v2.1 (WebKit)</p>
			
			<div class="row-fluid">
				
				<div class="span6">
			
					<img src="../image/wiiu-controller.png" alt="Diagram of the Wii U Controller" />
				
				</div>
				
				<div class="span6">
					
					<p>Released on November 18th 2013 in the US, November 30th in the UK. First mainstream second screen device. Nintendo's fifth attempt at a console browser.</p>
					
					<p>Consists of the TV console, and a wireless controller called a gamepad. The gamepad has a resistive touchscreen on the front. It comes with a stylus.</p>
					
					<p>Has 2GB of memory on board – 1GB dedicated to games, 1GB to the system.</p>
					
					<p>Up to 6 tabs can be open at once.</p>
					
					<p>The gamepad can be used as a remote control for the TV.</p>
				
					<aside><p><a href="http://en.wikipedia.org/wiki/Wii_U">More about the Wii U on Wikipedia</a></p></aside>
					
					<aside><p><a href="http://24ways.org/2012/unwrapping-the-wii-u-browser">Article about the Wii U browser on 24 Ways</a></p></aside>
					
				</div>
			
			</div>
			
			<div class="row-fluid">
			
				<div class="span4 well">
					<h3>HTML5 Test: 258/500</h3>
					<div class="progress progress-danger">
					  <div class="bar" style="width: 51.6%"></div>
					</div>
					<p>As of December 2012.</p>
					<p>Source: <a href="http://html5test.com">html5test.com</a></p>
				</div>
				
				<div class="span4 well">
					<h3>CSS3 Test: 48%</h3>
					<div class="progress progress-info">
					  <div class="bar" style="width: 48%"></div>
					</div>
					<p>As of December 2012.</p>
					<p>Source: <a href="http://css3test.com">css3test.com</a></p>
				</div>
				
				<div class="span4 well">
					<h3>Acid3 Test: 100%</h3>
					<div class="progress progress-success">
					  <div class="bar" style="width: 100%"></div>
					</div>
					<p>As of December 2012.</p>
					<p>Source: <a href="http://acid3.acidtests.org/">acid3.acidtests.org</a></p>
				</div>
			
			</div>
			
			<h2 class="page-header">Support Details</h2>
			
			<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, March 2013</p></aside>
			
			<table class="table table-striped">
				<tr>
					<th>Operating System</th>
					<td>unknown unknown</td>
				</tr>
				<tr>
					<th>Screen Resolution</th>
					<td>854 x 480</td>
				</tr>
				<tr>
					<th>Web Browser</th>
					<td>Safari -- <span class="muted">Actually NetFront</span></td>
				</tr>
				<tr>
					<th>Browser Size</th>
					<td>980 x 514</td>
				</tr>
				<tr>
					<th>Color Depth</th>
					<td>32</td>
				</tr>
				<tr>
					<th>Javascript</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>Flash Version</th>
					<td>Not Installed</td>
				</tr>
				<tr>
					<th>Cookies</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>User Agent</th>
					<td><code>Mozilla/5.0 (Nintendo WiiU) AppleWebKit/534.52 (KHTML, like Gecko) NX/2.1.0.8.23 NintendoBrowser/1.1.0.7579.EU</code></td>
				</tr>
			</table>
			
			<aside><p>Source: <a href="http://www.nintendo.com/wiiu/built-in-software/browser-specs/">Nintendo.com: Wii U Internet Browser Specs</a>, February 2014</p></aside>
			
			<table class="table table-striped">
				<tr>
					<th>Supported Protocols</th>
					<td>HTTP1.0/HTTP1.1/SSL3.0/TLS1.0/TLS1.1/TLS1.2</td>
				</tr>
				<tr>
					<th>Supported Web Standards</th>
					<td>
					    <ul>
					        <li>HTML4.01</li>
					        <li>HTML5</li>
					        <li>XHTML1.1</li>
					        <li>CSS1</li>
					        <li>CSS2.1/CSS3 (partial functionality)</li>
					        <li>DOM1-3</li>
					        <li>ECMAScript</li>
					        <li>XMLHttpRequest</li>
					        <li>canvas</li>
					        <li>Video</li>
					        <li>Web Storage (partial functionality)</li>
					        <li>Web Messaging</li>
					        <li>Server-Sent Events</li>
					        <li>Device Orientation</li>
					        <li>WOFF</li>
					        <li>SVG</li>
					        <li>WebSocket</li>
					        <li>Video Subtitle</li>
					        <li>Fullscreen</li>
					    </ul>
					</td>
					<tr>
						<th>Plugins</th>
						<td>Does not support plug-ins, such as Adobe Flash.</td>
					</tr>
					<tr>
						<th>TouchEvent</th>
						<td>The browser supports only one of these at a time: touchstart, touchend, touchmove, touchcancel</td>
					</tr>
					<tr>
						<th>Screen resolution</th>
						<td>
						    <ul>
						        <li>If it isn’t specified, width is 980px layout</li>
						        <li>It is possible to specify width/height of the viewport within the HTML’s <code>&lt;head&gt;...&lt;/head&gt;</code>, and specify scaling permission via user-scalable meta tags. <code>&lt;meta name="viewport" content="width=device-width, user-scalable=no"/&gt;</code></li>
						    </ul>
						</td>
					</tr>
					<tr>
						<th>Saving of image/video</th>
						<td>Not supported</td>
					</tr>
					<tr>
						<th>Video Format</th>
						<td>MP4, M3U8+TS(HTTPLiveStreaming) (Some videos may not be playable.)</td>
					</tr>
					<tr>
						<th>Video Codec</th>
						<td>H.264 - MPEG-4 AVC Video (Some videos may not be playable.)</td>
					</tr>
					<tr>
						<th>Audio Codec</th>
						<td>AAC - ISO/IEC 14496-3 MPEG-4 AAC (Some audio may not be playable.)</td>
					</tr>
				</tr>
			</table>
			
			<h2 class="page-header">Inputs</h2>
		
			<figure>
				<a href="../image/diagram-wiiu.png">
					<img src="../image/diagram-wiiu.png" alt="diagram of the Wii U controller"/>
					<figcaption>
						<p><i class="icon icon-resize-full"></i> See big version</p>
					</figcaption>
				</a>
			</figure>
		
			<h3>Primary Controller</h3>
		
			<p><a href="http://en.wikipedia.org/wiki/Wii_U_GamePad">Wii U Gamepad</a>, the main controller for the Wii U. Has a headphone port and speakers. Has motion sensing capabilities, a touchscreen, microphone, gyroscope, accelerometer and magnetometer.</p>
			
			<h2 class="page-header">Photos</h2>
							
			<div class="thumbnails flickr">
				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=3&display=latest&size=m&layout=h&context=in%2Fpool-2101283%40N20%2F&source=group_tag&group=2101283%40N20&tag=wiiu">
				</script>
			</div>
		
			<p class="quiet">See more on <a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a> in the <a href="http://www.flickr.com/groups/2101283@N20/pool/tags/wiiu">Game console browsers pool tagged with wiiu</a></p>
			
			<h2 class="page-header">Links</h2>
			
			<ul>
				<li><a href="http://iwataasks.nintendo.com/interviews/#/wiiu/internet-browser/0/0">Interview with Nintendo about the Wii U browser</a></li>
				<li><a href="http://en.wikipedia.org/wiki/Wii_U_Internet_Browser">Wii U browser on Wikipedia</a></li>
				<li><a href="http://wiiubrew.org/wiki/Internet_Browser#Wii_U_Scripting_Functionality">Wii U javascript documentation</a></li>
				<li><a href="http://www.nintendo.co.jp/wiiu/hardware/features/internetbrowser/sample.html">Wii U javascript demo</a></li>
			</ul>
					
		</div><!-- .span9 -->
	
	</div><!-- .row-fluid -->

</section>

<?php include('../module/foot.php');?>

</body>

</html>