<?php
/*
  Template Name: Home
 */
?><!DOCTYPE html>

<?php get_header(); ?>

<?php
$menu_items = wp_get_nav_menu_items('principal');
if ($menu_items) {
    foreach ($menu_items as $menu_item) {
        $args = array('p' => $menu_item->object_id, 'post_type' => 'any');

        global $wp_query;
        $wp_query = new WP_Query($args);
        $templatePart = ($menu_item->title) ? : $menu_item->object;
        ?>

        <section class="content-section text-center"<?php post_class('sep'); ?> id="<?php echo sanitize_title($menu_item->title); ?>">
            <?php
            if (have_posts()) {
                include(locate_template('home-' . $templatePart . '.php'));
            }
            ?>
        </section>
        <?php
    }
};
?>

<?php
get_footer();
