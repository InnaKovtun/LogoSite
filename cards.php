
<div class="grid-container cards-block">
    
    <h2 class="section-title">Lorem ipsum dolor sit amet.</h2>
    <div class="grid-x grid-margin-x small-up-2 medium-up-3">
       
    <?php
    $args = array(
        'post_type'      => 'cards',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
    );
    
    $query = new WP_Query( $args );
    
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post(); ?>
            
        <div class="cell">
            <div class="card">   
                <div class="card-section"> 
                    <?php $image = get_field('card_image');?>     
                    <?php $card_link = get_field('card_link');?>     
                    
                    <?php if( !empty($image) ){ ?>                      
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="card-img" />                               
                    <?php } ?>
                
                    <h3 class="card-title"><?php echo get_field('card_title'); ?></h3>
                    <p class="card-subtitle"><?php echo get_field('card-subtitle'); ?></p>
                    <div class="pseudo-line"></div>
                    <p class="card-text"><?php echo get_field('card_text'); ?></p>
                    <button class="card-button"> 
                        <a href="<?php echo get_post_type_archive_link('card'); ?>" class="card-link">
                        <?php echo $card_link['title'];?>
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <?php }
        } else {
            echo 'Ничего не найдено'; 
        }
        wp_reset_postdata();?>
    </div>
</div>
                   
                    
