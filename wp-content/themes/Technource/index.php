<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Technource
 * @since Technource 1.0
 */

get_header();
?>

<!-- Main Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-head"><span class="tagline">WEB + CRO + CRM</span>
                    <h2 class="title">We help <span><img draggable="false" role="img" class="emoji" alt="🤝" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f91d.svg"></span> entrepreneurs like Sam get <span class="text-highlight">better results</span>! <span><img draggable="false" role="img" class="emoji" alt="🤩" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f929.svg"></span></h2>
                </div>
                <div class="excerpt">
                    <p>Are you ready to boost your website conversions? Claim your 30-minute free strategy session and let’s get started!
                        ?</p>
                </div>
                <div class="cta"><a href="/free-strategy-session/" class="btn-brand">Claim your 30 mins now!</a></div>
            </div>
            <div class="col-lg-6">
                <img class="hero-image mt-4" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-section-svg.png'); ?>" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Testimonial and Client Logo -->
<div class="hero2-section">
    <div class="container">
        <div class="row align-items-center mb-3">
            <div class="col-lg-5">
                <div class="w3-content w3-display-container">
                    <?php
                    $args = array('post_type' => 'testimonial',);
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="mySlides">

                                <?php the_content(); ?>

                                <span class="testimonial-name"><?php the_title(); ?></span><br />
                                <span class="testimonial-position"><?php
                                                                    the_excerpt();
                                                                    ?></span>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    <?php else :  ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                    <div class="slider-navigation">
                        <span class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</span>
                        <span class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div id="partners" class="col partners-wrap">
                    <div class="partner-logo">
                        <img width="175" height="35" src="https://wiqly.io/wp-content/uploads/2022/05/freshworks.svg" class="attachment-full size-full" alt="" />
                    </div>
                    <div class="partner-logo">
                        <img width="175" height="35" src="https://wiqly.io/wp-content/uploads/2022/05/adobe.svg" class="attachment-full size-full" alt="" />
                    </div>
                    <div class="partner-logo">
                        <img width="175" height="35" src="https://wiqly.io/wp-content/uploads/2022/05/WordPress.svg" class="attachment-full size-full" alt="" />
                    </div>
                    <div class="partner-logo">
                        <img width="175" height="35" src="https://wiqly.io/wp-content/uploads/2022/05/wpengine-1.svg" class="attachment-full size-full" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
