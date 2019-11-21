<!-- The Team  -->
<section class="our-team section-padding module">
 <div class="container">
     <div class="sec-title text-center">
		<?php if( get_sub_field('title') ) : ?>
			<h2 <?php echo ( get_sub_field( 'small_heading' ) ) ? 'class="size-md"' : '' ?>><?php the_sub_field( 'title' ); ?></h2>
		<?php endif; ?>	
	</div>
	<?php if( have_rows('list') ) :  ?>
         <div class="list-block">
            <div class="row">
            	<?php while( have_rows('list') ) :  the_row(); ?>
	                <div class="col-sm-6 col-md-3">
	                   <!-- Single Team -->
	                   <div class="single-team">
	                   	  <?php if( get_sub_field('image') ) : ?>
		                      <figure class="image-block">
		                           <?php 
		                           	$image = get_sub_field('image');

		                           	echo wp_get_attachment_image($image, 'full')
		                           ?>
		                      </figure>
	                      <?php endif; ?>	
	                      <div class="single-team__info">
	                      	<?php if( get_sub_field('name') ) : ?>
								<p><?php the_sub_field( 'name' ); ?></p>
							<?php endif; ?>	
							<?php if( get_sub_field('position') ) : ?>
								 <span><?php the_sub_field( 'position' ); ?></span>
							<?php endif; ?>
	                      </div>
	                   </div>
	                   <!-- ./Single Team -->
	                </div>
	            <?php endwhile; ?>   
	         </div>
	    </div>
    <?php endif; ?>
</section>
<!-- ./The Team  -->