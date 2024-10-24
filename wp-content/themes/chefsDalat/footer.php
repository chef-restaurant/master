<footer class="bg-orange ">
    <section class=" mx-auto p-6 flex flex-nowrap grid grid-cols-3 drop-shadow-xl "> 
        <div class="social flex flex-nowrap">
            <a href="#followUs" class="block social-icon"> FOLLOW US</a>
            <img class="social-icon" src="<?php echo THEME . "/assets/facebook.png"?>" />
            <img class="social-icon" src="<?php echo THEME . "/assets/instagram.png"?>" />
            <img class="social-icon" src="<?php echo THEME . "/assets/social-owl.png"?>" />
            <img class="social-icon" src="<?php echo THEME . "/assets/google.png"?>" />
        </div>
        <div class="footer-logo text-center">
            <a class="block" href="http://" target="_blank" rel="noopener noreferrer">
                <img class="inline-block " src="<?php echo THEME . "/assets/footer-logo.png"?>" />
            </a>
        </div>
        <div class="contact-points grid grid-rows-2 ml-10">
            <div class="location flex flex-nowrap">
                <i class="fa-solid fa-location-dot mr-4 self-center"></i> 
                <?php if(is_active_sidebar('chefs-map')) : ?>
                        <?php dynamic_sidebar('chefs-map'); ?>
                <?php endif; ?>
            </div>
            <div class="phone flex flex-nowrap">
                <i class="fa-solid fa-phone mr-4 self-center"></i>
                <?php if(is_active_sidebar('chefs-phone-number')) : ?>
                        <?php dynamic_sidebar('chefs-phone-number'); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo THEME . "/dist/app.js" ?>"></script>
</body>

</html>