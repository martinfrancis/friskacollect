</div>
<footer>
<div id="footer_top">
<div class="container">
<div class="row-fluid">
<div class="span3">

<?php //echo base_url('gocart/themes/default');/assets/images/friska_logo.gif ?>

<p><a href="." title="home page"><img src="<?php echo base_url($this->config->item('site_logo'));?>" alt="<?php echo $this->config->item('company_name');?>"></a></p>
</div>
<div class="span6">
	<div class="fb_box">
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1">
		</script>
		<div class="fb-like" data-href="http://www.facebook.com/pages/Friska/270691553092" data-send="true" data-show_faces="true"></div>
		<!--
		<fb:like href="http://www.facebook.com/pages/Friska/270691553092" send="true" width="300" show_faces="true" font="arial"></fb:like>-->
	
	</div>
</div>
<div class="span3">
<p><a class="pull-right btn btn-inverse" href="#top" title="back to top" >top <i class="icon-arrow-up icon-white"></i></a></p>
</div>
</div><!-- /.row -->
</div>
</div>
<div id="footer_main">
<div class="container">
<div class="row-fluid">
<div class="span3">
<h3>Quick Links</h3>
<ul class="unstyled patenfont footer_nav">
	<li><a href="<?php echo site_url();?>" title="home page">Home</a></li>
						<li><a href="#"><?php echo lang('menu');?> <b class="caret"></b></a>
							<ul>
								<?php foreach($this->categories as $cat_menu):?>
								<li><a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
								<?php endforeach;?>
							</ul>
							<?php foreach($this->pages as $menu_page):?>
								<li>
								<?php if(empty($menu_page->content)):?>
									<a href="<?php echo $menu_page->url;?>" <?php if($menu_page->new_window ==1){echo 'target="_blank"';} ?>><?php echo $menu_page->menu_title;?></a>
								<?php else:?>
									<a href="<?php echo site_url($menu_page->slug);?>"><?php echo $menu_page->menu_title;?></a>
								<?php endif;?>
								</li>
							<?php endforeach;?>
							<li><a href="<?php echo site_url('page/location');?>" title="<?php echo lang('location');?>"><?php echo lang('location');?></a></li>
							<?php if($this->Customer_model->is_logged_in(false, false)):?>
							<li class="dropdown">
								<a href="#"><?php echo lang('account');?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo  site_url('secure/my_account');?>"><?php echo lang('my_account')?></a></li>
									<li><a href="<?php echo  site_url('secure/my_downloads');?>"><?php echo lang('my_downloads')?></a></li>
									<li class="divider"></li>
									<li><a href="<?php echo site_url('secure/logout');?>"><?php echo lang('logout');?></a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><a href="<?php echo site_url('secure/login');?>"><?php echo lang('login');?></a></li>
		<?php endif; ?>
	
	
	<li><a href="catering.html" title="corporate catering menu">Catering</a></li>
	<li><a href="contact.html?reason=Contact" title="contact Friska">Contact</a></li>
</ul>
</div>
	<div class="span3">
		<h3>Subscribe</h3>
		<p>Feel Good Offers, Feel Good News, and all the latest Friska good stuff!</p>
		
		
		<p class="visible-desktop"><a href="#myModal" role="button" class="btn" data-toggle="modal">sign up</a></p>
		<p class="hidden-desktop"><a href="newsletter_signup.html" class="btn">sign up</a></p>
		
		
		<h3>We are Social</h3>
		<div id="social_navigation">
			<ul id="social_nav">
				<li id="twitter"><a href="http://twitter.com/friskafood" title="follow Friska on Twitter"><span class="nav_display">twitter</span></a></li>
				<li id="facebook"><a href="http://www.facebook.com/pages/Friska/270691553092?ref=ts" title="follow Friska on Facebook"><span class="nav_display">facebook</span></a></li>
			</ul>
		</div>
		<h3>Friska News</h3>
		<p>Check out the <a href="twitter_feed.html" class="btn">Friska Love <i class="icon-heart"></i></a></p>
	</div>
	<div class="span3">
		<h3>Specials</h3>
		<div class="specials">
		<script type="text/javascript" src="<?php echo base_url('gocart/themes/default');?>/assets/js/specials.js"></script>
		<p><a class="btn" href="soups.html">See all Soups &raquo;</a></p>
		</div>
		<h3>Good Causes</h3>
		<a href="deki.html" title="find out about Deki"><img src="<?php echo base_url('gocart/themes/default');?>/assets/images/deki_logo.png" alt="deki logo"></a>
		
	</div>
<div class="span3">
<h3>Yummy</h3>
<ul class="thumbnails">
              <li class="span5">
                <a href="breakfast.html" title="breakfast" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/the_house_bacon_sandwich.jpg" alt="the_house_bacon_sandwich" />
				</a>
              </li>
			  <li class="span5">
                <a href="breakfast.html" title="breakfast" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/house_eggs.jpg" alt="house_eggs" />
                </a>
              </li>
 </ul>
<ul class="thumbnails">		 
			 <li class="span5">
                <a href="lunch.html" title="lunch" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/chicken_sandwich_wide.jpg" alt="chicken_sandwich_wide" />
                </a>
              </li>
			     <li class="span5">
                <a href="lunch.html" title="lunch" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/falafel_and_hummus_salad_box.jpg" alt="falafel_and_hummus_salad_box" />
                </a>
              </li>
			  </ul>
	<ul class="thumbnails">			  
			  <li class="span5">
                <a href="dinner.html" title="dinner" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/mackerel_salad_wide.jpg" alt="mackerel_salad_wide" />
                </a>
              </li>
			     <li class="span5">
                <a href="soups.html" title="soup" class="thumbnail">
                   <img src="<?php echo base_url('gocart/themes/default');?>/assets/pics_300/minted_spring_green_soup_wide.jpg" alt="minted_spring_green_soup_wide" />
                </a>
              </li>
			  
            </ul>
</div>
</div>
</div>
</div>
<div id="footer_legals">
<div class="container">
<div class="row-fluid">
	<div class="span3">
				<p><a href="." title="home page"><img src="<?php echo base_url($this->config->item('site_logo_alternate'));?>" alt="<?php echo $this->config->item('company_name');?> logo"></a>
			<?php 
			//<a class="btn btn-large pull-right" href="to_do.html">To do</a>
			?>
			</p>
			<p>Copyright &copy; <?php echo $this->config->item('company_name');?> <?php echo date("Y"); ?> </p>
			
	</div>
	<div class="span6">
		<ul class="unstyled patenfont footer_nav">
			<li><a href="cookies.html" title="cookie policy">Cookie Policy</a></li>
			<li><a href="privacy_statement.html" title="privacy statement">Privacy Statement</a></li>
			<li><a href="accessibility.html" title="accessibility statement">Accessibility</a></li>
		</ul>
	</div>
	<div class="span3">
		<p>Phone Numbers can be found on our <a href="contact.html" title="contact">contact</a> page or we can be emailed at
		<a class="email" href="mailto:hello@friskafood.com">hello@friskafood.com</a></p>
	</div>
	
	
</div>
</div>
</div>

<div id="footer_bottom">
<div class="container">
<div class="row-fluid">
  <div class="span9">
	<p>Friska Limited Company Registration Number: 6851798 &amp; VAT Registration Number:  972509792<br />
	Registered Office: Friska Ltd. c/o CV Ross &amp; Co Limited, Unit 1, Office 1, Tower Lane Business Park, Bristol, BS30 8XT</p>
	</div>
	<div class="span3">
	<p><a href="http://www.friskacollect.co.uk/index.php/admin/login" title="admin">Admin</a> | 
	<?php
	//$webguy = array("77.98.149.4");
	//if (in_array ($_SERVER['REMOTE_ADDR'], $webguy)) {
	// The message
	//echo '<a href="http://validator.w3.org/check?uri=referer">Valid HTML5</a> | <a href="http://wave.webaim.org/refer">WAVE</a><span> | </span> Compliant with <a href="http://www.w3.org/TR/WCAG/" title="Web Content Accessibility Guidelines">WCAG Priority 1 &amp; 2</a> and <a href="http://www.section508.gov/" title="Section 508 Of The Rehabilitation Act" >Section 508</a> |	';
	//}
	?>
	<a href="http://validator.w3.org/check?uri=referer">Valid HTML5</a> | <a href="http://wave.webaim.org/refer">WAVE</a><span> | </span> Compliant with <a href="http://www.w3.org/TR/WCAG/" title="Web Content Accessibility Guidelines">WCAG Priority 1 &amp; 2</a> and <a href="http://www.section508.gov/" title="Section 508 Of The Rehabilitation Act" >Section 508</a> |	
	web design by <a href="http://www.martinfrancis.org" title="martin francis">MF</a></p>
	</div>
</div>
</div>
</div>

</footer>


<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
			<h3 id="myModalLabel">Join the Mailing List</h3>
	</div>
				
	<div class="modal-body">
	<form action="http://friskafood.us4.list-manage1.com/subscribe/post?u=fc04aaef4027ef99be2846c71&amp;id=dfe0afa9af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-horizontal validate" target="_blank" novalidate>
		<div class="indicates-required">
			<p class="pull-right"><span class="asterisk">*</span> indicates required</p>
		</div>
		<div class="mc-field-group">
			<div class="control-group">
					<label class="control-label" for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
					<div class="controls"><input type="email" value="" name="EMAIL" placeholder="Email" class="required email" id="mce-EMAIL"></div>
			</div>
		</div>
			
	<div class="mc-field-group input-group">
		<p><strong>Nearest Friska</strong></p>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox" for="mce-group[1041]-1041-0"><input type="checkbox" value="1" name="group[1041][1]" id="mce-group[1041]-1041-0">Victoria Street</label>
				<label class="checkbox" for="mce-group[1041]-1041-1"><input type="checkbox" value="2" name="group[1041][2]" id="mce-group[1041]-1041-1">S Park</label>
				<label class="checkbox" for="mce-group[1041]-1041-2"><input type="checkbox" value="4" name="group[1041][4]" id="mce-group[1041]-1041-2">Queens Road</label>
				<label class="checkbox" for="mce-group[1041]-1041-3"><input type="checkbox" value="8" name="group[1041][8]" id="mce-group[1041]-1041-3">Other</label>	
			</div>	
		</div>
	</div>
	
	<div class="mc-field-group input-group">
		<p><strong>Email Format</strong></p>
		<div class="control-group">
			<div class="controls">
				<label class="radio inline" for="mce-EMAILTYPE-0"><input type="radio" value="html" name="EMAILTYPE" id="mce-EMAILTYPE-0">html</label>
				<label class="radio inline" for="mce-EMAILTYPE-1"><input type="radio" value="text" name="EMAILTYPE" id="mce-EMAILTYPE-1">text</label>
				<label class="radio inline" for="mce-EMAILTYPE-2"><input type="radio" value="mobile" name="EMAILTYPE" id="mce-EMAILTYPE-2">mobile</label>
			</div>
		</div>
	</div>
	
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	
	<div class="clear">
		<div class="pull-right">
		<input type="submit" value="Join Mailing List" name="subscribe" id="mc-embedded-subscribe" class="btn btn-large btn-success">
		</div>
	</div>
	</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-modal.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-dropdown.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-tab.js');?>"></script>
    <script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-button.js');?>"></script>
    <script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-transition.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-alert.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-scrollspy.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-tooltip.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-popover.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-collapse.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-carousel.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-typeahead.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/bootstrap-affix.js');?>"></script>
	<script src="<?php echo base_url('gocart/themes/default/assets/js/application.js');?>"></script>
     <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
<!-- Start of StatCounter Code -->



<!-- End of StatCounter Code -->
<!-- Hosted and Built by http://www.martinfrancis.org. Design - Martin Francis  -->
	
</body>
</html>
 