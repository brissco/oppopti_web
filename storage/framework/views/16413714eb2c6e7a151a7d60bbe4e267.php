<?php $__env->startSection('title','Mixmoda Shop || Page de connexion'); ?>

<?php $__env->startSection('main-content'); ?>
    <!-- Fil d'Ariane -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="<?php echo e(route('home')); ?>">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Connexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin du Fil d'Ariane -->

    <!-- Connexion à la boutique -->
    <section class="shop login section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>Connexion</h2>
                        <p>Veuillez vous inscrire pour effectuer plus rapidement le processus de commande</p>
                        <!-- Formulaire -->
                        <form class="form" method="post" action="<?php echo e(route('login.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Votre adresse e-mail<span>*</span></label>
                                        <input type="email" name="email" placeholder="" required="required" value="<?php echo e(old('email')); ?>">
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Votre mot de passe<span>*</span></label>
                                        <input type="password" name="password" placeholder="" required="required" value="<?php echo e(old('password')); ?>">
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Connexion</button>
                                        <a href="<?php echo e(route('register.form')); ?>" class="btn">S'inscrire</a>
                                        
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Se souvenir de moi</label>
                                    </div>
                                    <?php if(Route::has('password.request')): ?>
                                        <a class="lost-pass" href="<?php echo e(route('password.reset')); ?>">
                                            Mot de passe oublié ?
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                        <!--/ Fin du Formulaire -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Fin de la Connexion -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/modafa/projet/school/laravel/p1/resources/views/frontend/pages/login.blade.php ENDPATH**/ ?>