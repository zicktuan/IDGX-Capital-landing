<section id="passevent" >
    <div class="wrapper">
        <div class="idg-btn">
            <?php if (!empty($atts['itsa_section_2_url_contact_us'])):?>
            <a href="<?php echo $atts['itsa_section_2_url_contact_us'] ?>" target="_blank" class="sponsor">CONTACT US</a>
            <?php endif ?>

            <?php if (!empty($atts['itsa_section_2_url_register'])):?>
                <a href="<?php echo $atts['itsa_section_2_url_register'] ?>" target="_blank" class="sponsor" style="margin-left: 20px">REGISTER</a>

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
    
</style>