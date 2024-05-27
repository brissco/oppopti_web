<?php if($showModal): ?>
    <script>
        $(document).ready(function() {
            $('#customModal').modal('show');
        });
    </script>
<?php endif; ?>

<style>
    /* Styles for the custom modal */
    .modal.fade .modal-dialog {
        transform: translate(0, -50%);
    }
    
    .modal-content {
        border: none;
        border-radius: 0;
    }
    
    .modal-header {
        padding: 15px;
    }
    
    .modal-body {
        padding: 15px;
    }
    
    .alert.alert-success.alert-custom {
        color: #155724;
        margin-top: 250px;
        /*background-color: #d4edda;*/
        border-color: #c3e6cb;
        border-radius: 0;
        padding: 15px;
    }
    
    .alert.alert-success.alert-custom strong {
        font-weight: bold;
    }
    
    
    .btn.btn-custom {
        color: #ffff;
        background-color: #ffa500;
        border-color: #c3e6cb;
        border-radius: 0;
        margin: 30%;
        padding: 10px 20px;
        text-decoration: none;
    }
    
    .btn.btn-custom:hover {
        background-color: #c3e6cb;
        border-color: #b1dfbb;
    }
    
    #customModal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
    
    #customModal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
        border: 2px solid orange;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
  .text {
        text-align: center;
        justify-content: center;
        font-weight: bold;
        color: #6b6b6b;
    }

</style>
<!-- Modal -->
<div class="modal fade" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-custom" role="alert">
                    <img src="<?php echo e(asset('backend/img/success.png')); ?>">
                    <br><br><br>
                    <div class="text">
                        Your order will be delivered soon. <br>
                        Thank you for choosing our website !
                    </div>
                    <div class="mt-3"><br><br><br>
                        <a href="<?php echo e(route('home')); ?>" class="btn btn-custom">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/etienne/Bureau/ffg-afrique-web-site/resources/views/user/order/order_placed.blade.php ENDPATH**/ ?>