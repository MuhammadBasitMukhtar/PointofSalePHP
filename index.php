<?php include 'includes/header.php' ?>

<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Congratulations 🎉 John!</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
            <a href="#">$48.9k</a>
          </h3>
          <button type="button" class="btn btn-primary waves-effect waves-float waves-light">View Sales</button>
          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/badge.svg" class="congratulation-medal" alt="Medal Pic">
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Statistics</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">230k</h4>
                  <p class="card-text font-small-3 mb-0">Sales</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user avatar-icon"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">8.549k</h4>
                  <p class="card-text font-small-3 mb-0">Customers</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box avatar-icon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">1.423k</h4>
                  <p class="card-text font-small-3 mb-0">Products</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$9745</h4>
                  <p class="card-text font-small-3 mb-0">Revenue</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>

  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
        <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card">
            <div class="card-body pb-50" style="position: relative;">
              <h6>Orders</h6>
              <h2 class="fw-bolder mb-1">2,76k</h2>
              <div id="statistics-order-chart" style="min-height: 85px;"><div id="apexchartshzxm0nlk" class="apexcharts-canvas apexchartshzxm0nlk apexcharts-theme-light" style="width: 107px; height: 70px;"><svg id="SvgjsSvg1851" width="107" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1853" class="apexcharts-inner apexcharts-graphical" transform="translate(12.566666666666668, 15)"><defs id="SvgjsDefs1852"><linearGradient id="SvgjsLinearGradient1856" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1857" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1858" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1859" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskhzxm0nlk"><rect id="SvgjsRect1861" width="110.99999999999999" height="55" x="-10.566666666666668" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskhzxm0nlk"><rect id="SvgjsRect1862" width="93.86666666666666" height="59" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1860" width="4.493333333333333" height="55" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1856)" class="apexcharts-xcrosshairs" y2="55" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1876" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1877" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1879" class="apexcharts-grid"><g id="SvgjsG1880" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1882" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1883" x1="-8.566666666666668" y1="11" x2="98.43333333333332" y2="11" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1884" x1="-8.566666666666668" y1="22" x2="98.43333333333332" y2="22" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1885" x1="-8.566666666666668" y1="33" x2="98.43333333333332" y2="33" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1886" x1="-8.566666666666668" y1="44" x2="98.43333333333332" y2="44" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1887" x1="-8.566666666666668" y1="55" x2="98.43333333333332" y2="55" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1881" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1889" x1="0" y1="55" x2="89.86666666666666" y2="55" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1888" x1="0" y1="1" x2="0" y2="55" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1863" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1864" class="apexcharts-series" seriesName="2020" rel="1" data:realIndex="0"><rect id="SvgjsRect1866" width="4.493333333333333" height="55" x="-2.2466666666666666" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1867" d="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 53.876666666666665Q 0 56.123333333333335 -2.2466666666666666 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhzxm0nlk)" pathTo="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 30.25L 2.2466666666666666 53.876666666666665Q 0 56.123333333333335 -2.2466666666666666 53.876666666666665z" pathFrom="M -2.2466666666666666 53.876666666666665L -2.2466666666666666 55L 2.2466666666666666 55L 2.2466666666666666 55L 2.2466666666666666 55L -2.2466666666666666 55" cy="30.25" cx="2.246666666666667" j="0" val="45" barHeight="24.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1868" width="4.493333333333333" height="55" x="20.22" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1869" d="M 20.22 53.876666666666665L 20.22 8.25L 24.71333333333333 8.25L 24.71333333333333 8.25L 24.71333333333333 53.876666666666665Q 22.466666666666665 56.123333333333335 20.22 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhzxm0nlk)" pathTo="M 20.22 53.876666666666665L 20.22 8.25L 24.71333333333333 8.25L 24.71333333333333 8.25L 24.71333333333333 53.876666666666665Q 22.466666666666665 56.123333333333335 20.22 53.876666666666665z" pathFrom="M 20.22 53.876666666666665L 20.22 55L 24.71333333333333 55L 24.71333333333333 55L 24.71333333333333 55L 20.22 55" cy="8.25" cx="24.713333333333335" j="1" val="85" barHeight="46.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1870" width="4.493333333333333" height="55" x="42.68666666666666" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1871" d="M 42.68666666666666 53.876666666666665L 42.68666666666666 19.25L 47.17999999999999 19.25L 47.17999999999999 19.25L 47.17999999999999 53.876666666666665Q 44.93333333333333 56.123333333333335 42.68666666666666 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhzxm0nlk)" pathTo="M 42.68666666666666 53.876666666666665L 42.68666666666666 19.25L 47.17999999999999 19.25L 47.17999999999999 19.25L 47.17999999999999 53.876666666666665Q 44.93333333333333 56.123333333333335 42.68666666666666 53.876666666666665z" pathFrom="M 42.68666666666666 53.876666666666665L 42.68666666666666 55L 47.17999999999999 55L 47.17999999999999 55L 47.17999999999999 55L 42.68666666666666 55" cy="19.25" cx="47.179999999999986" j="2" val="65" barHeight="35.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1872" width="4.493333333333333" height="55" x="65.15333333333332" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1873" d="M 65.15333333333332 53.876666666666665L 65.15333333333332 30.25L 69.64666666666666 30.25L 69.64666666666666 30.25L 69.64666666666666 53.876666666666665Q 67.39999999999999 56.123333333333335 65.15333333333332 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhzxm0nlk)" pathTo="M 65.15333333333332 53.876666666666665L 65.15333333333332 30.25L 69.64666666666666 30.25L 69.64666666666666 30.25L 69.64666666666666 53.876666666666665Q 67.39999999999999 56.123333333333335 65.15333333333332 53.876666666666665z" pathFrom="M 65.15333333333332 53.876666666666665L 65.15333333333332 55L 69.64666666666666 55L 69.64666666666666 55L 69.64666666666666 55L 65.15333333333332 55" cy="30.25" cx="69.64666666666666" j="3" val="45" barHeight="24.75" barWidth="4.493333333333333"></path><rect id="SvgjsRect1874" width="4.493333333333333" height="55" x="87.61999999999999" y="0" rx="5" ry="5" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" class="apexcharts-backgroundBar"></rect><path id="SvgjsPath1875" d="M 87.61999999999999 53.876666666666665L 87.61999999999999 19.25L 92.11333333333333 19.25L 92.11333333333333 19.25L 92.11333333333333 53.876666666666665Q 89.86666666666666 56.123333333333335 87.61999999999999 53.876666666666665z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskhzxm0nlk)" pathTo="M 87.61999999999999 53.876666666666665L 87.61999999999999 19.25L 92.11333333333333 19.25L 92.11333333333333 19.25L 92.11333333333333 53.876666666666665Q 89.86666666666666 56.123333333333335 87.61999999999999 53.876666666666665z" pathFrom="M 87.61999999999999 53.876666666666665L 87.61999999999999 55L 92.11333333333333 55L 92.11333333333333 55L 92.11333333333333 55L 87.61999999999999 55" cy="19.25" cx="92.11333333333333" j="4" val="65" barHeight="35.75" barWidth="4.493333333333333"></path></g><g id="SvgjsG1865" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1890" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1891" x1="-8.566666666666668" y1="0" x2="98.43333333333332" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1892" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1893" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1894" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1895" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1896" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><g id="SvgjsG1878" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1854" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 150px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card card-tiny-line-stats">
            <div class="card-body pb-50" style="position: relative;">
              <h6>Profit</h6>
              <h2 class="fw-bolder mb-1">6,24k</h2>
              <div id="statistics-profit-chart" style="min-height: 85px;"><div id="apexcharts49biyx93" class="apexcharts-canvas apexcharts49biyx93 apexcharts-theme-light" style="width: 107px; height: 70px;"><svg id="SvgjsSvg1897" width="107" height="70" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1899" class="apexcharts-inner apexcharts-graphical" transform="translate(12, 0)"><defs id="SvgjsDefs1898"><clipPath id="gridRectMask49biyx93"><rect id="SvgjsRect1904" width="92" height="68" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask49biyx93"><rect id="SvgjsRect1905" width="97" height="77" x="-6" y="-6" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1903" x1="0" y1="0" x2="0" y2="65" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="65" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1922" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1923" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1925" font-family="Helvetica, Arial, sans-serif" x="0" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1926">1</tspan><title>1</title></text><text id="SvgjsText1928" font-family="Helvetica, Arial, sans-serif" x="17" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1929">2</tspan><title>2</title></text><text id="SvgjsText1931" font-family="Helvetica, Arial, sans-serif" x="34" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1932">3</tspan><title>3</title></text><text id="SvgjsText1934" font-family="Helvetica, Arial, sans-serif" x="51" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1935">4</tspan><title>4</title></text><text id="SvgjsText1937" font-family="Helvetica, Arial, sans-serif" x="68" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1938">5</tspan><title>5</title></text><text id="SvgjsText1940" font-family="Helvetica, Arial, sans-serif" x="85" y="94" text-anchor="middle" dominant-baseline="auto" font-size="0px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1941">6</tspan><title>6</title></text></g></g><g id="SvgjsG1943" class="apexcharts-grid"><g id="SvgjsG1944" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1945" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1946" x1="0" y1="0" x2="0" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1947" x1="17" y1="0" x2="17" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1948" x1="34" y1="0" x2="34" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1949" x1="51" y1="0" x2="51" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1950" x1="68" y1="0" x2="68" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line><line id="SvgjsLine1951" x1="85" y1="0" x2="85" y2="65" stroke="#ebebeb" stroke-dasharray="5" class="apexcharts-gridline"></line></g><line id="SvgjsLine1953" x1="0" y1="65" x2="85" y2="65" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1952" x1="0" y1="1" x2="0" y2="65" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1906" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1907" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1921" d="M 0 65L 17 39L 34 58.5L 51 26L 68 45.5L 85 6.5" fill="none" fill-opacity="1" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask49biyx93)" pathTo="M 0 65L 17 39L 34 58.5L 51 26L 68 45.5L 85 6.5" pathFrom="M -1 65L -1 65L 17 65L 34 65L 51 65L 68 65L 85 65"></path><g id="SvgjsG1908" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1910" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask49biyx93)"><circle id="SvgjsCircle1911" r="2" cx="0" cy="65" class="apexcharts-marker no-pointer-events wjh43sf8o" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="0" j="0" index="0" default-marker-size="2"></circle><circle id="SvgjsCircle1912" r="2" cx="17" cy="39" class="apexcharts-marker no-pointer-events wluq62veqg" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="1" j="1" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1913" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask49biyx93)"><circle id="SvgjsCircle1914" r="2" cx="34" cy="58.5" class="apexcharts-marker no-pointer-events wcrlms84b" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="2" j="2" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1915" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask49biyx93)"><circle id="SvgjsCircle1916" r="2" cx="51" cy="26" class="apexcharts-marker no-pointer-events wj9y29p4c" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="3" j="3" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1917" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask49biyx93)"><circle id="SvgjsCircle1918" r="2" cx="68" cy="45.5" class="apexcharts-marker no-pointer-events wnk3ff66wg" stroke="#00cfe8" fill="#00cfe8" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="4" j="4" index="0" default-marker-size="2"></circle></g><g id="SvgjsG1919" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask49biyx93)"><circle id="SvgjsCircle1920" r="5" cx="85" cy="6.5" class="apexcharts-marker no-pointer-events wlw17sd2j" stroke="#00cfe8" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="1" rel="5" j="5" index="0" default-marker-size="5"></circle></g></g></g><g id="SvgjsG1909" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1954" x1="0" y1="0" x2="85" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1955" x1="0" y1="0" x2="85" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1956" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1957" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1958" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1902" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1942" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1900" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 35px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 207, 232);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 150px; height: 181px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
        <!--/ Line Chart - Profit -->

        <!-- Earnings Card -->
        <div class="col-lg-12 col-md-6 col-12">
          <div class="card earnings-card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h4 class="card-title mb-1">Earnings</h4>
                  <div class="font-small-2">This Month</div>
                  <h5 class="mb-1">$4055.56</h5>
                  <p class="card-text text-muted font-small-2">
                    <span class="fw-bolder">68.2%</span><span> more earnings than last month.</span>
                  </p>
                </div>
                <div class="col-6" style="position: relative;">
                  <div id="earnings-chart" style="min-height: 126.8px;"><div id="apexcharts4bf9pnd4" class="apexcharts-canvas apexcharts4bf9pnd4 apexcharts-theme-light" style="width: 128px; height: 126.8px;"><svg id="SvgjsSvg1959" width="128" height="126.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1961" class="apexcharts-inner apexcharts-graphical" transform="translate(-16, 0)"><defs id="SvgjsDefs1960"><clipPath id="gridRectMask4bf9pnd4"><rect id="SvgjsRect1963" width="164" height="128" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask4bf9pnd4"><rect id="SvgjsRect1964" width="164" height="132" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1965" class="apexcharts-pie"><g id="SvgjsG1966" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1967" r="37.98536585365854" cx="80" cy="64" fill="transparent"></circle><g id="SvgjsG1968" class="apexcharts-slices"><g id="SvgjsG1969" class="apexcharts-series apexcharts-pie-series" seriesName="App" rel="1" data:realIndex="0"><path id="SvgjsPath1970" d="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z" fill="#28c76f66" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="190.8" data:startAngle="-10" data:strokeWidth="0" data:value="53" data:pathOrig="M 69.85216991000085 6.448795702018273 A 58.43902439024391 58.43902439024391 0 1 1 79.1840638026197 122.43332798844617 L 79.46964147170281 101.98166319249002 A 37.98536585365854 37.98536585365854 0 1 0 73.40391044150056 26.591717206311877 L 69.85216991000085 6.448795702018273 z"></path></g><g id="SvgjsG1971" class="apexcharts-series apexcharts-pie-series" seriesName="Service" rel="2" data:realIndex="1"><path id="SvgjsPath1972" d="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z" fill="#28c76f33" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="57.599999999999994" data:startAngle="180.8" data:strokeWidth="0" data:value="16" data:pathOrig="M 79.1840638026197 122.43332798844617 A 58.43902439024391 58.43902439024391 0 0 1 30.22590892178677 94.6212251391295 L 47.646840799161396 83.90379634043418 A 37.98536585365854 37.98536585365854 0 0 0 79.46964147170281 101.98166319249002 L 79.1840638026197 122.43332798844617 z"></path></g><g id="SvgjsG1973" class="apexcharts-series apexcharts-pie-series" seriesName="Product" rel="3" data:realIndex="2"><path id="SvgjsPath1974" d="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z" fill="rgba(40,199,111,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="111.6" data:startAngle="238.4" data:strokeWidth="0" data:value="31" data:pathOrig="M 30.22590892178677 94.6212251391295 A 58.43902439024391 58.43902439024391 0 0 1 69.84212548457727 6.4505677090342814 L 73.39738156497522 26.592869010872285 A 37.98536585365854 37.98536585365854 0 0 0 47.646840799161396 83.90379634043418 L 30.22590892178677 94.6212251391295 z"></path></g></g></g><g id="SvgjsG1975" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1976" font-family="Helvetica, Arial, sans-serif" x="80" y="79" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">App</text><text id="SvgjsText1977" font-family="Helvetica, Arial, sans-serif" x="80" y="65" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">53%</text></g></g><line id="SvgjsLine1978" x1="0" y1="0" x2="160" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1979" x1="0" y1="0" x2="160" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1962" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.4);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(40, 199, 111, 0.2);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 157px; height: 128px;"></div></div><div class="contract-trigger"></div></div></div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Earnings Card -->
      </div>
    </div>

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md-8 col-12 revenue-report-wrapper" style="position: relative;">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span>Earning</span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span>Expense</span>
                </div>
              </div>
            </div>
            <div id="revenue-report-chart" style="min-height: 245px;"><div id="apexcharts7mbyif34j" class="apexcharts-canvas apexcharts7mbyif34j apexcharts-theme-light" style="width: 410px; height: 230px;"><svg id="SvgjsSvg1980" width="410" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1982" class="apexcharts-inner apexcharts-graphical" transform="translate(54.75, 10)"><defs id="SvgjsDefs1981"><linearGradient id="SvgjsLinearGradient1986" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1987" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1988" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1989" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7mbyif34j"><rect id="SvgjsRect1991" width="349.25" height="190.73" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask7mbyif34j"><rect id="SvgjsRect1992" width="349.25" height="194.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1990" width="6.52138888888889" height="190.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1986)" class="apexcharts-xcrosshairs" y2="190.73" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG2016" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2017" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2019" font-family="Helvetica, Arial, sans-serif" x="19.180555555555557" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2020">Jan</tspan><title>Jan</title></text><text id="SvgjsText2022" font-family="Helvetica, Arial, sans-serif" x="57.54166666666667" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2023">Feb</tspan><title>Feb</title></text><text id="SvgjsText2025" font-family="Helvetica, Arial, sans-serif" x="95.90277777777779" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2026">Mar</tspan><title>Mar</title></text><text id="SvgjsText2028" font-family="Helvetica, Arial, sans-serif" x="134.2638888888889" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2029">Apr</tspan><title>Apr</title></text><text id="SvgjsText2031" font-family="Helvetica, Arial, sans-serif" x="172.625" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2032">May</tspan><title>May</title></text><text id="SvgjsText2034" font-family="Helvetica, Arial, sans-serif" x="210.98611111111114" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2035">Jun</tspan><title>Jun</title></text><text id="SvgjsText2037" font-family="Helvetica, Arial, sans-serif" x="249.34722222222229" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2038">Jul</tspan><title>Jul</title></text><text id="SvgjsText2040" font-family="Helvetica, Arial, sans-serif" x="287.70833333333337" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2041">Aug</tspan><title>Aug</title></text><text id="SvgjsText2043" font-family="Helvetica, Arial, sans-serif" x="326.06944444444446" y="219.73" text-anchor="middle" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2044">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG2059" class="apexcharts-grid"><g id="SvgjsG2060" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG2061" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2063" x1="0" y1="190.73" x2="345.25" y2="190.73" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2062" x1="0" y1="1" x2="0" y2="190.73" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1993" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1994" class="apexcharts-series" seriesName="Earning" rel="1" data:realIndex="0"><path id="SvgjsPath1996" d="M 15.919861111111112 114.438L 15.919861111111112 79.82964722222223Q 19.180555555555557 76.5689527777778 22.441250000000004 79.82964722222223L 22.441250000000004 79.82964722222223L 22.441250000000004 114.438L 22.441250000000004 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 15.919861111111112 114.438L 15.919861111111112 79.82964722222223Q 19.180555555555557 76.5689527777778 22.441250000000004 79.82964722222223L 22.441250000000004 79.82964722222223L 22.441250000000004 114.438L 22.441250000000004 114.438z" pathFrom="M 15.919861111111112 114.438L 15.919861111111112 114.438L 22.441250000000004 114.438L 22.441250000000004 114.438L 22.441250000000004 114.438L 15.919861111111112 114.438" cy="78.19930000000001" cx="54.280972222222225" j="0" val="95" barHeight="36.238699999999994" barWidth="6.52138888888889"></path><path id="SvgjsPath1997" d="M 54.280972222222225 114.438L 54.280972222222225 48.54992722222223Q 57.54166666666667 45.289232777777784 60.80236111111111 48.54992722222223L 60.80236111111111 48.54992722222223L 60.80236111111111 114.438L 60.80236111111111 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 54.280972222222225 114.438L 54.280972222222225 48.54992722222223Q 57.54166666666667 45.289232777777784 60.80236111111111 48.54992722222223L 60.80236111111111 48.54992722222223L 60.80236111111111 114.438L 60.80236111111111 114.438z" pathFrom="M 54.280972222222225 114.438L 54.280972222222225 114.438L 60.80236111111111 114.438L 60.80236111111111 114.438L 60.80236111111111 114.438L 54.280972222222225 114.438" cy="46.91958000000001" cx="92.64208333333335" j="1" val="177" barHeight="67.51841999999999" barWidth="6.52138888888889"></path><path id="SvgjsPath1998" d="M 92.64208333333335 114.438L 92.64208333333335 7.733707222222232Q 95.90277777777779 4.473012777777787 99.16347222222224 7.733707222222232L 99.16347222222224 7.733707222222232L 99.16347222222224 114.438L 99.16347222222224 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 92.64208333333335 114.438L 92.64208333333335 7.733707222222232Q 95.90277777777779 4.473012777777787 99.16347222222224 7.733707222222232L 99.16347222222224 7.733707222222232L 99.16347222222224 114.438L 99.16347222222224 114.438z" pathFrom="M 92.64208333333335 114.438L 92.64208333333335 114.438L 99.16347222222224 114.438L 99.16347222222224 114.438L 99.16347222222224 114.438L 92.64208333333335 114.438" cy="6.103360000000009" cx="131.00319444444446" j="2" val="284" barHeight="108.33464" barWidth="6.52138888888889"></path><path id="SvgjsPath1999" d="M 131.00319444444446 114.438L 131.00319444444446 18.414587222222234Q 134.2638888888889 15.15389277777779 137.52458333333334 18.414587222222234L 137.52458333333334 18.414587222222234L 137.52458333333334 114.438L 137.52458333333334 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 131.00319444444446 114.438L 131.00319444444446 18.414587222222234Q 134.2638888888889 15.15389277777779 137.52458333333334 18.414587222222234L 137.52458333333334 18.414587222222234L 137.52458333333334 114.438L 137.52458333333334 114.438z" pathFrom="M 131.00319444444446 114.438L 131.00319444444446 114.438L 137.52458333333334 114.438L 137.52458333333334 114.438L 137.52458333333334 114.438L 131.00319444444446 114.438" cy="16.78424000000001" cx="169.36430555555557" j="3" val="256" barHeight="97.65375999999999" barWidth="6.52138888888889"></path><path id="SvgjsPath2000" d="M 169.36430555555557 114.438L 169.36430555555557 76.01504722222224Q 172.62500000000003 72.7543527777778 175.88569444444445 76.01504722222224L 175.88569444444445 76.01504722222224L 175.88569444444445 114.438L 175.88569444444445 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 169.36430555555557 114.438L 169.36430555555557 76.01504722222224Q 172.62500000000003 72.7543527777778 175.88569444444445 76.01504722222224L 175.88569444444445 76.01504722222224L 175.88569444444445 114.438L 175.88569444444445 114.438z" pathFrom="M 169.36430555555557 114.438L 169.36430555555557 114.438L 175.88569444444445 114.438L 175.88569444444445 114.438L 175.88569444444445 114.438L 169.36430555555557 114.438" cy="74.38470000000001" cx="207.7254166666667" j="4" val="105" barHeight="40.05329999999999" barWidth="6.52138888888889"></path><path id="SvgjsPath2001" d="M 207.7254166666667 114.438L 207.7254166666667 92.03636722222224Q 210.98611111111114 88.7756727777778 214.24680555555557 92.03636722222224L 214.24680555555557 92.03636722222224L 214.24680555555557 114.438L 214.24680555555557 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 207.7254166666667 114.438L 207.7254166666667 92.03636722222224Q 210.98611111111114 88.7756727777778 214.24680555555557 92.03636722222224L 214.24680555555557 92.03636722222224L 214.24680555555557 114.438L 214.24680555555557 114.438z" pathFrom="M 207.7254166666667 114.438L 207.7254166666667 114.438L 214.24680555555557 114.438L 214.24680555555557 114.438L 214.24680555555557 114.438L 207.7254166666667 114.438" cy="90.40602000000001" cx="246.0865277777778" j="5" val="63" barHeight="24.031979999999997" barWidth="6.52138888888889"></path><path id="SvgjsPath2002" d="M 246.0865277777778 114.438L 246.0865277777778 51.983067222222225Q 249.34722222222226 48.72237277777778 252.60791666666668 51.983067222222225L 252.60791666666668 51.983067222222225L 252.60791666666668 114.438L 252.60791666666668 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 246.0865277777778 114.438L 246.0865277777778 51.983067222222225Q 249.34722222222226 48.72237277777778 252.60791666666668 51.983067222222225L 252.60791666666668 51.983067222222225L 252.60791666666668 114.438L 252.60791666666668 114.438z" pathFrom="M 246.0865277777778 114.438L 246.0865277777778 114.438L 252.60791666666668 114.438L 252.60791666666668 114.438L 252.60791666666668 114.438L 246.0865277777778 114.438" cy="50.352720000000005" cx="284.44763888888895" j="6" val="168" barHeight="64.08528" barWidth="6.52138888888889"></path><path id="SvgjsPath2003" d="M 284.44763888888895 114.438L 284.44763888888895 32.91006722222223Q 287.70833333333337 29.649372777777785 290.96902777777785 32.91006722222223L 290.96902777777785 32.91006722222223L 290.96902777777785 114.438L 290.96902777777785 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 284.44763888888895 114.438L 284.44763888888895 32.91006722222223Q 287.70833333333337 29.649372777777785 290.96902777777785 32.91006722222223L 290.96902777777785 32.91006722222223L 290.96902777777785 114.438L 290.96902777777785 114.438z" pathFrom="M 284.44763888888895 114.438L 284.44763888888895 114.438L 290.96902777777785 114.438L 290.96902777777785 114.438L 290.96902777777785 114.438L 284.44763888888895 114.438" cy="31.27972000000001" cx="322.80875000000003" j="7" val="218" barHeight="83.15827999999999" barWidth="6.52138888888889"></path><path id="SvgjsPath2004" d="M 322.80875000000003 114.438L 322.80875000000003 88.60322722222223Q 326.06944444444446 85.34253277777779 329.33013888888894 88.60322722222223L 329.33013888888894 88.60322722222223L 329.33013888888894 114.438L 329.33013888888894 114.438z" fill="rgba(115,103,240,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 322.80875000000003 114.438L 322.80875000000003 88.60322722222223Q 326.06944444444446 85.34253277777779 329.33013888888894 88.60322722222223L 329.33013888888894 88.60322722222223L 329.33013888888894 114.438L 329.33013888888894 114.438z" pathFrom="M 322.80875000000003 114.438L 322.80875000000003 114.438L 329.33013888888894 114.438L 329.33013888888894 114.438L 329.33013888888894 114.438L 322.80875000000003 114.438" cy="86.97288" cx="361.1698611111111" j="8" val="72" barHeight="27.46512" barWidth="6.52138888888889"></path></g><g id="SvgjsG2005" class="apexcharts-series" seriesName="Expense" rel="2" data:realIndex="1"><path id="SvgjsPath2007" d="M 15.919861111111112 114.438L 15.919861111111112 168.11935277777778Q 19.180555555555557 171.38004722222223 22.441250000000004 168.11935277777778L 22.441250000000004 168.11935277777778L 22.441250000000004 114.438L 22.441250000000004 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 15.919861111111112 114.438L 15.919861111111112 168.11935277777778Q 19.180555555555557 171.38004722222223 22.441250000000004 168.11935277777778L 22.441250000000004 168.11935277777778L 22.441250000000004 114.438L 22.441250000000004 114.438z" pathFrom="M 15.919861111111112 114.438L 15.919861111111112 114.438L 22.441250000000004 114.438L 22.441250000000004 114.438L 22.441250000000004 114.438L 15.919861111111112 114.438" cy="169.7497" cx="54.280972222222225" j="0" val="-145" barHeight="-55.311699999999995" barWidth="6.52138888888889"></path><path id="SvgjsPath2008" d="M 54.280972222222225 114.438L 54.280972222222225 143.3244527777778Q 57.54166666666667 146.58514722222225 60.80236111111111 143.3244527777778L 60.80236111111111 143.3244527777778L 60.80236111111111 114.438L 60.80236111111111 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 54.280972222222225 114.438L 54.280972222222225 143.3244527777778Q 57.54166666666667 146.58514722222225 60.80236111111111 143.3244527777778L 60.80236111111111 143.3244527777778L 60.80236111111111 114.438L 60.80236111111111 114.438z" pathFrom="M 54.280972222222225 114.438L 54.280972222222225 114.438L 60.80236111111111 114.438L 60.80236111111111 114.438L 60.80236111111111 114.438L 54.280972222222225 114.438" cy="144.9548" cx="92.64208333333335" j="1" val="-80" barHeight="-30.516799999999996" barWidth="6.52138888888889"></path><path id="SvgjsPath2009" d="M 92.64208333333335 114.438L 92.64208333333335 135.6952527777778Q 95.90277777777779 138.95594722222225 99.16347222222224 135.6952527777778L 99.16347222222224 135.6952527777778L 99.16347222222224 114.438L 99.16347222222224 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 92.64208333333335 114.438L 92.64208333333335 135.6952527777778Q 95.90277777777779 138.95594722222225 99.16347222222224 135.6952527777778L 99.16347222222224 135.6952527777778L 99.16347222222224 114.438L 99.16347222222224 114.438z" pathFrom="M 92.64208333333335 114.438L 92.64208333333335 114.438L 99.16347222222224 114.438L 99.16347222222224 114.438L 99.16347222222224 114.438L 92.64208333333335 114.438" cy="137.3256" cx="131.00319444444446" j="2" val="-60" barHeight="-22.8876" barWidth="6.52138888888889"></path><path id="SvgjsPath2010" d="M 131.00319444444446 114.438L 131.00319444444446 181.47045277777778Q 134.2638888888889 184.73114722222223 137.52458333333334 181.47045277777778L 137.52458333333334 181.47045277777778L 137.52458333333334 114.438L 137.52458333333334 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 131.00319444444446 114.438L 131.00319444444446 181.47045277777778Q 134.2638888888889 184.73114722222223 137.52458333333334 181.47045277777778L 137.52458333333334 181.47045277777778L 137.52458333333334 114.438L 137.52458333333334 114.438z" pathFrom="M 131.00319444444446 114.438L 131.00319444444446 114.438L 137.52458333333334 114.438L 137.52458333333334 114.438L 137.52458333333334 114.438L 131.00319444444446 114.438" cy="183.1008" cx="169.36430555555557" j="3" val="-180" barHeight="-68.66279999999999" barWidth="6.52138888888889"></path><path id="SvgjsPath2011" d="M 169.36430555555557 114.438L 169.36430555555557 150.9536527777778Q 172.62500000000003 154.21434722222224 175.88569444444445 150.9536527777778L 175.88569444444445 150.9536527777778L 175.88569444444445 114.438L 175.88569444444445 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 169.36430555555557 114.438L 169.36430555555557 150.9536527777778Q 172.62500000000003 154.21434722222224 175.88569444444445 150.9536527777778L 175.88569444444445 150.9536527777778L 175.88569444444445 114.438L 175.88569444444445 114.438z" pathFrom="M 169.36430555555557 114.438L 169.36430555555557 114.438L 175.88569444444445 114.438L 175.88569444444445 114.438L 175.88569444444445 114.438L 169.36430555555557 114.438" cy="152.584" cx="207.7254166666667" j="4" val="-100" barHeight="-38.145999999999994" barWidth="6.52138888888889"></path><path id="SvgjsPath2012" d="M 207.7254166666667 114.438L 207.7254166666667 135.6952527777778Q 210.98611111111114 138.95594722222225 214.24680555555557 135.6952527777778L 214.24680555555557 135.6952527777778L 214.24680555555557 114.438L 214.24680555555557 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 207.7254166666667 114.438L 207.7254166666667 135.6952527777778Q 210.98611111111114 138.95594722222225 214.24680555555557 135.6952527777778L 214.24680555555557 135.6952527777778L 214.24680555555557 114.438L 214.24680555555557 114.438z" pathFrom="M 207.7254166666667 114.438L 207.7254166666667 114.438L 214.24680555555557 114.438L 214.24680555555557 114.438L 214.24680555555557 114.438L 207.7254166666667 114.438" cy="137.3256" cx="246.0865277777778" j="5" val="-60" barHeight="-22.8876" barWidth="6.52138888888889"></path><path id="SvgjsPath2013" d="M 246.0865277777778 114.438L 246.0865277777778 145.23175277777779Q 249.34722222222226 148.49244722222224 252.60791666666668 145.23175277777779L 252.60791666666668 145.23175277777779L 252.60791666666668 114.438L 252.60791666666668 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 246.0865277777778 114.438L 246.0865277777778 145.23175277777779Q 249.34722222222226 148.49244722222224 252.60791666666668 145.23175277777779L 252.60791666666668 145.23175277777779L 252.60791666666668 114.438L 252.60791666666668 114.438z" pathFrom="M 246.0865277777778 114.438L 246.0865277777778 114.438L 252.60791666666668 114.438L 252.60791666666668 114.438L 252.60791666666668 114.438L 246.0865277777778 114.438" cy="146.8621" cx="284.44763888888895" j="6" val="-85" barHeight="-32.424099999999996" barWidth="6.52138888888889"></path><path id="SvgjsPath2014" d="M 284.44763888888895 114.438L 284.44763888888895 141.4171527777778Q 287.70833333333337 144.67784722222225 290.96902777777785 141.4171527777778L 290.96902777777785 141.4171527777778L 290.96902777777785 114.438L 290.96902777777785 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 284.44763888888895 114.438L 284.44763888888895 141.4171527777778Q 287.70833333333337 144.67784722222225 290.96902777777785 141.4171527777778L 290.96902777777785 141.4171527777778L 290.96902777777785 114.438L 290.96902777777785 114.438z" pathFrom="M 284.44763888888895 114.438L 284.44763888888895 114.438L 290.96902777777785 114.438L 290.96902777777785 114.438L 290.96902777777785 114.438L 284.44763888888895 114.438" cy="143.0475" cx="322.80875000000003" j="7" val="-75" barHeight="-28.609499999999997" barWidth="6.52138888888889"></path><path id="SvgjsPath2015" d="M 322.80875000000003 114.438L 322.80875000000003 150.9536527777778Q 326.06944444444446 154.21434722222224 329.33013888888894 150.9536527777778L 329.33013888888894 150.9536527777778L 329.33013888888894 114.438L 329.33013888888894 114.438z" fill="rgba(255,159,67,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMask7mbyif34j)" pathTo="M 322.80875000000003 114.438L 322.80875000000003 150.9536527777778Q 326.06944444444446 154.21434722222224 329.33013888888894 150.9536527777778L 329.33013888888894 150.9536527777778L 329.33013888888894 114.438L 329.33013888888894 114.438z" pathFrom="M 322.80875000000003 114.438L 322.80875000000003 114.438L 329.33013888888894 114.438L 329.33013888888894 114.438L 329.33013888888894 114.438L 322.80875000000003 114.438" cy="152.584" cx="361.1698611111111" j="8" val="-100" barHeight="-38.145999999999994" barWidth="6.52138888888889"></path></g><g id="SvgjsG1995" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2006" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2064" x1="0" y1="0" x2="345.25" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2065" x1="0" y1="0" x2="345.25" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2066" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2067" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2068" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2045" class="apexcharts-yaxis" rel="0" transform="translate(24.75, 0)"><g id="SvgjsG2046" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2047" font-family="Helvetica, Arial, sans-serif" x="20" y="11.5" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2048">300</tspan></text><text id="SvgjsText2049" font-family="Helvetica, Arial, sans-serif" x="20" y="49.646" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2050">200</tspan></text><text id="SvgjsText2051" font-family="Helvetica, Arial, sans-serif" x="20" y="87.792" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2052">100</tspan></text><text id="SvgjsText2053" font-family="Helvetica, Arial, sans-serif" x="20" y="125.938" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2054">0</tspan></text><text id="SvgjsText2055" font-family="Helvetica, Arial, sans-serif" x="20" y="164.084" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2056">-100</tspan></text><text id="SvgjsText2057" font-family="Helvetica, Arial, sans-serif" x="20" y="202.23000000000002" text-anchor="end" dominant-baseline="auto" font-size="0.86rem" font-weight="400" fill="#b9b9c3" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2058">-200</tspan></text></g></g><g id="SvgjsG1983" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 115px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 453px; height: 355px;"></div></div><div class="contract-trigger"></div></div></div>
          <div class="col-md-4 col-12 budget-wrapper" style="position: relative;">
            <div class="btn-group">
              <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2020
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">2020</a>
                <a class="dropdown-item" href="#">2019</a>
                <a class="dropdown-item" href="#">2018</a>
              </div>
            </div>
            <h2 class="mb-25">$25,852</h2>
            <div class="d-flex justify-content-center">
              <span class="fw-bolder me-25">Budget:</span>
              <span>56,800</span>
            </div>
            <div id="budget-chart" style="min-height: 80px;"><div id="apexchartsvehd2f1w" class="apexcharts-canvas apexchartsvehd2f1w apexcharts-theme-light" style="width: 142px; height: 80px;"><svg id="SvgjsSvg2105" width="142" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2107" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2106"><clipPath id="gridRectMaskvehd2f1w"><rect id="SvgjsRect2112" width="148" height="82" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskvehd2f1w"><rect id="SvgjsRect2113" width="146" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2111" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2123" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2124" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2126" class="apexcharts-grid"><g id="SvgjsG2127" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2129" x1="0" y1="0" x2="142" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2130" x1="0" y1="20" x2="142" y2="20" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2131" x1="0" y1="40" x2="142" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2132" x1="0" y1="60" x2="142" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2133" x1="0" y1="80" x2="142" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2128" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2135" x1="0" y1="80" x2="142" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2134" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2114" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2115" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2118" d="M 0 19C 4.97 19 9.23 32 14.2 32C 19.169999999999998 32 23.43 11 28.4 11C 33.37 11 37.63 28 42.6 28C 47.57 28 51.83 20 56.8 20C 61.769999999999996 20 66.03 40 71 40C 75.97 40 80.23 1 85.2 1C 90.17 1 94.42999999999999 20 99.39999999999999 20C 104.36999999999999 20 108.63 21 113.6 21C 118.57 21 122.83 37 127.8 37C 132.77 37 137.03 18 142 18" fill="none" fill-opacity="1" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskvehd2f1w)" pathTo="M 0 19C 4.97 19 9.23 32 14.2 32C 19.169999999999998 32 23.43 11 28.4 11C 33.37 11 37.63 28 42.6 28C 47.57 28 51.83 20 56.8 20C 61.769999999999996 20 66.03 40 71 40C 75.97 40 80.23 1 85.2 1C 90.17 1 94.42999999999999 20 99.39999999999999 20C 104.36999999999999 20 108.63 21 113.6 21C 118.57 21 122.83 37 127.8 37C 132.77 37 137.03 18 142 18" pathFrom="M -1 80L -1 80L 14.2 80L 28.4 80L 42.6 80L 56.8 80L 71 80L 85.2 80L 99.39999999999999 80L 113.6 80L 127.8 80L 142 80"></path><g id="SvgjsG2116" class="apexcharts-series-markers-wrap" data:realIndex="0"></g></g><g id="SvgjsG2119" class="apexcharts-series" seriesName="seriesx2" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath2122" d="M 0 60C 4.97 60 9.23 70 14.2 70C 19.169999999999998 70 23.43 50 28.4 50C 33.37 50 37.63 65 42.6 65C 47.57 65 51.83 57 56.8 57C 61.769999999999996 57 66.03 80 71 80C 75.97 80 80.23 55 85.2 55C 90.17 55 94.42999999999999 65 99.39999999999999 65C 104.36999999999999 65 108.63 60 113.6 60C 118.57 60 122.83 75 127.8 75C 132.77 75 137.03 53 142 53" fill="none" fill-opacity="1" stroke="rgba(220,218,227,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="5" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskvehd2f1w)" pathTo="M 0 60C 4.97 60 9.23 70 14.2 70C 19.169999999999998 70 23.43 50 28.4 50C 33.37 50 37.63 65 42.6 65C 47.57 65 51.83 57 56.8 57C 61.769999999999996 57 66.03 80 71 80C 75.97 80 80.23 55 85.2 55C 90.17 55 94.42999999999999 65 99.39999999999999 65C 104.36999999999999 65 108.63 60 113.6 60C 118.57 60 122.83 75 127.8 75C 132.77 75 137.03 53 142 53" pathFrom="M -1 80L -1 80L 14.2 80L 28.4 80L 42.6 80L 56.8 80L 71 80L 85.2 80L 99.39999999999999 80L 113.6 80L 127.8 80L 142 80"></path><g id="SvgjsG2120" class="apexcharts-series-markers-wrap" data:realIndex="1"></g></g><g id="SvgjsG2117" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG2121" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine2136" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2137" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2138" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2139" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2140" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2110" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2125" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2108" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div></div></div>
            <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Increase Budget</button>
          <div class="resize-triggers"><div class="expand-trigger"><div style="width: 227px; height: 355px;"></div></div><div class="contract-trigger"></div></div></div>
        </div>
      </div>
    </div>
    <!--/ Revenue Report Card -->
  </div>

  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Views</th>
                  <th>Revenue</th>
                  <th>Sales</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/toolbox.svg" alt="Toolbar svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Dixons</div>
                        <div class="font-small-2 text-muted">meguc@ruj.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">23.4k</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$891.2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">68%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/parachute.svg" alt="Parachute svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Motels</div>
                        <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">78k</span>
                      <span class="font-small-2 text-muted">in 2 days</span>
                    </div>
                  </td>
                  <td>$668.51</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">97%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/brush.svg" alt="Brush svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Zipcar</div>
                        <div class="font-small-2 text-muted">davcilse@is.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">162</span>
                      <span class="font-small-2 text-muted">in 5 days</span>
                    </div>
                  </td>
                  <td>$522.29</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">62%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/star.svg" alt="Star svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Owning</div>
                        <div class="font-small-2 text-muted">us@cuhil.gov</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor font-medium-3"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                        </div>
                      </div>
                      <span>Technology</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">214</span>
                      <span class="font-small-2 text-muted">in 24 hours</span>
                    </div>
                  </td>
                  <td>$291.01</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">88%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/book.svg" alt="Book svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Cafés</div>
                        <div class="font-small-2 text-muted">pudais@jife.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee font-medium-3"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        </div>
                      </div>
                      <span>Grocery</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">208</span>
                      <span class="font-small-2 text-muted">in 1 week</span>
                    </div>
                  </td>
                  <td>$783.93</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">16%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down text-danger font-medium-1"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/rocket.svg" alt="Rocket svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Kmart</div>
                        <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">990</span>
                      <span class="font-small-2 text-muted">in 1 month</span>
                    </div>
                  </td>
                  <td>$780.05</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">78%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/speaker.svg" alt="Speaker svg">
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">Payers</div>
                        <div class="font-small-2 text-muted">luk@izug.io</div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-warning me-1">
                        <div class="avatar-content">
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch font-medium-3"><circle cx="12" cy="12" r="7"></circle><polyline points="12 9 12 12 13.5 13.5"></polyline><path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path></svg>
                        </div>
                      </div>
                      <span>Fashion</span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">12.9k</span>
                      <span class="font-small-2 text-muted">in 12 hours</span>
                    </div>
                  </td>
                  <td>$531.49</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">42%</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up text-success font-medium-1"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->

    <!-- Developer Meetup Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-developer-meetup">
        <div class="meetup-img-wrapper rounded-top text-center">
          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
        </div>
        <div class="card-body">
          <div class="meetup-header d-flex align-items-center">
            <div class="meetup-day">
              <h6 class="mb-0">THU</h6>
              <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
              <h4 class="card-title mb-25">Developer Meetup</h4>
              <p class="card-text mb-0">Meet world popular developers</p>
            </div>
          </div>
          <div class="mt-0">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Sat, May 25, 2020</h6>
              <small>10:AM to 6:PM</small>
            </div>
          </div>
          <div class="mt-2">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Central Park</h6>
              <small>Manhattan, New york City</small>
            </div>
          </div>
          <div class="avatar-group">
            <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Billy Hopkins">
              <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33">
            </div>
            <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Amy Carson">
              <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33">
            </div>
            <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Brandon Miles">
              <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33">
            </div>
            <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Daisy Weber">
              <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
            </div>
            <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom" title="" class="avatar pull-up" data-bs-original-title="Jenny Looper">
              <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33">
            </div>
            <h6 class="align-self-center cursor-pointer ms-50 mb-0">+42</h6>
          </div>
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->

    <!-- Browser States Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-browser-states">
        <div class="card-header">
          <div>
            <h4 class="card-title">Browser States</h4>
            <p class="card-text font-small-2">Counter August 2020</p>
          </div>
          <div class="dropdown chart-dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="browser-states">
            <div class="d-flex">
              <img src="../../../app-assets/images/icons/google-chrome.png" class="rounded me-1" height="30" alt="Google Chrome">
              <h6 class="align-self-center mb-0">Google Chrome</h6>
            </div>
            <div class="d-flex align-items-center" style="position: relative;">
              <div class="fw-bold text-body-heading me-1">54.4%</div>
              <div id="browser-state-chart-primary" style="min-height: 35.7px;"><div id="apexcharts43rzul9u" class="apexcharts-canvas apexcharts43rzul9u apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1522" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1524" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1523"><clipPath id="gridRectMask43rzul9u"><rect id="SvgjsRect1526" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask43rzul9u"><rect id="SvgjsRect1527" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1528" class="apexcharts-radialbar"><g id="SvgjsG1529"><g id="SvgjsG1530" class="apexcharts-tracks"><g id="SvgjsG1531" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1533"><g id="SvgjsG1536" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1537" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726" fill="none" fill-opacity="0.85" stroke="rgba(115,103,240,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="196" data:value="54.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 26.649258182615842 41.68542541152726"></path></g><circle id="SvgjsCircle1534" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1535" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1538" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1539" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1525" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 87px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img src="../../../app-assets/images/icons/mozila-firefox.png" class="rounded me-1" height="30" alt="Mozila Firefox">
              <h6 class="align-self-center mb-0">Mozila Firefox</h6>
            </div>
            <div class="d-flex align-items-center" style="position: relative;">
              <div class="fw-bold text-body-heading me-1">6.1%</div>
              <div id="browser-state-chart-warning" style="min-height: 35.7px;"><div id="apexchartszdjq52j8" class="apexcharts-canvas apexchartszdjq52j8 apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1404" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1406" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1405"><clipPath id="gridRectMaskzdjq52j8"><rect id="SvgjsRect1408" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskzdjq52j8"><rect id="SvgjsRect1409" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1410" class="apexcharts-radialbar"><g id="SvgjsG1411"><g id="SvgjsG1412" class="apexcharts-tracks"><g id="SvgjsG1413" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1415"><g id="SvgjsG1418" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1419" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155" fill="none" fill-opacity="0.85" stroke="rgba(255,159,67,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="22" data:value="6.1" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 34.55384566401036 18.728836464521155"></path></g><circle id="SvgjsCircle1416" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1417" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1420" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1421" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1407" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 74px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img src="../../../app-assets/images/icons/apple-safari.png" class="rounded me-1" height="30" alt="Apple Safari">
              <h6 class="align-self-center mb-0">Apple Safari</h6>
            </div>
            <div class="d-flex align-items-center" style="position: relative;">
              <div class="fw-bold text-body-heading me-1">14.6%</div>
              <div id="browser-state-chart-secondary" style="min-height: 35.7px;"><div id="apexchartscgxfw37e" class="apexcharts-canvas apexchartscgxfw37e apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1422" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1424" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1423"><clipPath id="gridRectMaskcgxfw37e"><rect id="SvgjsRect1426" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcgxfw37e"><rect id="SvgjsRect1427" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1428" class="apexcharts-radialbar"><g id="SvgjsG1429"><g id="SvgjsG1430" class="apexcharts-tracks"><g id="SvgjsG1431" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1433"><g id="SvgjsG1436" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1437" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916" fill="none" fill-opacity="0.85" stroke="rgba(130,134,139,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="53" data:value="14.6" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 39.70848596494321 22.684131080750916"></path></g><circle id="SvgjsCircle1434" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1435" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1438" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1439" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1425" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 84px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img src="../../../app-assets/images/icons/internet-explorer.png" class="rounded me-1" height="30" alt="Internet Explorer">
              <h6 class="align-self-center mb-0">Internet Explorer</h6>
            </div>
            <div class="d-flex align-items-center" style="position: relative;">
              <div class="fw-bold text-body-heading me-1">4.2%</div>
              <div id="browser-state-chart-info" style="min-height: 35.7px;"><div id="apexchartsc5x7i9lt" class="apexcharts-canvas apexchartsc5x7i9lt apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1440" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1442" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1441"><clipPath id="gridRectMaskc5x7i9lt"><rect id="SvgjsRect1444" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskc5x7i9lt"><rect id="SvgjsRect1445" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1446" class="apexcharts-radialbar"><g id="SvgjsG1447"><g id="SvgjsG1448" class="apexcharts-tracks"><g id="SvgjsG1449" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1451"><g id="SvgjsG1454" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1455" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152" fill="none" fill-opacity="0.85" stroke="rgba(0,207,232,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="15" data:value="4.2" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 33.14629268950116 18.257875827299152"></path></g><circle id="SvgjsCircle1452" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1453" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1456" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1457" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1443" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 79px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <img src="../../../app-assets/images/icons/opera.png" class="rounded me-1" height="30" alt="Opera Mini">
              <h6 class="align-self-center mb-0">Opera Mini</h6>
            </div>
            <div class="d-flex align-items-center" style="position: relative;">
              <div class="fw-bold text-body-heading me-1">8.4%</div>
              <div id="browser-state-chart-danger" style="min-height: 35.7px;"><div id="apexchartssfzn0zgg" class="apexcharts-canvas apexchartssfzn0zgg apexcharts-theme-light" style="width: 30px; height: 35.7px;"><svg id="SvgjsSvg1458" width="30" height="35.699999999999996" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1460" class="apexcharts-inner apexcharts-graphical" transform="translate(-15, -12)"><defs id="SvgjsDefs1459"><clipPath id="gridRectMasksfzn0zgg"><rect id="SvgjsRect1462" width="66" height="59" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasksfzn0zgg"><rect id="SvgjsRect1463" width="64" height="61" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1464" class="apexcharts-radialbar"><g id="SvgjsG1465"><g id="SvgjsG1466" class="apexcharts-tracks"><g id="SvgjsG1467" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703" fill="none" fill-opacity="1" stroke="rgba(235,235,235,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.952395121951219" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 1 1 29.997878318175438 17.84365872173703"></path></g></g><g id="SvgjsG1469"><g id="SvgjsG1472" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1473" d="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824" fill="none" fill-opacity="0.85" stroke="rgba(234,84,85,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.074634146341463" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="30" data:value="8.4" index="0" j="0" data:pathOrig="M 30 17.843658536585362 A 12.156341463414638 12.156341463414638 0 0 1 36.07817073170732 19.472299475604824"></path></g><circle id="SvgjsCircle1470" r="5.180143902439028" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1471" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"></g></g></g></g><line id="SvgjsLine1474" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1475" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1461" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 79px; height: 37px;"></div></div><div class="contract-trigger"></div></div></div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Browser States Card -->

    <!-- Goal Overview Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Goal Overview</h4>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle font-medium-3 text-muted cursor-pointer"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
        </div>
        <div class="card-body p-0" style="position: relative;">
          <div id="goal-overview-radial-bar-chart" class="my-2" style="min-height: 205.633px;"><div id="apexchartsyq1bijhh" class="apexcharts-canvas apexchartsyq1bijhh apexcharts-theme-light" style="width: 326px; height: 205.633px;"><svg id="SvgjsSvg2069" width="326" height="205.63333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2071" class="apexcharts-inner apexcharts-graphical" transform="translate(40.5, -10)"><defs id="SvgjsDefs2070"><clipPath id="gridRectMaskyq1bijhh"><rect id="SvgjsRect2073" width="251" height="217" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskyq1bijhh"><rect id="SvgjsRect2074" width="249" height="219" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2079" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2080" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2081" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop><stop id="SvgjsStop2082" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2089" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2090" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2091" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop><stop id="SvgjsStop2092" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2094" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2095" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2095Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2096" in="SvgjsFeFlood2095Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2096Out"></feComposite><feOffset id="SvgjsFeOffset2097" dx="1" dy="1" result="SvgjsFeOffset2097Out" in="SvgjsFeComposite2096Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2098" stdDeviation="3 " result="SvgjsFeGaussianBlur2098Out" in="SvgjsFeOffset2097Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2099" result="SvgjsFeMerge2099Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2100" in="SvgjsFeGaussianBlur2098Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2101" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2102" in="SourceGraphic" in2="SvgjsFeMerge2099Out" mode="normal" result="SvgjsFeBlend2102Out"></feBlend></filter></defs><g id="SvgjsG2075" class="apexcharts-radialbar"><g id="SvgjsG2076"><g id="SvgjsG2077" class="apexcharts-tracks"><g id="SvgjsG2078" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718" fill="none" fill-opacity="1" stroke="rgba(235,233,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.5304878048780495" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718"></path></g></g><g id="SvgjsG2084"><g id="SvgjsG2088" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2093" d="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2089)" stroke-opacity="1" stroke-linecap="round" stroke-width="7.060975609756099" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="249" data:value="83" filter="url(#SvgjsFilter2094)" index="0" j="0" data:pathOrig="M 77.85670731707313 184.82445114399718 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622"></path></g><circle id="SvgjsCircle2085" r="82.52134146341464" cx="122.5" cy="107.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2086" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2087" font-family="Helvetica, Arial, sans-serif" x="122.5" y="123.5" text-anchor="middle" dominant-baseline="auto" font-size="2.86rem" font-weight="600" fill="#5e5873" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine2103" x1="0" y1="0" x2="245" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2104" x1="0" y1="0" x2="245" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2072" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
          <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Completed</p>
              <h3 class="fw-bolder mb-0">786,617</h3>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">In Progress</p>
              <h3 class="fw-bolder mb-0">13,561</h3>
            </div>
          </div>
        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 327px; height: 324px;"></div></div><div class="contract-trigger"></div></div></div>
      </div>
    </div>
    <!--/ Goal Overview Card -->

    <!-- Transaction Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Transactions</h4>
          <div class="dropdown chart-dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-3 cursor-pointer" data-bs-toggle="dropdown"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket avatar-icon font-medium-3"><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Wallet</h6>
                <small>Starbucks</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">- $74</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-success rounded float-start">
                <div class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check avatar-icon font-medium-3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Bank Transfer</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $480</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-danger rounded float-start">
                <div class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign avatar-icon font-medium-3"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Paypal</h6>
                <small>Add Money</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $590</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-warning rounded float-start">
                <div class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card avatar-icon font-medium-3"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Mastercard</h6>
                <small>Ordered Food</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">- $23</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-info rounded float-start">
                <div class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up avatar-icon font-medium-3"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Transfer</h6>
                <small>Refund</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $98</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Transaction Card -->
  </div>
</section>


<?php include 'includes/footer.php' ?>