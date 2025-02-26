<?php
/**
 * Index file to display WP Test Plugin output on the homepage
 */

// Load WordPress environment
require_once __DIR__ . '/wp-load.php';

get_header();
?>

<div class="container">
    <h1>Welcome to My WordPress Site</h1>
    <div>
        <?php echo do_shortcode('[wp_test]'); ?>
    </div>
</div>

<?php get_footer(); ?>
