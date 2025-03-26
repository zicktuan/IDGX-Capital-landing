<section id="poster" class="bg" style="background-image: url(<?php echo !empty($atts['itsa_section_1_background']) ? wp_get_attachment_url($atts['itsa_section_1_background']) : '' ?>);">
    <div class="wrapper">
        <div class="wrapper-body">
            <div class="slogan">
                <span class="title">
                    <?php echo !empty($atts['itsa_section_1_slogan']) ? $atts['itsa_section_1_slogan'] : '' ?>
                </span> 
                <span class="sub-title">
                <?php echo !empty($atts['itsa_section_1_sub_slogan']) ? $atts['itsa_section_1_sub_slogan'] : '' ?>
                </span>
                <!-- <img src="<?php echo !empty($atts['itsa_section_1_img_slogan']) ? wp_get_attachment_url($atts['itsa_section_1_img_slogan']) : '' ?>" alt=""> -->
            </div>
            <div class="container" style="width: 100%;">
                <div class="banner">
                    <div class="host">
                        <div class="host-text"><?php echo !empty($atts['itsa_section_1_text_title']) ? $atts['itsa_section_1_text_title'] : '' ?></div>
                        <!-- <?php //if (!empty($atts['itsa_section_1_logo']) ) :?>    
                        <img src="<?php //echo wp_get_attachment_url($atts['itsa_section_1_logo']) ?>" alt="SSID Logo" class="ssid-logo">
                        <?php //endif ?>     -->
                        <img src="https://pbs.twimg.com/media/GZ7F8-1bQAAq0tr?format=jpg&name=medium" alt="SSID Logo" class="ssid-logo">
                            <div class="host-last">
                            <?php if (!empty($atts['itsa_section_1_logo_2']) ) :?>    
                                <img src="<?php echo wp_get_attachment_url($atts['itsa_section_1_logo_2']) ?>" alt="SSID Logo" class="idg-logo">
                            <?php endif ?>    
                            <!-- <?php //if (!empty($atts['itsa_section_1_title'])): ?>
                                <div class="back-button">
                                    <span class="back-arrow">&#10094;</span>
                                </div>
                                <?php //endif ?>
                                <div>
                                    <div class="kyros"><?php //echo !empty($atts['itsa_section_1_title']) ? $atts['itsa_section_1_title'] : '' ?></div>
                                    <div class="ventures"><?php //echo !empty($atts['itsa_section_1_sub_title']) ? $atts['itsa_section_1_sub_title'] : '' ?></div>
                                </div> -->
                            </div>
                        </div>
                        <div class="event-info">
                            <div class="demo-day"><?php echo !empty($atts['itsa_section_1_demo_day']) ? $atts['itsa_section_1_demo_day'] : '' ?></div>
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
    .slogan {
            font-family: 'Playfair Display', serif;
            color: #E8C6A1;
            font-size: 60px;
            font-weight: 700;
            flex-direction: column;
            align-items: center;
            line-height: 75px;
        }
        .tech {
            color: #E87324;
        }
        .pixel {
            font-family: 'Press Start 2P', cursive;
            font-size: 50px;
        }
    .slogan .title {
        font-size: 130px;
    }
    .slogan .sub-title {
        font-size: 45px;
    }
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
        .demo-day {
            font-size: 18px;
            color: #D2B48C;
            font-weight: 300;
            text-decoration: none;
        }
        .location {
            font-size: 18px;
            text-align: center;
        }
        .idg-logo {
            height: 40px;
            width: 100%;
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
                gap: 3px;
                align-items: center;
                br{
                    display: none;
                }
            }
            
        }
        @media (max-width: 768px) {
            .blockstar {
                font-size: 30px;
            }
            .vietnam {
                font-size: 40px;
            }
            .pixel {
                font-size: 30px;
            }
            .host {
                margin-right: 2%;
            }
            .date {
                font-size: 20px;
                text-align: center;
            }
            .location {
                font-size: 20px;
                text-align: center;
            }
            .copyright {
                display: none;
            }
            .slogan .sub-title {
                font-size: 40px;
                text-align: center;
            }
            .demo-day {
                font-size: 20px;
            }
        }
        @media (max-width: 480px) {
            .demo-day {
                font-size: 14px;
            }
            .copyright {
                display: none;
            }
            .host {
                display: flex;
                align-items: center;
                gap: 11px;
                margin-left: 0;
            }
            .host-text{
                font-size: 14px;
            }
            .ssid-logo{
                height: 30px;
                width: 100px;
            }
            .idg-logo {
                height: 30px;
                width: 95%;
            }
            .slogan .title{
                font-size: 75px;
                line-height: 75px;
            }
            .slogan .sub-title {
                font-size: 30px;
                text-align: center;
                line-height: 35px;
            }
            .blockstar {
                font-size: 24px;
            }
            .vietnam {
                font-size: 30px;
            }
            .pixel {
                font-size: 24px;
            }
            .event-info {
                flex-direction: column;
                gap: 0px;
                align-items: center;
            }
            .date {
                font-size: 14px;
                text-align: center;
            }
            .location {
                font-size: 14px;
                text-align: center;
            }
        }
</style>
