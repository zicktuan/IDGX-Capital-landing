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
        </div>
    </div>
</footer>
</main>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src=".<?php echo get_template_directory_uri() . '/assets/js/webpack-5ef5c6658ea2573c.js'?>" async=""></script>

</body>
</html>