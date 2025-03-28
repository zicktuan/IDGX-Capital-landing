<section id="passevent" >
    <div class="wrapper">
        <div class="idg-btn">
            <?php if (!empty($atts['itsa_section_2_url_contact_us'])):?>
            <a href="<?php echo $atts['itsa_section_2_url_contact_us'] ?>" target="_blank" class="sponsor">
                <?php echo !empty($atts['itsa_section_2_text_button_1']) ? $atts['itsa_section_2_text_button_1'] : '' ?>
            </a>
            <?php endif ?>

            <?php if (!empty($atts['itsa_section_2_url_register'])):?>
                <a href="<?php echo $atts['itsa_section_2_url_register'] ?>" target="_blank" class="sponsor">
                    <?php echo !empty($atts['itsa_section_2_text_button_2']) ? $atts['itsa_section_2_text_button_2'] : '' ?>
                </a>
            <?php endif ?>
            <?php if (!empty($atts['itsa_section_2_url_button_3'])):?>
                <a href="<?php echo $atts['itsa_section_2_url_button_3'] ?>" target="_blank" class="sponsor">
                    <?php echo !empty($atts['itsa_section_2_text_button_3']) ? $atts['itsa_section_2_text_button_3'] : '' ?>
                </a>
            <?php endif ?>
        </div>
        
        <?php if(!empty($atts['itsa_section_2_title'])):?>
        <div class="title"><?php echo $atts['itsa_section_2_title']?></div>
        <div class="years">
            <?php if (!empty($listItems[0])):?>
            <?php foreach ($listItems as $item):?>
                <a href="<?php echo !empty($item['url']) ? $item['url'] : '#' ?>" target="_blank">
                    <span><?php echo !empty($item['year']) ? $item['year'] : '' ?></span>
                </a>
            <?php endforeach?>
            <?php endif ?>
            
        
        <?php endif ?>
    </div>
</section>
<style>
    .idg-btn {
        display: flex;
        justify-content: center; 
        gap: 20px;
        flex-wrap: wrap;
    }

    .idg-btn .sponsor {
        background-color: #d97b3f; /* Màu cam giống ảnh */
        color: #000; /* Chữ màu đen */
        font-weight: bold;
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 40px; /* Bo góc cho đẹp */
        text-align: center;
        display: inline-block;
        min-width: 150px; /* Giữ kích thước tối thiểu */
    }
    @media (max-width: 480px) {
        .idg-btn {
            flex-direction: column; /* Chuyển thành hàng dọc */
            align-items: center; /* Căn giữa các nút */
        }

        .idg-btn .sponsor {
            width: 80%; /* Tăng chiều rộng để dễ bấm */
            max-width: 300px; /* Giới hạn tối đa */
            min-width: 180px; /* Tăng chiều rộng tối thiểu */
            white-space: nowrap;
        }
    }
</style>