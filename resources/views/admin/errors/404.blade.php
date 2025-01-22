<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Quản trị hệ thống</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('website/images/logo_htx_rm_bg.png') }}" rel="icon">
    <link href="{{ asset('website/images/logo_htx_rm_bg.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com/" rel="preconnect">
    <link href="{{ asset('admin/css.css') }}" rel="stylesheet">

    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/style(1).css') }}" rel="stylesheet">
    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        rect.legend-mouseover-inactive,
        .legend-mouseover-inactive rect,
        .legend-mouseover-inactive path,
        .legend-mouseover-inactive circle,
        .legend-mouseover-inactive line,
        .legend-mouseover-inactive text.apexcharts-yaxis-title-text,
        .legend-mouseover-inactive text.apexcharts-yaxis-label {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-radialbar-label {
            cursor: pointer;
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path:not(.apexcharts-marker),
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-tooltip-active .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
    <style>
        .--savior-overlay-transform-reset {
            transform: none !important;
        }

        .--savior-overlay-z-index-top {
            z-index: 2147483643 !important;
        }

        .--savior-overlay-position-relative {
            position: relative;
        }

        .--savior-overlay-position-static {
            position: static !important;
        }

        .--savior-overlay-overflow-hidden {
            overflow: hidden !important;
        }

        .--savior-overlay-overflow-x-visible {
            overflow-x: visible !important;
        }

        .--savior-overlay-overflow-y-visible {
            overflow-y: visible !important;
        }

        .--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        .--savior-overlay-display-none {
            display: none !important;
        }

        .--savior-overlay-clearfix {
            clear: both;
        }

        .--savior-overlay-reset-filter {
            filter: none !important;
            backdrop-filter: none !important;
        }

        .--savior-tooltip-host {
            z-index: 9999;
            position: absolute;
            top: 0;
        }

        /*Override css styles for Twitch.tv*/
        main.--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        .modal__backdrop.--savior-overlay-z-index-reset {
            position: static !important;
        }

        main.--savior-overlay-z-index-top {
            z-index: auto !important;
        }

        main.--savior-overlay-z-index-top .channel-root__player-container+div,
        main.--savior-overlay-z-index-top .video-player-hosting-ui__container+div {
            opacity: 0.1;
        }

        /*Dirty hack for facebook big video page e.g: https://www.facebook.com/abc/videos/...*/
        .--savior-backdrop {
            position: fixed !important;
            z-index: 2147483642 !important;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw !important;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .--savior-overlay-twitter-video-player {
            position: fixed;
            width: 80%;
            height: 80%;
            top: 10%;
            left: 10%;
        }

        .--savior-overlay-z-index-reset [class*="DivSideNavContainer"],
        .--savior-overlay-z-index-reset [class*="DivHeaderContainer"],
        .--savior-overlay-z-index-reset [class*="DivBottomContainer"],
        .--savior-overlay-z-index-reset [class*="DivCategoryListWrapper"],
        .--savior-overlay-z-index-reset [data-testid="sidebarColumn"],
        .--savior-overlay-z-index-reset header[role="banner"],
        .--savior-overlay-z-index-reset [data-testid="cellInnerDiv"]:not(.--savior-overlay-z-index-reset),
        .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:first-child,
        .--savior-overlay-z-index-reset [aria-label="Home timeline"]>div:nth-child(3) {
            z-index: -1 !important;
        }

        .--savior-overlay-z-index-reset [data-testid="cellInnerDiv"] .--savior-backdrop+div {
            z-index: 2147483643 !important;
        }

        .--savior-overlay-z-index-reset [data-testid="primaryColumn"]>[aria-label="Home timeline"] {
            z-index: 0 !important;
        }

        .--savior-overlay-z-index-reset#mtLayer,
        .--savior-overlay-z-index-reset.media-layer {
            z-index: 3000 !important;
        }

        .--savior-overlay-position-relative [class*="SecBar_secBar_"],
        .--savior-overlay-position-relative .woo-box-flex [class*="Frame_top_"] {
            z-index: 0 !important;
        }

        .--savior-overlay-position-relative .vue-recycle-scroller__item-view:not(.--savior-overlay-z-index-reset),
        .--savior-overlay-position-relative .woo-panel-main[class*="BackTop_main_"],
        .--savior-overlay-position-relative [class*="Main_side_"] {
            z-index: -1 !important;
        }

        /* Fix conflict css with zingmp3 */
        .zm-video-modal.--savior-overlay-z-index-reset {
            position: absolute;
        }

        /* Dirty hack for xvideos99 */
        #page #main.--savior-overlay-z-index-reset {
            z-index: auto !important;
        }

        /* Overlay for ok.ru */
        #vp_w.--savior-overlay-z-index-reset.media-layer.media-layer__video {
            overflow-y: hidden;
            z-index: 2147483643 !important;
        }

        /* Fix missing controller for tv.naver.com */
        .--savior-overlay-z-index-top.rmc_controller,
        .--savior-overlay-z-index-top.rmc_setting_intro,
        .--savior-overlay-z-index-top.rmc_highlight,
        .--savior-overlay-z-index-top.rmc_control_settings {
            z-index: 2147483644 !important;
        }

        /* Dirty hack for douyi.com */
        .swiper-wrapper.--savior-overlay-z-index-reset .swiper-slide:not(.swiper-slide-active),
        .swiper-wrapper.--savior-overlay-transform-reset .swiper-slide:not(.swiper-slide-active) {
            display: none;
        }

        .videoWrap+div>div {
            pointer-events: unset;
        }

        /* Dirty hack for fpt.ai */
        .mfp-wrap.--savior-overlay-z-index-top {
            position: relative;
        }

        .mfp-wrap.--savior-overlay-z-index-top .mfp-close {
            display: none;
        }

        .mfp-wrap.--savior-overlay-z-index-top .mfp-content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset+nav {
            z-index: -1 !important;
        }

        section.--savior-overlay-z-index-reset>main[role="main"].--savior-overlay-z-index-reset section.--savior-overlay-z-index-reset div.--savior-overlay-z-index-reset~div {
            position: relative;
        }

        .watching-movie #video-player.--savior-overlay-z-index-top {
            z-index: 2147483644 !important;
        }

        div[class^="tiktok"].--savior-overlay-z-index-reset {
            z-index: 2147483644 !important;
        }

        .--savior-lightoff-fix section:not(:has([class*="--savior-overlay-"])),
        .--savior-lightoff-fix section.section_video~section {
            z-index: -1;
            position: relative;
        }

        .--savior-lightoff-fix header,
        .--savior-lightoff-fix footer,
        .--savior-lightoff-fix .top-header,
        .--savior-lightoff-fix .swiper-container,
        .--savior-lightoff-fix #to_top,
        .--savior-lightoff-fix #button-adblock {
            z-index: -1 !important;
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    @stack('styles')
</head>

<body>

    <main>
        <div class="container">
    
            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h1>404</h1>
                <h2>Không tìm thấy trang yêu cầu.</h2>
                <a class="btn" href="{{ route('home') }}">Quay lại trang chủ</a>
                <img src="https://bootstrapmade.com/content/demo/NiceAdmin/assets/img/not-found.svg" class="img-fluid py-5"
                    alt="Page Not Found">
                <div class="credits">
    
                    Designed by <a>GIRC</a>
                </div>
            </section>
    
        </div>
    </main>

    <div class="alert-container absolute z-50 right-4 top-24">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show p-2" role="alert">
                <h4 class="alert-heading ml-0 mb-0 mr-8" style="font-size: 16px;">
                    <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
                </h4>
                <button type="button" class="btn-close p-2 m-1" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show p-2" role="alert">
                <h4 class="alert-heading ml-0 mb-0 mr-8" style="font-size: 16px;">
                    <i class="bi bi-exclamation-octagon me-1"></i>{{ session('error') }}
                </h4>
                <button type="button" class="btn-close p-2 m-1" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>
        @endif
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lấy tất cả các alert đang active
            const alerts = document.querySelectorAll('.alert');

            alerts.forEach(alert => {
                // Tự động ẩn sau 5 giây
                setTimeout(() => {
                    alert.classList.add('hidden');
                    setTimeout(() => alert.remove(), 500); // Xóa sau khi fade out
                }, 5000);

                // Đóng alert khi nhấn nút close
                const closeButton = alert.querySelector('.btn-close');
                if (closeButton) {
                    closeButton.addEventListener('click', function() {
                        alert.classList.add('hidden');
                        setTimeout(() => alert.remove(), 500); // Xóa sau khi fade out
                    });
                }
            });
        });
    </script>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="credits"> © Copyright 2024. Designed by <a>GIRC</a>
        </div>
    </footer><!-- End Footer -->

    <a class="back-to-top d-flex align-items-center justify-content-center active"><i
            class="bi bi-arrow-up-short"></i></a>
    <script>
        // Lắng nghe sự kiện cuộn trang
        window.addEventListener('scroll', function() {
            var backToTopBtn = document.querySelector('.back-to-top');
            if (window.scrollY > 200) { // Nếu cuộn trang xuống 200px
                backToTopBtn.classList.add('active'); // Hiển thị nút
            } else {
                backToTopBtn.classList.remove('active'); // Ẩn nút
            }
        });

        // Lắng nghe sự kiện nhấn vào nút
        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault(); // Ngừng hành vi mặc định
            window.scrollTo({
                top: 0, // Cuộn lên đầu trang
                behavior: 'smooth' // Cuộn mượt mà
            });
        });
    </script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/quill.js') }}"></script>
    <script src="{{ asset('admin/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/main.js') }}"></script>
    @stack('bottom_scripts')
</body>

</html>


