<?PHP
    use App\Models\Category;
    use Illuminate\Support\Facades\Http;

    function convertUsdToXaf()
    {
        //$response = Http::get('https://v6.exchangerate-api.com/v6/682ef7b795912a8cb9a1c909/pair/USD/XAF');
        //$data = $response->json();
        return 650; // $data['conversion_rate'];
    }

    $amount = convertUsdToXaf();
?>



<?php $__env->startSection('title','Mixmoda Shop || PAGE DES PRODUITS'); ?>

<?php $__env->startSection('main-content'); ?>
	<!-- Fil d'Ariane -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Accueil<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Grille de magasin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin du Fil d'Ariane -->

    <!-- Style de produit -->
    <form action="<?php echo e(route('shop.filter')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <section class="product-area shop-sidebar shop section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="sidebar-boutique">
                                <!-- Widget unique -->
                                <div class="single-widget category">
                                    <h3 class="title">Catégories</h3>
                                    <ul class="categor-list">
										<?php
											$menu=App\Models\Category::getAllParentWithChild();
										?>
										<?php if($menu): ?>
										<li>
											<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat_info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<?php if($cat_info->child_cat->count()>0): ?>
														<li><a href="<?php echo e(route('product-cat',$cat_info->slug)); ?>"><?php echo e($cat_info->title); ?></a>
															<ul>
																<?php $__currentLoopData = $cat_info->child_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																	<li><a href="<?php echo e(route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])); ?>"><?php echo e($sub_menu->title); ?></a></li>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</ul>
														</li>
													<?php else: ?>
														<li><a href="<?php echo e(route('product-cat',$cat_info->slug)); ?>"><?php echo e($cat_info->title); ?></a></li>
													<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</li>
										<?php endif; ?>
                                    </ul>
                                </div>
                                <!--/ Fin du widget unique -->
                                <!-- Filtrer par prix -->
                                    <div class="single-widget range">
                                        <h3 class="title">Filtrer par prix</h3>
                                        <div class="price-filter">
                                            <div class="price-filter-inner">
                                                <?php
                                                    $max=DB::table('products')->max('price');
                                                ?>
                                                <div id="slider-range" data-min="0" data-max="<?php echo e($max); ?>"></div>
                                                <div class="product_filter">
                                                <button type="submit" class="filter_button">Filtrer</button>
                                                <div class="label-input">
                                                    <span>Plage :</span>
                                                    <input style="" type="text" id="amount" readonly/>
                                                    <input type="hidden" name="price_range" id="price_range" value="<?php if(!empty($_GET['price'])): ?><?php echo e($_GET['price']); ?><?php endif; ?>"/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/ Fin du Filtrer par prix -->
                                <!-- Widget unique -->
                                <div class="single-widget recent-post">
                                    <h3 class="title">Articles récents</h3>
                                    <?php $__currentLoopData = $recent_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <!-- Post unique -->
                                        <?php
                                            $photo=explode(',',$product->photo);
                                        ?>
                                        <div class="single-post first">
                                            <div class="image">
                                                <img src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                            </div>
                                            <div class="content">
                                                <h5><a href="<?php echo e(route('product-detail',$product->slug)); ?>"><?php echo e($product->title); ?></a></h5>
                                                <?php
                                                    $org=($product->price-($product->price*$product->discount)/100);
                                                ?>
                                                <p class="price"><del class="text-muted">XAF <?php echo e(number_format($product->price * $amount,2)); ?></del>   XAF <?php echo e(number_format($org * $amount,2)); ?>  </p>

                                            </div>
                                        </div>
                                        <!--/ Fin du Post unique -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!--/ Fin du widget unique -->
                                <!-- Widget unique -->
                                <div class="single-widget category">
                                    <h3 class="title">Marques</h3>
                                    <ul class="categor-list">
                                        <?php
                                            $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();
                                        ?>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('product-brand',$brand->slug)); ?>"><?php echo e($brand->title); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                                <!--/ Fin du widget unique -->
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <!-- Haut de la boutique -->
                                <div class="shop-top">
                                    <div class="shop-shorter">
                                        <div class="single-shorter">
                                            <label>Afficher :</label>
                                            <select class="show" name="show" onchange="this.form.submit();">
                                                <option value="">Par défaut</option>
                                                <option value="9" <?php if(!empty($_GET['show']) && $_GET['show']=='9'): ?> selected <?php endif; ?>>09</option>
                                                <option value="15" <?php if(!empty($_GET['show']) && $_GET['show']=='15'): ?> selected <?php endif; ?>>15</option>
                                                <option value="21" <?php if(!empty($_GET['show']) && $_GET['show']=='21'): ?> selected <?php endif; ?>>21</option>
                                                <option value="30" <?php if(!empty($_GET['show']) && $_GET['show']=='30'): ?> selected <?php endif; ?>>30</option>
                                            </select>
                                        </div>
                                        <div class="single-shorter">
                                            <label>Trier par :</label>
                                            <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                                                <option value="">Par défaut</option>
                                                <option value="title" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='title'): ?> selected <?php endif; ?>>Nom</option>
                                                <option value="price" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price'): ?> selected <?php endif; ?>>Prix</option>
                                                <option value="category" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='category'): ?> selected <?php endif; ?>>Catégorie</option>
                                                <option value="brand" <?php if(!empty($_GET['sortBy']) && $_GET['sortBy']=='brand'): ?> selected <?php endif; ?>>Marque</option>
                                            </select>
                                        </div>
                                    </div>
                                    <ul class="view-mode">
                                        <li class="active"><a href="javascript:void(0)"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="<?php echo e(route('product-lists')); ?>"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                                <!--/ Fin du haut de la boutique -->
                            </div>
                        </div>
                        <div class="row">
                            
                            <?php if(count($products)>0): ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="<?php echo e(route('product-detail',$product->slug)); ?>">
                                                    <?php
                                                        $photo=explode(',',$product->photo);
                                                    ?>
                                                    <img class="default-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                                    <img class="hover-img" src="<?php echo e($photo[0]); ?>" alt="<?php echo e($photo[0]); ?>">
                                                    <?php if($product->discount): ?>
                                                                <span class="price-dec"><?php echo e($product->discount); ?> % de réduction</span>
                                                    <?php endif; ?>
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#<?php echo e($product->id); ?>" title="Aperçu rapide" href="#"><i class="ti-eye"></i><span>Aperçu rapide</span></a>
                                                        <a title="Liste de souhaits" href="<?php echo e(route('add-to-wishlist',$product->slug)); ?>" class="wishlist" data-id="<?php echo e($product->id); ?>"><i class="ti-heart "></i><span>Ajouter à la liste de souhaits</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Ajouter au panier" href="<?php echo e(route('add-to-cart',$product->slug)); ?>">Ajouter au panier</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="<?php echo e(route('product-detail',$product->slug)); ?>"><?php echo e($product->title); ?></a></h3>
                                                <?php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                ?>
                                                <span>XAF <?php echo e(number_format($after_discount * $amount,2)); ?></span>
                                                <del style="padding-left:4%;">XAF <?php echo e(number_format($product->price * $amount,2)); ?></del>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                    <h4 class="text-warning" style="margin:100px auto;">Il n'y a aucun produit.</h4>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                                <?php echo e($products->appends($_GET)->links()); ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </form>
    <!--/ Fin du style de produit 1  -->

    <!-- Modal -->
    <?php if($products): ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="<?php echo e($product->id); ?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fermer"><span class="ti-close" aria-hidden="true"></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <!-- Carrousel du produit -->
                                        <div class="product-gallery">
                                            <div class="quickview-slider-active">
                                                <?php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                ?>
                                                <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="single-slider">
                                                        <img src="<?php echo e($data); ?>" alt="<?php echo e($data); ?>">
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    <!-- Fin du carrousel du produit -->
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="quickview-content">
                                        <h2><?php echo e($product->title); ?></h2>
                                        <div class="quickview-ratting-review">
                                            <div class="quickview-ratting-wrap">
                                                <div class="quickview-ratting">
                                                    
                                                    <?php
                                                        $rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
                                                        $rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
                                                    ?>
                                                    <?php for($i=1; $i<=5; $i++): ?>
                                                        <?php if($rate>=$i): ?>
                                                            <i class="yellow fa fa-star"></i>
                                                        <?php else: ?>
                                                        <i class="fa fa-star"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </div>
                                                <a href="#"> (<?php echo e($rate_count); ?> avis clients)</a>
                                            </div>
                                            <div class="quickview-stock">
                                                <?php if($product->stock >0): ?>
                                                <span><i class="fa fa-check-circle-o"></i> <?php echo e($product->stock); ?> en stock</span>
                                                <?php else: ?>
                                                <span><i class="fa fa-times-circle-o text-danger"></i> <?php echo e($product->stock); ?> en rupture de stock</span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php
                                            $after_discount=($product->price-($product->price*$product->discount)/100);
                                        ?>
                                        <h3><small><del class="text-muted">XAF <?php echo e(number_format($product->price * $amount,2)); ?></del></small>    XAF <?php echo e(number_format($after_discount * $amount,2)); ?>  </h3>
                                        <div class="quickview-peragraph">
                                            <p><?php echo html_entity_decode($product->summary); ?></p>
                                        </div>
                                        <?php if($product->size): ?>
                                            <div class="size">
                                                <h4>Taille</h4>
                                                <ul>
                                                    <?php
                                                        $sizes=explode(',',$product->size);
                                                        // dd($sizes);
                                                    ?>
                                                    <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a href="#" class="one"><?php echo e($size); ?></a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                        <div class="size">
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <h5 class="title">Taille</h5>
                                                    <select>
                                                        <?php
                                                        $sizes=explode(',',$product->size);
                                                        // dd($sizes);
                                                        ?>
                                                        <?php $__currentLoopData = $sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option><?php echo e($size); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <form action="<?php echo e(route('single-add-to-cart')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="quantity">
                                                <!-- Entrée de commande -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="hidden" name="slug" value="<?php echo e($product->slug); ?>">
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ Fin de l'entrée de commande -->
                                            </div>
                                            <div class="add-to-cart">
                                                <button type="submit" class="btn">Ajouter au panier</button>
                                                <a href="<?php echo e(route('add-to-wishlist',$product->slug)); ?>" class="btn min"><i class="ti-heart"></i></a>
                                            </div>
                                        </form>
                                        <div class="default-social">
                                        <!-- Partagez ceci DEBUT --><div class="sharethis-inline-share-buttons"></div><!-- Partagez ceci FIN -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <!-- Fin du modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .pagination{
        display:inline-flex;
    }
    .filter_button{
        /* height:20px; */
        text-align: center;
        background:#c90011;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    
    <script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }

            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/frontend/pages/product-grids.blade.php ENDPATH**/ ?>