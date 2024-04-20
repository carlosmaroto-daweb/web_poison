    <!------------------------------------------------------------------------>
    <!-- ACF VARIABLES -->
    <!------------------------------------------------------------------------>
    <?php
        // Text - logo_text
        if (!acf_get_field('logo_text')) {
            $logo_text = 'POISON';
        }
        else {
            $logo_text = get_field('logo_text');
            if ($logo_text == null) {
                $logo_text = '';
            }
        }

        // Color - logo_primary_color
        if (!acf_get_field('logo_primary_color')) {
            $style_logo_primary_color = '';
        }
        else {
            $logo_primary_color = get_field('logo_primary_color');
            if ($logo_primary_color == null) {
                $style_logo_primary_color = 'style="color: transparent"';
            }
            else {
                $style_logo_primary_color = 'style="color: ' . $logo_primary_color . '"';
            }
        }

        // Color - logo_secondary_color
        if (!acf_get_field('logo_secondary_color')) {
            $style_logo_secondary_color = '';
        }
        else {
            $logo_secondary_color = get_field('logo_secondary_color');
            if ($logo_secondary_color == null) {
                $style_logo_secondary_color = 'style="-webkit-text-stroke: 0.4px transparent"';
            }
            else {
                $style_logo_secondary_color = 'style="-webkit-text-stroke: 0.4px ' . $logo_secondary_color . '"';
            }
        }

        // Color - logo_tertiary_color
        if (!acf_get_field('logo_tertiary_color')) {
            $style_logo_tertiary_color = '';
        }
        else {
            $logo_tertiary_color = get_field('logo_tertiary_color');
            if ($logo_tertiary_color == null) {
                $style_logo_tertiary_color = 'style="-webkit-text-stroke: 0.1px transparent"';
            }
            else {
                $style_logo_tertiary_color = 'style="-webkit-text-stroke: 0.1px ' . $logo_tertiary_color . '"';
            }
        }
    ?>

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