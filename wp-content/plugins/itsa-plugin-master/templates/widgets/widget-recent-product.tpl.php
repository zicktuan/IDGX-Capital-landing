<?php
$wpTerm = get_queried_object();
?>
<div class="las-aside-block las-aside-theme las-open">
    <h5 class="las-aside-block__title"><?php echo esc_html($instance['title']) ?></h5>
    <div class="las-wrap bas-tour-travel-style-wrap">
        <ul class="bas-tour-travel-style-list">
            <?php
            if (!empty($instance['travel'])) {
                if (is_array($instance['product'])) {
                    foreach ($instance['product'] as $value) {
                        $idParent = !empty($value['parent']) ? explode(',', trim($value['parent'], ",")) : [];
                        if (!empty($idParent[0])) {
                            $termParent   = get_term($idParent[0]);
                            $argsItems = !empty($value['items']) ? explode(',', trim($value['items'], ",")) : [];
                            if (!empty($termParent)) {
                            ?>
                            <li>
                                <div class="las-aside-theme" style="background-color: <?php echo $color; ?>"></div>
                                <a class="las-span" href="#" onclick="return false">
                                    <?php echo !empty($termParent->name) ? esc_html($termParent->name) : ''; ?>
                                </a>
                                <?php
                                $count = 0;
                                if (!empty($argsItems) && is_array($argsItems)) {
                                    foreach ($argsItems as $val) {
                                        if (!empty($val)) {
                                            $taxArray = [
                                                array(
                                                    'taxonomy' => 'product',
                                                    'field'    => 'term_id',
                                                    'terms'    => $val,
                                                ),
                                            ];
                                            $args = array(
                                                'post_type' => 'itsa_product_pt',
                                                'tax_query' => array(
                                                    'relation' => 'AND',
                                                    $taxArray
                                                ),
                                                'posts_per_page' => -1,
                                            );
                                            $query = new WP_Query($args);
                                            $count += count($query->posts);  
                                        }                                
                                    }
                                }
                                ?>
                                (<?php echo $count; ?>)
                                <div class="las-tr"></div>
                                <ul class="las-ul-sub">
                                    <?php
                                    if (!empty($argsItems) && is_array($argsItems)) {
                                        foreach ($argsItems as $val) {
                                            if (!empty($val)) {
                                                $term = get_term($val);
                                                $taxArray = [
                                                    array(
                                                        'taxonomy' => 'product',
                                                        'field'    => 'term_id',
                                                        'terms'    => $val,
                                                    ),
                                                ];
                                                
                                                $args = array(
                                                    'post_type' => 'itsa_product_pt',
                                                    'tax_query' => array(
                                                        'relation' => 'AND',
                                                        $taxArray
                                                    ),
                                                    'posts_per_page' => -1,
                                                );
                                                $query = new WP_Query($args);
                                                ?>
                                                <?php if (!empty($term)): ?>
                                                    <li class="bas-tour-travel-style-item" id="bas-tour-style-<?php echo esc_attr($term->term_id); ?>" data-id="<?php echo esc_attr($term->term_id); ?>">
                                                        <span class="bas-tour-travel-style-name"> <?php echo !empty($term->name) ? esc_html($term->name) : ''; ?>
                                                        </span>
                                                        (<?php echo count($query->posts); ?>)
                                                    </li>
                                                <?php endif ?>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- <a class="las-more"><?php _e("Select all", 'bookawesome'); ?></a> -->
                                </ul>
                            </li>
                            <?php
                            }
                        }
                    }
                }
            }
            ?>
        </ul>
    </div>
</div>
