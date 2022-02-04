<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: Falcon - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="/assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="/assets/js/vendor/morris/morris.css">
<!-- project main css files -->
<link rel="stylesheet" href="/assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="index.html">
                        <span>Falcon</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->
                @include('layout.topbaronleft')
                <div class="search" id="main-search">
                    <input type="text" class="form-control underline-input" placeholder="Explore Falcon...">
                </div>
                <!-- Search end -->
                @include('layout.topbaronright')
            </header>
        </div>
        <!--/ HEADER Content  -->
        <div id="controls">
            <aside id="leftmenu">
               @include('layout.leftmenu')
            </aside>
            <aside id="rightmenu">
               @include('layout.rightmenu')
            </aside>
        </div>
        <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="mb-20 b-b">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="m-0 h3">@yield('page_name')</h1>
                            <small class="text-muted">@yield('page_subname')</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-amber">
									<strong>@yield('page_intro')</strong></h3>
							</div>
							<div class="boxs-body">
								@yield('contents')
							</div>
						</section>
					</div>
                </div>
            </div>
        </section>
    </div>
    <!-- Vendor JavaScripts -->
    <script src="/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
    <script src="/assets/bundles/flotscripts.bundle.js"></script>
    <script src="/assets/bundles/d3cripts.bundle.js"></script>
    <script src="/assets/bundles/sparkline.bundle.js"></script>
    <script src="/assets/bundles/raphael.bundle.js"></script>
    <script src="/assets/bundles/morris.bundle.js"></script>
    <script src="/assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/js/page/index.js"></script>
    <script src="/assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
</body>
</html>
