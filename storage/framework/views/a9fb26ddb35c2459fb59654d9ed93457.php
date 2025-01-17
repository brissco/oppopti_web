<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php echo $__env->make('frontend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	<?php echo $__env->make('frontend.layouts.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- Header -->
	<?php echo $__env->make('frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--/ End Header -->
	<?php echo $__env->yieldContent('main-content'); ?>
	
	<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/layouts/master.blade.php ENDPATH**/ ?>