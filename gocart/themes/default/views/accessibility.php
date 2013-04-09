<?php include('header.php');?>

	<div class="row">
	<div class="span9">
	<p>At Friska we want everyone to enjoy our website as much as they enjoy our food and we know that many people have difficulty in using the web.<br />
	We believe in doing things differently, doing things better, and we hope we have made a website that everyone can use. We&lsquo;ve tried our best to make our site accessible to as many people as possible and work with all kinds of technology from screen readers to iPads. (Yes, we think about Apple users too.)<br />
	If you have difficulty accessing some of our content, please let us know and we will do our best to sort it out.</p>
	<p>Phone Numbers can be found on our <a href="contact" title="contact">contact</a> page or we can be emailed at
	<a class="email" href="mailto:<?php echo ($this->config->item('email'));?>"><?php echo ($this->config->item('email'));?></a>
	</p>
	<hr />
	<h2>A bit more about accessibility</h2>
	
	<h3>Standards Compliance</h3>
	<ul>
	<li>All the pages on this site comply with priority 1,2 and some priority 3 guidelines of the W3 Web Content Accessibility Guidelines (WCAG 1.0) and Section 508 of the United States Workforce Rehabilitation Act of 1973</li>
	<li>Our HTML uses meaningful mark&ndash;up to ensure our site works across the majority of browsers and other devices.</li>
	<li>Our site uses the latest CSS (Cascading Style Sheets) to control and maintain the presentation, look and feel. If your browser does not support CSS, or if you have disabled CSS styling, the visual presentation will be affected but all the content will still be readable.</li>
	<li>All links use the 'TITLE' attribute to help describe the destination page in greater detail. Users with screen readers may need to set their screen reader options to use this feature.</li>
	<li>All content images used in this site include descriptive ALT attributes. Purely decorative graphics include null ALT attributes. Complex images include LONGDESC attributes or inline descriptions to explain the significance of each image to non-visual readers.</li>
	</ul>
	<hr />
	<h3>Increasing text size</h3>
	<p>This site uses only relative font sizes, compatible with the user-specified &ldquo;text size&rdquo; option in visual browsers. Some users might find screen text easier to read by increasing the size at which text is displayed. To do this you should simply adjust your browser's settings:</p> 
	<ol>
		<li>If you use <strong>Microsoft Internet Explorer</strong>, go to the View menu, select Text Size and then either Larger or Largest.</li>
		<li>If you use <strong>Firefox</strong>, go to the View menu, select Text Size and then either Increase Ctrl + +, Decrease Ctrl + - or Normal Ctrl + 0.</li>
		<li>If you use <strong>Opera</strong>, go to the Tools menu, select Preferences then click on the Web pages tab. Select the normal font button. A dialogue box appears and provides options to increase/decrease font size, font type, weight and style.</li>
		<li>If you use <strong>Netscape Navigator</strong>, go to the View menu and choose Increase Font until the text is the size you require.</li>
	</ol>
	<!--
	<hr />
	<p><strong>Access Keys:</strong><br />Access Keys are special commands that most web browsers support, allowing you to link to specific pages by typing rather than relying on a pointer device like a mouse:
	</p>
	<ul>
		<li>Firefox Users: Alt + Shift + access key</li>
		<li>IE7 &amp; 6: Alt + access key (release both keys) + Enter</li>
		<li>Safari: Control + access key</li>
	</ul>
	-->
	
	<hr />
	<h3>Accessibility references</h3> 
	<ol>
		<li>W3 accessibility <a href="http://www.w3.org/TR/WCAG10/" target="_blank">guidelines</a>, which explains the reasons behind each guideline.</li>
		<li>W3 accessibility <a href="http://www.w3.org/TR/WCAG10-TECHS/" target="_blank">techniques</a>, which explains how to implement each guideline.</li>
		<li>W3 accessibility <a href="http://www.w3.org/TR/WCAG10/full-checklist.html" target="_blank">checklist</a>, a busy developers' guide to accessibility.</li>
		<li>U.S. Federal Government <a href="http://www.section508.gov/index.cfm?FuseAction=Content&amp;ID=11#web" target="_blank">Section 508</a> accessibility guidelines.</li>
	</ol>
	<p>The references above relate to WCAG 1.0 (Web Content Accessibiity Guidelines). WCAG 2.0 is currently in draft form and we are monitoring its' development.</p>
	<hr />
	<h3>Accessibility software and services</h3> 
	<ol>
		<li><a href="http://validator.w3.org/" target="_blank">HTML Validator</a>,a free service for checking that web pages conform to published HTML standards.</li>
		<li><a href="http://www.delorie.com/web/wpbcv.html" target="_blank">Web Page Backward Compatibility Viewer</a>, a tool for viewing your web pages without a variety of modern browser features.</li>
		<li><a href="http://www.freedomscientific.com/fs_products/software_jaws.asp" target="_blank">JAWS</a>, a screen reader for Windows. A time-limited demo is available.</li>
		<li><a href="http://lynx.browser.org/" target="_blank">Lynx</a>, a free text-only web browser.</li>
	</ol>
				
	</div>	
	<div class="span3">
	<p><a href="<?php echo site_url();?>" title="home page"><img src="<?php echo base_url($this->config->item('site_logo'));?>" alt="friska logo"></a></p>
	</div>
	</div>

<?php include('footer.php');?>