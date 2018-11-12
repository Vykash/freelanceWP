<?php get_header(); ?>
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">
                        <?php the_title(); ?>
                    </h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="<?php the_post_thumbnail_url()?>">
                    <p class="mb-5">
                        <?php the_content(); ?>
                    </p>
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
