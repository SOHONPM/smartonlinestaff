<!-- Multiple List -->
<section class="list-area">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="sec-title">
					<?php if( get_sub_field('heading') ) : ?>
						<h2><?php the_sub_field( 'heading' ); ?></h2>
					<?php endif; ?>	
					<?php if( get_sub_field('subheading') ) : ?>
						<?php  echo get_sub_field( 'subheading' ); ?>	
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php if( have_rows('list') ) : ?>
		<div class="list">
			<div class="row">
				<?php while( have_rows('list') ) :  the_row(); ?>
					<div class="col-sm-6 col-md-3">
						<div class="list__item">
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
<!-- .Multiple List -->