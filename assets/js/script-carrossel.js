/*JS DO CARROSSEL DA PÁGINA INICIAL*/

$(document).ready(function() {
    let sliderLength = $('#autoWidth').children().length;
    if (sliderLength > 0 && sliderLength <= 3){
        $('#autoWidth').addClass('row px-5 justify-content-center');
        $('#autoWidth').children().addClass('mb-2 col-'+12/length);
    }
    if (sliderLength > 3) {
        $('#autoWidth').lightSlider({
            autoWidth:true,
            adaptiveHeight:false,
            verticalHeight:600,
            loop:false,
            onSliderLoad: function(el) {
                $('#autoWidth').removeClass('cS-hidden');   
                var maxHeight = 0,
                container = $(el),
                children = container.children();
                children.each(function () {
                    var childHeight = $(this).height();
                    if (childHeight > maxHeight) {
                        maxHeight = childHeight;
                    }
                });
                container.height(maxHeight);
            },
            onAfterSlide: function(el){
                var maxHeight = 0,
                container = $(el),
                children = container.children();
                children.each(function () {
                    var childHeight = $(this).height();
                    if (childHeight > maxHeight) {
                        maxHeight = childHeight;
                    }
                });
                container.height(maxHeight);
            } ,
            onBeforeSlide: function(el){
                var maxHeight = 0,
                container = $(el),
                children = container.children();
                children.each(function () {
                    var childHeight = $(this).height();
                    if (childHeight > maxHeight) {
                        maxHeight = childHeight;
                    }
                });
                container.height(maxHeight);
            } 
        });
    } 
  });