<section class="hero">
    <div class="slick-section">
        <?php
        $slider_args  = array(
            'post_type' => 'hero_section',
        );

        $slider_query = new WP_Query( $slider_args );
        ?>
        <?php
            if( $slider_query->have_posts() ){
                while( $slider_query->have_posts() ){ 
                    $slider_query->the_post(); ?>

                    <?php $image = get_field('background_image'); ?>
                    <div class="hero-body">
                    <?php if( !empty($image) ){ ?>
                        
                        <img class="hero-background" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        
                    <?php } ?>
                        <div class="hero-text-content">
                            <p class="headline"><?php echo get_field('headline'); ?></p>
                            <p class="hero-subtitle"><?php echo get_field('hero_subtitle'); ?></p>
                            <p class="hero-text"><?php echo get_field('hero_text'); ?></p>
                        </div>
                    </div>
                    <?php 
                } 
            }
        wp_reset_query(); ?>
    </div>
                
</section>