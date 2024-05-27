<header class="header shop">
    <!-- Barre supérieure -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- En haut à gauche -->
                    <div class="top-left">
                        <ul class="list-main">
                            <?php
                                $settings=DB::table('settings')->get();
                                
                            ?>
                            <li><i class="ti-headphone-alt"></i><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->phone); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                            <li><i class="ti-email"></i> <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->email); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></li>
                        </ul>
                    </div>
                    <!--/ Fin en haut à gauche -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- En haut à droite -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i> <a href="<?php echo e(route('order.track')); ?>">Suivre la commande</a></li>
                            
                            <?php if(auth()->guard()->check()): ?> 
                                <?php if(Auth::user()->role=='admin'): ?>
                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('admin')); ?>"  target="_blank">Tableau de bord</a></li>
                                <?php else: ?> 
                                    <li><i class="ti-user"></i> <a href="<?php echo e(route('user')); ?>"  target="_blank">Tableau de bord</a></li>
                                <?php endif; ?>
                                <li><i class="ti-power-off"></i> <a href="<?php echo e(route('user.logout')); ?>">Déconnexion</a></li>
                            <?php else: ?>
                                <li><i class="ti-power-off"></i><a href="<?php echo e(route('login.form')); ?>">Connexion /</a> <a href="<?php echo e(route('register.form')); ?>">Inscription</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- Fin en haut à droite -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la barre supérieure -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>                    
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->logo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="logo"></a>
                    </div>
                    <!--/ Fin Logo -->
                    <!-- Formulaire de recherche -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                        <!-- Formulaire de recherche -->
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Rechercher ici..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        <!--/ Fin Formulaire de recherche -->
                    </div>
                    <!--/ Fin Formulaire de recherche -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <select>
                                <option >Catégories</option>
                                <?php $__currentLoopData = Helper::getAllCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option><?php echo e($cat->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <form method="POST" action="<?php echo e(route('product.search')); ?>">
                                <?php echo csrf_field(); ?>
                                <input name="search" placeholder="Rechercher des produits ici....." type="search">
                                <button class="btnn" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Formulaire de recherche -->
                        <div class="sinlge-bar shopping">
                            <?php 
                                $total_prod=0;
                                $total_amount=0;
                            ?>
                            <?php if(session('wishlist')): ?>
                                <?php $__currentLoopData = session('wishlist'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wishlist_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $total_prod+=$wishlist_items['quantity'];
                                        $total_amount+=$wishlist_items['amount'];
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            <a href="<?php echo e(route('wishlist')); ?>" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count"><?php echo e(Helper::wishlistCount()); ?></span></a>
                            <!-- Éléments du panier -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromWishlist())); ?> Articles</span>
                                        <a href="<?php echo e(route('wishlist')); ?>">Voir la liste de souhaits</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <?php $__currentLoopData = Helper::getAllProductFromWishlist(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $photo=explode(',',$data->product['photo']);
                                            ?>
                                            <li>
                                                <a href="<?php echo e(route('wishlist-delete',$data->id)); ?>" class="remove" title="Supprimer cet article"><i class="fa fa-remove"></i></a>
                                                <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">XAF <?php echo e(number_format($data->price,2)); ?></span></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">XAF <?php echo e(number_format(Helper::totalWishlistPrice(),2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('cart')); ?>" class="btn animate">Panier</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ Fin des éléments du panier -->
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="<?php echo e(route('cart')); ?>" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php echo e(Helper::cartCount()); ?></span></a>
                            <!-- Éléments du panier -->
                            <?php if(auth()->guard()->check()): ?>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span><?php echo e(count(Helper::getAllProductFromCart())); ?> Articles</span>
                                        <a href="<?php echo e(route('cart')); ?>">Voir le panier</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <?php $__currentLoopData = Helper::getAllProductFromCart(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $photo=explode(',',$data->product['photo']);
                                            ?>
                                            <li>
                                                <a href="<?php echo e(route('cart-delete',$data->id)); ?>" class="remove" title="Supprimer cet article"><i class="fa fa-remove"></i></a>
                                                <a class="cart-img" href="#"><img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>"></a>
                                                <h4><a href="<?php echo e(route('product-detail',$data->product['slug'])); ?>" target="_blank"><?php echo e($data->product['title']); ?></a></h4>
                                                <p class="quantity"><?php echo e($data->quantity); ?> x - <span class="amount">XAF <?php echo e(number_format($data->price,2)); ?></span></p>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">XAF <?php echo e(number_format(Helper::totalCartPrice(),2)); ?></span>
                                        </div>
                                        <a href="<?php echo e(route('checkout')); ?>" class="btn animate">COMMANDER</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!--/ Fin des éléments du panier -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête interne -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="menu-area">
                            <!-- Menu principal -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="<?php echo e(Request::path()=='home' ? 'active' : ''); ?>"><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
                                            <li class="<?php echo e(Request::path()=='about-us' ? 'active' : ''); ?>"><a href="<?php echo e(route('about-us')); ?>">À propos de nous</a></li>
                                            <li class="<?php if(Request::path()=='product-grids'||Request::path()=='product-lists'): ?>  active  <?php endif; ?>"><a href="<?php echo e(route('product-grids')); ?>">Produits</a><span class="new">Nouveau</span></li>												
                                                <?php echo e(Helper::getHeaderCategory()); ?>

                                            <li class="<?php echo e(Request::path()=='blog' ? 'active' : ''); ?>"><a href="<?php echo e(route('blog')); ?>">Blog</a></li>									
                                            <li class="<?php echo e(Request::path()=='contact' ? 'active' : ''); ?>"><a href="<?php echo e(route('contact')); ?>">Contactez-nous</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ Fin du menu principal -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
// (function(){
// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
// s1.async=true;
// s1.src='https://embed.tawk.to/64adc77694cf5d49dc62fa68/1h53d6b3a';
// s1.charset='UTF-8';
// s1.setAttribute('crossorigin','*');
// s0.parentNode.insertBefore(s1,s0);
// })();
</script>
<!--End of Tawk.to Script-->
    <!--/ End Header Inner -->
</header><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/layouts/header.blade.php ENDPATH**/ ?>