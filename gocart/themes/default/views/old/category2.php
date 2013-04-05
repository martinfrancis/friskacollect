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
					<?php
                            $products = $this->Product_model->get_products($subcategory->id); 
                        ?>
						<?php if(count($products) > 0):
                            foreach ($products as &$p)
                            {
                                    $p->images    = (array)json_decode($p->images);
                                    $p->options    = $this->Option_model->get_product_options($p->id);
                            }?>
							<br style="clear:both;"/>
                <ul class="thumbnails category_container">
                <?php foreach($products as $product):?>
                    <li class="span3 product">
                        <?php
                        $photo    = theme_img('no_picture.png', lang('no_image_available'));
                        $product->images    = array_values($product->images);
                
                        if(!empty($product->images[0]))
                        {
                            $primary    = $product->images[0];
                            foreach($product->images as $photo)
                            {
                                if(isset($photo->primary))
                                {
                                    $primary    = $photo;
                                }
                            }

                            $photo    = '<img src="'.base_url('uploads/images/thumbnails/'.$primary->filename).'" alt="'.$product->seo_title.'"/>';
                        }
                        ?>
                        <a class="thumbnail" href="<?php echo site_url(implode('/', $base_url).'/'.$product->slug); ?>">
                            <?php echo $photo; ?>
                        </a>
                        <h5 style="margin-top:5px;"><a href="<?php echo site_url(implode('/', $base_url).'/'.$product->slug); ?>"><?php echo $product->name;?></a></h5>
                        <?php if($product->excerpt != ''): ?>
                        <div class="excerpt"><?php echo $product->excerpt; ?></div>
                        <?php endif; ?>
                        <div>
                        <div>
                            <?php if($product->saleprice > 0):?>
                                <span class="price-slash"><?php echo lang('product_reg');?> <?php echo format_currency($product->price); ?></span>
                                <span class="price-sale"><?php echo lang('product_sale');?> <?php echo format_currency($product->saleprice); ?></span>
                            <?php else: ?>
                                <span class="price-reg"><?php echo lang('product_price');?> <?php echo format_currency($product->price); ?></span>
                            <?php endif; ?>
                        </div>
                            <?php if((bool)$product->track_stock && $product->quantity < 1) { ?>
                                <div class="stock_msg"><?php echo lang('out_of_stock');?></div>
                            <?php } ?>
                        </div>
                
                    </li>
                <?php endforeach?>
                </ul>
						
							
               
					
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