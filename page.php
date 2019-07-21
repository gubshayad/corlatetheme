<?php get_header();?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-area">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()) : the_post(); ?>

                            <?php the_post_thumbnail('slide-image') ?>
                           <h2><?php the_title(); ?></h2> 
                           <?php the_content(); ?>
 
                        <?php endwhile ;?>
                        <?php else :?>
                        <h2>404 Not Found</h2>
                    <?php endif ;?>
                        
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>