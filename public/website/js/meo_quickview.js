var quickviewModal = new bootstrap.Modal(document.getElementById('quickviewModal'));
var swiperQuickView;
var quickviewSliderConfig = {
  effect: 'fade',
  watchSlidesProgress: true,
  autoHeight: true,
  centeredSlides: true,
  slidesPerView: 1,
  navigation: {
  nextEl: '.quickview_slide_next',
  prevEl: '.quickview_slide_prev',
  }
};
$(document).on('click', '.js-quickview', function(e){
	e.preventDefault();
	let alias = $(this).attr('href');
	let title = $(this).attr('title');
	if(alias === '' || alias === '/') return;
  $('#quickviewModal').find('.modal-body').html('')
	MewServices.getProductHTMLByView(alias, 'quickview').then(res => {
		$('#quickviewModal').find('.modal-body').html(res);
		$('#quickviewModal').find('.modal-title').text(title);
    swiperQuickView = new Swiper('#quickviewModal .product-quickview-slide', quickviewSliderConfig);
    
		$('#quickviewModal').on('change', '.swatch [type=radio]',  function() {
			let optionIndex = $(this).closest('.swatch').attr('data-option-index');
			let optionValue = $(this).val();
			$(this).closest('form').find('.single-option-selector').eq(optionIndex).val(optionValue).trigger('change');
		});

		MewServices.getProductJson(alias).then(responseProduct => {
			if (responseProduct.variants.length > 1) {
				new Bizweb.OptionSelectors('quickview-selectors', {
					product: responseProduct,
					onVariantSelected: selectCallbackQuickView,
					enableHistoryState: true
				});
				$('#quickviewModal').find('.selector-wrapper select').addClass('custom-select rounded');
			}
			if(responseProduct.available && responseProduct.options.length > 1){
				let form = $('#quickviewModal').find('form[action="/cart/add"]');
				
				linkOptionSelectors(responseProduct, form);
				
			}
			if(typeof SwatchColor === "function" ){
				let swColor = new SwatchColor("https://file.hstatic.net/200000785527/file/mau-270a9bbe-95be-465e-b31a-3adc5d4321b5_1__2c5da264dc5b4c669ee2864c3ef5296e.txt");
				swColor.init();
			}
		}).then(() => quickviewModal.show());
	}).catch((error) => {
    console.log(error);
		$('#quickviewModal').find('.modal-body').html('')
	});
});
document.getElementById('quickviewModal').addEventListener('shown.bs.modal', function (e) {
  swiperQuickView.update();
  swiperQuickView.updateSlides();
});

$(document).on('click', '#quickviewModal .modal-header .close', function(e){
	e.preventDefault();
	quickviewModal.hide();
})
selectCallbackQuickView = function(variant, selector) {
	if (variant) {
		var form = $('#' + selector.domIdPrefix).closest('form');
		for (var i = 0, length = variant.options.length; i < length; i += 1) {
			var radioButton = form.find('.swatch[data-option-index="' + i + '"] [type=radio][value="' + variant.options[i] +'"]');
			if (radioButton.length) { 
				radioButton.get(0).checked = true
			}
		}
	}
	var button = $('#quickviewModal').find('.js-addToCart-product'),
		buyNow = $('#quickviewModal').find('.js-buynow'),
		soutout = $('#quickviewModal').find('.btn_out'),
		buttonText = button.find('.button__text'),
		quantity = $('#quickviewModal').find('.product-quantity'),
		priceBox = $('#quickviewModal').find('.product-price'),
		productPrice = $('#quickviewModal').find('.special-price'),
		comparePrice = $('#quickviewModal').find('.old-price'),
		inventoryStat = $('.inventory_quantity'),
		variantTitle = $('.tit_variant_scroll'),
		discount = $('.sale_label');

	if (variant !== null) {
		priceBox.removeClass('d-none');
		variantTitle.removeClass('d-none');
		variantTitle.html(variant.title.replace(/\//g, '|') + '<svg width="8" height="5"><use href="#svg-down"></use></svg>');
		if(variant.available){
			button.prop('disabled', false);
			button.off('click');
			buyNow.prop('disabled', false);
			buttonText.text(variantStrings.addToCart);
			inventoryStat.text(variantStrings.avaiable).addClass('text-success').removeClass('text-warning text-danger');
			productPrice.removeClass('d-none');
			soutout.addClass('d-none').removeClass('d-flex');
			button.removeClass('d-none').addClass('d-flex');
			if(variant.price === 0){
				button.addClass('d-none').removeClass('d-flex');
				buyNow.addClass('d-none').removeClass('d-flex');
				quantity.addClass('d-none').removeClass('d-sm-flex');
				productPrice.text(variantStrings.noPrice);
				comparePrice.addClass('d-none');
				discount.addClass('d-none');
			} else {
				button.removeClass('d-none disabled').addClass('d-flex');
				buttonText.text(variantStrings.addToCart);
				button.on('click', throttle(addToCart, 300));
				buyNow.removeClass('d-none').addClass('d-flex');
				quantity.removeClass('d-none').addClass('d-sm-flex');
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}â‚«"));
				if ( variant.compare_at_price > variant.price ) { 
					comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}â‚«")).removeClass('d-none');
					discount.html(`-<span class="nb_dis">${parseFloat((variant.compare_at_price - variant.price)/variant.compare_at_price*100).toFixed(0)}</span>%`);
					discount.removeClass('d-none');
				} else { 
					comparePrice.addClass('d-none');
					discount.addClass('d-none');
				}
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
				inventoryStat.text(variantStrings.allowBuyWhenSoldOut).addClass('text-warning').removeClass('text-success text-danger');
			} else{
				inventoryStat.text(variantStrings.soldOut).addClass('text-danger').removeClass('text-warning text-success');
			}
			if(variant && variant.price === 0){
				productPrice.text(variantStrings.noPrice);
				comparePrice.addClass('d-none');
				soutout.addClass('d-none').removeClass('d-flex');
			} else {
				productPrice.html(Haravan.formatMoney(variant.price, "{{amount}}â‚«"));
				if ( variant.compare_at_price > variant.price ) { 
					comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}â‚«")).removeClass('d-none');
					discount.html(`-<span class="nb_dis">${parseFloat((variant.compare_at_price - variant.price)/variant.compare_at_price*100).toFixed(0)}</span>%`);
					discount.removeClass('d-none');
				} else { 
					comparePrice.addClass('d-none');
					discount.addClass('d-none');
				}
			}
		}
		
	} else{
		variantTitle.addClass('d-none');
		variantTitle.html('');
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
  if (variant && variant.featured_image) {  
    $('#quickviewModal').find(".product-quickview-slide img").each(function(){
      if(variant.featured_image.src.replace(/^https?:/, '') === $(this).attr('data-img').trim().replace(/^https?:/, '')){
        let index = $(this).closest('.swiper-slide').index();
        swiperQuickView.slideTo(index, 800);
        return false;
      }
    })		
  } 
}
