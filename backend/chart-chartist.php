<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    <?php include "assets/components/nav-link.php"; ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Chartist</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->




                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Advanced Smil Animation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Simple line chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line Scatter Diagram</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line chart with tooltips</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line chart with area</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bi-polar Line chart with area only</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">SVG Path animation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line Interpolation / Smoothing</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Different configuration for different series</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="different-series" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">SVG Animations chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bi-polar bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Overlapping bars on mobile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Multi-line labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Stacked bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Horizontal bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Extreme responsive configuration</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Label placement</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Animating a Donut with Svg.animate</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Simple pie chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pie chart with custom labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Gauge chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    


    <!-- Chart Chartist plugin files -->
    <script src="./vendor/chartist/js/chartist.min.js"></script>
    <script src="./vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="./js/plugins-init/chartist-init.js"></script>

</body>

</html>