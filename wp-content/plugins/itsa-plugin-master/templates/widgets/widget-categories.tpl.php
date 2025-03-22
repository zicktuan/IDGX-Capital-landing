
<div class="col-md-2 col-sm-4">
    <h3><?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?></h3>
    <ul class="nopadding">
        <?php if (!empty($listItems)) : ?>
        <?php foreach ($listItems as $category) : ?>
        <li><a href="<?php echo $category->url ?>" title="<?php echo $category->title ?> "><?php echo $category->title ?></a></li>
        <?php endforeach;endif ?>
    </ul>
</div>
