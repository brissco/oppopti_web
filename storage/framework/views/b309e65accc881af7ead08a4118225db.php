<?PHP
    use App\Models\Category;
    use Illuminate\Support\Facades\Http;

	function convertUsdToXaf()
	{
		if (auth()->check()) {
			try {
				// Décommentez les lignes suivantes pour utiliser l'API de taux de change.
				// $response = Http::get('https://v6.exchangerate-api.com/v6/682ef7b795912a8cb9a1c909/pair/USD/XAF');
				// $data = $response->json();
				// return $data['conversion_rate'];
				return 650; // Valeur simulée pour les besoins de l'exemple.
			} catch (\Exception $e) {
				// Gestion des erreurs si la requête échoue
				Log::error('Erreur lors de la récupération du taux de change USD/XAF : ' . $e->getMessage());
				return 650; // Retourne null si une erreur se produit
			}
		} else {
			// Gérer le cas où l'utilisateur n'est pas authentifié
			// throw new \Exception("Accès non autorisé, utilisateur non authentifié.");
		}
	}


    $amount = convertUsdToXaf();
?>


<?php $__env->startSection('title', 'Page du Panier'); ?>

<?php $__env->startSection('main-content'); ?>
	<!-- Fil d'Ariane -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?php echo e(('home')); ?>">Accueil<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="">Panier</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fin du Fil d'Ariane -->

	<!-- Panier d'Achat -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Résumé des Achats -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUIT</th>
								<th>NOM</th>
								<th class="text-center">PRIX UNITAIRE</th>
								<th class="text-center">QUANTITÉ</th>
								<th class="text-center">TOTAL</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody id="cart_item_list">
							<form action="<?php echo e(route('cart.update')); ?>" method="POST">
								<?php echo csrf_field(); ?>
								<?php if(Helper::getAllProductFromCart()): ?>
									<?php $__currentLoopData = Helper::getAllProductFromCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<?php
											$photo=explode(',',$cart->product['photo']);
											?>
											<td class="image" data-title="No"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></td>
											<td class="product-des" data-title="Description">
												<p class="product-name"><a href="<?php echo e(route('product-detail',$cart->product['slug'])); ?>" target="_blank"><?php echo e($cart->product['title']); ?></a></p>
												<p class="product-des"><?php echo ($cart['summary']); ?></p>
											</td>
											<td class="price" data-title="Prix"><span>XAF <?php echo e(number_format($cart['price'] * $amount,2)); ?></span></td>
											<td class="qty" data-title="Quantité"><!-- Saisie de la Commande -->
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[<?php echo e($key); ?>]">
															<i class="ti-minus"></i>
														</button>
													</div>
													<input type="text" name="quant[<?php echo e($key); ?>]" class="input-number"  data-min="1" data-max="100" value="<?php echo e($cart->quantity); ?>">
													<input type="hidden" name="qty_id[]" value="<?php echo e($cart->id); ?>">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[<?php echo e($key); ?>]">
															<i class="ti-plus"></i>
														</button>
													</div>
												</div>
												<!--/ Fin de la Saisie de la Commande -->
											</td>
											<td class="total-amount cart_single_price" data-title="Total"><span class="money">XAF <?php echo e($cart['amount']  * $amount); ?></span></td>

											<td class="action" data-title="Supprimer"><a href="<?php echo e(route('cart-delete',$cart->id)); ?>"><i class="ti-trash remove-icon"></i></a></td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<track>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="float-right">
											<button class="btn float-right" type="submit">Mettre à jour</button>
										</td>
									</track>
								<?php else: ?>
										<tr>
											<td class="text-center">
												Aucun article disponible dans le panier. <a href="<?php echo e(route('product-grids')); ?>" style="color:blue;">Continuer vos achats</a>

											</td>
										</tr>
								<?php endif; ?>

							</form>
						</tbody>
					</table>
					<!--/ Fin du Résumé des Achats -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Montant Total -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
									<form action="<?php echo e(route('coupon-store')); ?>" method="POST">
											<?php echo csrf_field(); ?>
											<input name="code" placeholder="Entrez votre code promo">
											<button class="btn">Appliquer</button>
										</form>
									</div>
									
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li class="order_subtotal" data-price="<?php echo e(Helper::totalCartPrice()); ?>">Sous-total du Panier<span>XAF <?php echo e(number_format(Helper::totalCartPrice()  * $amount,2)); ?></span></li>

										<?php if(session()->has('coupon')): ?>
										<li class="coupon_price" data-price="<?php echo e(Session::get('coupon')['value']); ?>">Vous économisez<span>XAF <?php echo e(number_format(Session::get('coupon')['value'],2)); ?></span></li>
										<?php endif; ?>
										<?php
											$total_amount=Helper::totalCartPrice();
											if(session()->has('coupon')){
												$total_amount=$total_amount; // -Session::get('coupon')['value'];
											}
										?>
										<?php if(session()->has('coupon')): ?>
											<li class="last" id="order_total_price">Montant à Payer<span>XAF <?php echo e(number_format($total_amount * $amount,2)); ?></span></li>
										<?php else: ?>
											<li class="last" id="order_total_price">Montant à Payer<span>XAF <?php echo e(number_format($total_amount * $amount,2)); ?></span></li>
										<?php endif; ?>
									</ul>
									<div class="button5">
										<a href="<?php echo e(route('checkout')); ?>" class="btn">COMMANDER</a>
										<a href="<?php echo e(route('product-grids')); ?>" class="btn">Continuer les achats</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ Fin du Montant Total -->
				</div>
			</div>
		</div>
	</div>
	<!--/ Fin du Panier d'Achat -->

	<!-- Début de la Section Services de la Boutique  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Début du Service Unique -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Livraison Gratuite</h4>
						<p>Commandes de plus de 20.000 XAF</p>
					</div>
					<!-- Fin du Service Unique -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Début du Service Unique -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Retour Gratuit</h4>
						<p>Retours sous 30 jours</p>
					</div>
					<!-- Fin du Service Unique -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Début du Service Unique -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Paiement Sécurisé</h4>
						<p>Paiement 100% sécurisé</p>
					</div>
					<!-- Fin du Service Unique -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Début du Service Unique -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Meilleur Prix</h4>
						<p>Prix garanti</p>
					</div>
					<!-- Fin du Service Unique -->
				</div>
			</div>
		</div>
	</section>
	<!-- Fin de la Section Services de la Boutique -->

	<!-- Début de la Newsletter de la Boutique  -->
	
	<!-- Fin de la Newsletter de la Boutique -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#c90011 !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('public/frontend/js/nice-select/js/jquery.nice-select.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/frontend/js/select2/js/select2.min.js')); ?>"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/pages/cart.blade.php ENDPATH**/ ?>