function mediaQueriesWin(){
    var width = $(window).width();
    $(".has-child>a").on('click', function() {
       var parentElem = $(this).parent();
       $(parentElem).toggleClass('active');
       $(parentElem).children('ul').stop().slideToggle(500);
       return false;
    });
}

$(window).resize(function() {
   mediaQueriesWin(); 
});

$(window).on('load', function() {
   mediaQueriesWin(); 
});