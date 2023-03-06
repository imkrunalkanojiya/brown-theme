<?php
/**
 * The template for displaying singular post-types: posts.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<main id="theme-single-blog">
    <div class="container">
        <?php
        while (have_posts()) {
            the_post();
        ?>

            <div class="post-main">
                <div class="post-side">
                    <div class="meta">
                        <div class="author-details">
                            <h5>Author</h5>
                            <p><?php the_author_link(); ?></p>
                        </div>
                        <div class="date-details">
                            <h5>Published</h5>
                            <p><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="category-details">
                            <h5>Category</h5>
                            <p><?php the_category() ?></p>
                        </div>
                    </div>
                </div>
                <div class="post-content">
                    <h1><?php the_title(); ?></h1>
                    
                    <?php the_post_thumbnail() ?>
                    <div class="content">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>

        <?php
        }
        wp_reset_postdata();
        ?>

    </div>
</main>
<?php get_footer(); ?>