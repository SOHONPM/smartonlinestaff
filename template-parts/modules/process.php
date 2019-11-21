<!-- Process -->
<section class="process-area">
	<div class="container">
		<div class="sec-title">
			<?php if( get_sub_field('heading') ) : ?>
				<h2><?php the_sub_field( 'heading' ); ?></h2>
			<?php endif; ?>	
			<?php if( get_sub_field('subheading') ) : ?>
				<?php  echo get_sub_field( 'subheading' ); ?>	
			<?php endif; ?>
		</div>
		<?php if( have_rows('list') ) :  $count = 0; ?>
		<div class="list">
			<div class="row">
				<?php while( have_rows('list') ) :  the_row(); $count++; ?>
					<div class="col-sm-6">
						<div class="list__item">
							<div class="list__item-number">
								<span><?php echo ( $count < 10) ? '0'. $count: $count; ?></span>
							</div>
							<div class="list__item-info">
								<?php if( get_sub_field('title') ) : ?>
									<h4><?php the_sub_field( 'title' ); ?></h4>
								<?php endif; ?>
								<?php if( get_sub_field('text') ) : ?>
									<?php the_sub_field( 'text' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<!-- .Process -->