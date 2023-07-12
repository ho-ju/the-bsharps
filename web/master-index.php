<? ob_start(); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $pageTitle; ?><?php $homepage = "/index.php";$homepage1 = "/";$currentpage = $_SERVER['REQUEST_URI'];if($homepage==$currentpage || $homepage1==$currentpage)echo"";else echo " | "; ?>The B-Sharps Basketball Club.</title>
    <meta name="description" content="<?php echo $MetaDescription; ?>" />
	<meta name="author" content="James Ho">
	<meta name="viewport" viewport-modifier content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

	<link rel="shortcut icon" href="/favicon.ico">

	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Roboto:400,300italic,300,100italic,100,400italic,500,700,500italic,700italic,900,900italicOpen+Sans:400,700,800italic,800,700italic,600italic,400italic|Lato:400,700,900,900italic,700italic,400italic' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/static/dist/css/core.css?v=7.3" />

    <script src="/static/dist/js/combined.min.js?v=7.3"></script>

    <script src="/static/dist/js/app.js?v=7.3"></script>
	<script src="/static/dist/js/directives.js?v=7.3"></script>
	<script src="/static/dist/js/leagues-seasons-rounds-controller.js?v=7.3"></script>
	<script src="/static/dist/js/team-list-controller.js?v=7.3"></script>
    <script src="<?php echo $extraScript ?>"></script>

</head>
<body id="<?php echo $page ?>" class="<?php echo $globalClass ?>" ng-app="theBsharpsApp">

	<div id="outer-wrapper">
		<header class="main-header" ng-class="{'active': showNav}">

			<?php include("inc/nav-mob.php"); ?>

			<div class="logo-container">
		        <a href="/" class="logo main">
					<h4>Basketball club est. 2004</h4>
					<h3><span class="text">The B</span><span class="icon"></span><span class="text last">Sharps</span></h3>
				</a>
			</div>

	        <?php include("inc/nav.php"); ?>

	    </header>

		<div class="wrapper">
			<div class="hr faded nav-content-hr"></div>
		    <div class="main-content">

		        <?php echo $pagemaincontent; ?>

		    </div>
		</div>

	    <?php include("inc/footer.php"); ?>
	</div>
    
    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js?v=7.2','ga');
		ga('create', 'UA-81117876-1', 'auto');
		ga('send', 'pageview');
	</script>

</body>
</html>
<? ob_flush(); ?>
