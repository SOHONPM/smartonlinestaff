<!-- Single Form -->
<section class="contact-area">
	<div class="container">
		<div class="sec-title">
			<?php if( get_sub_field('heading') ) : ?>
				<h2><?php the_sub_field( 'heading' ); ?></h2>
			<?php endif; ?>	
		</div>
	

			<!-- form-extra -->
			   <?php echo get_sub_field( 'form' ); ?>
			<!-- .form-extra -->
	
	
	</div>
</section>
<!-- .Single Form -->