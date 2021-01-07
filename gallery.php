<div class="gallery-section">    
    <?php
    $args = array(
        'post_type'      => 'gallery',
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post(); ?>  
            <?php $gallery_images = get_field('photo_gallery');?>
            <?php $images = explode(',', $gallery_images )?>

            <div class="gallery">

            <?php if( $images ): ?>
                
                <?php foreach( $images as $image ): ?>
                    
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full' );?>" class="gallery-image" />    

                <?php endforeach; ?>
            <?php endif; ?>
           
            </div>
            <div class="gallery-text-section">
                <h3 class="section-title"><?php echo get_field('gallery_title'); ?></h3>
                <p class="gallery-text"> <?php echo get_field('gallery_text'); ?></p>
            </div> 
        <?php }
        } else {
            echo 'Ничего не найдено'; 
        }
        wp_reset_postdata();?>
</div>