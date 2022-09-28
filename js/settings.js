jQuery(document).ready(function($){

  $('.sf-menu ul').supersubs({
          minWidth: 12,
          maxWidth: 27,
          extraWidth: 0 // set to 1 if lines turn over
      }).superfish({
        delay: 200,
        animation: {opacity:'show', height:'show'},
        speed: 'fast',
        autoArrows: false,
        dropShadows: false
  });

  $('.carousel').carousel();

  $('.widget-tab-nav a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })

  /* Sellar Config */

  if($.stellar)
  {
    $.stellar({
        horizontalOffset: 50,
        verticalOffset: -250,
        responsive: true,
        horizontalScrolling: false
    });
  }

  $(window).resize(function() {
    if($.stellar)
    {
        $.stellar('refresh');
      }
  });

  

  /* Isotope */

    if($('#container').length)
    {

    $(function(){

      var $container = $('#container'),

      filters = {};

      $container.isotope({
        itemSelector : '.category-portfolio',
        masonry: {
          //columnWidth: 80
          columnWidth:    0,
            isAnimated:     true,
            isFitWidth:     false
        }

      });

      // filter buttons
      $('.filter a').click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return;
        }

        var $optionSet = $this.parents('.option-set');
        // change selected class
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
        

        // store filter value in object
        // i.e. filters.color = 'red'
        var group = $optionSet.attr('data-filter-group');
        filters[ group ] = $this.attr('data-filter-value');
        // convert object into array

        var isoFilters = [];
        for ( var prop in filters ) {
          isoFilters.push( filters[ prop ] )
        }

        var selector = isoFilters.join('');
        $container.isotope({ filter: selector });

        return false;

      });

   });

  }

  if($('#container').length)
  {
    $(window).load(function() { 
      $('#container').fadeIn();
      $('#container').isotope({ filter: '*' }) 
    });
  }

  /* end Isotope */

    $('.autoplay').slick({
    slidesToShow: 6,
    slidesToScroll: 6,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
    {
      breakpoint: 1199,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
    ]
  });

});