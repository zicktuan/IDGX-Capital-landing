<section id="poster" class="bg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/poster.png'?>);">
    <div class="wrapper">
        <div class="wrapper-body">
            <div class="slogan">
                <img src="<?php echo !empty($atts['itsa_section_1_img_slogan']) ? wp_get_attachment_url($atts['itsa_section_1_img_slogan']) : '' ?>" alt="">
            </div>
            <div class="container" style="width: 100%;">
                <div class="banner">
                    <div class="host">
                        <div class="host-text"><?php echo !empty($atts['itsa_section_1_text_title']) ? $atts['itsa_section_1_text_title'] : '' ?></div>
                        <?php if (!empty($atts['itsa_section_1_logo']) ) :?>    
                        <img src="<?php echo wp_get_attachment_url($atts['itsa_section_1_logo']) ?>" alt="SSID Logo" class="ssid-logo">
                        <?php endif ?>    
                        <!-- <img src="https://pbs.twimg.com/media/GZ7F8-1bQAAq0tr?format=jpg&name=medium" alt="SSID Logo" class="ssid-logo"> -->
                            <div class="host-last">
                                <?php if (!empty($atts['itsa_section_1_title'])): ?>
                                <div class="back-button">
                                    <span class="back-arrow">&#10094;</span>
                                </div>
                                <?php endif ?>
                                <div>
                                    <div class="kyros"><?php echo !empty($atts['itsa_section_1_title']) ? $atts['itsa_section_1_title'] : '' ?></div>
                                    <div class="ventures"><?php echo !empty($atts['itsa_section_1_sub_title']) ? $atts['itsa_section_1_sub_title'] : '' ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="event-info">
                            <div class="date"><?php echo !empty($atts['itsa_section_1_time']) ? $atts['itsa_section_1_time'] : '' ?> <br>
                            <?php echo !empty($atts['itsa_section_1_year']) ? $atts['itsa_section_1_year'] : '' ?></div>
                            <div class="location"><?php echo !empty($atts['itsa_section_1_location']) ? $atts['itsa_section_1_location'] : '' ?>
                            <br><?php echo !empty($atts['itsa_section_1_province']) ? $atts['itsa_section_1_province'] : '' ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .banner {
            display: flex;
            align-items: center;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
            justify-content: space-between;
        }
        .host{
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .host-text {
            color: #9a9a9a;
            /* margin-right: 10px; */
            font-weight: 300;
        }
        .ssid-logo {
            height: 40px;
            width: 95px;
        }
        .spark{
            height: 20px;
        }
        .host-last {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .back-button{
            width: 40px;
            height: 40px;
            border: 2px solid #8B0000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: auto;
        }
        .back-arrow {
            color: #8B0000;
            font-weight: bold;
            font-size: 20px;
        }
        .kyros{
            font-size: 18px;
            font-weight: 500;
        }
        .ventures{
            font-size: 12px;
        }
        .event-info {
            text-align: right;
            color: #D2B48C;
            font-weight: 300;
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .date {
            font-size: 18px;
            text-align: center;
        }
        .location {
            font-size: 18px;
            text-align: center;
        }
        @media screen and (max-width: 768px){
            .banner {
                flex-direction: column;
                gap: 20px;
            }
            /* .host {
                flex-direction: column;
                gap: 10px;
            }
            .host-last {
                flex-direction: column;
                gap: 10px;
            } */
            .event-info {
                flex-direction: column;
                gap: 10px;
                align-items: center;
                br{
                    display: none;
                }
            }
            
        }
</style>
