<?php include('header.php'); ?>
    <div class="bs-docs-sidebar hidden-desktop">
        <ul class="nav nav-list bs-docs-sidenav">
		<!-- Navlist for mobiles at tablets -->
        <?php foreach($this->categories as $cat_menu):?>
			<li <?php if ($page_title==$cat_menu['category']->name) { ?> class="active" <?php } ?>><i class="icon-chevron-right"></i>
			<a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
		<?php endforeach;?>
		</ul>
    </div>
	<ul class="nav nav-tabs visible-desktop">
	<!-- tabs for desktop only -->
		<?php foreach($this->categories as $cat_menu):?>
			<li <?php if ($page_title==$cat_menu['category']->name) { ?> class="active" <?php } ?>>
			<a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
		<?php endforeach;?>
	</ul>
	
	<div class="page-header">
        <h1><?php echo $page_title; ?></h1>
    </div>
       
    <?php if((!isset($subcategories) || count($subcategories)==0)):?>
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert">×</a>
            <?php echo lang('no_products');?>
        </div>
    <?php endif;?>
    
    <div class="row">
		<div class="span3">
				<p>Pictures to go here or more information about <?php echo $page_title; ?></p>
		</div>
	
		<div class="span6">
            <?php if(isset($subcategories) && count($subcategories) > 0): ?>
					<?php foreach($subcategories as $subcategory):?>
                    <h2><?php echo $subcategory->name;?></h2>
					 <p class="muted"><?php echo $subcategory->description;?></p>
						<?php $products = $this->Product_model->get_products($subcategory->id); ?>
						<?php if(count($products) > 0):  ?>
							<table class="table menu_items">                         
								<?php foreach($products as $product):?>
								<tr>
									<td>
										<a href="<?php echo site_url(implode('/', $base_url).'/'.$product->slug); ?>"><?php echo $product->name;?></a>
										<?php if($product->excerpt != ''): ?>
										<br /><span class="muted"><small><?php echo $product->excerpt; ?></small></span>
										<?php endif; ?>
									</td>
									<td>
									<?php if((bool)$product->track_stock && $product->quantity < 1) { ?>
												<span class="text-error stock_msg"><strong><?php echo lang('out_of_stock');?></strong></span>
											<?php } ?>
									<span class="pull-right">	  
											<?php if($product->saleprice > 0):?>
												<span class="price-slash muted"><small><?php echo lang('product_reg');?> <?php echo format_currency($product->price); ?></small></span>
												<span class="price-sale"><strong><?php echo lang('product_sale');?> <?php echo format_currency($product->saleprice); ?></strong></span>
											<?php else: ?>
												<span class="price-reg"><?php //echo lang('product_price'); No need for the word Price ?> 
												<?php echo format_currency($product->price); // Currency type set in gocart/config/gocart.php ?></span>
											<?php endif; ?>
									</span>
									</td>	
								</tr>
								<?php endforeach // end of foreach($products as $product) ?>
							</table>
						<?php endif; // end of if(count($products) > 0):?>
					<?php endforeach; // end of foreach($subcategories as $subcategory): ?>
			
			<?php endif; // end of if(isset($subcategories) && count($subcategories) > 0): ?>
				
			<?php 
			if ($page_title=='Dinner'): 
			$a="Kids";$b=13;
			include('product_view.php'); 
			endif;
			?>
			
		</div>

		<div class="span3">
				<?php
				if (($page_title=='Breakfast') ||($page_title=='Sundries/Sides')): 
				//if ($page_title=='Breakfast'): 
				$a="Friska Coffee";$b=31;
				include('product_view.php'); 
				$a="Hot Chocolate";$b=32;
				include('product_view.php'); 
				$a="Coffee Alternatives";$b=33;
				include('product_view.php'); 
				$a="Loose Leaf Teas";$b=34;
				include('product_view.php'); 
				$a="Hot Drink Extras";$b=35;
				include('product_view.php'); 
				else:
				$a="Sides";$b=40;
				include('product_view.php'); 		
				$a="Snacks";$b=38;
				include('product_view.php'); 		
				$a="Cakes";$b=39;
				include('product_view.php'); 
				endif;
				?>
		</div>
	</div>		
<?php include('footer.php'); ?>
