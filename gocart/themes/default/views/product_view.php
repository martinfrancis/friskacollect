<h2><?php echo $a; ?></h2>
						<?php $aproducts = $this->Product_model->get_products($b); ?>
								<table class="table menu_items">                         
								<?php foreach($aproducts as $aproduct):?>
								<tr>
									<td>
										<a href="<?php echo site_url(implode('/', $base_url).'/'.$aproduct->slug); ?>"><?php echo $aproduct->name;?></a>
										<?php if($aproduct->excerpt != ''): ?>
										<br /><span class="muted"><small><?php echo $aproduct->excerpt; ?></small></span>
										<?php endif; ?>
									</td>
									<td>
									<?php if((bool)$aproduct->track_stock && $aproduct->quantity < 1) { ?>
												<span class="text-error stock_msg"><strong><?php echo lang('out_of_stock');?></strong></span>
											<?php } ?>
									<span class="pull-right">	  
											<?php if($aproduct->saleprice > 0):?>
												<span class="price-slash muted"><small><?php echo lang('product_reg');?> <?php echo format_currency($aproduct->price); ?></small></span>
												<span class="price-sale"><strong><?php echo lang('product_sale');?> <?php echo format_currency($aproduct->saleprice); ?></strong></span>
											<?php else: ?>
												<span class="price-reg"><?php //echo lang('product_price'); No need for the word Price ?> 
												<?php echo format_currency($aproduct->price); // Currency type set in gocart/config/gocart.php ?></span>
											<?php endif; ?>
									</span>
									</td>	
								</tr>
								<?php endforeach // end of foreach($products as $product) ?>
							</table>