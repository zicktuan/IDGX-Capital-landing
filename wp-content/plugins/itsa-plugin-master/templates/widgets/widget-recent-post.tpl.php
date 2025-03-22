
<div class="bg-gray suggest">
        <div class="title_class">
            <?php echo isset($instance['title']) ? esc_html__($instance['title'], 'bookawesome') : '' ?>
        </div>
        <?php if (!empty($listPost)) : ?>
            <?php foreach ($listPost as $value) : 
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($value->ID),'itsa-thumbnail-320x168',false, '' );
                $thumb = $thumb[0];    
            ?>
        <a href="<?php echo get_the_permalink($value->ID)?>" title="<?php echo !empty($value->post_title) ? $value->post_title : '' ?>">
            <div class="post">
                <div class="post-image">
                    <div class="img-re">
                        <div class="img">
                            <img alt="<?php echo !empty($value->post_title) ? $value->post_title : '' ?>" src="<?php echo $thumb ?>" class="loading" data-was-processed="true">
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <?php echo !empty($value->post_title) ? $value->post_title : '' ?>
                    </h3>
                    <div class="post-des">
                        <?php echo !empty($value->post_excerpt) ? $value->post_excerpt : '' ?>
                    </div>
                </div>
            </div>
        </a>
        <?php endforeach ?>
        <?php endif ?>
    </div>
