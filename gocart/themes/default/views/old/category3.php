<?php include('header.php'); ?>
	<div class="bs-docs-sidebar hidden-desktop">
        <ul class="nav nav-list bs-docs-sidenav">
        <?php foreach($this->categories as $cat_menu):?>
		<li <?php if ($page_title==$cat_menu['category']->name) { ?> class="active" <?php } ?>><i class="icon-chevron-right"></i>
		<a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
		<?php endforeach;?>
		  
        </ul>
    </div>
	
	<ul class="nav nav-tabs visible-desktop">
		<?php foreach($this->categories as $cat_menu):?>
		<li <?php if ($page_title==$cat_menu['category']->name) { ?> class="active" <?php } ?>>
		<a href="<?php echo site_url($cat_menu['category']->slug);?>"><?php echo $cat_menu['category']->name;?></a></li>
		<?php endforeach;?>
	</ul>
	
	<div class="page-header">
		<h1><?php echo $page_title; ?></h1>
	</div>
		
	<?php if(!empty($category->description)): ?>
	<div class="row">
		<div class="span12"><?php echo $category->description; ?></div>
	</div>
	<?php endif; ?>
	
	
		
	<?php if((!isset($subcategories) || count($subcategories)==0) && (count($products) == 0)):?>
		<div class="alert alert-info">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo lang('no_products');?>
		</div>
	<?php endif;?>
		
	<div class="row">
		<?php //if(isset($subcategories) && count($subcategories) > 0): ?>
		<div class="span3">
				<p>Pictures to go here or more information about <?php echo $page_title; ?></p>
		</div>
		
		<div class="span9">
		<?php //else:?>
			<!--<div class="span12">-->
		<?php //endif;?>
			
			
			<?php if(isset($subcategories) && count($subcategories) > 0): ?>
				<?php foreach($subcategories as $subcategory):?>
					<h2><a href="<?php echo site_url(implode('/', $base_url).'/'.$subcategory->slug); ?>"><?php echo $subcategory->name;?></a></h2>
					<p>Subcategory ID: <?php echo $subcategory->id;?></p>
					<p>A list of subcategory items here!!</p>
					
				<?php endforeach;?>
				
		<?php else:?>
			<!--<div class="span12">-->
		<?php endif;?>
					
			<?php if(count($products) > 0):?>
				<table class="table">
				<?php foreach($products as $product):?>
					<tr>
					<td><a href="<?php echo site_url(implode('/', $base_url).'/'.$product->slug); ?>"><?php echo $product->name;?></a>
						<?php if($product->excerpt != ''): ?>
						<br /><span class="muted"><small><?php echo $product->excerpt; ?></small></span>
						<?php endif; ?>
					</td>	
					<td>	
					<span class="pull-right">	
							<?php if($product->saleprice > 0):?>
								<span class="price-slash"><?php echo lang('product_reg');?> <?php echo format_currency($product->price); ?></span>
								<span class="price-sale"><?php echo lang('product_sale');?> <?php echo format_currency($product->saleprice); ?></span>
							<?php else: ?>
								<span class="price-reg"><?php //echo lang('product_price');?> <?php echo format_currency($product->price); ?></span>
							<?php endif; ?>
						
		                    <?php if((bool)$product->track_stock && $product->quantity < 1) { ?>
								<br /><span class="warning"><?php echo lang('out_of_stock');?></span>
							<?php } ?>
					</span>
					</td>		
				
					
					</tr>
				<?php endforeach?>
				</table>
				
			<?php endif;?>
									
			
			
		</div><!-- end of span -->
		
	</div><!-- end of row -->

	
	
	
<script type="text/javascript">
	window.onload = function(){
		$('.product').equalHeights();
	}
</script>
<?php include('footer.php'); ?>