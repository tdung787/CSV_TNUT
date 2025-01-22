<x-admin-layout>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a target="_blank"
                            href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This Year</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This Year</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This Year</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This Year</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart" style="min-height: 365px;" class="">
                                        <div id="apexchartsqt1ahxcd"
                                            class="apexcharts-canvas apexchartsqt1ahxcd apexcharts-theme-"
                                            style="width: 696px; height: 350px;"><svg id="SvgjsSvg1844"
                                                width="696" height="350" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)">
                                                <foreignobject x="0" y="0" width="696" height="350">
                                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                        <div class="apexcharts-legend-series" rel="1"
                                                            seriesname="Sales" data:collapsed="false"
                                                            style="margin: 4px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="1"
                                                                data:collapsed="false"
                                                                style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                    id="SvgjsSvg1847" width="100%" height="100%"
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.dev">
                                                                    <defs id="SvgjsDefs1848">
                                                                        <clippath id="gridRectMaskqt1ahxcd">
                                                                            <rect id="SvgjsRect1864"
                                                                                width="646.3646488189697"
                                                                                height="270.6799995422363" x="-3"
                                                                                y="-3" rx="0" ry="0"
                                                                                opacity="1" stroke-width="0"
                                                                                stroke="none" stroke-dasharray="0"
                                                                                fill="#fff"></rect>
                                                                        </clippath>
                                                                        <clippath id="forecastMaskqt1ahxcd"></clippath>
                                                                        <clippath id="nonForecastMaskqt1ahxcd">
                                                                        </clippath>
                                                                        <clippath id="gridRectMarkerMaskqt1ahxcd">
                                                                            <rect id="SvgjsRect1865"
                                                                                width="688.3646488189697"
                                                                                height="312.6799995422363" x="-24"
                                                                                y="-24" rx="0" ry="0"
                                                                                opacity="1" stroke-width="0"
                                                                                stroke="none" stroke-dasharray="0"
                                                                                fill="#fff"></rect>
                                                                        </clippath>
                                                                    </defs>
                                                                    <path id="SvgjsPath1849" d="M 0, 0
           m -7, 0
           a 7,7 0 1,0 14,0
           a 7,7 0 1,0 -14,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="1"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="0" shape="circle"
                                                                        class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                        style="transform: translate(50%, 50%);"></path>
                                                                </svg></span><span class="apexcharts-legend-text"
                                                                rel="1" i="0" data:default-text="Sales"
                                                                data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            seriesname="Revenue" data:collapsed="false"
                                                            style="margin: 4px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="2"
                                                                data:collapsed="false"
                                                                style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                    id="SvgjsSvg1850" width="100%" height="100%"
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.dev">
                                                                    <defs id="SvgjsDefs1851"></defs>
                                                                    <path id="SvgjsPath1852" d="M 0, 0
           m -7, 0
           a 7,7 0 1,0 14,0
           a 7,7 0 1,0 -14,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="1"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="0" shape="circle"
                                                                        class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                        style="transform: translate(50%, 50%);"></path>
                                                                </svg></span><span class="apexcharts-legend-text"
                                                                rel="2" i="1" data:default-text="Revenue"
                                                                data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                        </div>
                                                        <div class="apexcharts-legend-series" rel="3"
                                                            seriesname="Customers" data:collapsed="false"
                                                            style="margin: 4px 5px;"><span
                                                                class="apexcharts-legend-marker" rel="3"
                                                                data:collapsed="false"
                                                                style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg
                                                                    id="SvgjsSvg1853" width="100%" height="100%"
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.dev">
                                                                    <defs id="SvgjsDefs1854"></defs>
                                                                    <path id="SvgjsPath1855" d="M 0, 0
           m -7, 0
           a 7,7 0 1,0 14,0
           a 7,7 0 1,0 -14,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="1"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="0" shape="circle"
                                                                        class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle"
                                                                        style="transform: translate(50%, 50%);"></path>
                                                                </svg></span><span class="apexcharts-legend-text"
                                                                rel="3" i="2" data:default-text="Customers"
                                                                data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: flex;
                                                            align-items: center;
                                                            justify-content: center;
                                                            cursor: pointer;
                                                            margin-right: 1px;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignobject>
                                                <rect id="SvgjsRect1859" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1866" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1867" class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"></g>
                                                <g id="SvgjsG1980" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(15.635351181030273, 0)">
                                                    <g id="SvgjsG1981" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1983"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="33.666666666666664" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1984">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText1986"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="86.60266657511393" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1987">80</tspan>
                                                            <title>80</title>
                                                        </text><text id="SvgjsText1989"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="139.5386664835612" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1990">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1992"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="192.47466639200846" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1993">40</tspan>
                                                            <title>40</title>
                                                        </text><text id="SvgjsText1995"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="245.41066630045572" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1996">20</tspan>
                                                            <title>20</title>
                                                        </text><text id="SvgjsText1998"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="298.346666208903" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1999">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1846" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(45.63535118103027, 30)">
                                                    <defs id="SvgjsDefs1845">
                                                        <lineargradient id="SvgjsLinearGradient1885" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1886" stop-opacity="0.3"
                                                                stop-color="rgba(65,84,241,0.3)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1887" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9">
                                                            </stop>
                                                            <stop id="SvgjsStop1888" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1">
                                                            </stop>
                                                        </lineargradient>
                                                        <lineargradient id="SvgjsLinearGradient1907" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1908" stop-opacity="0.3"
                                                                stop-color="rgba(46,202,106,0.3)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1909" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9">
                                                            </stop>
                                                            <stop id="SvgjsStop1910" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1">
                                                            </stop>
                                                        </lineargradient>
                                                        <lineargradient id="SvgjsLinearGradient1929" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1930" stop-opacity="0.3"
                                                                stop-color="rgba(255,119,29,0.3)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1931" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="0.9">
                                                            </stop>
                                                            <stop id="SvgjsStop1932" stop-opacity="0.4"
                                                                stop-color="rgba(255,255,255,0.4)" offset="1">
                                                            </stop>
                                                        </lineargradient>
                                                    </defs>
                                                    <line id="SvgjsLine1860" x1="0" y1="0"
                                                        x2="0" y2="264.6799995422363" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="264.6799995422363" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine1939" x1="0" y1="264.6799995422363"
                                                        x2="0" y2="270.6799995422363" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1940" x1="98.5176382798415"
                                                        y1="264.6799995422363" x2="98.5176382798415"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1941" x1="197.035276559683"
                                                        y1="264.6799995422363" x2="197.035276559683"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1942" x1="295.55291483952453"
                                                        y1="264.6799995422363" x2="295.55291483952453"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1943" x1="394.070553119366"
                                                        y1="264.6799995422363" x2="394.070553119366"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1944" x1="492.5881913992075"
                                                        y1="264.6799995422363" x2="492.5881913992075"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine1945" x1="591.1058296790491"
                                                        y1="264.6799995422363" x2="591.1058296790491"
                                                        y2="270.6799995422363" stroke="#e0e0e0" stroke-dasharray="0"
                                                        stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                    <g id="SvgjsG1935" class="apexcharts-grid">
                                                        <g id="SvgjsG1936" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1947" x1="0"
                                                                y1="52.935999908447265" x2="640.3646488189697"
                                                                y2="52.935999908447265" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1948" x1="0"
                                                                y1="105.87199981689453" x2="640.3646488189697"
                                                                y2="105.87199981689453" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1949" x1="0"
                                                                y1="158.8079997253418" x2="640.3646488189697"
                                                                y2="158.8079997253418" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1950" x1="0"
                                                                y1="211.74399963378906" x2="640.3646488189697"
                                                                y2="211.74399963378906" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1937" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1953" x1="0"
                                                            y1="264.6799995422363" x2="640.3646488189697"
                                                            y2="264.6799995422363" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1952" x1="0" y1="1"
                                                            x2="0" y2="264.6799995422363"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1938" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1946" x1="0" y1="0"
                                                            x2="640.3646488189697" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1951" x1="0"
                                                            y1="264.6799995422363" x2="640.3646488189697"
                                                            y2="264.6799995422363" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1979" x1="0"
                                                            y1="264.6799995422363" x2="640.3646488189697"
                                                            y2="264.6799995422363" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1868"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1869" class="apexcharts-series" zIndex="0"
                                                            seriesName="Sales" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1889"
                                                                d="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584C 640.3646488189697 116.459199798584 640.3646488189697 116.459199798584 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                fill="url(#SvgjsLinearGradient1885)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584C 640.3646488189697 116.459199798584 640.3646488189697 116.459199798584 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                pathFrom="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584C 640.3646488189697 116.459199798584 640.3646488189697 116.459199798584 640.3646488189697 264.6799995422363 L 0 264.6799995422363zz">
                                                            </path>
                                                            <path id="SvgjsPath1890"
                                                                d="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584"
                                                                fill="none" fill-opacity="1" stroke="#4154f1"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584"
                                                                pathFrom="M 0 182.62919968414306C 51.72176009691679 182.62919968414306 96.05469732284547 158.8079997253418 147.77645741976227 158.8079997253418C 182.2576308177068 158.8079997253418 211.81292230165923 190.56959967041016 246.29409569960376 190.56959967041016C 280.7752690975483 190.56959967041016 310.3305605815007 129.6931997756958 344.81173397944525 129.6931997756958C 379.2929073773898 129.6931997756958 408.8481988613422 153.51439973449706 443.32937225928674 153.51439973449706C 477.8105456572313 153.51439973449706 507.36583714118376 47.642399917602546 541.8470105391283 47.642399917602546C 576.3281839370728 47.642399917602546 605.8834754210252 116.459199798584 640.3646488189697 116.459199798584"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1870"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG1872" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1873" d="M 0, 182.62919968414306
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="182.62919968414306" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w2xp3wge1l"
                                                                        rel="0" j="0" index="0"
                                                                        default-marker-size="4"></path>
                                                                    <path id="SvgjsPath1874" d="M 147.77645741976227, 158.8079997253418
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="147.77645741976227"
                                                                        cy="158.8079997253418" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wg6us56z5"
                                                                        rel="1" j="1" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1875" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1876" d="M 246.29409569960376, 190.56959967041016
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="246.29409569960376"
                                                                        cy="190.56959967041016" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w4py62999"
                                                                        rel="2" j="2" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1877" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1878" d="M 344.81173397944525, 129.6931997756958
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="344.81173397944525"
                                                                        cy="129.6931997756958" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wf2aayif1"
                                                                        rel="3" j="3" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1879" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1880" d="M 443.32937225928674, 153.51439973449706
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="443.32937225928674"
                                                                        cy="153.51439973449706" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wrkqpa5ix"
                                                                        rel="4" j="4" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1881" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1882" d="M 541.8470105391283, 47.642399917602546
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="541.8470105391283"
                                                                        cy="47.642399917602546" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wuseevyy5"
                                                                        rel="5" j="5" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1883" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1884" d="M 640.3646488189697, 116.459199798584
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="640.3646488189697"
                                                                        cy="116.459199798584" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wa3oc8zqh"
                                                                        rel="6" j="6" index="0"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1891" class="apexcharts-series"
                                                            zIndex="1" seriesName="Revenue"
                                                            data:longestSeries="true" rel="2"
                                                            data:realIndex="1">
                                                            <path id="SvgjsPath1911"
                                                                d="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942C 640.3646488189697 156.16119972991942 640.3646488189697 156.16119972991942 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                fill="url(#SvgjsLinearGradient1907)"
                                                                fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942C 640.3646488189697 156.16119972991942 640.3646488189697 156.16119972991942 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                pathFrom="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942C 640.3646488189697 156.16119972991942 640.3646488189697 156.16119972991942 640.3646488189697 264.6799995422363 L 0 264.6799995422363zz">
                                                            </path>
                                                            <path id="SvgjsPath1912"
                                                                d="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942"
                                                                fill="none" fill-opacity="1" stroke="#2eca6a"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942"
                                                                pathFrom="M 0 235.56519959259032C 51.72176009691679 235.56519959259032 96.05469732284547 179.9823996887207 147.77645741976227 179.9823996887207C 182.2576308177068 179.9823996887207 211.81292230165923 145.57399974823 246.29409569960376 145.57399974823C 280.7752690975483 145.57399974823 310.3305605815007 179.9823996887207 344.81173397944525 179.9823996887207C 379.2929073773898 179.9823996887207 408.8481988613422 174.68879969787596 443.32937225928674 174.68879969787596C 477.8105456572313 174.68879969787596 507.36583714118376 127.04639978027345 541.8470105391283 127.04639978027345C 576.3281839370728 127.04639978027345 605.8834754210252 156.16119972991942 640.3646488189697 156.16119972991942"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1892"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG1894" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1895" d="M 0, 235.56519959259032
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="235.56519959259032" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w4qckirln"
                                                                        rel="0" j="0" index="1"
                                                                        default-marker-size="4"></path>
                                                                    <path id="SvgjsPath1896" d="M 147.77645741976227, 179.9823996887207
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="147.77645741976227"
                                                                        cy="179.9823996887207" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wq43s1ui3"
                                                                        rel="1" j="1" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1897" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1898" d="M 246.29409569960376, 145.57399974823
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="246.29409569960376"
                                                                        cy="145.57399974823" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w36kdwggm"
                                                                        rel="2" j="2" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1899" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1900" d="M 344.81173397944525, 179.9823996887207
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="344.81173397944525"
                                                                        cy="179.9823996887207" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wglrtv9zl"
                                                                        rel="3" j="3" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1901" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1902" d="M 443.32937225928674, 174.68879969787596
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="443.32937225928674"
                                                                        cy="174.68879969787596" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wfebti1pc"
                                                                        rel="4" j="4" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1903" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1904" d="M 541.8470105391283, 127.04639978027345
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="541.8470105391283"
                                                                        cy="127.04639978027345" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wgzfusp9h"
                                                                        rel="5" j="5" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1905" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1906" d="M 640.3646488189697, 156.16119972991942
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="640.3646488189697"
                                                                        cy="156.16119972991942" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events whk1hh031"
                                                                        rel="6" j="6" index="1"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1913" class="apexcharts-series"
                                                            zIndex="2" seriesName="Customers"
                                                            data:longestSeries="true" rel="3"
                                                            data:realIndex="2">
                                                            <path id="SvgjsPath1933"
                                                                d="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032C 640.3646488189697 235.56519959259032 640.3646488189697 235.56519959259032 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                fill="url(#SvgjsLinearGradient1929)"
                                                                fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="2"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032C 640.3646488189697 235.56519959259032 640.3646488189697 235.56519959259032 640.3646488189697 264.6799995422363 L 0 264.6799995422363z"
                                                                pathFrom="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032C 640.3646488189697 235.56519959259032 640.3646488189697 235.56519959259032 640.3646488189697 264.6799995422363 L 0 264.6799995422363zz">
                                                            </path>
                                                            <path id="SvgjsPath1934"
                                                                d="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032"
                                                                fill="none" fill-opacity="1" stroke="#ff771d"
                                                                stroke-opacity="1" stroke-linecap="butt"
                                                                stroke-width="2" stroke-dasharray="0"
                                                                class="apexcharts-area" index="2"
                                                                clip-path="url(#gridRectMaskqt1ahxcd)"
                                                                pathTo="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032"
                                                                pathFrom="M 0 224.97799961090087C 51.72176009691679 224.97799961090087 96.05469732284547 235.56519959259032 147.77645741976227 235.56519959259032C 182.2576308177068 235.56519959259032 211.81292230165923 179.9823996887207 246.29409569960376 179.9823996887207C 280.7752690975483 179.9823996887207 310.3305605815007 217.03759962463377 344.81173397944525 217.03759962463377C 379.2929073773898 217.03759962463377 408.8481988613422 240.85879958343506 443.32937225928674 240.85879958343506C 477.8105456572313 240.85879958343506 507.36583714118376 201.1567996520996 541.8470105391283 201.1567996520996C 576.3281839370728 201.1567996520996 605.8834754210252 235.56519959259032 640.3646488189697 235.56519959259032"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1914"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="2">
                                                                <g id="SvgjsG1916" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1917" d="M 0, 224.97799961090087
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="0"
                                                                        cy="224.97799961090087" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w6oz9bs3y"
                                                                        rel="0" j="0" index="2"
                                                                        default-marker-size="4"></path>
                                                                    <path id="SvgjsPath1918" d="M 147.77645741976227, 235.56519959259032
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="147.77645741976227"
                                                                        cy="235.56519959259032" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wclx8z9i6"
                                                                        rel="1" j="1" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1919" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1920" d="M 246.29409569960376, 179.9823996887207
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="246.29409569960376"
                                                                        cy="179.9823996887207" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wjjlcxqqx"
                                                                        rel="2" j="2" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1921" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1922" d="M 344.81173397944525, 217.03759962463377
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="344.81173397944525"
                                                                        cy="217.03759962463377" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events w1ljocv5j"
                                                                        rel="3" j="3" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1923" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1924" d="M 443.32937225928674, 240.85879958343506
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="443.32937225928674"
                                                                        cy="240.85879958343506" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wbji3e1cn"
                                                                        rel="4" j="4" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1925" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1926" d="M 541.8470105391283, 201.1567996520996
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="541.8470105391283"
                                                                        cy="201.1567996520996" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wtv4dccb8"
                                                                        rel="5" j="5" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                                <g id="SvgjsG1927" class="apexcharts-series-markers"
                                                                    clip-path="url(#gridRectMarkerMaskqt1ahxcd)">
                                                                    <path id="SvgjsPath1928" d="M 640.3646488189697, 235.56519959259032
           m -4, 0
           a 4,4 0 1,0 8,0
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9"
                                                                        stroke-linecap="butt" stroke-width="2"
                                                                        stroke-dasharray="0" cx="640.3646488189697"
                                                                        cy="235.56519959259032" shape="circle"
                                                                        class="apexcharts-marker no-pointer-events wnea6d6mx"
                                                                        rel="6" j="6" index="2"
                                                                        default-marker-size="4"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1871" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1893" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                        <g id="SvgjsG1915" class="apexcharts-datalabels"
                                                            data:realIndex="2"></g>
                                                    </g>
                                                    <line id="SvgjsLine1954" x1="0" y1="0"
                                                        x2="640.3646488189697" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1955" x1="0" y1="0"
                                                        x2="640.3646488189697" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1956" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1957" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1959"
                                                                font-family="Helvetica, Arial, sans-serif" x="0"
                                                                y="292.6799995422363" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1960">00:00</tspan>
                                                                <title>00:00</title>
                                                            </text><text id="SvgjsText1962"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="98.5176382798415" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1963">01:00</tspan>
                                                                <title>01:00</title>
                                                            </text><text id="SvgjsText1965"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="197.035276559683" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1966">02:00</tspan>
                                                                <title>02:00</title>
                                                            </text><text id="SvgjsText1968"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="295.55291483952453" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1969">03:00</tspan>
                                                                <title>03:00</title>
                                                            </text><text id="SvgjsText1971"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="394.070553119366" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1972">04:00</tspan>
                                                                <title>04:00</title>
                                                            </text><text id="SvgjsText1974"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="492.5881913992075" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1975">05:00</tspan>
                                                                <title>05:00</title>
                                                            </text><text id="SvgjsText1977"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="591.1058296790491" y="292.6799995422363"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1978">06:00</tspan>
                                                                <title>06:00</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG2000" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2001" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2002" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect2003" width="0" height="0" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect2004" width="0" height="0" x="0"
                                                        y="0" rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0"
                                                    style="order: 1;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(65, 84, 241);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1"
                                                    style="order: 2;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(46, 202, 106);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-2"
                                                    style="order: 3;"><span class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(255, 119, 29);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <div
                                        class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                                        <div class="datatable-top">
                                            <div class="datatable-dropdown">
                                                <label>
                                                    <select class="datatable-selector" name="per-page">
                                                        <option value="5">5</option>
                                                        <option value="10" selected="">10</option>
                                                        <option value="15">15</option>
                                                        <option value="-1">All</option>
                                                    </select> entries per page
                                                </label>
                                            </div>
                                            <div class="datatable-search">
                                                <input class="datatable-input" placeholder="Search..."
                                                    type="search" name="search" title="Search within table">
                                            </div>
                                        </div>
                                        <div class="datatable-container">
                                            <table class="table table-borderless datatable datatable-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 10.760401721664275%;"><button
                                                                class="datatable-sorter">#</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 23.38593974175036%;"><button
                                                                class="datatable-sorter">Customer</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 39.31133428981349%;"><button
                                                                class="datatable-sorter">Product</button></th>
                                                        <th scope="col" data-sortable="true"
                                                            style="width: 11.76470588235294%;"><button
                                                                class="datatable-sorter">Price</button></th>
                                                        <th scope="col" data-sortable="true" class="red"
                                                            style="width: 14.777618364418938%;"><button
                                                                class="datatable-sorter">Status</button></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-index="0">
                                                        <td scope="row"><a
                                                                href="">#2457</a>
                                                        </td>
                                                        <td>Brandon Jacob</td>
                                                        <td><a href=""
                                                                class="text-primary">At praesentium minu</a></td>
                                                        <td>$64</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    <tr data-index="1">
                                                        <td scope="row"><a
                                                                href="">#2147</a>
                                                        </td>
                                                        <td>Bridie Kessler</td>
                                                        <td><a href=""
                                                                class="text-primary">Blanditiis dolor omnis
                                                                similique</a></td>
                                                        <td>$47</td>
                                                        <td class="green"><span
                                                                class="badge bg-warning">Pending</span></td>
                                                    </tr>
                                                    <tr data-index="2">
                                                        <td scope="row"><a
                                                                href="">#2049</a>
                                                        </td>
                                                        <td>Ashleigh Langosh</td>
                                                        <td><a href=""
                                                                class="text-primary">At recusandae consectetur</a>
                                                        </td>
                                                        <td>$147</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                    <tr data-index="3">
                                                        <td scope="row"><a
                                                                href="">#2644</a>
                                                        </td>
                                                        <td>Angus Grady</td>
                                                        <td><a href=""
                                                                class="text-primar">Ut voluptatem id earum et</a></td>
                                                        <td>$67</td>
                                                        <td class="green"><span
                                                                class="badge bg-danger">Rejected</span></td>
                                                    </tr>
                                                    <tr data-index="4">
                                                        <td scope="row"><a
                                                                href="">#2644</a>
                                                        </td>
                                                        <td>Raheem Lehner</td>
                                                        <td><a href=""
                                                                class="text-primary">Sunt similique distinctio</a>
                                                        </td>
                                                        <td>$165</td>
                                                        <td class="green"><span
                                                                class="badge bg-success">Approved</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="datatable-bottom">
                                            <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
                                            <nav class="datatable-pagination">
                                                <ul class="datatable-pagination-list"></ul>
                                            </nav>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href=""
                                        data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item"
                                                href="">Today</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Month</a></li>
                                        <li><a class="dropdown-item"
                                                href="">This
                                                Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col">Preview</th>
                                                <th scope="col">Product</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Sold</th>
                                                <th scope="col">Revenue</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a
                                                        href=""><img
                                                            src=""
                                                            alt=""></a></th>
                                                <td><a href=""
                                                        class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                        nulla</a></td>
                                                <td>$64</td>
                                                <td class="fw-bold">124</td>
                                                <td>$5,828</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a
                                                        href=""><img
                                                            src=""
                                                            alt=""></a></th>
                                                <td><a href=""
                                                        class="text-primary fw-bold">Exercitationem similique
                                                        doloremque</a></td>
                                                <td>$46</td>
                                                <td class="fw-bold">98</td>
                                                <td>$4,508</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a
                                                        href=""><img
                                                            src=""
                                                            alt=""></a></th>
                                                <td><a href=""
                                                        class="text-primary fw-bold">Doloribus nisi exercitationem</a>
                                                </td>
                                                <td>$59</td>
                                                <td class="fw-bold">74</td>
                                                <td>$4,366</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a
                                                        href=""><img
                                                            src=""
                                                            alt=""></a></th>
                                                <td><a href=""
                                                        class="text-primary fw-bold">Officiis quaerat sint rerum
                                                        error</a></td>
                                                <td>$32</td>
                                                <td class="fw-bold">63</td>
                                                <td>$2,016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a
                                                        href=""><img
                                                            src=""
                                                            alt=""></a></th>
                                                <td><a href=""
                                                        class="text-primary fw-bold">Sit unde debitis delectus
                                                        repellendus</a></td>
                                                <td>$79</td>
                                                <td class="fw-bold">41</td>
                                                <td>$3,239</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href=""
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item"
                                        href="">Today</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Month</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                    <div class="activity-content">
                                        Quia quae rerum <a href=""
                                            class="fw-bold text-dark">explicabo officiis</a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                                    <div class="activity-content">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                                    <div class="activity-content">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                                    <div class="activity-content">
                                        Tempore autem saepe <a
                                            href=""
                                            class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                    <div class="activity-content">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                                    <div class="activity-content">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity -->

                    <!-- Budget Report -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href=""
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item"
                                        href="">Today</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Month</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                            <div id="budgetChart"
                                style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"
                                class="echart" _echarts_instance_="ec_1734080399702">
                                <div
                                    style="position: relative; width: 316px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                                    <canvas data-zr-dom-id="zr_0" width="395" height="500"
                                        style="position: absolute; left: 0px; top: 0px; width: 316px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Sales',
                                                    max: 6500
                                                },
                                                {
                                                    name: 'Administration',
                                                    max: 16000
                                                },
                                                {
                                                    name: 'Information Technology',
                                                    max: 30000
                                                },
                                                {
                                                    name: 'Customer Support',
                                                    max: 38000
                                                },
                                                {
                                                    name: 'Development',
                                                    max: 52000
                                                },
                                                {
                                                    name: 'Marketing',
                                                    max: 25000
                                                }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                    value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                    name: 'Allocated Budget'
                                                },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Budget Report -->

                    <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href=""
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item"
                                        href="">Today</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Month</a></li>
                                <li><a class="dropdown-item"
                                        href="">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                            <div id="trafficChart"
                                style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                class="echart" _echarts_instance_="ec_1734080399703">
                                <div
                                    style="position: relative; width: 316px; height: 400px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                    <canvas data-zr-dom-id="zr_0" width="395" height="500"
                                        style="position: absolute; left: 0px; top: 0px; width: 316px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                                <div class=""
                                    style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1), visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1), transform 0.4s cubic-bezier(0.23, 1, 0.32, 1); background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(73px, 179px, 0px); border-color: rgb(238, 102, 102); pointer-events: none; visibility: hidden; opacity: 0;">
                                    <div style="margin: 0px 0 0;line-height:1;">
                                        <div style="font-size:14px;color:#666;font-weight:400;line-height:1;">Access
                                            From</div>
                                        <div style="margin: 10px 0 0;line-height:1;">
                                            <div style="margin: 0px 0 0;line-height:1;"><span
                                                    style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#ee6666;"></span><span
                                                    style="font-size:14px;color:#666;font-weight:400;margin-left:2px">Union
                                                    Ads</span><span
                                                    style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">484</span>
                                                <div style="clear:both"></div>
                                            </div>
                                            <div style="clear:both"></div>
                                        </div>
                                        <div style="clear:both"></div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: 1048,
                                                    name: 'Search Engine'
                                                },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic -->
                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
</x-admin-layout>
