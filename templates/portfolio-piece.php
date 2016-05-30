<?php
/**
* Template Name: Portfolio Piece
**/
?>

<?php while ( have_posts() ) : the_post() ?>
<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close js-modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo the_title(); ?></h4>
      </div>
      <div class="modal-body">
        <?php echo the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
