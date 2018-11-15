<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
                    <div class="post-content mb-5">
                        <?php the_content(); ?>
                    </div>
    <?php endwhile; ?>
<?php endif; ?>
