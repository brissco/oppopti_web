<!-- Meta Tag -->
<?php echo $__env->yieldContent('meta'); ?>
<!-- Title Tag  -->
<title><?php echo $__env->yieldContent('title'); ?></title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.css')); ?>">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/magnific-popup.min.css')); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/font-awesome.css')); ?>">
<!-- Fancybox -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery.fancybox.min.css')); ?>">
<!-- Themify Icons -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/themify-icons.css')); ?>">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/niceselect.css')); ?>">
<!-- Animate CSS -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/animate.css')); ?>">
<!-- Flex Slider CSS -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/flex-slider.min.css')); ?>">
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl-carousel.css')); ?>">
<!-- Slicknav -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/slicknav.min.css')); ?>">
<!-- Jquery Ui -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/jquery-ui.css')); ?>">

<!-- Eshop StyleSheet -->
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/reset.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>

<script>
  // Code pour capturer un clic sur le bouton et envoyer un événement personnalisé à Google Analytics
  document.getElementById('mon-bouton').addEventListener('click', function() {
    gtag('event', 'mon_bouton_click', {
      'event_category': 'Engagement', // Catégorie de l'événement (peut être personnalisée)
      'event_label': 'Bouton Clique', // Étiquette de l'événement (peut être personnalisée)
    });
  });
</script>

<!-- Google tag (gtag.js). -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1ZZ31GGNBX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1ZZ31GGNBX');
</script>

<style>
    .dropdown-submenu {
    position: relative;
    }

    .dropdown-submenu>a:after {
    content: "\f0da";
    float: right;
    border: none;
    font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: 0px;
    margin-left: 0px;
    }



    .pagination-nav {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .pagination-nav a,
    .pagination-nav span {
      padding: 8px 12px;
      font-size: 14px;
      line-height: 1;
      color: #333;
      text-decoration: none;
      border: 1px solid #ccc;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }

    .pagination-nav a:hover {
      background-color: #eee;
    }

    .pagination-nav span.current-page {
      background-color: #eee;
      font-weight: bold;
    }

    .pagination-nav .prev,
    .pagination-nav .next {
      font-weight: bold;
    }

    .pagination-nav .disabled {
      pointer-events: none;
      opacity: 0.6;
    }


    .map-section-container {
        display: flex;
        margin: 10%;
        margin-bottom: 150px;
    }

     .map-card {
        flex: 1;
        margin: 0 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .location-info {
        padding: 10px;
        background-color: #f5f5f5;
        border-bottom: 1px solid #ddd;
    }

    iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }
 */

    /*
</style>
<?php echo $__env->yieldPushContent('styles'); ?>
<?php /**PATH /home/modafa/projet/school/laravel/p1/resources/views/frontend/layouts/head.blade.php ENDPATH**/ ?>