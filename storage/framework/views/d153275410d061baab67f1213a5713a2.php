

<?php $__env->startSection('title','Order Detail'); ?>

<?php $__env->startSection('main-content'); ?>
<div class="card">
<h5 class="card-header">Order       <a href="<?php echo e(route('order.pdf',$order->id)); ?>" class=" btn btn-sm btn-primary shadow-sm float-right"><i class="fas fa-download fa-sm text-white-50"></i> Generate PDF</a>
  </h5>
  <div class="card-body">
    <?php if($order): ?>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
            <th>S.N.</th>
            <th>Order No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Quantity</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td><?php echo e($order->id); ?></td>
            <td><?php echo e($order->order_number); ?></td>
            <td><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></td>
            <td><?php echo e($order->email); ?></td>
            <td><?php echo e($order->quantity); ?></td>
            <td>XAF <?php echo e(number_format($order->total_amount,2)); ?></td>
            <td>
                <?php if($order->status=='new'): ?>
                  <span class="badge badge-primary"><?php echo e($order->status); ?></span>
                <?php elseif($order->status=='process'): ?>
                  <span class="badge badge-warning"><?php echo e($order->status); ?></span>
                <?php elseif($order->status=='delivered'): ?>
                  <span class="badge badge-success"><?php echo e($order->status); ?></span>
                <?php else: ?>
                  <span class="badge badge-danger"><?php echo e($order->status); ?></span>
                <?php endif; ?>
            </td>
            <td>
                <form method="POST" action="<?php echo e(route('order.destroy',[$order->id])); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('delete'); ?>
                      <button class="btn btn-danger btn-sm dltBtn" data-id=<?php echo e($order->id); ?> style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>

        </tr>
      </tbody>
    </table>

    <section class="confirmation_part section_padding">
      <div class="order_boxes">
        <div class="row">
          <div class="col-lg-6 col-lx-4">
            <div class="order-info">
              <h4 class="text-center pb-4">ORDER INFORMATION</h4>
              <table class="table">
                    <tr class="">
                        <td>Order Number</td>
                        <td> : <?php echo e($order->order_number); ?></td>
                    </tr>
                    <tr>
                        <td>Order Date</td>
                        <td> : <?php echo e($order->created_at->format('D d M, Y')); ?> at <?php echo e($order->created_at->format('g : i a')); ?> </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td> : <?php echo e($order->quantity); ?></td>
                    </tr>
                    <tr>
                        <td>Order Status</td>
                        <td> : <?php echo e($order->status); ?></td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td> : XAF   <?php echo e(number_format($order->total_amount,2)); ?></td>
                    </tr>
                    <tr>
                      <td>Payment Method</td>
                      <td> : <?php if($order->payment_method=='cod'): ?> Cash on Delivery <?php else: ?> Paypal <?php endif; ?></td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td> : <?php echo e($order->payment_status); ?></td>
                    </tr>
              </table>
            </div>
          </div>

          <div class="col-lg-6 col-lx-4">
            <div class="shipping-info">
              <h4 class="text-center pb-4">SHIPPING INFORMATION</h4>
              <table class="table">
                    <tr class="">
                        <td>Full Name</td>
                        <td> : <?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : <?php echo e($order->email); ?></td>
                    </tr>
                    <tr>
                        <td>Phone No.</td>
                        <td> : <?php echo e($order->phone); ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> : <?php echo e($order->address1); ?>, <?php echo e($order->address2); ?></td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td> : <?php echo e($order->country); ?></td>
                    </tr>
                    <tr>
                        <td>Post Code</td>
                        <td> : <?php echo e($order->post_code); ?></td>
                    </tr>
              </table>
            </div>
          </div>
          
      <!-- Ajout du code pour afficher les produits -->
        <div class="col-lg-12">
            <div class="product-info">
                <h4 class="text-center pb-4">PRODUCTS</h4>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <!-- Affichage de la première image du produit -->
                            <!--<img src="<?php echo e(asset(''.$product->photo[0])); ?>" alt="Product Image">-->
                            <!--<img src="<?php echo e($product->photo[0]); ?>" alt="Product Image">-->
                        </div>
                        <div class="col-md-8">
                            <!--<div class="card-body">-->
                            <!--    <h5 class="card-title"><?php echo e($product->title); ?></h5>-->
                            <!--    <ul class="list-inline">-->
                                    <!-- Boucle pour afficher toutes les images du produit -->
                            <!--        <?php $__currentLoopData = explode(',', $product->photo); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->
                            <!--        <li class="list-inline-item">-->
                            <!--            <img src="<?php echo e($photo); ?>" alt="Product Image">-->
                            <!--        </li>-->
                            <!--        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($product->title); ?></h5>
                                <ul class="list-inline">
                                    <!-- Utilisation d'une variable pour afficher uniquement la première image -->
                                    <?php $firstImage = true; ?>
                                    <?php $__currentLoopData = explode(',', $product->photo); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($firstImage): ?>
                                            <li class="list-inline-item">
                                                <img src="<?php echo e($photo); ?>" alt="Product Image">
                                            </li>
                                            <?php $firstImage = false; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>

    <?php endif; ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }

</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/user/order/show.blade.php ENDPATH**/ ?>