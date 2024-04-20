    <footer class="bg-primary column align-items-center">
        <!-- Container -->
        <div class="container row justify-content-center">
            <!-- Container Body Left -->
            <div class="container-body-left column justify-content-center">
                <!-- Logo -->
                <div class="logo">
                    <div class="logo-1" <?php echo $style_logo_primary_color;?>><?php echo $logo_text;?></div>
                    <div class="logo-2" <?php echo $style_logo_secondary_color;?>><?php echo $logo_text;?></div>
                    <div class="logo-3" <?php echo $style_logo_tertiary_color;?>><?php echo $logo_text;?></div>
                </div>
            </div>
            <!-- Container Body Right -->
            <div class="container-body-right row align-items-center">
                <!-- Vertical Line -->
                <div class="vertical-line"></div>
                <!-- Links -->
                <div class="links"><a href="#">Legal notice</a> | <a href="#">Legal information</a></div>
            </div>
        </div>
    </footer>
</body>

<?php
	wp_footer();
?>
</html>