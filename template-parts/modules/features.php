 <!-- Features -->
 <section class="features-area module">
   <div class="container">
        <?php if( have_rows('list') ) : ?>
            <div class="row features-list">
                <?php while( have_rows('list') ) :  the_row(); ?>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="single-feature">
                             <?php if( get_sub_field( 'heading' ) ) : ?>
                                <div class="single-feature__header">
                                  
                                    <?php 
                                        $image = get_sub_field( 'icon' );

                                        echo wp_get_attachment_image($image, 'full', ['class' => 'img-responsive']);
                                    ?>
                      
                                    <h2><?php the_sub_field( 'heading' ); ?></h2>
                                </div>
                             <?php endif; ?>
                             <?php if( get_sub_field( 'subheading' ) ) : ?>
                                <div class="single-feature__body">
                                    <?php the_sub_field( 'subheading' ); ?>
                                </div>
                             <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>   
            </div>
        <?php endif; ?> 
   </div>
 </section>
 <!-- ./ Features -->