$(document).ready(function(){
  $('.js-portfolio-link').click(function(e){
      e.preventDefault();
      var source = $(e.currentTarget).attr('href');

      $.get(source, function(data){
        $('body').append(data);
        $('.modal').modal('show');
      })
  });

  $('body').on('hidden.bs.modal', '.modal', function(e){
    $('.modal').remove();
  });
});
