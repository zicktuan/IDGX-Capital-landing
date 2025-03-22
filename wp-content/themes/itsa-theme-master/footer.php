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
            <p>NEWSLETTER</p>
            <p>We’re just an email away. Drop us a line and we’ll get back to you by tomorrow, latest.</p>
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
<script>(self.__next_f=self.__next_f||[]).push([0]);self.__next_f.push([2,null])</script>
<script>self.__next_f.push([1,"1:HL[\"/_next/static/css/a5bcef6965bdfcb9.css\",\"style\"]\n2:HL[\"/_next/static/css/56a805b910d31836.css\",\"style\"]\n"])</script>
<script>self.__next_f.push([1,"3:I[5751,[],\"\"]\n5:I[6513,[],\"ClientPageRoot\"]\n6:I[6310,[\"931\",\"static/chunks/app/page-b66241399632c6f2.js\"],\"default\"]\n7:I[1053,[\"45\",\"static/chunks/45-f679c4845e0a9467.js\",\"185\",\"static/chunks/app/layout-ee41cd6a4c177a01.js\"],\"default\"]\n8:I[9275,[],\"\"]\n9:I[1343,[],\"\"]\nb:I[6130,[],\"\"]\nc:[]\n"])</script><script>self.__next_f.push([1,"0:[[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/a5bcef6965bdfcb9.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]],[\"$\",\"$L3\",null,{\"buildId\":\"FQRZ34kccA1_2nth1ZfPr\",\"assetPrefix\":\"\",\"initialCanonicalUrl\":\"/\",\"initialTree\":[\"\",{\"children\":[\"__PAGE__\",{}]},\"$undefined\",\"$undefined\",true],\"initialSeedData\":[\"\",{\"children\":[\"__PAGE__\",{},[[\"$L4\",[\"$\",\"$L5\",null,{\"props\":{\"params\":{},\"searchParams\":{}},\"Component\":\"$6\"}]],null],null]},[[\"$\",\"html\",null,{\"lang\":\"en\",\"children\":[[\"$\",\"head\",null,{}],[\"$\",\"body\",null,{\"children\":[\"$\",\"$L7\",null,{\"children\":[\"$\",\"$L8\",null,{\"parallelRouterKey\":\"children\",\"segmentPath\":[\"children\"],\"error\":\"$undefined\",\"errorStyles\":\"$undefined\",\"errorScripts\":\"$undefined\",\"template\":[\"$\",\"$L9\",null,{}],\"templateStyles\":\"$undefined\",\"templateScripts\":\"$undefined\",\"notFound\":[[\"$\",\"title\",null,{\"children\":\"404: This page could not be found.\"}],[\"$\",\"div\",null,{\"style\":{\"fontFamily\":\"system-ui,\\\"Segoe UI\\\",Roboto,Helvetica,Arial,sans-serif,\\\"Apple Color Emoji\\\",\\\"Segoe UI Emoji\\\"\",\"height\":\"100vh\",\"textAlign\":\"center\",\"display\":\"flex\",\"flexDirection\":\"column\",\"alignItems\":\"center\",\"justifyContent\":\"center\"},\"children\":[\"$\",\"div\",null,{\"children\":[[\"$\",\"style\",null,{\"dangerouslySetInnerHTML\":{\"__html\":\"body{color:#000;background:#fff;margin:0}.next-error-h1{border-right:1px solid rgba(0,0,0,.3)}@media (prefers-color-scheme:dark){body{color:#fff;background:#000}.next-error-h1{border-right:1px solid rgba(255,255,255,.3)}}\"}}],[\"$\",\"h1\",null,{\"className\":\"next-error-h1\",\"style\":{\"display\":\"inline-block\",\"margin\":\"0 20px 0 0\",\"padding\":\"0 23px 0 0\",\"fontSize\":24,\"fontWeight\":500,\"verticalAlign\":\"top\",\"lineHeight\":\"49px\"},\"children\":\"404\"}],[\"$\",\"div\",null,{\"style\":{\"display\":\"inline-block\"},\"children\":[\"$\",\"h2\",null,{\"style\":{\"fontSize\":14,\"fontWeight\":400,\"lineHeight\":\"49px\",\"margin\":0},\"children\":\"This page could not be found.\"}]}]]}]}]],\"notFoundStyles\":[],\"styles\":[[\"$\",\"link\",\"0\",{\"rel\":\"stylesheet\",\"href\":\"/_next/static/css/56a805b910d31836.css\",\"precedence\":\"next\",\"crossOrigin\":\"$undefined\"}]]}]}]}]]}],null],null],\"couldBeIntercepted\":false,\"initialHead\":[null,\"$La\"],\"globalErrorComponent\":\"$b\",\"missingSlots\":\"$Wc\"}]]\n"])</script><script>self.__next_f.push([1,"a:[[\"$\",\"meta\",\"0\",{\"name\":\"viewport\",\"content\":\"width=device-width, initial-scale=1\"}],[\"$\",\"meta\",\"1\",{\"charSet\":\"utf-8\"}],[\"$\",\"title\",\"2\",{\"children\":\"GM Vietnam - Vietnam Blockchain Week\"}],[\"$\",\"meta\",\"3\",{\"name\":\"description\",\"content\":\"Explore the thriving Web3 landscape of Vietnam, the largest crypto adopting nation in the world, at one of South East Asia's most highly anticipated blockchain events of 2025.\"}],[\"$\",\"meta\",\"4\",{\"property\":\"og:title\",\"content\":\"GM Vietnam - Vietnam Blockchain Week\"}],[\"$\",\"meta\",\"5\",{\"property\":\"og:description\",\"content\":\"Explore the thriving Web3 landscape of Vietnam, the largest crypto adopting nation in the world, at one of South East Asia's most highly anticipated blockchain events of 2025.\"}],[\"$\",\"meta\",\"6\",{\"property\":\"og:url\",\"content\":\"https://gmvietnam.io\"}],[\"$\",\"meta\",\"7\",{\"property\":\"og:site_name\",\"content\":\"GM Vietnam\"}],[\"$\",\"meta\",\"8\",{\"property\":\"og:locale\",\"content\":\"en_US\"}],[\"$\",\"meta\",\"9\",{\"property\":\"og:image\",\"content\":\"https://gmvietnam.io/banner.png\"}],[\"$\",\"meta\",\"10\",{\"property\":\"og:image:width\",\"content\":\"800\"}],[\"$\",\"meta\",\"11\",{\"property\":\"og:image:height\",\"content\":\"600\"}],[\"$\",\"meta\",\"12\",{\"property\":\"og:image:alt\",\"content\":\"GM Vietnam - Vietnam Blockchain Week\"}],[\"$\",\"meta\",\"13\",{\"property\":\"og:type\",\"content\":\"website\"}],[\"$\",\"meta\",\"14\",{\"name\":\"twitter:card\",\"content\":\"summary_large_image\"}],[\"$\",\"meta\",\"15\",{\"name\":\"twitter:title\",\"content\":\"GM Vietnam - Vietnam Blockchain Week\"}],[\"$\",\"meta\",\"16\",{\"name\":\"twitter:description\",\"content\":\"Explore the thriving Web3 landscape of Vietnam, the largest crypto adopting nation in the world, at one of South East Asia's most highly anticipated blockchain events of 2025.\"}],[\"$\",\"meta\",\"17\",{\"name\":\"twitter:image\",\"content\":\"https://gmvietnam.io/banner.png\"}],[\"$\",\"link\",\"18\",{\"rel\":\"icon\",\"href\":\"/icons/favicon-32x32.png\",\"sizes\":\"32x32\"}],[\"$\",\"link\",\"19\",{\"rel\":\"icon\",\"href\":\"/icons//favicon-16x16.png\",\"sizes\":\"16x16\"}],[\"$\",\"link\",\"20\",{\"rel\":\"apple-touch-icon\",\"href\":\"/icons/apple-touch-icon.png\"}]]\n"])</script>
<script>self.__next_f.push([1,"4:null\n"])</script>
<next-route-announcer style="position: absolute;">
<template shadowrootmode="open">
    <div aria-live="assertive" id="__next-route-announcer__" role="alert" style="position: absolute; border: 0px; height: 1px; margin: -1px; padding: 0px; width: 1px; clip: rect(0px, 0px, 0px, 0px); overflow: hidden; white-space: nowrap; overflow-wrap: normal;"></div>
</template>
</next-route-announcer>
</body>
</html>