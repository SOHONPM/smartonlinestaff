<!-- Numbered List -->
<section class="list-area list-area-two">
	<div class="container">
		<?php $heading = get_sub_field('heading'); ?>
		<?php if( have_rows('list') ) :  $count = 0; ?> 
		<div class="list">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="list__item list__item--big">
						<?php if( $heading ) : ?>
							<h2><?php echo $heading; ?></h2>
						<?php endif; ?>	
					</div>
				</div>
				<?php while( have_rows('list') ) :  the_row(); $count++ ?>
					<div class="col-sm-6 col-md-4">
						<div class="list__item">
							<div class="list__item-number">
								<span><?php echo ( $count < 10) ? '0' . $count: $count; ?></span>
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
<!-- .Numbered List -->