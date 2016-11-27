/* mainSlider */
function mainSlider(){
	$('.news-images').bxSlider({
		caption: false,
		controls: true,
		pager: false,
		auto: false
	});
}
/* mainSlider end */

function vmiddle(obj){
	$(obj).each(function(){
		var bl = $(this);
		var bl_h = bl.height();
		var img_h = bl.find('img').height();
		var marg = (bl_h/2) - (img_h/2);
		bl.find('img').css('margin-top', marg);
	});
}

/* Yandex map */
function yandexMap(){ 	
	if ( $('.map').length ) {
		$('.map').each(function(index){
			var obj = $(this);
			var objIndex = index + 1;
			var className = obj.attr('class');
			obj.attr('id', 'map-'+objIndex);
			var id = obj.attr('id');
			var left = obj.data('left');
			var right = obj.data('right');
			var zoom = obj.data('zoom');
			ymaps.ready(function () {
				// Create map
				var myMap = new ymaps.Map(id, {
					center: [left, right],
					zoom: zoom
				});
				myPlacemark = new ymaps.Placemark([left, right], {
					hintContent: 'Professional Coffee Service',
					help_hint: 'Coffee Service',
					balloonContent: '<div>Coffee Service</div>'
				}, {
					iconImageHref: 'img/baloon.png',
					iconImageSize: [160, 44],
					iconImageOffset: [-80, -44]
				});
				// Add buttons and placemarks
				myMap.controls.add('zoomControl', {top: '10px', left:'10px', height: '50px'});
				myMap.geoObjects.add(myPlacemark);
			});
			
		});
	}
}
/* Yandex map End */

/* eqHeight */
function eqHeightFn(){
	var block = $('.services .column:eq(0) .services-box');
	var wrap =$('.services .column:eq(1) .services-box');
	block.each(function(i, el){
		var h = $(el).height();
		wrap.eq(i).css('height', h);
	});
}
/* eqHeight end */

/* filter */
function filter(){
	var checkbox = $('.filter :checkbox');
	checkbox.each(function(i, el){
		if ( $(el).is(':checked') ) $(el).parents('label').addClass('checked');
		else $(el).parents('label').removeClass('checked');
	});
	checkbox.on('change', function(){
		var el = $(this);
		if ( $(el).is(':checked') ) $(el).parents('label').addClass('checked');
		else $(el).parents('label').removeClass('checked');
		
		if ( $(el).hasClass('all') ) {
			var parent = $(el).parents('.filter-box');
			if ($(el).is(':checked')) {
				parent.find(':checkbox').attr('checked', 'checked').parents('label').addClass('checked');
			} else {
				parent.find(':checkbox').removeAttr('checked').parents('label').removeClass('checked');
			}
		}
		
		var checkboxBoxLen = $(el).parents('.filter-box').find(':checkbox').length;
		var checkboxCheckedBoxLen = $(el).parents('.filter-box').find('.checkbox-hodler:gt(0) input:checked').length + 1;
		console.log(checkboxBoxLen);
		console.log(checkboxCheckedBoxLen);
		if ( checkboxBoxLen == checkboxCheckedBoxLen ) {
			$(el).parents('.filter-box').find('.all').attr('checked', 'checked').parents('label').addClass('checked');
		} else {
			$(el).parents('.filter-box').find('.all').removeAttr('checked').parents('label').removeClass('checked');
		}
		
	});
}
/* filter end */

/* fancy */
function fancy(){
	$('.sertificate-holder .button').on('click', function(e){
		if ( $(this).hasClass('open') ){
			$(this).removeClass('open');
			$('.sert-list').slideUp(300);
		} else {
			$(this).addClass('open');
			$('.sert-list').slideDown(300);
		}
		e.preventDefault();
	});
	$('.sert-list h4').each(function(i, el){
		var text = $(el).html();
		$(el).parents('li').find('a').attr('title', text);
	});
	$('.sert-list a')
	.attr('rel', 'gallery')
	.fancybox({
		padding: 20,
		wrapCSS: 'fancy-gallary',
		helpers: {
			overlay: {
				css: {
					'background' : 'rgba(0,0,0,0.8)'
				}
			},
			title : {
				type : 'inside'
			}
		}
	});
}
/* fancy end */

/* fullStory */
function fullStory(){
	$('.description .more').on('click', function(e){
		var $this = $(this);
		var full = $this.parent().find('.full-story');
		if ( $this.hasClass('open') ) {
			$this.removeClass('open').html('Подробнее');
			full.slideUp(200);
		} else {
			$this.addClass('open').html('Закрыть');
			full.slideDown(200);
		}
		e.preventDefault();
	});
}
/* fullStory end */

/** ready/load/resize document **/

$(document).ready(function(){
	yandexMap();
	mainSlider();
	eqHeightFn();
	filter();
	fancy();
	fullStory();
});
$(window).load(function(){
	vmiddle($('.catalog-item figure'));
});