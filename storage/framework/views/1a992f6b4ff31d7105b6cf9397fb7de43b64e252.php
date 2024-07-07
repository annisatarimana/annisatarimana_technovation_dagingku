

<?php $__env->startSection('content'); ?>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if(session()->has('message')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill"><?php echo e($cart['quantity_total']); ?></span>
        </h4>
        <ul class="list-group mb-3">
            <?php $__currentLoopData = $cart['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0"><?php echo e($product['title']); ?></h6>
                    <small class="text-muted"><?php echo e($product['category']); ?></small>
                </div>
                <span class="text-muted">Rp. <?php echo e($product['product_total']); ?></span>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item d-flex justify-content-between">
                <span>Total (Rp.)</span>
                <strong>Rp. <?php echo e($cart['total']); ?></strong>
            </li>
                <li class="list-group-item d-flex justify-content-between">
                <span>Shipping (Rp.)</span>
                <strong>Rp. 150</strong>
            </li>
        </ul>
    </div>


    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form action="<?php echo e(route('order')); ?>" method="POST" class="needs-validation" novalidate>
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="#"><h5><i>Name: <?php echo e(auth()->user()->name); ?></i></h5></a>
                </div>
            </div>

            <div class="mb-3">
                <a href="#"><h5><i>Number: <?php echo e(auth()->user()->phone_number); ?></i></h5></a>

            </div>

            <div class="mb-3">
                <a href="#"><h5><i>Email: <?php echo e(auth()->user()->email); ?></i></h5></a>

            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>


            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City you live in..." required>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input type="text" name="zip" class="form-control" id="zip" placeholder="1200" required>
                    <div class="invalid-feedback">
                        Zip code required.
                    </div>
                </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>

            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="paypal">Cash On Delivery</label>
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>
    <br>

<script>
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/cart/checkout.blade.php ENDPATH**/ ?>