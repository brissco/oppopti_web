<?php $__env->startSection('title', 'Mixmoda Shop || À propos de nous'); ?>

<?php $__env->startSection('main-content'); ?>

    <!-- Fil d'Ariane -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">À propos de nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin du Fil d'Ariane -->

    <!-- À propos de nous -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        <?php
                            $settings=DB::table('settings')->get();
                        ?>
                        <h3>Bienvenue chez <span>Eshop</span></h3>
                        <p><?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->description); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                        <div class="button">
                            <a href="<?php echo e(route('blog')); ?>" class="btn">Notre Blog</a>
                            <a href="<?php echo e(route('contact')); ?>" class="btn primary">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-img overlay">
                        
                        <img src="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->photo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>" alt="<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($data->photo); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la section À propos de nous -->


    <!-- Début de la section Services de la boutique -->
    <section class="shop-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Début d'un seul service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Livraison gratuite</h4>
                        <p>Commandes de plus de 20.000 XAF</p>
                    </div>
                    <!-- Fin d'un seul service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Début d'un seul service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Retour gratuit</h4>
                        <p>Retours dans les 30 jours</p>
                    </div>
                    <!-- Fin d'un seul service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Début d'un seul service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Paiement sécurisé</h4>
                        <p>Paiement 100% sécurisé</p>
                    </div>
                    <!-- Fin d'un seul service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Début d'un seul service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Meilleur prix</h4>
                        <p>Prix garanti</p>
                    </div>
                    <!-- Fin d'un seul service -->
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la section Services de la boutique -->

    <?php echo $__env->make('frontend.layouts.newsletter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/modafa/projet/school/laravel/p1/resources/views/frontend/pages/about-us.blade.php ENDPATH**/ ?>