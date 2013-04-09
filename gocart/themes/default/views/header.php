<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(isset($meta)):?>
<?php echo $meta; ?>
<?php else:?>
<meta name="Keywords" content="Sandwiches, Fast Food, Office Delivery, Office Catering, Hot Food, Cold Food, Lunch,Breakfast, Coffee, Local, Seasonal, Ethical, Bristol, Victoria Street, Victoria Street, Fairtrade">
<meta name="Description" content="Healthy Fast Food Restaurant offering seasonal, ethically sourced fresh food to eat in or take away. Friska also offers office catering for business breakfasts and lunches.">
<?php endif;?>
<?php echo theme_css('bootstrap.css', true);?>
<?php echo theme_css('bootstrap-responsive.css', true);?>
<?php echo theme_css('docs.css', true);?>
<?php echo theme_css('stylesheet.css', true);?>


<?php //echo theme_js('jquery.js', true);?>
<?php //echo theme_js('bootstrap.min.js', true);?>
<?php //echo theme_js('squard.js', true);?>
<?php //echo theme_js('equal_heights.js', true);?>

<!-- favicon and touch icons for bookmarking -->
<link rel="shortcut icon" href="<?php echo base_url('gocart/themes/default/assets/ico/favicon.ico');?>">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('gocart/themes/default/assets/ico/apple-touch-icon-144-precomposed.png');?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('gocart/themes/default/assets/ico/apple-touch-icon-114-precomposed.png');?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('gocart/themes/default/assets/ico/apple-touch-icon-72-precomposed.png');?>">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('gocart/themes/default/assets/ico/apple-touch-icon-57-precomposed.png');?>">

<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>
</head>

<body>
<header id="top">
	<div class="container navbar-wrapper">
      <div class="navbar">
        <div class="navbar-inner">
 			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo site_url();?>">
				
				<img src="<?php echo base_url($this->config->item('site_logo'));?>" alt="<?php echo $this->config->item('company_name');?> logo" />
				</a>
				<div class="nav-collapse">
					<ul class="nav pull-right">
						<li><?php echo form_open('cart/search', 'class="navbar-search pull-right form-search"');?>
							<label for="term" class="form-search hide">Search Term</label>
							<input type="text" id="term" name="term" class="search-query span2" placeholder="<?php echo lang('search_menu');?>"/></form>
						</li>
						<li><a href="<?php echo site_url();?>" title="go to <?php echo lang('home');?> page"><?php echo lang('home');?></a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('menu');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
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
							<li><a href="<?php echo site_url('page/location');?>" title="go to <?php echo lang('location');?> page"><?php echo lang('location');?></a></li>
							<?php if($this->Customer_model->is_logged_in(false, false)):?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('account');?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url('secure/my_account');?>"><?php echo lang('my_account')?></a></li>
									<!--<li><a href="<?php //echo site_url('secure/my_downloads');?>"><?php// echo lang('my_downloads')?></a></li>-->
									<li class="divider"></li>
									<li><a href="<?php echo site_url('secure/logout');?>"><?php echo lang('logout');?></a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><a href="<?php echo site_url('secure/login');?>"><?php echo lang('login');?></a></li>
						<?php endif; ?>
							
					</ul>
				</div>
			</div>
			<p class="pull-right visible-desktop">					
				<a href="<?php echo site_url('cart/view_cart');?>"><i class="icon-shopping-cart"></i>
						<?php
							if ($this->go_cart->total_items()==0){
								echo lang('empty_cart');}
								else{
								if($this->go_cart->total_items() > 1){
									echo sprintf (lang('multiple_items'), $this->go_cart->total_items());}
										else{
												echo sprintf (lang('single_item'), $this->go_cart->total_items());
											}
										}
						?>
						</a>
			</p>
			<p class="cart pull-left hidden-desktop">					
				<a href="<?php echo site_url('cart/view_cart');?>"><i class="icon-shopping-cart"></i>
						<?php
							if ($this->go_cart->total_items()==0){
								echo lang('empty_cart');}
								else{
								if($this->go_cart->total_items() > 1){
									echo sprintf (lang('multiple_items'), $this->go_cart->total_items());}
										else{
												echo sprintf (lang('single_item'), $this->go_cart->total_items());
											}
										}
						?>
						</a>
			</p>
		</div>
	</div>
</header>
	
	<div class="container">
		
		<div class="row hidden-desktop">
			<div class="span12">
				<?php if(!empty($base_url) && is_array($base_url)):?>
				<ul class="breadcrumb">
						<?php
						$url_path	= '';
						$count	 	= 1;
						foreach($base_url as $bc):
							$url_path .= '/'.$bc;
							if($count == count($base_url)):?>
								<li class="active"><?php echo $bc;?></li>
							<?php else:?>
								<li><a href="<?php echo site_url($url_path);?>"><?php echo $bc;?></a></li> <span class="divider">/</span>
							<?php endif;
							$count++;
						endforeach;?>
 				</ul>
				<?php endif;?>
			</div>
		</div>
				
		<?php if ($this->session->flashdata('message')):?>
			<div class="alert alert-info">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif;?>
		
		<?php if ($this->session->flashdata('error')):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('error');?>
			</div>
		<?php endif;?>
		
		<?php if (!empty($error)):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $error;?>
			</div>
		<?php endif;?>
		
		

<?php
/*
End header.php file
*/