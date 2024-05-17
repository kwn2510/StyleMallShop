/**slide */
$(document).ready(function() {
    $('#slider-carousel').carousel();
});

/**danh muc */
$(document).ready(function() {
    $('.panel-heading a').click(function() {
        var panelBody = $(this).parents('.panel').find('.panel-body');
        panelBody.slideToggle();
    });
});

/** new and trendy pr */
    $(document).ready(function() {
        $('.category-tab .nav-tabs li a').click(function() {
            var tabId = $(this).attr('href');
            $('.category-tab .nav-tabs li').removeClass('active');
            $(this).parent('li').addClass('active');
            $('.category-tab .tab-pane').removeClass('active');
            $(tabId).addClass('active');
        });
    });


/** sale */
$(document).ready(function() {
        // Khi nhấp vào nút "previous"
        $('.sale-item-control.left').click(function() {
            $('#sale-item-carousel').carousel('prev');
        });

        // Khi nhấp vào nút "next"
        $('.sale-item-control.right').click(function() {
            $('#sale-item-carousel').carousel('next');
        });
    });

/** */
$(document).ready(function() {
    // Khi nhấp vào nút "previous"
    $('.left.item-control').click(function() {
      $('#similar-product').carousel('prev');
    });
  
    // Khi nhấp vào nút "next"
    $('.right.item-control').click(function() {
      $('#similar-product').carousel('next');
    });
  });