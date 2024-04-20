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
                    <div class="title-section-1 animate-slide-right">Buy poison.</div>
                    <div class="title-section-2 animate-slide-right">Trust us.</div>
                </div>
                <!-- Text -->
                <p>Your children are safe, why would a company lie to you? We are you friends pal. Buy poison today and we grant you total transparency and full refunds* if you are not satisfied with our service. We care about you ❤️</p>
                <!-- Button -->
                <a class="button" href="#">
                    <div class="text">Drink now!</div>
                </a>
            </div>
            <!-- Container Body Right -->
            <div class="container-body-right column justify-content-end">
                <!-- Image -->
                <div class="img-poison animate-slide-left"></div>
                <!-- Text -->
                <div class="disclaimer">*We keep the right to deny any refunds on our own terms. Total responsability is up to the final user buying poison.</div>
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
                <div class="index-section animate-slide-right">03 - 05</div>
                <div class="title-section-1 animate-slide-right">Cruelty free</div>
                <div class="title-section-2 animate-slide-right">Development</div>
            </div>
            <!-- Text -->
            <div class="explanation">Except for the human subjects...</div>
            <!-- Container -->
            <div class="container-body row justify-content-space-between align-items-center">
                <!-- Container Body Left -->
                <div class="container-body-left">
                    <!-- Title -->
                    <div class="subtitle"> Look, a cute puppy</div>
                    <!-- Text -->
                    <p>Here on POISON we know that cute small animals go viral and get the youth's attention. Take a good look at the dog here and think carefully if you emphatize with this company. We are so cool and quirky hehe uwu. Go right now to that form and buy the damn posion already. We are running out od ideas to trick you people into buying our product.</p>
                </div>
                <!-- Container Body Right -->
                <div class="img-dolphin container-body-right animate-slide-left"></div>
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
                <div class="index-section animate-slide-left">02 - 05</div>
                <div class="title-section-1 animate-slide-left">Our</div>
                <div class="title-section-2 animate-slide-left">Flavours</div>
            </div>
            <!-- Card Container -->
            <div id="card-container" class="card-container">
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/mushroom.jpg">
                        <!-- Title -->
                        <div class="title">Mushroom</div>
                    </div>
                    <!-- Text -->
                    <p>Dignissim placerat viverra iaculis lacus netus.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/snake.jpg">
                        <!-- Title -->
                        <div class="title">Snake</div>
                    </div>
                    <!-- Text -->
                    <p>Sit proin faucibus in enim, amet pretium ac nunc. Ullamcorper molestie ut facilisis sed.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/weird_frog.jpg">
                        <!-- Title -->
                        <div class="title">Weird frog</div>
                    </div>
                    <!-- Text -->
                    <p>Vehicula euismod mauris pharetra aliquam amet, et quam enim viverra.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/jellyfish.jpg">
                        <!-- Title -->
                        <div class="title">Jellyfish</div>
                    </div>
                    <!-- Text -->
                    <p>Amet lorem metus, in diam.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/spider.jpg">
                        <!-- Title -->
                        <div class="title">Spider</div>
                    </div>
                    <!-- Text -->
                    <p>Quisque id vel in vel tellus. Arcu orci pharetra ut magna tristique lacus sapien, purus.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/big_spider.jpg">
                        <!-- Title -->
                        <div class="title">Big spider</div>
                    </div>
                    <!-- Text -->
                    <p>Ut felis, in vestibulum fames nunc libero, laoreet neque.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/scorpion.jpg">
                        <!-- Title -->
                        <div class="title">Scorpion</div>
                    </div>
                    <!-- Text -->
                    <p>Augue pharetra gravida congue quisque vestibulum dictumst eget leo magna.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/death_kiss.jpg">
                        <!-- Title -->
                        <div class="title">Death kiss</div>
                    </div>
                    <!-- Text -->
                    <p>Ut amet lacus fringilla nibh ac non lobortis tempor. Magna turpis nulla quis tempor tellus, ipsum.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/weird_cult.jpg">
                        <!-- Title -->
                        <div class="title">Weird cult</div>
                    </div>
                    <!-- Text -->
                    <p>Et, dictumst convallis nulla nisi fames adipiscing bibendum viverra.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/some_herb.jpg">
                        <!-- Title -->
                        <div class="title">Some herb</div>
                    </div>
                    <!-- Text -->
                    <p>Sagittis, purus nunc, mattis proin sadales netus venenatis elementum non.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/lion_bite.jpg">
                        <!-- Title -->
                        <div class="title">Lion bite</div>
                    </div>
                    <!-- Text -->
                    <p>Vivamus ut scelerisque eu, risus id varius at turpis. Vitae pellentesque nunc, eu, sed donec integer.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <!-- Card -->
                <div class="card column animate-show-slide">
                    <!-- Header -->
                    <div class="row align-items-center">
                        <!-- Image -->
                        <img src="<?php echo bloginfo('template_directory');?>/assets/img/rabies.jpg">
                        <!-- Title -->
                        <div class="title">Rabies</div>
                    </div>
                    <!-- Text -->
                    <p>Ut ullamcorper amet, crusus integer nibh felis velit mi.</p>
                    <!-- Button -->
                    <a href="#" class="card-button">
                        <div class="row align-items-center">
                            <div>Details</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------>
    <!-- FOOTER -->
    <!------------------------------------------------------------------------>
    <?php
        get_footer();
    ?>