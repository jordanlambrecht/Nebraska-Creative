// store filter for each group
var buttonFilters = {};
var buttonFilter;
// quick search regex
var qsRegex;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  stagger: 20,
  transitionDuration: '.4s',
	layoutMode: 'vertical',
  percentPosition: true,
  hiddenStyle: {
  opacity: 0,
  transform: 'translateY(100px)',
},
visibleStyle: {
  opacity: 1,
  transform: 'translateY(0)',
},
  masonry: {
    columnWidth: '.grid-sizer'
  },
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  },
});

$('.filter-button-group').on( 'click', 'button', function() {
  var $this = $(this);
  // get group key
  var $buttonGroup = $this.parents('.button-group');
  var filterGroup = $buttonGroup.attr('data-filter-group');
  $this.parents('.button-group').children().removeClass('active');
  $this.addClass('active');
  // set filter for group
  buttonFilters[ filterGroup ] = $this.attr('data-filter');
  // combine filters
  buttonFilter = concatValues( buttonFilters );
  // Isotope arrange
  $grid.isotope();
});

// use value of search field to filter
var $quicksearch = $('.quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}) );

// flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
}

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}




  var $window = $(window);
  var $buttonTop = $('.button-top');
  var scrollTimer;

  $buttonTop.on('click', function () {
    $('html, body').animate({
      scrollTop: 0,
    }, 400);
  });

  $window.on('scroll', function () {
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(function() {
     if ($window.scrollTop() > 100) {
        $buttonTop.addClass('button-top-visible');
      } else {
        $buttonTop.removeClass('button-top-visible');
      }
    }, 250);
  });
