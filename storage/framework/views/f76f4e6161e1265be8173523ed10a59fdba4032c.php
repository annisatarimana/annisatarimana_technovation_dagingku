

<?php $__env->startSection('content'); ?>
<style>
    .right-side-pro-detail .price-pro {
        color: #E45641;
    }

    .right-side-pro-detail .tag-section {
        font-size: 18px;
        color: #5D4C46;
    }

    .pro-box-section .pro-box img {
        width: 100%;
        height: 200px;
    }

    .fa-cart-plus{
        background:#0652DD;
    }

    .addtocart{
        display:block;

        padding:0.5em 1em 0.5em 1em;
        border-radius:100px;
        border:none;
        font-size:1.5em;
        position:relative;
        background:#0652DD;
        cursor:pointer;
        height:2em;
        width:10em;
        overflow:hidden;
        transition:transform 0.1s;
        z-index:1;
    }
    .addtocart:hover{
        transform:scale(1.1);
    }
    .pretext{
        color:#fff;
        background:#0652DD;
        position:absolute;
        top:0;
        left:0;
        height:100%;
        width:100%;
        display:flex;
        justify-content:center;
        align-items:center;
        /*font-family: 'Quicksand', sans-serif;*/
    }
</style>

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








            <div class="row m-0">
                <div class="col-lg-4 left-side-product-box pb-3">
                    <?php if(is_file('uploads/products/'.$product->image_prod )): ?>
                        <img src="<?php echo e(asset('/uploads/products/'.$product->image_prod )); ?>" class="border p-3" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url($product->image_prod )); ?>" class="border p-3" alt="">
                    <?php endif; ?>
                    <span class="sub-img">

                        <?php $__currentLoopData = $product->productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(is_file('uploads/products/'.$productimage->pi_sub_image )): ?>
                                <img src="<?php echo e(asset('/uploads/products/'.$productimage->pi_sub_image )); ?>" class="border p-2" alt="">
                            <?php else: ?>
                                <img src="<?php echo e(url($productimage->pi_sub_image )); ?>" class="border p-2" alt="">
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
                </div>
                <div class="col-lg-8">
                    <div class="right-side-pro-detail border p-3 m-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <span><?php echo e($product->category->cat_name); ?></span>
                                <p class="m-0 p-0"><?php echo e($product->title); ?></p>
                            </div>
                            <div class="col-lg-12">
                                <p class="m-0 p-0 price-pro">
                                    <?php if($product->sale_price != null || $product->sale_price > 0): ?>
                                        <strike>Rp. <?php echo e($product->price); ?></strike><br>
                                        <strong>Rp. <?php echo e($product->sale_price); ?></strong>
                                    <?php else: ?>
                                       <strong>Rp. <?php echo e($product->price); ?></strong>
                                    <?php endif; ?>
                                </p>
                                <hr class="p-0 m-0">
                            </div>
                            <div class="col-lg-12 pt-2">
                                <h5>Product Detail</h5>
                                <span><?php echo e($product->description); ?></span>
                                <hr class="m-0 pt-2 mt-2">
                            </div>
                            <div class="col-lg-12">
                                <p class="tag-section"><strong>In stock : </strong><a href="#"><?php echo e($product->status ==1 ? 'Available' : 'Unavailable'); ?></a></p>
                            </div>
                            <div class="col-lg-12">
                                <h6>Quantity :</h6>
                                <input type="number" class="form-control text-center w-100" value="1">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="row">
                                    <div class="col-lg-6 pb-2" style="display: flex;justify-content: center;">
                                        <form method="POST" action="<?php echo e(route('cart.addToCart')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                            <button class="addtocart" type="submit">
                                                <div class="pretext">
                                                    <i class="fa fa-cart-plus"></i> ADD TO CART
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-lg-6" style="display: flex;justify-content: center;">
                                        <form method="POST" action="<?php echo e(route('cart.buynow')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                            <button class="addtocart" type="submit">
                                                <div class="pretext" style="background:#2fa360;">
                                                    <i class="fa fa-cart-plus" style="background:#2fa360;"></i> SHOP NOW
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center pt-3">
                    <h4>More Product</h4>
                </div>
            </div>
            <div class="row mt-3 p-0 text-center pro-box-section">
                <?php $__currentLoopData = $randomproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $random): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 pb-2">
                    <div class="pro-box border p-0 m-0">
                            <?php if(is_file('uploads/products/'.$random->image_prod )): ?>
                                <img src="<?php echo e(asset('/uploads/products/'.$random->image_prod )); ?>"  alt="">
                            <?php else: ?>
                                <img src="<?php echo e(url($random->image_prod )); ?>" alt="">
                            <?php endif; ?>

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>















            </div>
<?php if(\Illuminate\Support\Facades\Auth::user()): ?>
    <?php if(Auth::user()->role_as == '1'): ?>
    <div>
        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-info btn-block">
            Edit
        </a>
    </div>
    <p></p>
    <div>
        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" >
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class="btn btn-danger btn-block " style="margin: auto">
                Delete
            </button>
        </form>
    </div>
    <?php endif; ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masterCopy.masterProductDetails', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\lomba-annisa\resources\views/product/productshow.blade.php ENDPATH**/ ?>