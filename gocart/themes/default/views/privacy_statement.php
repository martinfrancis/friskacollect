<?php include('header.php');?>
	<div class="row">
	<div class="span9">
		<ol>
			<li>Friska Ltd is committed to protecting your privacy and maintaining the security of any personal information received from you. We strictly adhere to the requirements of the data protection legislation in the UK. The purpose of this statement is to explain to you what personal information we collect and how we may use it.</li>
			<li>When you subscribe to our Newsletter, register for a Friska Card or contact our Customer Services team we ask you for your name and email address.</li>
			<li>We use your personal information to reply to you or to keep you updated about new products, services and shops. We will only contact you with your consent.</li>
			<li>We do not sell, rent or exchange your personal information with any third party for commercial reasons.</li>
			<li>We follow strict security procedures in the storage and disclosure of information which you have given us, to prevent unauthorised access in accordance with the UK data protection legislation.<br />
			We do not collect sensitive information about you except when you specifically knowingly provide it. In order to maintain the accuracy of our database, you can check, update or remove your personal details by unsubscribing from the Newsletter/mailing list or contacting Customer Services at any time.<br />
			We use a technology called &ldquo;<a href="cookies" title="cookies">cookies</a>&rdquo; as part of a normal business procedure to track patterns of behaviour of visitors to our site. A cookie is an element of data that our Website sends to your browser which is then stored on your system. You can set your browser to prevent this happening. Any information collected in this way can be used to identify you unless you change your browser settings.</li>
			<li>We will not transfer your information outside the EEA (European Economic Area) without first obtaining your consent.</li>
			<li>If you have any questions about privacy please contact us at <a class="email" href="mailto:<?php echo ($this->config->item('email'));?>"><?php echo ($this->config->item('email'));?></a></li>
		</ol>			
	</div>	
	<div class="span3">
	<p><a href="<?php echo site_url();?>" title="home page"><img src="<?php echo base_url($this->config->item('site_logo'));?>" alt="friska logo"></a></p>
	</div>
	</div>
</div>
<?php include('footer.php');?>
