<?php get_header(); ?>
	<div class="row">
    <?php while ( have_posts() ) : the_post() ?>
			<div class="col-xs-12">
      	<h2 class="entry-title"><?php the_title(); ?></h2>
      	<?php the_content(); ?>
			</div>
    <?php endwhile; ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>
