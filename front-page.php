<?php get_header(); ?>

<div class="container front-page">
    <!-- Featured News Section (grid) -->
    <section class="featured-news">
        <h2 class="section-title"><?php esc_html_e('Top Stories', 'news-portal'); ?></h2>
        <div class="news-grid">
            <?php
            $featured_args = array(
                'posts_per_page' => 6,
                'meta_key'       => '_thumbnail_id', // only with featured image
            );
            $featured_query = new WP_Query($featured_args);
            if ($featured_query->have_posts()) :
                while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                    <article class="news-card">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('news-portal-large'); ?>
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div class="entry-meta"><?php echo get_the_date(); ?></div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>

    <!-- Latest News Section -->
    <section class="latest-news">
        <h2 class="section-title"><?php esc_html_e('Latest News', 'news-portal'); ?></h2>
        <div class="news-list">
            <?php
            $latest_args = array('posts_per_page' => 10);
            $latest_query = new WP_Query($latest_args);
            if ($latest_query->have_posts()) :
                while ($latest_query->have_posts()) : $latest_query->the_post(); ?>
                    <article class="news-list-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="entry-meta"><?php echo get_the_date(); ?></div>
                            <div class="entry-summary"><?php the_excerpt(); ?></div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
