


    <div class="desc">
        <h4><?php echo (isset($instance['title']) && !empty($instance['title'])) ? $instance['title'] : '' ?></h4>
        <?php if(isset($instance['address']) && !empty($instance['address'])): ?>
            <?php echo $instance['address'] ?>
        <?php endif; ?>
    </div>
    <div class="desc">
        <?php if(isset($instance['address1']) && !empty($instance['address1'])): ?>
            <?php echo $instance['address1'] ?>
        <?php endif; ?>
    </div>
    