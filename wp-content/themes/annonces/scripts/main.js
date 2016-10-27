jQuery(document).ready(function($){
  
  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  
  console.log(ajaxurl);
  
  $(".list-category-annonces a").on('click',function(e){
    e.preventDefault();
    //console.log("ajax");
    var data_id=$(this).attr("data-id");
    $(".list-category-annonces a.current").removeClass("current");
    $(this).addClass("current");
    //console.log(data_id);
    var content= $(".annonces");
    content.empty().append("Recherche en cours...");
    $.post(
      ajaxurl,
      {
        'action'  : 'filter-category',
        'data_id' : data_id,
        'data_page' : 1
      },
      function(response)
      {
        content.html(response);
        
      }
    );
    
  });
  
  
    $(".annonces").on('click','.buttonNextAjax', function(e){
      e.preventDefault();
      var data_id = $(this).attr('data-id');
      var data_page = $(this).attr('data-page');
      $(this).html('Recherche en cours...');
      var content = $(".annonces");
      $.post(
          ajaxurl,
        {
        'action'  : 'filter-category',
        'data_id' : data_id,
        'data_page' : data_page
        },
        function(response)
        {
          $('.buttonNextAjax').remove();
          content.append(response);
        }
        
      );
    });
  
  
  
  
});














