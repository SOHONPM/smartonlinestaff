<!-- Partners -->
  <section class="partners section-padding module">
     <div class="container text-center">
          <?php if( get_sub_field('heading') ) : ?>
            <div class="sec-title">
               <h2><?php the_sub_field( 'heading' ); ?></h2>
            </div>
          <?php endif; ?> 
          <?php if( have_rows('list') ) :  ?>
            <div class="list-block">
               <div class="row">

                <?php while( have_rows('list') ) :  the_row(); ?>
                     <div class="col">
                        <!-- Single partner -->
                        <div class="single-partner">
                           <a href="<?php echo get_sub_field('link') ?>" taret="_blank"><?php $image =  get_sub_field('logo');

                               echo wp_get_attachment_image($image, 'full');
                            ?></a>
                        </div>
                        <!-- Single partner -->
                     </div>
                <?php endwhile; ?>

               </div>
            </div>
          <?php endif; ?>
     </div>
  </section>
  <!-- ./Partners -->