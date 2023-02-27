$(document).ready(function(){
      
      $('.container-category .category_item[category="all"]').addClass('ct_item-active');

      $('.category_item').click(function(){

            var catProduct = $(this).attr('category');
            console.log(catProduct);

            $('.category_item').removeClass('ct_item-active');
            $(this).addClass('ct_item-active');

            $('.card-menu').css('transform', 'scale(0)');
            function hideProduct(){
                  $('.card-menu').hide();
            } setTimeout(hideProduct, 400);

            function showProduct(){
                  $('.card-menu[category="'+catProduct+'"]').show()
                  $('.card-menu[category="'+catProduct+'"]').css('transform', 'scale(1)');
            } setTimeout(showProduct, 400);
      });

      $('.category_item[category="all"]').click(function(){
            function showAll(){
                  $('.card-menu').show()
                  $('.card-menu').css('transform', 'scale(1)');
            } setTimeout(showAll, 400);
      });
});