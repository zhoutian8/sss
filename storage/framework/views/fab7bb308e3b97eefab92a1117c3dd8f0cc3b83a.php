<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/themify-icons/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/selectFX/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('static/vendors/jqvmap/dist/jqvmap.min.css')); ?>">


    <link rel="stylesheet" href="<?php echo e(asset('static/assets/css/style.css')); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
               
                <h2 style='color:white;'>Admin Panel</h2>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">USER</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="<?php echo e(route('admin.manage')); ?>">Admin</a></li>
                            <li><i class="fa fa-user"></i><a href="<?php echo e(route('admin.users.index')); ?>">User</a></li>

                            
                        </ul>
                    </li>
                   
                   

                    <h3 class="menu-title">Book</h3><!-- /.menu-title -->

                   
                    <li>
                    <a href="<?php echo e(route('admin.books.index')); ?>"> 
                        <i class="menu-icon ti-book"></i>Books
                    </a>

                    </li>
                   

                  
                    <h3 class="menu-title">Comment</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo e(route('admin.comments.index')); ?>"> 
                            <i class="menu-icon ti-book"></i>comments
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        
                        <form action="<?php echo e(route('admin.logout')); ?>" method="POST" style="display: inline;">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="nav-link"><i class="fa fa-power-off"></i> Logout</button>
                        </form>

                        
                    </div>
                </div>

            </div>

    

        </header><!-- /header -->
<!-- Header-->
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div> 



<script src="<?php echo e(asset('static/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/vendors/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/assets/js/main.js')); ?>"></script>


    <script src="<?php echo e(asset('static/vendors/chart.js/dist/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('static/assets/js/widgets.js')); ?>"></script>
    <script src="<?php echo e(asset('static/vendors/jqvmap/dist/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('static/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')); ?>"></script>
    <script src="<?php echo e(asset('static/vendors/jqvmap/dist/maps/jquery.vmap.world.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
<?php /**PATH /var/www/project/resources/views/magic/admin.blade.php ENDPATH**/ ?>