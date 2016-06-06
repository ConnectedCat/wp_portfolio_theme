<?php get_header(); ?>
<div class="row">
  <div class="col-xs-12">
    <?php while ( have_posts() ) : the_post() ?>
      	<h2 class="entry-title">
        	<a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark">
          	<?php the_title(); ?>
        	</a>
      	</h2>
      	<?php the_content(); ?>
      <div><?php previous_post_link('&laquo; %link') ?><span class="pull-right"><?php next_post_link('%link &raquo;') ?></span></div>
      <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    <?php endwhile; ?>
    
  </div>
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
