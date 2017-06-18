<!doctype html>
<html lang="en">
<head>

    <?php include(__DIR__ . '/fragment/head.php'); ?>


</head>

<body class="index-page">


<!-- Navbar
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="http://www.creative-tim.com">
	        	<div class="logo-container">
	                <div class="logo">
	                    <img src="vendor/x_material_kit_free_v1.1.1/assets/img/logo.png" alt="Creative Tim Logo" rel="tooltip" title="<b>Material Kit</b> was Designed & Coded with care by the staff from <b>Creative Tim</b>" data-placement="bottom" data-html="true">
	                </div>
	                <div class="brand">
	                    Creative Tim
	                </div>


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="components-documentation.html" target="_blank">
						<i class="material-icons">dashboard</i> Components
					</a>
				</li>
				<li>
					<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">
						<i class="material-icons">unarchive</i> Upgrade to PRO
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li>

	    	</ul>
	    </div>
	</div>
</nav>
 End Navbar -->

<div class="wrapper">


    <div class="header header-filter" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="">
                        <h1>Title H1</h1>
                        <h3>Title H3</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">


                <?php require(__DIR__ . '/fragment/notification.php'); ?>

                <?php require(__DIR__ . '/fragment/circleProgress.php'); ?>


                <div class="row active-with-click">
                        <db-card></db-card>
                        <db-card></db-card>
                        <db-card></db-card>

                </div>





                <div class="title">
                    <h2>Basic Elements</h2>
                </div>

                <div id="buttons">
                    <?php require(__DIR__ . '/fragment/button.php'); ?>
                </div>

                <div id="inputs">
                    <?php require(__DIR__ . '/fragment/form.php'); ?>
                </div>

                <div class="space-70"></div>
            </div>


            <div class="col-sm-3">
                <div class="title">
                    <h3>Sliders</h3>
                </div>

                <div id="sliderRegular" class="slider"></div>
                <div id="sliderDouble" class="slider slider-info"></div>
            </div>


            <div class="section section-navbars">
                <?php require(__DIR__ . '/fragment/navbar.php'); ?>
            </div>
            <!-- End .section-navbars  -->

            <div class="section section-tabs">
                <?php require(__DIR__ . '/fragment/tab.php'); ?>
            </div>
            <!-- End Section Tabs -->

            <div class="section section-pagination">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title">
                                <h3>Progress Bars</h3>
                            </div>

                            <div class="progress progress-line-primary">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 30%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>

                            <div class="progress progress-line-info">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>

                            <div class="progress progress-line-danger">
                                <div class="progress-bar progress-bar-success" style="width: 35%">
                                    <span class="sr-only">35% Complete (success)</span>
                                </div>
                                <div class="progress-bar progress-bar-warning" style="width: 20%">
                                    <span class="sr-only">20% Complete (warning)</span>
                                </div>
                                <div class="progress-bar progress-bar-danger" style="width: 10%">
                                    <span class="sr-only">10% Complete (danger)</span>
                                </div>
                            </div>

                            <br/>
                            <div class="title">
                                <h3>Navigation Pills</h3>
                            </div>

                            <ul class="nav nav-pills" role="tablist">
                                <!--
                                    color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                -->
                                <li>
                                    <a href="#dashboard" role="tab" data-toggle="tab">
                                        <i class="material-icons">dashboard</i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="#schedule" role="tab" data-toggle="tab">
                                        <i class="material-icons">schedule</i>
                                        Schedule
                                    </a>
                                </li>
                                <li>
                                    <a href="#tasks" role="tab" data-toggle="tab">
                                        <i class="material-icons">list</i>
                                        Tasks
                                    </a>
                                </li>
                                <li>
                                    <a href="#payments" role="tab" data-toggle="tab">
                                        <i class="material-icons">attach_money</i>
                                        Payments
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <div class="col-md-6">
                            <div class="title">
                                <h3>Pagination</h3>
                            </div>

                            <ul class="pagination pagination-primary">
                                <!--
                                    color-classes: "pagination-primary", "pagination-info", "pagination-success", "pagination-warning", "pagination-danger"
                                -->
                                <li><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">...</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li><a href="javascript:void(0);">6</a></li>
                                <li class="active"><a href="javascript:void(0);">7</a></li>
                                <li><a href="javascript:void(0);">8</a></li>
                                <li><a href="javascript:void(0);">9</a></li>
                                <li><a href="javascript:void(0);">...</a></li>
                                <li><a href="javascript:void(0);">12</a></li>
                            </ul>

                            <ul class="pagination pagination-info">
                                <li><a href="javascript:void(0);">< prev</a></li>
                                <li><a href="javascript:void(0);">1</a></li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li class="active"><a href="javascript:void(0);">3</a></li>
                                <li><a href="javascript:void(0);">4</a></li>
                                <li><a href="javascript:void(0);">5</a></li>
                                <li><a href="javascript:void(0);">next ></a></li>
                            </ul>

                            <div class="title">
                                <h3>Labels </h3>
                            </div>
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                        </div>
                    </div>

                    <div class="space"></div>


                </div>
            </div>


            <div class="section">
                <div class="container tim-container">
                    <div class="title">
                        <h2>Typography</h2>
                    </div>
                    <div id="typography">
                        <div class="row">
                            <div class="tim-typo">
                                <h1><span class="tim-note">Header 1</span>The Life of Material Kit </h1>
                            </div>
                            <div class="tim-typo">
                                <h2><span class="tim-note">Header 2</span>The Life of Material Kit</h2>
                            </div>
                            <div class="tim-typo">
                                <h3><span class="tim-note">Header 3</span>The Life of Material Kit</h3>
                            </div>
                            <div class="tim-typo">
                                <h4><span class="tim-note">Header 4</span>The Life of Material Kit</h4>
                            </div>
                            <div class="tim-typo">
                                <h5><span class="tim-note">Header 5</span>The Life of Material Kit</h5>
                            </div>
                            <div class="tim-typo">
                                <h6><span class="tim-note">Header 6</span>The Life of Material Kit</h6>
                            </div>
                            <div class="tim-typo">
                                <p><span class="tim-note">Paragraph</span>
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers. I understand culture. I am the nucleus. I think that’s a
                                    responsibility that I have, to push possibilities, to show people, this is the level
                                    that things could be at.</p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Quote</span>
                                <blockquote>
                                    <p>
                                        I will be the leader of a company that ends up being worth billions of dollars,
                                        because I got the answers. I understand culture. I am the nucleus. I think
                                        that’s a responsibility that I have, to push possibilities, to show people, this
                                        is the level that things could be at.
                                    </p>
                                    <small>
                                        Kanye West, Musician
                                    </small>
                                </blockquote>
                            </div>

                            <div class="tim-typo">
                                <span class="tim-note">Muted Text</span>
                                <p class="text-muted">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers...
                                </p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Primary Text</span>
                                <p class="text-primary">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers... </p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Info Text</span>
                                <p class="text-info">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers... </p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Success Text</span>
                                <p class="text-success">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers... </p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Warning Text</span>
                                <p class="text-warning">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers...
                                </p>
                            </div>
                            <div class="tim-typo">
                                <span class="tim-note">Danger Text</span>
                                <p class="text-danger">
                                    I will be the leader of a company that ends up being worth billions of dollars,
                                    because I got the answers... </p>
                            </div>
                            <div class="tim-typo">
                                <h2><span class="tim-note">Small Tag</span>
                                    Header with small subtitle <br>
                                    <small>Use "small" tag for the headers</small>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="space-50"></div>

                    <div id="images">
                        <div class="title">
                            <h2>Images</h2>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                                <h4>Rounded Image</h4>
                                <img src="vendor/x_material_kit_free_v1.1.1/assets/img/avatar.jpg" alt="Rounded Image"
                                     class="img-rounded img-responsive">
                            </div>
                            <div class="col-sm-2 col-sm-offset-1">
                                <h4>Circle Image</h4>
                                <img src="vendor/x_material_kit_free_v1.1.1/assets/img/avatar.jpg" alt="Circle Image"
                                     class="img-circle img-responsive">
                            </div>
                            <div class="col-sm-2 col-sm-offset-1">
                                <h4>Rounded Raised</h4>
                                <img src="vendor/x_material_kit_free_v1.1.1/assets/img/avatar.jpg" alt="Raised Image"
                                     class="img-rounded img-responsive img-raised">
                            </div>

                            <div class="col-sm-2 col-sm-offset-1">
                                <h4>Circle Raised</h4>
                                <img src="vendor/x_material_kit_free_v1.1.1/assets/img/avatar.jpg" alt="Thumbnail Image"
                                     class="img-circle img-raised img-responsive">
                            </div>
                        </div>
                        <div class="row">

                        </div>
                    </div>

                </div>
            </div>

            <div class="section" id="javascriptComponents">
                <div class="container">
                    <div class="title">
                        <h2>Javascript components</h2>
                    </div>

                    <div class="row" id="modals">
                        <div class="col-md-6">
                            <div class="title">
                                <h3>Modal</h3>
                            </div>

                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Launch demo modal
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="title">
                                <h3>Popovers</h3>
                            </div>

                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement="left"
                                    title="Popover on left"
                                    data-content="Here will be some very useful information about his popover.<br> Here will be some very useful information about his popover."
                                    data-container="body">On left
                            </button>

                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement="top"
                                    title="Popover on top"
                                    data-content="Here will be some very useful information about his popover."
                                    data-container="body">On top
                            </button>

                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement="bottom"
                                    title="Popover on bottom"
                                    data-content="Here will be some very useful information about his popover."
                                    data-container="body">On bottom
                            </button>

                            <button type="button" class="btn btn-default" data-toggle="popover" data-placement="right"
                                    title="Popover on right"
                                    data-content="Here will be some very useful information about his popover."
                                    data-container="body">On right
                            </button>

                        </div>
                        <br/><br/>

                        <div class="col-md-6">
                            <div class="title">
                                <h3>Datepicker</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-static">
                                        <label class="control-label">Datepicker</label>
                                        <input type="text" class="datepicker form-control" value="03/12/2016"/>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="title">
                                <h3>Tooltips</h3>
                            </div>

                            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                                    data-placement="left" title="Tooltip on left" data-container="body">On left
                            </button>

                            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                                    data-placement="top" title="Tooltip on top" data-container="body">On top
                            </button>

                            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                                    data-placement="bottom" title="Tooltip on bottom" data-container="body">On bottom
                            </button>

                            <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip"
                                    data-placement="right" title="Tooltip on right" data-container="body">On right
                            </button>

                            <div class="clearfix"></div>
                            <br><br>
                        </div>

                        <div class="title">
                            <h3>Carousel</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="carousel">
                <?php include(__DIR__ . '/fragment/carrousel.php'); ?>
            </div>


            <div class="section section-full-screen section-signup"
                 style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <?php include(__DIR__ . '/fragment/form2.php'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <a href="examples/signup-page.html" class="btn btn-simple btn-primary btn-lg" target="_blank">View
                    Signup Page</a>
            </div>

            <div class="space-50"></div>


        </div>


    </div>

    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <?php include(__DIR__ . '/fragment/dialog.php'); ?>
    </div>
    <!--  End Modal -->


    <!--   Core JS Files   -->
    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->

    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/nouislider.min.js" type="text/javascript"></script>


    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->


    <script src="vendor/x_material_kit_free_v1.1.1/assets/js/material-kit.js" type="text/javascript"></script>


    <script type="text/javascript">

        $().ready(function () {

            //console.debug('ici');

            // the body of this function is in assets/material-kit.js

            materialKit.initSliders();


            window_width = $(window).width();

            if (window_width >= 992) {
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
    </script>


</body>

</html>
