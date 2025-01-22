let productWarp = $('.product-warp');
//window.addEventListener('DOMContentLoaded', (event) => {
var swiperThumbImage = new Swiper('.product-thumb-slide', { 
	spaceBetween: 10,
	slidesPerView: 4,
	watchSlidesVisibility: true,
	//navigation: {
	//	nextEl: '.mew_product_thumb_next',
	//	prevEl: '.mew_product_thumb_prev',
	//},
});
var swiperMainImage = new Swiper('.product-main-slide', {
	effect: 'fade',
	//grabCursor: true,
	watchSlidesProgress: true,
	autoHeight: true,
	centeredSlides: true,
	slidesPerView: 1,
	speed:1000,
	navigation: {
		nextEl: '.mew_product_main-slide_next',
		prevEl: '.mew_product_main-slide_prev',
	},
	thumbs: {
		swiper: swiperThumbImage
	}
});
//})



var selectCallback = function(variant, selector) {
	if (variant) {
		var form = $('#' + selector.domIdPrefix).closest('form');
		for (var i = 0, length = variant.options.length; i < length; i += 1) {
			var radioButton = form.find('.swatch[data-option-index="' + i + '"] [type=radio][value="' + variant.options[i] +'"]');
			if (radioButton.length) { 
				radioButton.get(0).checked = true
			}
		}
	}
	var button = productWarp.find('.js-addToCart-product'),
		soutout = productWarp.find('.btn_out'),
		buttonText = button.find('.button__text'),
		quantity = productWarp.find('.product-quantity'),
		priceBox = productWarp.find('.product-price'),
		productPrice = productWarp.find('.special-price'),
		comparePrice = productWarp.find('.old-price'),
		inventoryStat = $('.inventory_quantity');


	if (variant && variant.sku != "" && variant.sku != null) {
		$("#sku").html(variant.sku);
	} else {
		$("#sku").html(variantStrings.otherUpdate);
	}

	if (variant !== null) {
		priceBox.removeClass('d-none');
		if(variant.available){
			button.prop('disabled', false);
			button.off('click');
			buyNow.prop('disabled', false);
			buttonText.text(variantStrings.addToCart);
			inventoryStat.text(variantStrings.avaiable);
			productPrice.removeClass('d-none');
			soutout.addClass('d-none').removeClass('d-flex');
			button.removeClass('d-none').addClass('d-flex');
			if(variant.price === 0){
				button.addClass('d-none').removeClass('d-flex');
				buyNow.addClass('d-none').removeClass('d-flex');
				quantity.addClass('d-none').removeClass('d-sm-flex');
				productPrice.text(variantStrings.noPrice);
				comparePrice.addClass('d-none');
			} else {
				button.removeClass('d-none disabled').addClass('d-flex');
				buttonText.text(variantStrings.addToCart);
				button.on('click', throttle(addToCart, 300));
				buyNow.removeClass('d-none').addClass('d-flex');
				quantity.removeClass('d-none').addClass('d-sm-flex');
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}â‚«"));
				if ( variant.compare_at_price > variant.price ) { comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}â‚«")).removeClass('d-none') } else { comparePrice.addClass('d-none') }
			}
		} else {
			soutout.removeClass('d-none').addClass('d-flex');
			button.addClass('d-none').removeClass('d-flex');
			buttonText.text(variantStrings.soldOut);
			button.off('click');
			buyNow.addClass('d-none').removeClass('d-flex');
			quantity.addClass('d-none').removeClass('d-sm-flex');
			productPrice.removeClass('d-none');
			if(variant.inventory_policy === 'continue'){
				button.removeClass('d-none').addClass('d-flex');
				buttonText.text(variantStrings.addToCart);
				button.on('click', throttle(addToCart, 300));
				buyNow.removeClass('d-none').addClass('d-flex');
				inventoryStat.text(variantStrings.allowBuyWhenSoldOut);
			} else{
				inventoryStat.text(variantStrings.soldOut);
			}
			if(variant && variant.price === 0){
				productPrice.text(variantStrings.noPrice);
				comparePrice.addClass('d-none');
				soutout.addClass('d-none').removeClass('d-flex');
			} else {
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}â‚«"));
				if ( variant.compare_at_price > variant.price ) { comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}â‚«")).removeClass('d-none') } else { comparePrice.addClass('d-none') }
			}
		}
		if (variant.featured_image) {  
			let variantImg = variant.featured_image.src;
			$(".product-thumb-slide img").each(function(){
				let currentUrlImg = $(this).attr('data-img').trim();
				if(variantImg === currentUrlImg){
					let index = $(this).closest('.swiper-slide').index();
					swiperMainImage.slideTo(index, 800);
					return false;
				}
			})		
		} 
	} else{
		priceBox.addClass('d-none');
		button.prop('disabled', true);
		buyNow.prop('disabled', true);
		button.addClass('d-none').removeClass('d-flex');
		buyNow.addClass('d-none').removeClass('d-flex');
		soutout.addClass('d-none').removeClass('d-flex');
		//addToCart.find('span').text(variantStrings.unAvailable);
		productPrice.addClass('d-none');
		comparePrice.addClass('d-none');
		quantity.addClass('d-none').removeClass('d-sm-flex');
		inventoryStat.text(variantStrings.unAvailable);
	}
};
$(function(){
	$('#product-selectors').length && MewServices.getProductJson(productAlias).then(res => {
		if(res.variants.length > 1){
			new Bizweb.OptionSelectors('product-selectors', { product: res, onVariantSelected: selectCallback, enableHistoryState: true });     
			if(typeof SwatchColor === "function" ){
				let swColor = new SwatchColor("https://file.hstatic.net/200000785527/file/mau-270a9bbe-95be-465e-b31a-3adc5d4321b5_1__2c5da264dc5b4c669ee2864c3ef5296e.txt");
				swColor.init();
			}
		}	
		if(res.options.length == 1 && !res.options[0].name.includes('Title')){
			$('.selector-wrapper').eq(0).prepend(`<label>${res.options[0].name}</label>`);
		}
		if(res.variants.length <= 1 && res.options[0].name.includes('Default')){
			$('.selector-wrapper').addClass('d-none');
		} else {
			$('.selector-wrapper select').addClass('custom-select rounded');
		}
		
		if(res.available && res.options.length > 1){
			linkOptionSelectors(res);
		}
		
	}).catch((error) => {
    console.log(error);
		$('#quickviewModal').find('.modal-body').html('')
	});
});
$('.swatch [type=radio]').on('change', function() {
	let optionIndex = $(this).closest('.swatch').attr('data-option-index');
	let optionValue = $(this).val();
	$(this).closest('form').find('.single-option-selector').eq(optionIndex).val(optionValue).trigger('change');
});

if ($('.openvideo').length){
	let videoId = $('.openvideo').data('video');
	let myModalEl = document.getElementById('videoModal');
	myModalEl.addEventListener('show.bs.modal', function (event) {
		if($(this).find('.embed-responsive').html().trim().length === 0){
			$(this).find('.embed-responsive').html(`<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/${videoId}?enablejsapi=1" allowfullscreen></iframe>" allow='autoplay; encrypted-media' allowfullscreen></iframe>`);
		}
	})
	myModalEl.addEventListener('hidden.bs.modal', function (event) {
		stopAllYouTubeVideos();
	})
}
if ($('.view_table').length){
	let specModalEl = document.getElementById('specModal');
	specModalEl.addEventListener('show.bs.modal', function (event) {
		$('#specModal .modal-body').html('');
		$('.view_table').parents('.spec-tables').find('.special-content').clone().appendTo('#specModal .modal-body');
	});
}
$('.special-content table').addClass('table table-striped');
$('.view_moress').on('click', 'a', function() {
	if( $(this).hasClass('one') ){
		$(this).addClass('d-none');
		$('.view_moress .two').removeClass('d-none');
	} else {
		$(this).addClass('d-none');
		$('.view_moress .one').removeClass('d-none');
	}
	$('.content_coll').toggleClass('active');
	$('.bg_cl').toggleClass('d-none');
});

$(".open_sw_mobile").on('click', function() {
	$('.mobile_open_box_swatch').toggleClass('active');
	if ($('#o_sw_buy').hasClass('active')){
		$('#body_overlay').removeClass('d-none');
		colLeft.classList.remove("active");
	}else {
		$('#body_overlay').addClass('d-none');
	}
	$('.fix-phone').removeClass('active');
});
var breadcrumbMb = document.querySelectorAll('.breadcrumbs');
function trackScrollx() {
	var scrolled = window.pageYOffset;
	if (scrolled > 50) {
		if (!breadcrumbMb.length) return;
		for (var i = 0; i < breadcrumbMb.length; i++) {
			breadcrumbMb[i].classList.add('sticky');
		}
	}
	if (scrolled < 50) {
		if (!breadcrumbMb.length) return;
		for (var i = 0; i < breadcrumbMb.length; i++) {
			breadcrumbMb[i].classList.remove('sticky');
		}
	}
}
//window.addEventListener('scroll', trackScrollx);

let videos = document.querySelectorAll('.open_popup');
let popupVideo = document.querySelector('.popup_box');
let close_vd = document.querySelectorAll('.close_popup');
videos.forEach(v => v.addEventListener('click', function(e) {
	e.preventDefault();
	popupVideo.classList.add('open');
	bodyOverlay.classList.remove("d-none");
	let bVideoContainer = popupVideo.querySelector('.b_video');
	if (bVideoContainer) {
		bVideoContainer.innerHTML = `<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/${e.target.dataset.video}?enablejsapi=1" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>`;
	}
}));
close_vd.forEach(v => v.addEventListener('click', function(e) {
	e.preventDefault();
	popupVideo.classList.remove('open');
	bodyOverlay.classList.add("d-none");
	let bVideoContainer = popupVideo.querySelector('.b_video');
	if (bVideoContainer) {
		setTimeout(function() {
			bVideoContainer.innerHTML = '';
		}, 500);
	}
}));

