    </div>
    <footer>
    <?php wp_nav_menu(
        array(
          'container' => false, 
          'theme_location' => 'footer',
          'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0')) ?>
    </footer>
    <?php wp_footer() ?>
</body>
</html>