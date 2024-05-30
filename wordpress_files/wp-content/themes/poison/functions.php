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
     *  Function to return total_posts and posts_per_page
     */
    function get_info_posts() {
        $response = array();
        $response['total_posts'] = wp_count_posts()->publish;
        $response['posts_per_page'] = 12;
        wp_send_json($response);
    }
    add_action('wp_ajax_get_info_posts', 'get_info_posts');
    add_action('wp_ajax_nopriv_get_info_posts', 'get_info_posts');

    /*
     *  Function to load more posts via AJAX
     */
    function load_more_posts() {

        // Variables
        $offset = $_POST['offset'];
        $msg = '';

        // Define the query arguments
        $posts_per_page = 12;
        $args = array(
            'posts_per_page' => $posts_per_page,
            'post_type'      => array('post'),
            'offset'         => $offset
        );
        // Perform the query
        $next_posts = new WP_Query($args);

        // Check if there are posts
        if($next_posts->have_posts()):
            while($next_posts->have_posts()):
                $next_posts->the_post();
                $msg .= '<!-- Card -->';
                $msg .= '<div class="card column animate-show-slide">';
                    $msg .= '<!-- Header -->';
                    $msg .= '<div class="row align-items-center">';
                        $msg .= '<!-- Image -->';
                        $msg .= '<img src="' . get_the_post_thumbnail_url() . '">';
                        $msg .= '<!-- Title -->';
                        $msg .= '<div class="title">' . get_the_title() . '</div>';
                    $msg .= '</div>';
                    $msg .= '<!-- Text -->';
                    $msg .= '<p>' . get_the_content() . '</p>';
                    $msg .= '<!-- Button -->';
                    $msg .= '<a href="' . get_the_permalink() . '" class="card-button">';
                        $msg .= '<div class="row align-items-center">';
                            $msg .= '<div>Details</div>';
                            $msg .= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">';
                                $msg .= '<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>';
                            $msg .= '</svg>';
                        $msg .= '</div>';
                    $msg .= '</a>';
                $msg .= '</div>';

            endwhile;
            // Reset post data
            wp_reset_postdata();
        endif;

        // Response
        $response = array();
        $response['posts'] = $msg;
        wp_send_json($response);
    }
    add_action('wp_ajax_load_more_posts', 'load_more_posts');
    add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');