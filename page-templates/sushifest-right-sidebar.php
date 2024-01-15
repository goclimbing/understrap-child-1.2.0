<?php

/**
 * Template Name: Sushi Fest Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>


<div class="wrapper" id="page-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content">

        <div class="row">

            <div class="<?php echo is_active_sidebar('right-sidebar') ? 'col-md-8' : 'col-md-12'; ?> content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php
                    while (have_posts()) {
                        the_post();

                        get_template_part('loop-templates/content', 'page');

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    }
                    ?>

                    <?php
                    $args = array('post_type' => 'Photographs', 'posts_per_page' => 10);
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                        the_title();
                        echo '<div class="entry-content">';
                        the_content();
                        echo '</div>';
                    endwhile;
                    ?>

                </main>

            </div><!-- #primary -->

            <?php get_template_part('sidebar-templates/sidebar', 'right'); ?>

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
