<!-- Blur -->
<section class="blur" style="background: url(<?php echo the_sub_field( 'background_image' ); ?>) center center / cover no-repeat;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-block">
					<?php if( get_sub_field('heading') ) : ?>
						<h2><?php the_sub_field( 'heading' ); ?></h2>
					<?php endif; ?>	
					<?php if( get_sub_field('subheading') ) : ?>
						<?php  echo get_sub_field( 'subheading' ); ?>	
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- .Blur -->