<!-- benefit -->
<section class="benefit-area-two">
	<div class="container">
		<div class="sec-title">
			<?php if( get_sub_field('heading') ) : ?>
				<h2><?php the_sub_field( 'heading' ); ?></h2>
			<?php endif; ?>	
		</div>
		<?php if( have_rows('list') ) : ?>
		<div class="list">
			<div class="row">
				<?php while( have_rows('list') ) :  the_row(); ?>
					<div class="col-sm-6 col-md-3">
						<div class="list__item">
							<?php if( get_sub_field('icon') ) : ?>
								<figure class="img-box">
									<?php 
										$image = get_sub_field('icon');

										echo wp_get_attachment_image($image, 'full');
									?>
								</figure>
							<?php endif; ?>
							<?php if( get_sub_field('title') ) : ?>
								<h4><?php the_sub_field( 'title' ); ?></h4>
							<?php endif; ?>
							<?php if( get_sub_field('content') ) : ?>
								<?php the_sub_field( 'content' ); ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- .benefit -->