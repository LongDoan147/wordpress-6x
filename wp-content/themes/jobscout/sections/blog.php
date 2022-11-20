<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css" media="screen" />
<?php

/**
 * Blog Section
 * 
 * @package JobScout
 */

$blog_heading = get_theme_mod('blog_section_title', __('Latest Articles', 'jobscout'));
$sub_title    = get_theme_mod('blog_section_subtitle', __('We will help you find it. We are your first step to becoming everything you want to be.', 'jobscout'));
$blog         = get_option('page_for_posts');
$label        = get_theme_mod('blog_view_all', __('See More Posts', 'jobscout'));
$hide_author  = get_theme_mod('ed_post_author', false);
$hide_date    = get_theme_mod('ed_post_date', false);
$ed_blog      = get_theme_mod('ed_blog', true);

$args = array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 4,
    'ignore_sticky_posts' => true
);

$qry = new WP_Query($args);

if ($ed_blog && ($blog_heading || $sub_title || $qry->have_posts())) { ?>
    <section id="blog-section" class="article-section">
        <div class="container blog-container">
            <?php
            if ($blog_heading) echo '<h2 class="section-title">' . esc_html($blog_heading) . '</h2>';
            if ($sub_title) echo '<div class="section-desc">' . wpautop(wp_kses_post($sub_title)) . '</div>';
            ?>

            <?php if ($qry->have_posts()) { ?>

                <div class="article-wrap">
                    <?php         
                  while ($qry->have_posts()) {
                        $qry->the_post(); ?>
                        <article class="post">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('jobscout-blog', array('itemprop' => 'image'));
                                            } else {
                                                jobscout_fallback_svg_image('jobscout-blog');
                                            }
                                            ?>
                                        </a>
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <header class="entry-header">
                                        <h3 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="content">
                                            <?php the_excerpt() ?>
                                            <a href='<?php the_permalink(); ?>'>Read More</a>
                                        </div>
                                    </header>
                                </div>
                            </div>


                        </article>
                    <?php
                    }
                    wp_reset_postdata();
                    ?>
                </div><!-- .article-wrap -->

                <?php if ($blog && $label) { ?>
                    <div class="btn-wrap">
                        <a href="<?php the_permalink($blog); ?>" class="btn"><?php echo esc_html($label); ?></a>
                    </div>
                <?php } ?>

            <?php } ?>
        </div>
    </section>
<?php
}
