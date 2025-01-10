<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="icon" href="{{ asset('/icon/favicon.png') }}" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<style>
    .page-link.active,
    .active>.page-link {
        color: var(--bs-table-bg);
        background-color: var(--bs-table-bg);
        border-color: var(--bs-table-bg);
    }

    a:link,
    a:visited {
        color: var(--bs-table-striped-color);
        text-decoration: none;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
    }

    body {
        color: #111;
        line-height: 1.6em;
        background-color: #fff;
    }

    a {
        color: #a61d37;
    }

    a:hover {
        color: #6b1021;
    }

    .input-group-text {
        color: #777;
    }

    .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3),
    .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
        border-right: 0;
    }

    .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
        border-left: 0;
        border-color: #ced4da;
    }

    .input-group-text {
        background-color: #fff;
    }

    .input-group-md>.btn,
    .input-group-md>.form-control,
    .input-group-md>.form-select,
    .input-group-md>.input-group-text,
    .btn-group-md>.btn,
    .btn-md {
        padding: 0.375rem 0.75rem;
        font-size: 1.15rem;
    }

    .pagination>li>a,
    .pagination>li>span {
        margin: 0 0.25rem;
        padding: 5px 10px;
        color: #555;
        outline: none;
        -moz-border-radius: 0.25rem;
        -webkit-border-radius: 0.25rem;
        -o-border-radius: 0.25rem;
        border-radius: 0.25rem;
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
        background: #1a2844;
        color: #fff;
        border-color: #1a2844;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: "\f105";
        font-family: "Font Awesome 5 Pro";
    }

    hr {
        background-color: #5a5d83;
    }

    .fw-300 {
        font-weight: 300;
    }

    .fw-400 {
        font-weight: 400;
    }

    .fw-500 {
        font-weight: 500;
    }

    .fw-600 {
        font-weight: 600;
    }

    .fw-900 {
        font-weight: 900;
    }

    img {
        max-width: 100%;
    }

    .modal-dialog.modal-fluid {
        max-width: calc(100% - 30px) !important;
    }

    .modal-dialog .modal-header {
        padding: 0.75rem 1rem;
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        line-height: 1.6;
    }

    /*header=================================*/
    /*headertop*/
    #headerTop {
        background-color: #2e5288;
        z-index: 1021;
    }



    #headerTop-left {
        position: relative;
        z-index: 1000;
    }



    #headerTop-left::before {
        content: "";
        top: 0px;
        bottom: 0;
        height: 46px;
        background: #a61d37;
        position: absolute;
        display: block;
        left: -75rem;
        right: -3rem;
        -webkit-transform: skew(-20deg, 0);
        -moz-transform: skew(-20deg, 0);
        -ms-transform: skew(-20deg, 0);
        -o-transform: skew(-20deg, 0);
        z-index: 0;
    }

    #headerTop-right .dropdown {
        position: relative;
        padding-right: 0.5rem;
    }

    #headerTop-right .dropdown::after {
        content: "|";
        position: absolute;
        right: 0;
        top: 0.5rem;
    }

    #headerTop marquee a {
        color: #fff;
    }

    #search {
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        bottom: 0;
        padding: 1.25rem;
        background: rgba(0, 0, 0, 0.8);
        width: 100%;
    }

    #search .btn-close {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    #search .input-group {
        max-width: 320px;
        margin: 0 auto;
    }

    /**/
    #header {
        color: #fff;
        background-color: #f2f2f2;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
        -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    #header.fixed-top {
        -moz-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
        z-index: 999;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    .fs-roboto {
        font-family: "Roboto Condensed", sans-serif;
    }

    .textpane:hover {
        text-decoration: underline;
    }

    #headerBottom.fixed-top {
        background: #fff;
        position: fixed !important;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        -moz-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
    }

    #headerBottom.fixed-top .fs-roboto {
        line-height: normal !important;
    }

    /*slide*/
    .carousel-caption {
        padding-left: 1rem;
        padding-right: 1rem;
        text-align: left;
        top: -70px;
        left: 8%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: start;
        z-index: 9;
    }

    .carousel-caption .h1,
    .carousel-caption .h5 {
        line-height: 150%;
    }

    .carousel-indicators {
        display: none;
    }

    /*==================================*/
    /*services*/
    #services {
        margin-top: -105px;
        position: relative;
        z-index: 9;
    }

    #services a {
        color: #a61d37;
    }

    #services .inner {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
    }

    #services .inner:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        margin-top: -5px;
    }


    .minTl {
        font-weight: 700;
        color: #A61D37;
        position: relative;
        text-transform: uppercase;
        font-size: 1.15em;
        margin-bottom: .5rem;
        padding: .5rem 0;
    }

    .minTl::before {
        content: "";
        margin-right: 0.75rem;
        border-left: 3px solid #a61d37;
    }

    .tlsolid {
        font-weight: 700;
        color: #a61d37;
        position: relative;
    }



    .list-group-flush>.list-group-item {
        border: none;
    }

    #sortlinh .inner {
        border-width: 1px;
        border-style: solid;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }




    /**/
    #priority {
        color: #a61d37;
        font-weight: 600;
        margin: 1rem 0;
    }

    #priority .icon {
        border: 1px solid #a61d37;
        width: 120px;
        height: 120px;
        padding: 2rem;
        margin: 0 auto 0.5rem auto;
    }

    .btn-readmore {
        position: relative;
    }

    .btn-readmore::after {
        font-family: "Font Awesome 5 Pro";
        content: "\f178";
        margin-left: 0.5rem;
        font-weight: 300;
    }

    /**/
    #events {
        /*    background: url(/img/bg_event.png) no-repeat 50% 100%;
        */
        /* background-size: 100% auto;*/
    }

    .cardTl {
        position: relative;
        font-size: 1.5em;
        font-weight: 700;
        color: #a61d37;
        padding-bottom: 15px;
        margin-bottom: 1.5rem;
        text-transform: uppercase;
    }

    .cardTl::before,
    .cardTl::after {
        position: absolute;
        content: "";
        height: 1px;
        background: #a61d37;
    }

    .cardTl::before {
        width: 70px;
        bottom: 5px;
    }

    .cardTl::after {
        width: 40px;
        bottom: 0px;
    }

    .cardTl.text-center::before,
    .cardTl.text-center::after {
        left: 50%;
    }

    .cardTl.text-center::before {
        margin-left: -35px;
    }

    .cardTl.text-center::after {
        margin-left: -20px;
    }

    .cardTl.text-white::before,
    .cardTl.text-white::after {
        background: #fff;
    }

    /**/
    #branchs .col-md-4 {
        position: relative;
    }

    #branchs .inner {
        color: #fff;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: 99;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        flex-direction: column;
    }

    #branchs .inner .text {
        background-color: rgba(0, 0, 0, 0.7);
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
        margin-right: 10px;
        margin-left: 10px;
        /*    display: flex;*/
        flex-wrap: wrap;
        justify-content: center;
        flex-direction: column;
    }

    #branchs .inner a {
        color: #fff;
        font-weight: 600;
    }

    #branchs .inner .list-group-flush {
        bottom: -150%;
        opacity: 0;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
        height: 0;
        overflow: hidden;
    }

    #branchs .inner .list-group-flush>.list-group-item {
        padding: 0 1rem;
        background-image: url(/img/bullet-w.svg);
        background-position: 0 0.5rem;
        border: none;
    }

    #branchs .inner:hover {
        right: 0;
        bottom: 0;
        left: 0;
        top: 0;
    }

    #branchs .inner:hover .list-group-flush {
        opacity: 1;
        height: auto;
    }

    #branchs .inner .tl {
        text-align: center;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
    }

    #branchs .inner:hover .tl {
        text-align: left;
    }

    #branchs .inner:hover .text {
        height: 100%;
        margin-right: 0px;
        margin-left: 0px;
        bottom: 0;
    }

    #rnbn,
    #section2 .inner {
        position: relative;
    }

    #rnbn .text,
    #section2 .text {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        flex-direction: column;
    }

    #section1 .bg {
        background: #1a2844;
        margin-left: -60px;
    }

    #section1 .bg .h3 {
        padding-left: 30px;
        border-left: 5px solid #fff;
    }

    #section2 .text {
        background: rgb(26, 40, 68);
        background: linear-gradient(0deg,
                rgba(26, 40, 68, 0) 50%,
                rgba(26, 40, 68, 1) 90%);
        -moz-background: linear-gradient(0deg,
                rgba(26, 40, 68, 0) 50%,
                rgba(26, 40, 68, 1) 90%);
        -webkit-background: linear-gradient(0deg,
                rgba(26, 40, 68, 0) 50%,
                rgba(26, 40, 68, 1) 90%);
    }

    #section3 {
        background: url(/img/bg_daura.png) no-repeat 50% 50% / 100% 100%;
    }

    #section3 .inner {
        background: rgba(0, 0, 0, 0.8);
    }

    #section5 {
        background: url(/img/bg_form.png) no-repeat 50% 50% / 100% 100%;
    }

    /**/
    #history-list {
        color: #a61d37;
    }

    #tabHistory {
        border: none;
        height: 160px;
        background: url(/img/dash.png) repeat-x 50% 50%;
    }

    #history-list .rounded {
        border-width: 1px;
        border-style: solid;
    }

    /**/
    #gallery {
        background: url(/img/bg_gallery.png) no-repeat 50% 100%;
        background-size: 100% auto;
    }

    /**/

    .slider {
        max-width: 860px;
        margin: 0 auto;
    }

    .slick-slide {
        margin: 0px 00px;
    }

    .slick-slide img {
        width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .slick-slide {
        transition: all ease-in-out 0.3s;
        opacity: 0.2;
    }

    .slick-active {
        opacity: 0.5;
    }

    .slick-current {
        opacity: 1;
        width: 100px;
    }

    .slick-slide .thumb {
        margin: 20px;
    }

    .slick-center .thumb {
        margin: 0;
    }

    /*footer================*/
    footer {
        background-color: #313131;
    }

    footer,
    footer a {
        color: #fff;
    }

    footer ul {
        padding: 0 0 0 1rem;
        margin: 0;
    }

    footer a:hover {
        color: #fff;
        margin-left: 0.25rem;
        text-decoration: underline;
    }

    /**/

    #rnbn .inner,
    #branchs .col-md-4,
    #listBranchs .inner,
    #student-int .img {
        position: relative;
    }

    #rnbn .inner,
    #branchs .col-md-4 {
        height: 400px;
    }

    #rnbn .inner img,
    #branchs .col-md-4 img,
    #listBranchs .inner img,
    #student-int .img img {
        position: absolute;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        -moz-object-fit: cover;
        -o-object-fit: cover;
        object-fit: cover;
        z-index: 9;
        width: 100%;
    }

    .list-group.list-group-border .list-group-item {
        margin-bottom: 0.25rem;
        border: 1px solid #a61d37;
        -moz-border-radius: 0.25rem;
        -webkit-border-radius: 0.25rem;
        border-radius: 0.25rem;
        padding: 0;
    }

    .list-group.list-group-border .list-group-item a {
        color: #111;
        font-weight: 600;
        display: block;
        padding: 0.5rem 1rem;
    }

    .list-group.list-group-border .list-group-item a:hover {
        color: #fff;
        background: #a61d37;
    }

    /**/
    #listBranchs .text,
    #listNews .inner.news-first .text {
        position: absolute;
        bottom: 40%;
        right: 0;
        left: 0;
        padding: 1rem 1rem;
        z-index: 99;
        background: rgb(26 40 68 / 82%);
        -moz-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        -webkit-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        height: 60px;
    }

    #listNews .inner.news-first .text {
        position: absolute;
        bottom: 0%;
        right: 0;
        left: 0;
        padding: 0rem 1rem;
        z-index: 99;
        background: rgb(26 40 68 / 82%);
        -moz-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        -webkit-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        min-height: 127px;
    }

    #listBranchs .text a {
        color: #fff;
    }

    #listBranchs .inner {
        height: 100%;
        overflow: hidden;
    }

    #listIcon-other .icon {
        display: inline-block;
        background: #dddfe3;
    }


    /**/
    #recruit {
        background: url(/img/bg_form-tuyensinh.png) no-repeat 50% 50%;
    }

    #bgForm {
        background: url(/img/bg_login.png) no-repeat 50% 50%;
    }

    /**/
    #listNews .inner {
        position: relative;
    }

    #listNews .inner h2 {
        line-height: normal;
        font-weight: bold;
    }

    #listNews .inner.news-first h2 a {
        color: #fff;
        font-weight: 700;
    }

    #listNews .inner.news-first h2 {
        font-size: 1.75em;
    }

    #listNews .inner h2 a {
        color: #1a2844;
    }

    #listNews .inner h2 {
        font-size: 1.25em;
    }

    #browseNews .item {
        display: flex;
    }

    #browseNews .thumb {
        flex: 0 0 240px;
        /* color: #fff;
            overflow: hidden;
            box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);*/
    }

    /**/
    #link {
        background: url(/img/bg-color.png) repeat-x 50% 100px;
    }

    /**/
    #student-int .img {
        height: 450px;
        margin-left: -15px;
        margin-right: -15px;
    }

    #student-int .icon {
        width: 110px;
        height: 110px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        border-width: 1px;
        border-style: solid;
        background: #fff;
    }

    /**/
    .article-list {
        counter-reset: section;
    }

    .article-list .article-item {
        display: flex;
        /*  flex-direction: row-reverse;*/
        border-bottom: 1px solid #eee;
        /* padding-bottom: .75rem;*/
    }

    .article-list .article-item:last-child {
        border: none;
    }

    .article-list .article-item .article-thumb {
        flex: 0 0 120px;
        margin-left: 15px;
    }

    .article-list .article-item:first-child {
        flex-direction: column;
    }

    .article-list .article-item:first-child .article-thumb {
        flex: 0 0 100%;
        margin: 0;
    }

    .article-list .article-title {
        position: relative;
        padding-left: 20px;
        margin-top: 0.1rem;
    }

    .article-list .article-title::before {
        counter-increment: section;
        content: counter(section) ".";
        position: absolute;
        top: 5px;
        left: 0;
        display: block;
        color: #a0a4a8;
        font-weight: 600;
        font-size: 20px;
        line-height: 1;
        font-family: "Times New Roman", Times, serif;
    }

    .childs h4 {
        line-height: 22px;
    }

    .childs h4 a {
        font-size: 14px;
    }

    /*owl-carousel*/
    .owl-carousel,
    .listPartner {}

    .owl-carousel.owl-loaded,
    .listPartner.owl-loaded {
        display: block;
        position: relative;
        overflow: hidden;
    }

    .owl-carousel .owl-stage-outer,
    .listPartner .owl-stage-outer {
        position: relative;
        overflow: hidden;
        -moz-transform: translate3d(0px, 0, 0);
        -webkit-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
    }

    .owl-carousel .owl-item,
    .listPartner .owl-item {
        position: relative;
        min-height: 1px;
        float: left;
        -webkit-backface-visibility: hidden;
        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .owl-carousel .item,
    .listPartner .item {
        padding: 0 10px;
    }

    .owl-carousel .item .inner,
    .listPartner .item .inner {
        background: #fff;
    }

    .owl-theme .owl-controls {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        -moz-tap-highlight-color: transparent;
        tap-highlight-color: transparent;
    }

    .owl-prev,
    .owl-next {
        top: 00px;
        width: 40px;
        height: 40px;
        position: absolute;
        text-indent: -1000em;
        transition: all 300ms ease-in-out;
        -webkit-transition: all 300ms ease-in-out;
        -moz-transition: all 300ms ease-in-out;
        -o-transition: all 300ms ease-in-out;
    }

    .owl-prev {
        left: -40px;
    }

    .owl-next {
        right: -40px;
    }

    /**/
    #lightfancybox {
        background: url(/img/lgdesign.jpg) no-repeat 50% 100%;
        background-size: 100% auto;
    }

    #lightfancybox .row .inner {
        position: relative;
    }

    #lightfancybox .row .inner a {
        display: block;
        text-align: center;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    /**/

    .modal-header .close,
    .modal-header .btn-close {
        position: absolute;
        right: 10px;
        margin: 0;
    }

    .modal .modal-header {
        justify-content: flex-start;
    }

    /*--edit--*/
    #services a {
        text-decoration: none;
    }

    .h-even img {
        height: 105px;
        object-fit: cover;
    }

    .text-both {
        font-weight: bold;
    }

    .ne5 img {
        height: 150px;
        object-fit: cover;
    }

    h1.tits {
        line-height: 28px;
        font-size: 23px;
    }

    .text-more {
        text-align: right;
    }

    .nomals1 {
        font-weight: 400 !important;
    }

    .border-shadow {
        box-shadow: -1px 1px 9px rgb(0 0 0 / 10%);
    }

    .border-shadow a:hover {
        color: #df0c0c !important;
    }

    .inner iframe {
        width: 100%;
        max-height: 450px;
    }

    .al-row1 {
        text-align: center;
        background: #dddc;
        padding: 15px 5px;
        margin-bottom: 10px;
        min-height: 160px;
    }

    .al-row1 p {
        text-align: center;
        padding: 10px;
    }

    .al-row1 p a {
        font-weight: 600;
        font-size: 18px;
    }

    .al-row1 h4 a {
        font-weight: 600;
        font-size: 18px;
    }

    .al-row1 img {
        width: 60px;
    }

    .al-row2 {
        position: relative;
        text-align: center;
        background: #dddc;
        margin-bottom: 10px;
        height: 125px;
    }

    .al-row2>div {
        margin: auto;
        width: 100%;
        /*      position: absolute;
                top: 45%;*/
    }

    .al-row2 h4 {
        margin-bottom: 0;
        display: table;
        height: 124px;
        width: 100%;
        text-align: center;
    }

    .al-row2 h4 a {
        padding: 1px 10px;
        display: block;
        font-size: 13px;
        font-weight: 600;
        display: table-cell;
        vertical-align: middle;
        text-decoration: none;
    }

    .al-row3 {
        text-align: center;
        background: #dddc;
        padding: 10px 0px;
        margin-bottom: 10px;
        min-height: 150px;
    }

    .al-row3 img {
        width: 80px;
    }

    .al-row3>div {
        margin: auto;
        width: 100%;
        /*      position: absolute;
                top: 45%;*/
    }

    .al-row3 h4 {
        margin-bottom: 0;
        display: table;
        height: 60px;
        width: 100%;
        text-align: center;
    }

    .al-row3 h4 a {
        padding: 1px 10px;
        display: block;
        font-size: 15px;
        font-weight: 600;
        display: table-cell;
        vertical-align: middle;
        text-decoration: none;
    }

    .al-title h2 {
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        color: #1a2844;
        padding: 20px 0px;
    }

    #bdTop {
        /*   background: url('../img/bghome.jpg') no-repeat 50% 100%;
            background-size: 100% auto;*/
    }

    .hover02 {
        position: relative;
        overflow: hidden;
    }

    .hover02 span {
        padding: 2px 9px;
        background: #a61d37d6;
        color: #fff;
        position: absolute;
        left: 10px;
        top: 5px;
        font-weight: 500;
    }

    .hover02 img {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
        width: 100%;
    }

    .hover02 a:hover img,
    .hover02 img:hover {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    .trainning img {
        width: 55px;
    }

    .viewmore {
        font-size: 11px !important;
        font-style: italic !important;
        font-weight: 500 !important;
        text-transform: initial;
        float: right;
    }

    .recr {
        font-size: 14px !important;
    }

    .border-dashed {
        border: 1px dashed #ddd;
    }

    .address {
        padding: 0 10px 10px 10px;
        background: #0a58ca14;
    }

    .text-base {
        color: #a61d37 !important;
        font-weight: 700 !important;
        font-size: 24px !important;
    }

    .contact-fix-bottom {
        position: fixed;
        bottom: 0.5rem;
        z-index: 9999;
        left: 1px;
    }

    .contact-fix-bottom .contact-fix-icon {
        padding: 0.03rem;
        color: rgb(35 35 35 / 90%);
        background: #fff;
        margin-bottom: 0.5rem;
    }

    .contact-fix-bottom .icon-box {
        flex: 0 0 40px;
        margin-right: 0.5rem;
        margin-top: 5px;
    }

    .contact-fix-bottom .icon-box .fas {
        width: 40px;
        height: 40px;
        text-align: center;
        line-height: 40px;
        border: 1px solid #ccc;
    }

    .contact-fix-bottom .contact-info {
        padding-right: 10px;
    }

    .contact-fix-bottom .contact-info b {
        font-size: 13px;
    }

    .contact-fix-bottom .contact-info span {
        font-size: 13px;
    }

    .p-t200 {
        padding-top: 200px;
    }

    .p-b200 {
        padding-bottom: 200px;
    }

    .mail i {
        font-size: 11px;
    }

    .mail span {
        font-size: 11px;
    }

    .u-textlink a {
        color: #a61d37;
    }

    .carousel-caption .inner {
        padding: 1.5rem;
        background-color: rgba(26, 40, 68, 0.8);
    }

    #tabNewsContent .hotNews {
        position: relative;
    }

    #tabNewsContent .hotNews .p-3 {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        background: rgb(26, 40, 68);
        -moz-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        -webkit-background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
        background: linear-gradient(0deg,
                rgba(26, 40, 68, 1) 17%,
                rgba(26, 40, 68, 0) 100%);
    }

    #tabNewsContent .hotNews .p-3 h2 {
        font-size: 20px;
    }

    #tabNewsContent .hotNews .p-3 a {
        color: #fff;
    }

    .font-14 {
        font-size: 14px;
    }

    .font-13 {
        font-size: 13px;
    }

    #newstop-highlight-list1 {
        height: 538px;
        margin-bottom: 10px;
    }

    #newstop-highlight-list2 {
        height: 270px;
    }

    .shadows {
        box-shadow: 0 0.5rem 1rem #f4f9ffeb;
    }

    .list-group .list-group-item>a:hover {
        color: #a61d37;
    }

    .inners {
        position: relative;
    }

    .inners-box {}

    .program-cat {
        display: inline-block;
        position: relative;
        border-radius: 7px;
    }

    .program-cat img {
        height: 345px;
        width: 100%;
        object-fit: cover;
        transition: 0.3s ease-in-out;
        border-radius: 7px;
    }

    .program-cat img:hover {
        transform: scale(1.1);
    }

    .program-cat .program-desc {
        position: absolute;
        bottom: 0;
        /* left: 10px; */
        /* right: 10px; */
        top: 0;
        color: white;
        background-color: #031324db;
        padding: 5px 10px;
        width: 100%;
        border-radius: 7px;
        /*   margin: 5px;*/
    }

    .program-cat .program-desc:before {
        pointer-events: none;
        position: absolute;
        content: "";
        height: 0;
        width: 0;
        top: 0;
        right: 0;
        background: white;
        background: linear-gradient(225deg,
                white 45%,
                #aaa 50%,
                #ccc 56%,
                white 80%);
        box-shadow: -1px 1px 1px rgb(0 0 0 / 40%);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-property: width, height;
        transition-property: width, height;
    }

    .program-cat .program-desc:hover {
        background-color: rgb(2 3 32 / 88%);
    }

    .program-cat .program-desc:hover:before {
        width: 25px;
        height: 25px;
    }

    .program-desc .list-group-flush>.list-group-item {
        background-image: url(/img/bullet-w.svg);
    }

    .program-desc .list-group-flush>.list-group-item a {
        color: #fff;
        font-size: 14px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .program-desc .list-group-flush>.list-group-item a {
        transition-delay: 0s;
        color: #fff;
        font-weight: 600;
    }

    .program-desc .list-group-flush>.list-group-item a:hover {
        font-weight: 600;
        border-bottom: 2px solid #a61d37;
    }

    #footerBt {
        height: 3.6875rem;
        padding-top: 0;
        padding-bottom: 0;
        line-height: 3.6875rem;
        overflow: hidden;
        margin-top: -0.75rem;
        /* border-top: 1px solid #fff;*/
    }

    .copyright {
        line-height: 3.6875rem;
    }

    .ftBt-left {
        background-color: #a61d37;
        margin-top: 0.5rem;
        position: relative;
    }

    .ftBt-left::before {
        content: "";
        position: absolute;
        left: auto;
        right: 100%;
        width: 60rem;
        height: 75px;
        background: #a61d37;
        bottom: 0;
        top: 0rem;
    }

    .ftBt-right {
        position: relative;
        background: #2d436e;
        margin-top: -1rem;
        padding-top: 1rem;
    }

    .ftBt-right::before {
        content: "";
        width: 0;
        height: 0;
        border-bottom: 75px solid #2d436e;
        border-left: 30px solid transparent;
        position: absolute;
        right: 100%;
        bottom: 0;
    }

    .ftBt-right::after {
        content: "";
        position: absolute;
        left: 100%;
        right: auto;
        width: 60rem;
        height: 75px;
        background: #2d436e;
        bottom: 0;
    }

    .social-link i {
        width: 44px;
        height: 44px;
        line-height: 44px;
        text-align: center;
        background: #fff;
        color: #a61d37;
        font-size: 1.5em;
    }

    .lightfancybox1 img,
    .lightfancyboxv img {
        height: 304px;
        object-fit: cover;
    }

    .lightfancybox2 img {
        height: 150px;
    }

    #lightfancybox .row .inner .lightfancyboxv a {
        position: absolute;
        display: block;
        text-align: center;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    #videoPopup iframe {
        width: 100%;
        min-height: 400px;
    }

    .btnPlay {
        position: absolute;
        top: 50% !important;
        left: 50% !important;
        bottom: auto !important;
        right: auto !important;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .btnPlay .fas {
        position: relative;
        width: 3.125rem;
        height: 3.125rem;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        background: #a61d37;
        border-radius: 50%;
        text-align: center;
        line-height: 3.125rem;
        color: #ffffff;
        z-index: 9;
    }

    .btnPlay::before {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        display: block;
        width: 80px;
        height: 80px;
        background: #a61d37;
        border-radius: 50%;
        -webkit-animation: pulse-border 1500ms ease-out infinite;
        animation: pulse-border 1500ms ease-out infinite;
        z-index: 1;
    }

    .center-blocks {
        top: 50%;
        left: 50%;
        transform: translate3d(-50%, -50%, 0);
        position: absolute;
    }

    .p-3-3 {
        padding: 1rem !important;
    }

    .d-none-mobile {
        display: block;
    }

    .d-block-mobile {
        display: none;
    }

    /* keyframes */
    @keyframes pulse-border {
        0% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            opacity: 1;
        }

        100% {
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            opacity: 0;
        }
    }

    #catnlist .list-group-flush>.list-group-item a {
        border-bottom: 2px solid transparent;
        display: block;
        color: #222;
        font-weight: 600;
        position: relative;
    }

    #catnlist .list-group-flush>.list-group-item a:hover {
        border-bottom: 2px solid #a61d37;
        color: #a61d37;
    }

    #catnlist .list-group-flush.list-group-sub>.list-group-item a:hover {
        border-bottom: 2px solid transparent;
        color: #a61d37;
    }

    #catnlist .list-group-flush>.list-group-item a[aria-expanded="false"]::after,
    #catnlist .list-group-flush>.list-group-item a[aria-expanded="true"]::after {
        position: absolute;
        right: 0.5rem;
        top: 0.5rem;
        font-weight: 300;
        font-family: "Font Awesome 5 Pro";
    }

    #catnlist.list-group-flush>.list-group-item a[aria-expanded="false"]::after {
        content: "\f078";
    }

    #catnlist .list-group-flush>.list-group-item a[aria-expanded="true"]::after {
        content: "\f077";
    }

    #catnlist .list-group-flush>.list-group-item a[aria-expanded="true"] {
        background: #fff;
        border-bottom: 2px solid #a61d37;
    }

    #services img {
        width: 44px;
    }

    #services a {
        color: #a61d37;
        font-size: 12px;
    }

    .lagi-img img {
        height: 450px;
        object-fit: cover;
        width: 100%;
    }

    .lagi-name {
        font-size: 13px;
    }

    #rnmnlv6 a {
        text-decoration: none;
    }

    #council {
        background: url(../img/bg_trongdong.png) no-repeat 50% 0;
    }

    .icon-right img {
        width: 70%;
    }

    .vitage-name {
        text-transform: uppercase;
        color: #a61d37;
    }

    .vitage-name h4 {
        font-weight: 600;
    }

    .vitage-1 {
        font-weight: 600;
    }

    .vitage img {}

    .vitage-img-sub img {}

    .list-vitage {}

    .list-vitage .list-group-item {
        padding: 0rem 1rem;
    }

    .list-vitage .list-group-flush>.list-group-item {
        background: url() no-repeat 0 0.6rem;
    }

    .council-tl {
        text-align: center;
    }

    .council-tl span {
        background-color: #a61d37;
        position: relative;
        display: inline-block;
        padding: 0.5rem 5rem;
        text-transform: uppercase;
        font-weight: 600;
        color: #fff;
    }

    .council-tl span::before,
    .council-tl span::after {
        content: "";
        width: 0;
        height: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
    }

    .council-tl span::after {
        right: 0;
        border-right: 20px solid #fff;
    }

    .council-tl span::before {
        left: 0;
        border-left: 20px solid #fff;
    }

    .honew2 h2 {
        font-size: 1em;
        line-height: 1.6em;
    }

    .honew2 h3 {
        font-size: 1em;
        line-height: 1.6em;
    }

    .nano-content .list-group-item {
        padding: 0.2rem 1rem;
    }

    .even-tit h4,
    .ne9 h2 {
        font-size: 1em;
        line-height: 1.6em;
        line-height: 22px;
    }

    .even-tit h4 a {
        color: #404040;
        font-size: 14px;
    }

    /*.c5 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }*/
    .c5 h5 {
        font-size: 14px;
        line-height: 1.6em;
        margin-bottom: 3px;
    }

    .c5s {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
    }

    .c5s h5 {
        font-size: 14px;
        line-height: 1.6em;
        margin-bottom: 3px;
    }

    .mnfooter h6 {
        font-size: 13px;
        line-height: 1.6em;
    }

    .cardTl h1,
    .cardTl h3 {
        position: relative;
        font-size: 1em;
        font-weight: 700;
        color: #a61d37;
        padding-bottom: 0;
        margin-bottom: 0;
    }

    .ne9 h2 {}

    .list-group-item .show {
        text-decoration: none;
        color: #212529;
    }

    .showi {
        float: right !important;
        padding: 5px 10px !important;
        font-weight: 400 !important;
    }

    .lagilink a {
        background: #2e5288;
        color: #fff;
        padding: 10px;
        border-radius: 20px;
    }

    .pxs-5 {
        padding: 5px !important;
    }

    .evenbox {
        min-height: 335px;
    }

    .img-video {
        position: relative;
    }

    .img-video .btnPlay::before {
        width: 50px;
        height: 50px;
    }

    #listResearch {
        position: relative;
        z-index: 99;
        margin-top: -50px;
    }

    .slide-read-more {
        overflow: hidden;
    }

    .slide-read-more-button {
        cursor: pointer;
        text-align: right;
        margin-top: 8px;
        color: #488a8a;
        display: none;
    }

    .bnb img {
        max-height: 70px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .myAlert-top {
        position: fixed;
        top: 5px;
        right: 2%;
        width: 24%;
        z-index: 9999;
    }

    #header .alert {
        display: none;
        border: none;
        border-radius: 0;
    }

    #rnbnleft1-mb {
        display: none;
    }

    #rnbnleft1-mb img {
        width: 100%;
    }

    .italic {
        font-style: italic;
    }

    .contactel {
        display: inline-flex;
    }

    .idx4 h3 {
        font-size: 1.1rem;
        line-height: 22px;
    }

    .idx4 h4 {
        font-size: 1.5rem;
        line-height: 22px;
        margin-bottom: 5px;
    }

    .idx4 h4 a {
        font-size: 16px;
        line-height: 22px;
        margin-bottom: 0;
    }

    .idxr {
        font-size: 14px;
    }

    .minTl h1 {
        font-size: 1.15em;
    }

    marquee h2 {
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 0;
    }

    .notice h3 {
        font-size: 0.9rem;
        line-height: 1.6em;
    }

    .h-link {}

    .zalo-share-button {
        margin-top: 5px;
    }

    .bannervis {
        position: relative;
        height: auto;
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bannervis video {
        position: absolute;
        top: 0;
        left: 0;
        /*object-fit: cover;*/
        width: 100%;
        height: 100%;
    }

    .contentvis {
        position: absolute;
        z-index: 1;
        max-width: 50%;
        margin: 0 auto;
        text-align: center;
        top: 48%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .contentvis h1 {
        font-size: 4.5em;
        color: #fff;
    }

    .contentvis p {
        font-size: 1.7em;
        color: #fff;
    }

    /*Button*/
    .contentvis .button {
        background-color: #a61d3782;
        border: none;
        color: white;
        padding: 14px 23px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        border-radius: 10px;
        border-radius: 25px;
        cursor: pointer;
    }

    .contentvis .button:hover {
        background-color: #03478b;
        border: none;
    }

    .header-overlay {
        /*  position: absolute;*/

        height: 68vh;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 1;
        background: #22547000;
        opacity: 0.55;
    }

    video {
        width: 100%;
    }

    .fnomal {
        font-weight: 700;
    }

    .bnl1 {
        display: flex;
    }

    .bnl1 a {}

    .tags {
        list-style: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
    }

    .tags li {
        float: left;
    }

    .tag {
        background: #eee;
        border-radius: 3px 0 0 3px;
        color: #676a6c;
        display: inline-block;
        height: 26px;
        line-height: 26px;
        padding: 0 14px 0 14px;
        position: relative;
        margin: 0 10px 10px 0;
        text-decoration: none;
        -webkit-transition: color 0.2s;
    }

    .tag::before {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
        content: "";
        height: 6px;
        left: 6px;
        position: absolute;
        width: 6px;
        top: 10px;
    }

    .tag::after {
        background: #fff;
        border-bottom: 13px solid transparent;
        border-left: 10px solid #eee;
        border-top: 13px solid transparent;
        content: "";
        position: absolute;
        right: 0;
        top: 0;
    }

    .tag:hover {
        background-color: crimson;
        color: white;
        -webkit-transition: color 0.2s;
    }

    .tag:hover::after {
        border-left-color: crimson;
        -webkit-transition: color 0.2s;
    }

    .cattego {
        display: flex;
        align-items: center;
        flex-flow: wrap;
        /* color: #777; */
        /* font-size: 1.4rem; */
        line-height: 1.5;
        margin-bottom: 0.5rem;
        justify-content: space-between;
    }

    .cattego .catname {
        text-transform: uppercase;
        font-weight: 600;
        font-size: 13px;
        color: #ea262a;
    }

    .cattegolist span {
        text-transform: uppercase;
        font-weight: 600;
        font-size: 13px;
        color: #ea262a;
    }

    .cattegolist .dates a {
        text-transform: uppercase;
        color: #404040;
        font-style: italic;
    }

    #footerBtMb {
        display: none;
    }

    .v10btn {
        padding: 6px 5px;
        border: 1px dashed;
        border-radius: 10px;
    }

    .imgslider button {
        background: #0510508c;
        z-index: 9 !important;
    }

    .imgslider .slick-prev:before,
    .imgslider .slick-next:before {
        color: #fff !important;
    }

    .imgslider .slick-prev:hover,
    .imgslider .slick-prev:focus,
    .imgslider .slick-next:hover,
    .imgslider .slick-next:focus {
        color: #fff;

        background: #0510508c;
    }

    #headerTopmb .scroll-right {
        overflow-x: auto;
        background: #a61d37;
    }

    #myaccordion {
        position: absolute;
        background: #fff;
        z-index: 999;
        width: 100%;
    }

    #myaccordion ul li a {
        font-size: 14px;
        color: #404040;
    }

    .filter-itemc {
        width: 100%;
    }

    .collapsebtn {
        padding: 2px 5px;
        font-size: 14px;
        width: 100%;
        white-space: nowrap;
        color: #fff;
    }

    .collapsebtn::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    /*--end edit--*/
    /**/
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .dropdown-menu li {
            position: relative;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1;
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }

    /* ============ desktop view .end// ============ */
    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: 0.5rem;
        }

        .font-14 {
            font-size: 14px;
        }
    }

    /* ============ small devices .end// ============ */
    /* ============ rnet .begin// ============ */
    .rnpimg img {
        border: 1px solid #ced4da;
        padding: 2px;
    }

    .rnl23 {
        line-height: 23px;
    }

    .mgt5 {
        margin-top: 5px;
    }

    .mgt10 {
        margin-top: 10px;
    }

    .mgb5 {
        margin-bottom: 5px;
    }

    .mgb10 {
        margin-bottom: 10px;
    }

    .accordion-button:not(.collapsed) {
        color: #1a2844 !important;
        background-color: #f2f2f2 !important;
    }

    .fw-bold:hover {
        text-decoration: underline;
    }

    .rnbold {
        text-align: justify;
        font-weight: bold;
    }

    .rnblue {
        color: #2e5288 !important;
    }

    .rnred {
        color: #a61d37 !important;
    }

    h3 {
        font-size: calc(1.275rem + .3vw);
    }

    /* ============ rnet k46kmt.end// ============ */
</style>

<body class="h-100 d-flex flex-column h-100">
    @include('layout.nav')
    <div id="body">
        <div class="mb-5">
            <div id="rnbntopintro"><!--ajax banner top--></div>
        </div>
        <div class="container-lg mb-5">
            <h2 class="minTl">Admin panel</h2>
            <div class="row g-2">
                <div class="tlsolid mb-3 h3">Users</div>
                <div class="col-md-3 col-sm-3">
                    <div class="mb-3 widget p-3 bg-light rounded">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="su-mang-tam-nhin.html" class="fw-bold text-dark">Users</a>
                            </li>
                            <li class="list-group-item">
                                <a href="https://www.tnut.edu.vn/to-chuc-doan-the-or100400.html"
                                    class="fw-bold text-dark">Bài viết</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <div id="rnbnright1"><!--ajax banner trai tren 1--></div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="mgt20 text-justify">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Ngày tạo</th>
                                    <th class="text-center">Chức vụ</th>
                                    <th class="text-center">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td><a href="{{ route('lists.show', $user) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->toDateString() }}</td>
                                        @if ($user->is_admin)
                                            <td class="text-center">Admin</td>
                                        @elseif ($user->is_poster)
                                            <td class="text-center">Editor</td>
                                        @else
                                            <td class="text-center">User</td>
                                        @endif
                                        <td class="text-center d-flex justify-content-center">
                                            <!-- Áp dụng lớp CSS btn-group vào đây -->
                                            @if ($user->is_admin)
                                            @elseif (!$user->is_poster)
                                                <form action="{{ route('admin.update.poster', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Granted
                                                        Editor</button>
                                                </form>
                                            @else
                                                <form action="{{ route('admin.delete.poster', $user->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-secondary btn-sm">Cease
                                                        Editor</button>
                                                </form>
                                            @endif
                                            <a href="{{ route('users.edit', $user) }}"><button type="button"
                                                    class="btn btn-dark btn-sm mx-2">Edit</button></a>
                                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
        <!--footer-->
        <footer class="bg-light pt-4 fixed-bottom">
            <div id="footerBt" class="">
                <div class="container-lg">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-8 col-md-9 ftBt-left text-center">
                                Copyright © 2024 Trường Đại học Kỹ thuật Công Nghiệp
                            </div>
                            <div class="col-4 col-md-3 ftBt-right">
                                <div class="social-link">
                                    <a class="mx-2" href="https://www.facebook.com/tnut.tuyensinh" target="_blank"
                                        rel="nofollow"><i class="fab fa-facebook-f rounded-circle"></i></a>
                                    <a class="mx-2" href="#" target="_blank" rel="nofollow"><i
                                            class="fab fa-twitter rounded-circle"></i></a>
                                    <a class="mx-2" href="#" target="_blank" rel="nofollow"><i
                                            class="fab fa-youtube rounded-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/scripts_old.js') }}"></script>
        <script type="text/javascript" src="{{ asset('slick/slick.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
             crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
             crossorigin="anonymous">
        </script>


</html>
