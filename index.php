<?php
/**
 * The site's entry point.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php get_header(); ?>
<main id="theme-main">
    <div class="theme-featured">
        <div class="container">
            <div class="feature-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="feature-post">

                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 2,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>
                        <div class="post-card">
                            <div class="post-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

                            </div>
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
                <?php
                    }
                    wp_reset_postdata();
                } else {
                    ?>
                    <h4 class="no-data">No Featured Posts</h4>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <div class="theme-posts">
        <div class="container">
            <div class="posts-title">
                <h2><span>All stories</span></h2>
            </div>
            <div class="posts-grid">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => -1,
                    'offset'         => 2,
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    $post_counter = 0; // Initialize post counter
                    while ($query->have_posts()) {
                        $query->the_post();
                        if ($post_counter >= 2) { // Exclude the first two posts
                ?>
                            <div class="post-card">
                                <a href="<?php the_permalink(); ?>" class="post-img">
                                    <?php the_post_thumbnail('post-thumbnail',array(
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
                <?php
                        }
                        $post_counter++; // Increment post counter
    
                    }

                    wp_reset_postdata();
                } else {
                    ?>
                    <h4 class="no-data">No Posts</h4>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>