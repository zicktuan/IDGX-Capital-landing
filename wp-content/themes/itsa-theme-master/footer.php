<?php
global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<footer>
    <div class="wrapper">
        <div class="links">
            <?php if (!empty($optionTheme['awe_social_twitter'])):?>
            <a href="<?php echo $optionTheme['awe_social_twitter']?>" target="_blank">TWITTER</a>
            <?php endif ?>

            <?php if (!empty($optionTheme['awe_social_fb'])):?>
                <a href="<?php echo $optionTheme['awe_social_fb']?>" target="_blank">FACEBOOK</a>

            <?php endif ?>

            <?php if (!empty($optionTheme['awe_social_linkedin'])):?>
                <a href="<?php echo $optionTheme['awe_social_linkedin']?>" target="_blank">LINKEDIN</a>
            <?php endif ?>

            <div class="copyright"><?php echo !empty($optionTheme['awe_footer_copyright']) ? $optionTheme['awe_footer_copyright'] : '' ?></div>
        </div>
        <div class="newsletter">
            <p><?php echo !empty($optionTheme['awe_address_title']) ? $optionTheme['awe_address_title'] : '' ?></p>
            <p><?php echo !empty($optionTheme['awe_address_desc']) ? $optionTheme['awe_address_desc'] : '' ?></p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11" fill="none">
                    <rect x="0.515625" y="0.169922" width="1.40326" height="8.16923" fill="#ACACAC"></rect>
                    <rect x="1.91797" y="8.33887" width="1.19171" height="6.91213" transform="rotate(-90 1.91797 8.33887)" fill="#ACACAC"></rect>
                    <path d="M11.6973 7.74294L7.39974 10.2241L7.39974 5.26177L11.6973 7.74294Z" fill="#ACACAC"></path>
                </svg>
                SEND MAIL
            </p>
        </div>
    </div>
</footer>
</main>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src=".<?php echo get_template_directory_uri() . '/assets/js/webpack-5ef5c6658ea2573c.js'?>" async=""></script>

</body>
</html>