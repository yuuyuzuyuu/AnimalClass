$('#page-link a[href*="#"]').click(function () {
	var elmHash = $(this).attr('href');
	var pos = $(elmHash).offset().top;
	$('body,html').animate({scrollTop: pos}, 1500); //数値が大きくなるほどゆっくりスクロール
	return false;
});