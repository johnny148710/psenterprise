<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper site-footer" id="wrapper-footer">
    <footer class="container">
        <p>Website designed by <a href="https://firstevent.co.uk" target="_blank">First Event</a></p>
    </footer>
</div><!--col end -->
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

