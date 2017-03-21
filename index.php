<?php get_header(); ?>
	<div class="row">
		<?php //get_template_part( 'content', get_post_format() ); ?>
		<?php $index = 1; ?>
    <?php while ( have_posts() ) : the_post() ?>
			<div class="col-xs-12 col-md-4 col-lg-3">
      	<h2 class="entry-title">
        	<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
          	<?php the_title(); ?>
        	</a>
      	</h2>
      	<?php the_excerpt(); ?>
			</div>
		<?php
		 	if( $index%3 === 0 ){
				echo '<div class="clearfix visible-md-block"></div>';
			} elseif ( $index%4 === 0 ) {
				echo '<div class="clearfix visible-lg-block"></div>';
			}
			$index++;
		?>
    <?php endwhile; ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>
