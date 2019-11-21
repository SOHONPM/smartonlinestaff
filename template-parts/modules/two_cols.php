<!-- Two Cols -->
<section class="two-cols-area <?php echo ( get_sub_field('background_fill_white') ) ? 'color-reverse':''; ?>">
	<div class="container">
		<div class="sec-title">
			<?php if( get_sub_field('heading') ) : ?>
				<h2><?php the_sub_field( 'heading' ); ?></h2>
			<?php endif; ?>	
		</div>
		<?php if( have_rows('list') ) : ?>
		<div class="list">
			
				<?php while( have_rows('list') ) :  the_row(); ?>
					
						<div class="list__item">
							<?php if( get_sub_field('title') ) : ?>
								<h4><?php the_sub_field( 'title' ); ?></h4>
							<?php endif; ?>
							<?php if( get_sub_field('text') ) : ?>
								<?php the_sub_field( 'text' ); ?>
							<?php endif; ?>
						</div>
			
				<?php endwhile; ?>
			
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- .Two Cols -->