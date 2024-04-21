<?php
    /*****************************************************************************/
    /** THEME SUPPORT **/
    /*****************************************************************************/

    add_theme_support('post-thumbnails');

    /*****************************************************************************/
    /** THEME STYLES AND SCRIPTS **/
    /*****************************************************************************/
    
    /*
     *  Add theme style sheets
     */
    function add_theme_styles() {
        
        wp_register_style('style', get_stylesheet_uri());
        wp_enqueue_style('style');
    }
    add_action('wp_enqueue_scripts','add_theme_styles');

    /*
     *  Add theme JS scripts
     */
    function add_theme_scripts() {

        wp_register_script('main',  get_template_directory_uri().'/assets/js/main.js', null, null, true);
        wp_enqueue_script('main');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');

    /*****************************************************************************/
    /** AJAX SCRIPTS **/
    /*****************************************************************************/

    /*
     *  Function to load more posts via AJAX
     */
    function load_more_posts() {
        $offset = $_POST['offset'];
        $args = array(
            'posts_per_page' => 5,
            'post_type'      => array('post'),
            'offset'         => $offset
        );
        $next_posts = new WP_Query($args);

        if($next_posts->have_posts()):
            while($next_posts->have_posts()):
                $next_posts->the_post();
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
    }
    add_action('wp_ajax_load_more_posts', 'load_more_posts');
    add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');