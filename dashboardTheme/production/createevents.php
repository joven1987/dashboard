<!DOCTYPE html>
<html lang="en" >
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >

    <title >Flockers |</title >

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet" >
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet" >

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" >
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" >

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../srcOwnModification/index2.css" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWFYr4z14aKZ0EefiszAmFSN9lSMkw7bk&libraries=places&callback=initAutoComplete"
            async defer ></script >

</head >

<body class="nav-md" >
<div class="container body" >
    <div class="main_container" >
        <div class="col-md-3 left_col" >
           <?php require "sideBarMenu.html";?>
        </div >

        <!-- top navigation -->
        <div class="top_nav" >
           <?php require "topNavBar.php";?>
        </div >
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" >
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12" >
                    <div class="dashboard_graph" >

                        <div class="row x_title" >
                            <div class="col-md-4" >
                                <h3 >Organize an Events...</h3 >
                            </div >
                            <div class="col-md-8">
                                Steps:
                                    <a href="#"><button class="btn-stepsNav" data-Id="step1" type="button">1</button></a >
                                    <a href="#"><button class="btn-stepsNav" data-Id="step2" type="button">2</button></a >
                                    <a href="#"><button class="btn-stepsNav" data-Id="step3" type="button">3</button></a >
                                    <a href="#"><button class="btn-stepsNav" data-Id="step4" type="button">4</button></a >
                                    <a href="#"><button class="btn-stepsNav" data-Id="step5" type="button">5</button></a >
                                    <a href="#"><button class="btn-stepsNav" data-Id="step6" type="button">6</button></a >

                            </div>
                        </div >
                        <div class="row x_title" >
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                                <div id="create-event-placeholder" >
                                    <!--step 1-->
                                    <div class="container">
                                        <div class="row">
                                            <section class="step-section active-section" id="step1" data-Id="step1">
                                                <div id="location_holder" style="position: relative;">
                                                    <h4 >Where do you want to meet with other flockers?<br />
                                                        <i >
                                                            <small id="place_holder" ></small >&nbsp;&nbsp;
                                                            <small style="text-decoration: underline; cursor: pointer; color: blue;"
                                                                   id="change_location" >change
                                                            </small >
                                                        </i >
                                                    </h4 >
                                                </div >
                                                <div id="map_holder" style="width: 100%; height: 300px; background-color: #1ABB9C;" >

                                                </div >
                                            </section>
                                            <section class="step-section" id="step2"></section >
                                            <section class="step-section" id="step3"></section >
                                            <section class="step-section" id="step4"></section >
                                            <section class="step-section" id="step5"></section >
                                            <section class="step-section" id="step6"></section >
                                        </div>
                                    </div>
                                </div >
                            </div >
                            <div class="clearfix" ></div >
                        </div >
                    </div >
                </div >

            </div >
            <br />
        </div >
    </div >
</div >
</div>
<!-- /page content -->

<!-- footer content -->
<footer >
    <div class="pull-right" >
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" >Colorlib</a >
    </div >
    <div class="clearfix" ></div >
</footer >
<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js" ></script >



<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js" ></script >
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js" ></script >
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js" ></script >
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js" ></script >
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js" ></script >
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js" ></script >
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js" ></script >
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js" ></script >
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js" ></script >
<script src="../vendors/Flot/jquery.flot.pie.js" ></script >
<script src="../vendors/Flot/jquery.flot.time.js" ></script >
<script src="../vendors/Flot/jquery.flot.stack.js" ></script >
<script src="../vendors/Flot/jquery.flot.resize.js" ></script >
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js" ></script >
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js" ></script >
<script src="../vendors/flot.curvedlines/curvedLines.js" ></script >
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js" ></script >
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js" ></script >
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js" ></script >
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js" ></script >
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js" ></script >
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js" ></script >

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js" ></script >
<script src="../srcOwnModification/index2.js"></script >

</body >
</html >
