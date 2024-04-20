    <!------------------------------------------------------------------------>
    <!-- HEADER -->
    <!------------------------------------------------------------------------>
    <?php
        get_header();
    ?>

    <!------------------------------------------------------------------------>
    <!-- ACF VARIABLES -->
    <!------------------------------------------------------------------------>
    <?php
        /*****************************************************************************/
        /** LOGO **/
        /*****************************************************************************/

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
        
        /*****************************************************************************/
        /** HERO **/
        /*****************************************************************************/

        // Text - hero_title_1
        if (!acf_get_field('hero_title_1')) {
            $hero_title_1 = 'Buy poison.';
        }
        else {
            $hero_title_1 = get_field('hero_title_1');
            if ($hero_title_1 == null) {
                $hero_title_1 = '';
            }
        }

        // Text - hero_title_2
        if (!acf_get_field('hero_title_2')) {
            $hero_title_2 = 'Trust us.';
        }
        else {
            $hero_title_2 = get_field('hero_title_2');
            if ($hero_title_2 == null) {
                $hero_title_2 = '';
            }
        }

        // Text - hero_paragraph
        if (!acf_get_field('hero_paragraph')) {
            $hero_paragraph = 'Your children are safe, why would a company lie to you? We are you friends pal. Buy poison today and we grant you total transparency and full refunds* if you are not satisfied with our service. We care about you ❤️';
        }
        else {
            $hero_paragraph = get_field('hero_paragraph');
            if ($hero_paragraph == null) {
                $hero_paragraph = '';
            }
        }

        // Text - hero_button
        if (!acf_get_field('hero_button')) {
            $hero_button = 'Drink now!';
        }
        else {
            $hero_button = get_field('hero_button');
            if ($hero_button == null) {
                $hero_button = '';
            }
        }

        // Url - hero_button_url
        if (!acf_get_field('hero_button_url')) {
            $hero_button_url = '#';
        }
        else {
            $hero_button_url = get_field('hero_button_url');
            if ($hero_button_url == null) {
                $hero_button_url = '';
            }
        }

        // Image - hero_image
        if (!acf_get_field('hero_image')) {
            $style_hero_image = '';
        }
        else {
            $hero_image = get_field('hero_image');
            if ($hero_image == null) {
                $style_hero_image = '';
            }
            else {
                $style_hero_image = 'background-image: url(' . $hero_image . ');';
            }
        }

        // Text - hero_disclaimer
        if (!acf_get_field('hero_disclaimer')) {
            $hero_disclaimer = '*We keep the right to deny any refunds on our own terms. Total responsability is up to the final user buying poison.';
        }
        else {
            $hero_disclaimer = get_field('hero_disclaimer');
            if ($hero_disclaimer == null) {
                $hero_disclaimer = '';
            }
        }
        
        /*****************************************************************************/
        /** SECTION 2 **/
        /*****************************************************************************/

        // Text - section_2_index
        if (!acf_get_field('section_2_index')) {
            $section_2_index = '03 - 05';
        }
        else {
            $section_2_index = get_field('section_2_index');
            if ($section_2_index == null) {
                $section_2_index = '';
            }
        }

        // Text - section_2_title_1
        if (!acf_get_field('section_2_title_1')) {
            $section_2_title_1 = 'Cruelty free';
        }
        else {
            $section_2_title_1 = get_field('section_2_title_1');
            if ($section_2_title_1 == null) {
                $section_2_title_1 = '';
            }
        }

        // Text - section_2_title_2
        if (!acf_get_field('section_2_title_2')) {
            $section_2_title_2 = 'Development';
        }
        else {
            $section_2_title_2 = get_field('section_2_title_2');
            if ($section_2_title_2 == null) {
                $section_2_title_2 = '';
            }
        }

        // Text - section_2_explanation
        if (!acf_get_field('section_2_explanation')) {
            $section_2_explanation = 'Except for the human subjects...';
        }
        else {
            $section_2_explanation = get_field('section_2_explanation');
            if ($section_2_explanation == null) {
                $section_2_explanation = '';
            }
        }

        // Text - section_2_subtitle
        if (!acf_get_field('section_2_subtitle')) {
            $section_2_subtitle = 'Look, a cute puppy';
        }
        else {
            $section_2_subtitle = get_field('section_2_subtitle');
            if ($section_2_subtitle == null) {
                $section_2_subtitle = '';
            }
        }

        // Text - section_2_paragraph
        if (!acf_get_field('section_2_paragraph')) {
            $section_2_paragraph = "Here on POISON we know that cute small animals go viral and get the youth's attention. Take a good look at the dog here and think carefully if you emphatize with this company. We are so cool and quirky hehe uwu. Go right now to that form and buy the damn posion already. We are running out od ideas to trick you people into buying our product.";
        }
        else {
            $section_2_paragraph = get_field('section_2_paragraph');
            if ($section_2_paragraph == null) {
                $section_2_paragraph = '';
            }
        }
        
        // Image - section_2_image
        if (!acf_get_field('section_2_image')) {
            $style_section_2_image = '';
        }
        else {
            $section_2_image = get_field('section_2_image');
            if ($section_2_image == null) {
                $style_section_2_image = '';
            }
            else {
                $style_section_2_image = 'background-image: url(' . $section_2_image . ');';
            }
        }
        
        
        /*****************************************************************************/
        /** SECTION 3 **/
        /*****************************************************************************/

        // Text - section_3_index
        if (!acf_get_field('section_3_index')) {
            $section_3_index = '02 - 05';
        }
        else {
            $section_3_index = get_field('section_3_index');
            if ($section_3_index == null) {
                $section_3_index = '';
            }
        }

        // Text - section_3_title_1
        if (!acf_get_field('section_3_title_1')) {
            $section_3_title_1 = 'Our';
        }
        else {
            $section_3_title_1 = get_field('section_3_title_1');
            if ($section_3_title_1 == null) {
                $section_3_title_1 = '';
            }
        }

        // Text - section_3_title_2
        if (!acf_get_field('section_3_title_2')) {
            $section_3_title_2 = 'Flavours';
        }
        else {
            $section_3_title_2 = get_field('section_3_title_2');
            if ($section_3_title_2 == null) {
                $section_3_title_2 = '';
            }
        }
    ?>

    <!------------------------------------------------------------------------>
    <!-- SCROLL ICON -->
    <!------------------------------------------------------------------------>
    <div id="scroll-icon" class="animate-slide-bottom">
        <a href="#section2" class="column align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mouse" viewBox="0 0 16 16">
                <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3m4 8a4 4 0 0 1-8 0V5a4 4 0 1 1 8 0zM8 0a5 5 0 0 0-5 5v6a5 5 0 0 0 10 0V5a5 5 0 0 0-5-5"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
        </a>
    </div>

    <!------------------------------------------------------------------------>
    <!-- SECTION 1 -->
    <!------------------------------------------------------------------------>
    <div id="section1" class="section bg-primary column align-items-center">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-1" <?php echo $style_logo_primary_color;?>><?php echo $logo_text;?></div>
            <div class="logo-2" <?php echo $style_logo_secondary_color;?>><?php echo $logo_text;?></div>
            <div class="logo-3" <?php echo $style_logo_tertiary_color;?>><?php echo $logo_text;?></div>
        </div>
        <!-- Container -->
        <div class="container row justify-content-center">
            <!-- Container Body Left -->
            <div class="container-body-left column justify-content-center">
                <!-- Title -->
                <div class="title-section">
                    <div class="title-section-1 animate-slide-right"><?php echo $hero_title_1;?></div>
                    <div class="title-section-2 animate-slide-right"><?php echo $hero_title_2;?></div>
                </div>
                <!-- Text -->
                <p><?php echo $hero_paragraph;?></p>
                <!-- Button -->
                <a class="button" href="<?php echo $hero_button_url;?>">
                    <div class="text"><?php echo $hero_button;?></div>
                </a>
            </div>
            <!-- Container Body Right -->
            <div class="container-body-right column justify-content-end">
                <!-- Image -->
                <div class="img-poison animate-slide-left" <?php echo $style_hero_image;?>></div>
                <!-- Text -->
                <div class="disclaimer"><?php echo $hero_disclaimer;?></div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------>
    <!-- SECTION 2 -->
    <!------------------------------------------------------------------------>
    <div id="section2" class="column align-items-center">
        <!-- Container -->
        <div class="container">
            <!-- Title -->
            <div class="title-section">
                <div class="line-mesh bg-tertiary-1 animate-slide-right"></div>
                <div class="index-section animate-slide-right"><?php echo $section_2_index;?></div>
                <div class="title-section-1 animate-slide-right"><?php echo $section_2_title_1;?></div>
                <div class="title-section-2 animate-slide-right"><?php echo $section_2_title_2;?></div>
            </div>
            <!-- Text -->
            <div class="explanation"><?php echo $section_2_explanation;?></div>
            <!-- Container -->
            <div class="container-body row justify-content-space-between align-items-center">
                <!-- Container Body Left -->
                <div class="container-body-left">
                    <!-- Title -->
                    <div class="subtitle"><?php echo $section_2_subtitle;?></div>
                    <!-- Text -->
                    <p><?php echo $section_2_paragraph;?></p>
                </div>
                <!-- Container Body Right -->
                <div class="img-dolphin container-body-right animate-slide-left" <?php echo $style_section_2_image;?>></div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------>
    <!-- SECTION 3 -->
    <!------------------------------------------------------------------------>
    <div id="section3" class="bg-secondary column align-items-center">
        <!-- Container -->
        <div class="container">
            <!-- Title -->
            <div class="title-section">
                <div class="line-mesh bg-tertiary-2 animate-slide-left"></div>
                <div class="index-section animate-slide-left"><?php echo $section_3_index;?></div>
                <div class="title-section-1 animate-slide-left"><?php echo $section_3_title_1;?></div>
                <div class="title-section-2 animate-slide-left"><?php echo $section_3_title_2;?></div>
            </div>
            <!-- Card Container -->
            <div id="card-container" class="card-container">

                <?php
                    $args = array(
                        'posts_per_page' => 5,
                        'post_type'      => array('post')
                    );
                    $latest_posts = new WP_Query($args);

                    if($latest_posts->have_posts()):
                        while($latest_posts->have_posts()):
                            $latest_posts->the_post();
                            echo '<!-- Card -->';
                            echo '<div class="card column animate-show-slide">';
                                echo '<!-- Header -->';
                                echo '<div class="row align-items-center">';
                                    echo '<!-- Image -->';
                                    echo '<img src="' . get_the_post_thumbnail_url() . '">';
                                    echo '<!-- Title -->';
                                    echo '<div class="title">' . get_the_title() . '</div>';
                                echo '</div>';
                                echo '<!-- Text -->';
                                echo '<p>' . the_content() . '</p>';
                                echo '<!-- Button -->';
                                echo '<a href="' . get_the_permalink() . '" class="card-button">';
                                    echo '<div class="row align-items-center">';
                                        echo '<div>Details</div>';
                                        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">';
                                            echo '<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>';
                                        echo '</svg>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                            
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo 'No posts published yet...';
                    endif;
                ?>

            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------>
    <!-- FOOTER -->
    <!------------------------------------------------------------------------>
    <?php
        get_footer();
    ?>