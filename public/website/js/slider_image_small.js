$(window).on('popstate', function() {
    location.reload(true);
});
var selectedSortby;
var tt = 'Thá»© tá»±';


function sortby(sort) {
    switch (sort) {
        case "price-asc":
            selectedSortby = "(price:product=asc)";
            break;
        case "price-desc":
            selectedSortby = "(price:product=des)";
            break;
        case "alpha-asc":
            selectedSortby = "(title:product=asc)";
            break;
        case "alpha-desc":
            selectedSortby = "(title:product=des)";
            break;
        case "created-desc":
            selectedSortby = "(created:product=des)";
            break;
        case "created-asc":
            selectedSortby = "(created:product=asc)";
            break;
        default:
            selectedSortby = "default";
            break;
    }
    doSearch(1);
}

function resortby(sort) {
  //console.log(sort);
    switch (sort) {
        case "(price:product=asc)":
            tt = "GiĂ¡ tÄƒng dáº§n";
            $('.sortPagiBar .sortby-price-asc').attr('checked', true);
            break;
        case "price-ascending":
            tt = "GiĂ¡ tÄƒng dáº§n";
            $('.sortPagiBar .sortby-price-asc').attr('checked', true);
            break;
        case "(price:product=des)":
            tt = "GiĂ¡ giáº£m dáº§n";
            $('.sortPagiBar .price-desc').attr('checked', true);
            break;
        case "price-descending":
            tt = "GiĂ¡ giáº£m dáº§n";
            $('.sortPagiBar .sortby-price-desc').attr('checked', true);
            break;
        case "(title:product=asc)":
            tt = "TĂªn A â†’ Z";
            $('.sortPagiBar .alpha-asc').attr('checked', true);
            break;
        case "title-ascending":
            tt = "TĂªn A â†’ Z";
            $('.sortPagiBar .alpha-asc').attr('checked', true);
            break;
        case "(title:product=des)":
            tt = "TĂªn Z â†’ A";
            $('.sortPagiBar .alpha-desc').attr('checked', true);
            break;
        case "title-descending":
            tt = "TĂªn Z â†’ A";
            $('.sortPagiBar .alpha-desc').attr('checked', true);
            break;
        case "(created:product=des)":
            tt = "HĂ ng má»›i nháº¥t";
            $('.sortPagiBar .sortby-created-asc').attr('checked', true);
            break;
        case "(created:product=asc)":
            tt = "HĂ ng cÅ© nháº¥t";
            break;
        default:
            tt = "Máº·c Ä‘á»‹nh";
            break;
    }
    //$('#sort-by .val').text(tt);
    //$('#sort-by > ul > li span').text(tt);
}


function _selectSortby(sort) {
    resortby(sort);
    switch (sort) {
        case "price-asc":
            selectedSortby = "price_min:asc";
            break;
        case "price-desc":
            selectedSortby = "price_min:desc";
            break;
        case "alpha-asc":
            selectedSortby = "name:asc";
            break;
        case "alpha-desc":
            selectedSortby = "name:desc";
            break;
        case "created-desc":
            selectedSortby = "created_on:desc";
            break;
        case "created-asc":
            selectedSortby = "created_on:asc";
            break;
        default:
            selectedSortby = sort;
            break;
    }
}

function toggleCheckbox(id) {
    $(id).click();
}

function pushState(url) {
    window.history.pushState({
        turbolinks: true,
        url: url
    }, null, url)
}

function getParameter(url, name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(".open_mnu").on('click', function(){
	$(this).toggleClass('cls_mn').next().toggle();
});
$('.view_mores').on('click', 'a', function() {
	if( $(this).hasClass('one') ){
		$(this).addClass('d-none');
		$('.view_mores .two').removeClass('d-none');
	} else {
		$(this).addClass('d-none');
		$('.view_mores .one').removeClass('d-none');
	}
	$('.content_coll').toggleClass('active');
	$('.bg_cl').toggleClass('d-none');
});

var swiperBannerC = new Swiper('.banner_collection', {
	spaceBetween: 10,
	loop: true,
	speed:1000,
	autoplay: {
		delay: 5000,
		disableOnInteraction: true,
	},
	navigation: {
		nextEl: '.mbc_next',
		prevEl: '.mbc_prev',
	},
	breakpoints: {
		0: {
			slidesPerView: 1.3,
		},
		576: {
			slidesPerView: 1.5,
		},
		768: {
			slidesPerView: 1.5,
		},
		992: {
			slidesPerView: 1.8
		},
		1200: {
			slidesPerView: 2
		}
	}
});

