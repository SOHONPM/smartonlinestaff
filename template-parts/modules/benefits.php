<!-- The Benefits  -->
<section class="benefits section-padding module">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="text-block">
                   <?php if( get_sub_field('heading') ) : ?>
                        <div class="sec-title text-center">
                          <h2><?php the_sub_field( 'heading' ); ?></h2> 
                          <p><?php the_sub_field( 'subheading' );?></p>
                        </div>
                   <?php endif; ?>
                 
                 <?php if( have_rows('list') ) : ?>
                  <div class="list-block">
                     <div class="row">
                        <?php while( have_rows('list') ) :  the_row(); ?>
                          <div class="col-sm-6">
                               <div class="single-benefit">
                                   <h3><?php the_sub_field( 'title' ); ?></h3>
                                   <p><?php the_sub_field( 'text' ); ?></p>
                               </div>
                          </div>
                        <?php endwhile; ?>
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
           </div>
           
       </div>
   </div>
</section>
<!-- ./The Benefits  -->