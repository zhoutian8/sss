<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Wedding Banie & Lorie  HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/bootstrap.min.css')); ?>" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/owl.carousel.min.css')); ?>" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/animate.css')); ?>" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/animated-text.css')); ?>" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/all.min.css')); ?>" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/flaticon.css')); ?>" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/theme-default.css')); ?>" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/meanmenu.min.css')); ?>" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/owl.transitions.css')); ?>" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/venobox.css')); ?>" type="text/css" media="all">

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/bootstrap-icons.css')); ?>" type="text/css" media="all">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/style.css')); ?>" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('static/css/responsive.css')); ?>" type="text/css" media="all">

	<!-- modernizr js -->
	<script src="<?php echo e(asset('static/js/modernizr-3.5.0.min.js')); ?>"></script>
</head>

<body>
<?php echo $__env->make('magic.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- 引入顶部 -->

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

<?php echo $__env->make('magic.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <!-- 引入头部 -->



	<!-- jquery js -->
	<script src="<?php echo e(asset('static/js/jquery-3.6.2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('static/js/popper.min.js')); ?>"></script>
	<!-- bootstrap js -->
	<script src="<?php echo e(asset('static/js/bootstrap.min.js')); ?>"></script>
	<!-- carousel js -->
	<script src="<?php echo e(asset('static/js/owl.carousel.min.js')); ?>"></script>
	<!-- counterup js -->
	<script src="<?php echo e(asset('static/js/jquery.counterup.min.js')); ?>"></script>
	<!-- waypoints js -->
	<script src="<?php echo e(asset('static/js/waypoints.min.js')); ?>"></script>
	<!-- wow js -->
	<script src="<?php echo e(asset('static/js/wow.js')); ?>"></script>
	<!-- imagesloaded js -->
	<script src="<?php echo e(asset('static/js/imagesloaded.pkgd.min.js')); ?>"></script>
	<!-- venobox js -->
	<script src="<?php echo e(asset('static/js/venobox.js')); ?>"></script>

	<!--  animated-text js -->
	<script src="<?php echo e(asset('static/js/animated-text.js')); ?>"></script>
	<!-- venobox min js -->
	<script src="<?php echo e(asset('static/js/venobox.min.js')); ?>"></script>
	<!-- isotope js -->
	<script src="<?php echo e(asset('static/js/isotope.pkgd.min.js')); ?>"></script>
	<!-- jquery meanmenu js -->
	<script src="<?php echo e(asset('static/js/jquery.meanmenu.js')); ?>"></script>

	<!-- jquery scrollup js -->
	<script src="<?php echo e(asset('static/js/jquery.scrollUp.js')); ?>"></script>

	<script src="<?php echo e(asset('static/js/jquery.barfiller.js')); ?>"></script>
	<!-- jquery js -->


	<!-- theme js -->
	<script src="<?php echo e(asset('static/js/theme.js')); ?>"></script>
	
</body>

</html><?php /**PATH /var/www/project/resources/views/magic/app.blade.php ENDPATH**/ ?>