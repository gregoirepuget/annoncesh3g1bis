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
    //console.log(data_id);
    var content= $(".annonces");
    content.empty().append("Recherche en cours...");
    $.post(
      ajaxurl,
      {
        'action'  : 'filter-category',
        'data_id' : data_id 
      },
      function(response)
      {
        content.html(response);
      }
    );
    
  });
});
