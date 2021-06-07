<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kitchen6
 */

get_header();
?>

	<main id="primary" class="site-main">
    <h2>RECENTLY SAVED RECIPES</h2>
    <ul class="links-list">
		<?php
    $recipes = new WP_Query(array(
      'posts_per_page' => 40,
      'post_type' => 'recipe'
    ));

    while($recipes->have_posts()) {
      $recipes->the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php }
		?>
    </ul>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
