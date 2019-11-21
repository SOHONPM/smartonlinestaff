 <!-- The Leads  -->
<section class="leads module">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
              <div class="text-block">
                  <?php if( get_sub_field('heading') ) : ?>
                        <div class="sec-title text-center">
                          <h2><?php the_sub_field( 'heading' ); ?></h2> 
                        </div>
                  <?php endif; ?>
                  <?php if( have_rows('list') ) : ?>
                        <div class="list-block">
                          <div class="row">
                              <?php while( have_rows('list') ) :  the_row(); ?>
                                <div class="col-sm-4">
                                     <div class="single-lead">
                                        <?php if(get_sub_field( 'title' )) : ?>
                                          <h3><?php the_sub_field( 'title' ); ?></h3>
                                        <?php endif; ?>
                                        <?php if(get_sub_field( 'text' )) : ?>
                                          <p><?php the_sub_field( 'text' ); ?></p>
                                        <?php endif; ?>
                                     </div>
                                </div>
                              <?php endwhile; ?>
                          </div>
                        </div>
                  <?php endif; ?>  

              </div>
          </div>
   </div>
</section>
<!-- ./The Leads  -->