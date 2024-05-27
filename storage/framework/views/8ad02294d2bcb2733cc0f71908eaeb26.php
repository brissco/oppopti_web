<?php $__env->startSection('main-content'); ?>
	<!-- Fil d'Ariane -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(route('home')); ?>">Accueil<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin du Fil d'Ariane -->

	<!-- Commencer la section Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<?php
										$settings=DB::table('settings')->get();
									?>
									<h4>Entrez en contact</h4>
									<h3>Écrivez-nous un message <?php if(auth()->guard()->check()): ?> <?php else: ?><span style="font-size:12px;" class="text-danger">[Vous devez d'abord vous connecter]</span><?php endif; ?></h3>
								</div>
								<form class="form-contact form contact_form" method="post" action="<?php echo e(route('contact.store')); ?>" id="contactForm" novalidate="novalidate">
									<?php echo csrf_field(); ?>
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre nom<span>*</span></label>
												<input name="name" id="name" type="text" placeholder="Entrez votre nom">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre sujet<span>*</span></label>
												<input name="subject" type="text" id="subject" placeholder="Entrez le sujet">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre adresse e-mail<span>*</span></label>
												<input name="email" type="email" id="email" placeholder="Entrez votre adresse e-mail">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre numéro de téléphone<span>*</span></label>
												<input id="phone" name="phone" type="number" placeholder="Entrez votre numéro de téléphone">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Votre message<span>*</span></label>
												<textarea name="message" id="message" cols="30" rows="9" placeholder="Entrez le message"></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Envoyer le message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Appelez-nous :</h4>
									<ul>
										<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email :</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Notre adresse :</h4>
									<ul>
										<li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->address); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ Fin de la section Contact -->

	<!-- Section de la carte -->
	<div class="map-section-container">
		<!-- Carte pour Douala. -->
		<div class="map-card" id="DoualaMap">
			<div class="location-info">
				<p>DOUALA - BONAMOUSSADI: PHARMACIE DES VERTUS (SNAKE KINGDOM). <strong>TEL: 6 94 97 74 18</strong></p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9870.857353934944!2d9.742792!3d4.092569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sne!2snp" width="100%" height="400" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>

		<!-- Carte pour Yaoundé .-->
		<div class="map-card" id="YaoundeMap">
			<div class="location-info">
				<p>YAOUNDE - OMMISPORT: QUARTIER FOUDA FACE LA STATION SERVICE AXXE. <strong>TEL: 6 94 74 15 99</strong></p>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9870.857353934944!2d11.539066348141187!3d3.888569019977576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sne!2snp" width="100%" height="400" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>


	<!--/ Fin de la section de la carte -->

	<!-- Début de la newsletter de la boutique -->
	
	<!-- Fin de la newsletter de la boutique -->
	<!--================Succès de contact=================-->
	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-success">Merci !</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-success">Votre message a été envoyé avec succès...</p>
			</div>
		  </div>
		</div>
	</div>

	<!-- Modaux d'erreur -->
	<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
				<h2 class="text-warning">Désolé !</h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-warning">Quelque chose s'est mal passé.</p>
			</div>
		  </div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
	.modal-dialog .modal-content .modal-header{
		position:initial;
		padding: 10px 20px;
		border-bottom: 1px solid #e9ecef;
	}
	.modal-dialog .modal-content .modal-body{
		height:100px;
		padding:10px 20px;
	}
	.modal-dialog .modal-content {
		width: 50%;
		border-radius: 0;
		margin: auto;
	}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('frontend/js/jquery.form.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/contact.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/pages/contact.blade.php ENDPATH**/ ?>