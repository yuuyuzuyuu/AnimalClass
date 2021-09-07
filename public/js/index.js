$('ul.pagination').hide();
$(function() {
    $('.animal-index').jscroll({
        autoTrigger: true,
        padding: 0,
        nextSelector: '.pagination li.active + li a',
        contentSelector: 'div.animal-index',
        callback: function() {
            $('ul.pagination').remove();
        }
    });
});