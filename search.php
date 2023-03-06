<?php
/**
 * The template for displaying search results.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<main id="theme-search-blog">
    <div class="container">
        <div class="posts-grid">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>

                    <div class="post-main">
                        <div class="post-card">
                            <a href="<?php the_permalink(); ?>" class="post-img">
                                <?php the_post_thumbnail('post-thumbnail', array(
                                    'style' => 'width: 100%;height:300px'
                                )); ?>
                            </a>
                            <div class="post-content">
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>">
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                                <div class="post-meta">
                                    <h5><?php the_author_link(); ?></h5>
                                    <p><?php echo get_the_date(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
                wp_reset_postdata();
            }else{
                ?>
                    <h4 class="no-data">No Posts Found</h4>
                <?php
            }

            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>