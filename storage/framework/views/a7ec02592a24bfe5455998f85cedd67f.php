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
				return null; // Retourne null si une erreur se produit
			}
		} else {
			// Gérer le cas où l'utilisateur n'est pas authentifié
			// throw new \Exception("Accès non autorisé, utilisateur non authentifié.");
		}
	}

    $amount = convertUsdToXaf();
?>



<?php $__env->startSection('title','Page de Paiement'); ?>

<?php $__env->startSection('main-content'); ?>

    <!-- Fil d'Ariane -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">COMMANDER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin du Fil d'Ariane -->

    <!-- Début du Paiement -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="<?php echo e(route('cart.order')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Effectuer Votre Paiement Ici</h2>
                                
                                <!-- Formulaire -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nom<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="<?php echo e(old('first_name')); ?>" value="<?php echo e(old('first_name')); ?>">
                                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Prénom<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="<?php echo e(old('lat_name')); ?>">
                                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Adresse Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="<?php echo e(old('email')); ?>">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Numéro de Téléphone<span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="<?php echo e(old('phone')); ?>">
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country">Pays<span>*</span></label>
                                            <select name="country" id="country" class="form-control">
                                                <option value="CM" selected="selected">Cameroun</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="address1">Ville de livraison<span>*</span></label>
                                            <select name="address1" id="address1" class="form-control">
                                                <option value="yaounde">Yaoundé</option>
                                                <option value="douala">Douala</option>
                                            </select>
                                            <?php $__errorArgs = ['address1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Précision sur le lieu de livraison</label>
                                            <input type="text" name="address2" placeholder="" value="<?php echo e(old('address2')); ?>">
                                            <?php $__errorArgs = ['address2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Code Postal</label>
                                            <input type="text" name="post_code" placeholder="" value="<?php echo e(old('post_code')); ?>">
                                            <?php $__errorArgs = ['post_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class='text-danger'><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                </div>
                                <!--/ Fin du Formulaire -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Widget de la Commande -->
                                <div class="single-widget">
                                    <h2>RÉSUMÉ DU PANIER</h2>
                                    <div class="content">
                                        <ul>
                                            <li class="order_subtotal" data-price="<?php echo e(Helper::totalCartPrice()); ?>">Sous-total du Panier<span>XAF <?php echo e(number_format(Helper::totalCartPrice() * $amount,2)); ?></span></li>
                                            
                                            <?php if(session('coupon')): ?>
                                            <li class="coupon_price" data-price="<?php echo e(session('coupon')['value']); ?>">Vous Économisez<span>XAF <?php echo e(number_format(session('coupon')['value'],2)); ?></span></li>
                                            <?php endif; ?>
                                            <?php
                                                $total_amount=Helper::totalCartPrice() * $amount;
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            ?>
                                            <?php if(session('coupon')): ?>
                                                
                                                <li class="last"  id="order_total_price">Total<span>XAF <?php echo e(number_format($total_amount,2)); ?></span></li>
                                            <?php else: ?>
                                                
                                                <li class="last"  id="order_total_price">Total<span>XAF <?php echo e(number_format($total_amount,2)); ?></span></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Fin du Widget de la Commande -->
                                <!-- Widget de la Commande -->
                                <div class="single-widget">
                                    <h2>Paiements</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            
                                            <form-group>
                                                <input name="payment_method" type="radio" value="cod" checked> <label> Paiement à la Livraison</label><br>
                                                <!--<input name="payment_method"  type="radio" value="cod"> <label> Paiement à la Livraison</label><br>-->
                                                <!--<input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> -->
                                            </form-group>

                                        </div>
                                    </div>
                                </div>
                                <!--/ Fin du Widget de la Commande -->
                                <!-- Widget de la Méthode de Paiement -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="<?php echo e(('backend/img/payment-method.png')); ?>" alt="#">
                                    </div>
                                </div>
                                <!--/ Fin du Widget de la Méthode de Paiement -->
                                <!-- Widget du Bouton -->
                                <div class="single-widget get-button">
                                    <div class="content">
    <?php //                                    dd($total_amount) ?>
                                    <?php if($total_amount >= 500000): ?>
                                        <div class="button">
                                            <button type="submit" class="btn">COMMANDER</button>
                                        </div>
                                    <?php else: ?>
                                        <div class="button">
                                            POUR EFFECTUER UNE RÉSERVATION, VOTRE COMMANDE DOIT ÊTRE SUPÉRIEURE OU ÉGALE À 500 000 FRS.
                                            <button disabled type="submit" class="btn">COMMANDER</button>
                                        </div>
                                    <?php endif; ?>

                                    </div>
                                </div>
                                <!--/ Fin du Widget du Bouton -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ Fin du Paiement -->

    <!-- Début des Services de la Boutique -->
    <section class="shop-services section home">
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
    <!-- Fin des Services de la Boutique -->

    <!-- Début de la Newsletter de la Boutique -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Début de la Newsletter Interne -->
                        
                        <!-- Fin de la Newsletter Interne -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/pages/checkout.blade.php ENDPATH**/ ?>