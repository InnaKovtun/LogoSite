<footer class="footer">

    <?php wp_footer();?>
    <div class="nav-menu">
        <div id="menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'menu'
          )); ?>
        </div>
    </div>
    <div>
    <?php echo do_shortcode('[contact-form-7 id=5 title="Contact form"]'); ?>
    </div>
</footer>
