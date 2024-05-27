<!-- Début de la zone de pied de page -->
<footer class="footer">
    <!-- Pied de page supérieur -->
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <!-- Widget unique -->
                    <div class="single-footer about">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo e(asset('public/backend/img/logo2.png')); ?>" alt="#"></a>
                        </div>
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>
                        <p class="text"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->short_des); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                        <p class="call">Une question ? Appelez-nous 24/7<span><a href="tel:+237694219957"><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></a></span></p>
                    </div>
                    <!-- Fin du widget unique -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Widget unique -->
                    <div class="single-footer links">
                        <h4>Informations</h4>
                        <ul>
                            <li><a href="<?php echo e(route('about-us')); ?>">À propos de nous</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Termes et conditions</a></li>
                            <li><a href="<?php echo e(route('contact')); ?>">Contactez-nous</a></li>
                            <li><a href="#">Aide</a></li>
                        </ul>
                    </div>
                    <!-- Fin du widget unique -->
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <!-- Widget unique -->
                    <div class="single-footer links">
                        <h4>Service client</h4>
                        <ul>
                            <li><a href="#">Méthodes de paiement</a></li>
                            <li><a href="#">Remboursement</a></li>
                            <li><a href="#">Retours</a></li>
                            <li><a href="#">Livraison</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                    <!-- Fin du widget unique -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Widget unique -->
                    <div class="single-footer social">
                        <h4>Contactez-nous</h4>
                        <!-- Widget unique -->
                        <div class="contact">
                            <ul>
                                <li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->address); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                                <li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                                <li><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                            </ul>
                        </div>
                        <!-- Fin du widget unique -->
                        <div class="sharethis-inline-follow-buttons"></div>
                    </div>
                    <!-- Fin du widget unique -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin du pied de page supérieur -->
    <div class="copyright">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="left">
                            <p>Droits d'auteur © <?php echo e(date('Y')); ?> <a href="#" target="_blank">mixmodashop</a> - Tous droits réservés.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right">
                            <img src="<?php echo e(asset('public/backend/img/payments.png')); ?>" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Catégorie 1 : Clic sur un bouton -->
    <!--      <button id="bouton1">Bouton 1</button>-->
    <!--      <button id="bouton2">Bouton 2</button>-->

    <!-- Catégorie 2 : Soumission d'un formulaire -->
    <!--      <form id="mon-formulaire">-->
    <!-- ... Les champs de votre formulaire ... -->
    <!--        <button type="submit">Envoyer</button>-->
    <!--      </form>-->

</footer>

	<!-- /End Footer Area -->

    <!--<script>-->
      <!--// Catégorie 1 : Clic sur un bouton-->
    <!--  document.getElementById('bouton1').addEventListener('click', function() {-->
    <!--    gtag('event', 'clic_sur_bouton', {-->
    <!--      'event_category': 'Engagement',-->
    <!--      'event_label': 'Bouton 1',-->
    <!--    });-->
    <!--  });-->

    <!--  document.getElementById('bouton2').addEventListener('click', function() {-->
    <!--    gtag('event', 'clic_sur_bouton', {-->
    <!--      'event_category': 'Engagement',-->
    <!--      'event_label': 'Bouton 2',-->
    <!--    });-->
    <!--  });-->

      
    <!--  document.getElementById('mon-formulaire').addEventListener('submit', function() {-->
    <!--    gtag('event', 'soumission_formulaire', {-->
    <!--      'event_category': 'Conversion',-->
          
    <!--    });-->
    <!--  });-->
    <!--</script>-->



    <script>

        // // Sélectionnez tous les boutons de catégorie
        // const categoryButtons = document.querySelectorAll('.nav-tabs .btn');

        // // Sélectionnez la liste de produits
        // const productGrid = document.querySelector('.isotope-grid');

        // // Sélectionnez tous les éléments de produit
        // const products = document.querySelectorAll('.isotope-item');

        // // Ajoutez un gestionnaire d'événements click à chaque bouton de catégorie
        // categoryButtons.forEach((button) => {
        // button.addEventListener('click', () => {
        //     // Obtenez l'identifiant de la catégorie associée à ce bouton
        //     const categoryId = button.getAttribute('data-filter').replace('.', '');

        //     // Parcourez tous les produits
        //     products.forEach((product) => {
        //     // Vérifiez si le produit a la classe de la catégorie sélectionnée
        //     if (product.classList.contains(categoryId) || categoryId === '*') {
        //         // Affichez le produit si la catégorie correspond ou si "*" (tous les produits)
        //         product.style.display = 'block';
        //     } else {
        //         // Masquez le produit s'il ne correspond pas à la catégorie sélectionnée
        //         product.style.display = 'none';
        //     }
        //     });
        // });
        // });

                            /////////////////////////



        // Sélectionnez les éléments nécessaires
        const mapSection = document.querySelector('.map-section');
        const doualaMap = document.getElementById('DoualaMap');
        const yaoundeMap = document.getElementById('YaoundeMap');

        // Fonction pour appliquer les styles en fonction de la largeur de l'écran
        function applyStylesBasedOnScreenWidth() {
            if (window.innerWidth <= 768) {
                // Pour les écrans de petite taille, alignez les éléments en colonne
                mapSection.style.flexDirection = 'column';
                doualaMap.style.width = '100%';
                yaoundeMap.style.width = '100%';

            } else {
                // Rétablissez les styles par défaut si la largeur de l'écran est supérieure à 768px
                mapSection.style.flexDirection = 'row';
                doualaMap.style.width = '';
                yaoundeMap.style.width = '';
            }
        }

        // Appelez la fonction lors du chargement de la page et lors du redimensionnement de la fenêtre
        window.addEventListener('load', applyStylesBasedOnScreenWidth);
        window.addEventListener('resize', applyStylesBasedOnScreenWidth);


        // Fonction pour vérifier la largeur de l'écran et appliquer les styles CSS appropriés
        function applyStylesBasedOnScreenSize() {
            const logoImage = document.querySelector('img');
            const isMobile = window.innerWidth <= 768;
            const topbarElement = document.querySelector('.topbar');
            const sliderElement = document.querySelector('#Gslider .carousel-inner');
            if (isMobile) {
            if (sliderElement) {
                sliderElement.style.height = 'inherit';
                // sliderElement.style.height = '230px';
            }

                logoImage.style.height = '35px';
                logoImage.style.maxWidth = '100%';

                if (topbarElement) {
                    topbarElement.style.display = 'none';
                }
            } else {
                logoImage.style.height = '';
                logoImage.style.maxWidth = '';

                if (sliderElement) {
                    sliderElement.style.height = '550px';
                }
                if (topbarElement) {
                    topbarElement.style.display = 'block';
                }
            }
        }
        applyStylesBasedOnScreenSize();
        window.addEventListener('load', applyStylesBasedOnScreenSize);
        window.addEventListener('resize', applyStylesBasedOnScreenSize);

        var productContents = document.querySelectorAll('.single-product .product-content');
        productContents.forEach(function(productContent) {
            productContent.style.setProperty('color', 'black', 'important');
        });

        // Sélectionnez tous les éléments correspondant aux sélecteurs
        var elements = document.querySelectorAll('body, button, input, select, optgroup, textarea');

        // Parcourez tous les éléments correspondants et appliquez le style à chacun d'eux
        elements.forEach(function(element) {
            // element.style.color = 'black';
        });

        // Sélectionnez tous les éléments correspondant au sélecteur ".header.shop .search-bar .btnn"
        var btnns = document.querySelectorAll('.header.shop .search-bar .btnn');

        // Parcourez tous les éléments correspondants et appliquez le style à chacun d'eux
        btnns.forEach(function(btnn) {
            btnn.style.color = '#fff';
            btnn.style.background = '#002ea3';
        });

        // Sélectionnez tous les boutons à l'intérieur de la balise <div class="add-to-cart">
        var buttons = document.querySelectorAll('.add-to-cart button');

        // Parcourez tous les boutons et définissez la couleur du texte sur blanc
        buttons.forEach(function(button) {
            button.style.color = 'white';
        });


    </script>
	<script>
		// Créer l'élément buyNowBtn
		var buyNowBtn = document.createElement('div');
		buyNowBtn.className = 'floating-button';

		// Renseigner le lien WhatsApp
		var whatsappLink = 'https://wa.me/+237694219957?text=Hello!%20I\'m%20interested%20in%20your%20products.%20Can%20you%20provide%20more%20information%20%3F';

		// Créer l'élément de l'image WhatsApp avec le lien
		var whatsappImageLink = document.createElement('a');
		whatsappImageLink.href = whatsappLink;

		var whatsappImage = document.createElement('img');
		whatsappImage.src = 'https://e7.pngegg.com/pngimages/584/319/png-clipart-whatsapp-computer-icons-android-messaging-apps-whatsapp-grass-mobile-phones.png';
		whatsappImage.style.height = '50px';
		whatsappImage.style.borderRadius = '80%';
		whatsappImage.style.padding = '0';
        // whatsappImage.style.marginBottom = '60px';

		// Ajouter l'image WhatsApp au bouton flottant
		whatsappImageLink.appendChild(whatsappImage);
		buyNowBtn.appendChild(whatsappImageLink);

		// Appliquer les styles CSS pour le bouton flottant
		buyNowBtn.style.position = 'fixed';
		buyNowBtn.style.bottom = '20px';
		buyNowBtn.style.left = '20px';
		buyNowBtn.style.zIndex = '9999';

		// Styles spécifiques pour les petits écrans mobiles
		if (window.innerWidth <= 767) {
		buyNowBtn.style.bottom = '60px';
		buyNowBtn.style.right = '20px';
		buyNowBtn.style.left = 'auto';

        buyNowBtn.style.marginBottom = '50px';
		whatsappImage.style.height = '60px';
		}
		else if (window.innerWidth <= 991) {
		whatsappImage.style.height = '45px';
		}

		// Ajouter le bouton flottant au body
		document.body.appendChild(buyNowBtn);
	</script>

	<!-- Jquery -->
    <script src="<?php echo e(asset('public/frontend/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/frontend/js/jquery-migrate-3.0.0.js')); ?>"></script>
	<script src="<?php echo e(asset('public/frontend/js/jquery-ui.min.js')); ?>"></script>
	<!-- Popper JS -->
	<script src="<?php echo e(asset('public/frontend/js/popper.min.js')); ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo e(asset('public/frontend/js/bootstrap.min.js')); ?>"></script>
	<!-- Color JS -->
	<script src="<?php echo e(asset('public/frontend/js/colors.js')); ?>"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo e(asset('public/frontend/js/slicknav.min.js')); ?>"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo e(asset('public/frontend/js/owl-carousel.js')); ?>"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo e(asset('public/frontend/js/magnific-popup.js')); ?>"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo e(asset('public/frontend/js/waypoints.min.js')); ?>"></script>
	<!-- Countdown JS -->
	<script src="<?php echo e(asset('public/frontend/js/finalcountdown.min.js')); ?>"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo e(asset('public/frontend/js/nicesellect.js')); ?>"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo e(asset('public/frontend/js/flex-slider.js')); ?>"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo e(asset('public/frontend/js/scrollup.js')); ?>"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo e(asset('public/frontend/js/onepage-nav.min.js')); ?>"></script>
	
	<script src="<?php echo e(asset('public/frontend/js/isotope/isotope.pkgd.min.js')); ?>"></script>
	<!-- Easing JS -->
	<script src="<?php echo e(asset('public/frontend/js/easing.js')); ?>"></script>

	<!-- Active JS -->
	<script src="<?php echo e(asset('public/frontend/js/active.js')); ?>"></script>


	<?php echo $__env->yieldPushContent('scripts'); ?>
	<script>
		setTimeout(function(){
		  $('.alert').slideUp();
		},5000);
		$(function() {
		// ------------------------------------------------------- //
		// Multi Level dropdowns
		// ------------------------------------------------------ //
			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
				event.preventDefault();
				event.stopPropagation();

				$(this).siblings().toggleClass("show");


				if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
				}
				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
				$('.dropdown-submenu .show').removeClass("show");
				});

			});
		});
	  </script>
<?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/layouts/footer.blade.php ENDPATH**/ ?>