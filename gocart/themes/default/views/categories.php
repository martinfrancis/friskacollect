<?php include('header.php'); ?>

<?php foreach($categories as $all_categories): ?>
    <?php if(!empty($all_categories["category"]->description)): ?>
        <div class="row">
                <div class="span12"><?php echo $all_categories["category"]->description; ?></div>
        </div>

    <div class="row">
        <div class="span3">
            <ul class="nav nav-list well">
                <?php foreach($all_categories["children"] as $subcategories): ?>
                <li>
                    <a href="<?php echo site_url('/'. $all_categories["category"]->slug .'/'.$subcategories["category"]->slug); ?>">
                        <?php echo $subcategories["category"]->name;?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
<?php endforeach;?>

<script type="text/javascript">
    window.onload = function(){
        $('.product').equalHeights();
    };
</script>

<?php include('footer.php'); ?>