<?php
/**
* Template Name: Portfolio Page
**/
get_header();
?>
<div class="row">
  <div class="col-sm-12">
    <?php while ( have_posts() ) : the_post() ?>
      <h2 class="portfolio-title text-center"><?php the_title(); ?></h2>
      <div class="portfolio-text"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div> <!-- /.blog-main -->
</div> <!-- /.row -->
<div class="row">
  <div class="col-sm-12">
    <?php
      $pages = get_pages(array(
        'sort_column' => 'menu_order',
        'sort_order' => 'asc',
        'post_type' => 'page',
        'post_status' => 'publish',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'templates/portfolio-piece.php'
      ));

      $toggle = false;
      $col_size = 0;
      foreach($pages as $page){
        $image_url_array = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), full );
        $image_string = '<a href="'.$page->guid.'" target="_blank" class="js-portfolio-link"><div class="portfolio-image" style="background-image: url('.$image_url_array[0].')"></div>';
        $title_string = '<h3>'.$page->post_title.'</a></h3>';

        $col_size = rand(3, 6);
        $remainder = 6 - $col_size;

        if(!$toggle){
          echo '<div class="row portfolio-piece-row">';
          echo '<div class="col-md-'.$remainder.' hidden-xs hidden-sm">';
          echo '</div>';
          echo '<div class="col-xs-12 col-md-'.$col_size.'">';
        }
        else {
          echo '<div class="col-xs-12 col-md-'.$col_size.'">';
        }

          echo $image_string;
          echo $title_string;
          echo '</div>';
        if($toggle){
          echo '<div class="col-md-'.$remainder.' hidden-xs hidden-sm">';
          echo '</div>';
          echo '</div>';
        }
        $toggle = !$toggle;
      }
    ?>
  </div>
</div>
<?php
  get_footer();
?>
