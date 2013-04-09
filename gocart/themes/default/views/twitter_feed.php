<?php include('header.php');
require_once('php/simplepie.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://search.twitter.com/search.atom?q=friskafood');
	$feed->init();
	 // This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
	$feed->handle_content_type();
?>
	<div class="row">
		<div class="span3">
			<img class="img-rounded" src="<?php echo base_url('gocart/themes/default');?>/assets/images/twitter_love3.png" alt="friska love" />
			<p></p>
			<p><a href="http://twitter.com/friskafood" title="follow Friska on Twitter">Follow</a> Friska on 
			<a href="http://twitter.com/friskafood" title="follow Friska on Twitter">
			Twitter</a> and join in with excitement.</p>
		</div>
		<div class="span9">
	<!-- Twitter Feed 
    ================================================== -->
		<h2>Friska Love</h2>
		<?php foreach ($feed->get_items() as $item): ?>
		<blockquote>
		
		<p><i class="icon-heart"></i>
			<?php $content = $item->get_content(); 
			echo $content; ?>
		</p>
		<small>
		<?php $author = $item->get_author(); 
				echo $author->get_name();?>
			 | Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small>
		
		</blockquote>
		<?php endforeach; ?>	  
		</div>
    </div>
<?php include('footer.php');?>
