
<?php $__env->startSection('contents'); ?>


<style>
    @import  url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap");
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    html {
        box-sizing: border-box;
        font-size: 100%;
    }

    body {
        /*font-family: "Poppins", sans-serif;*/
        /*font-size: 18px;*/
        color: black;
        /*background-color: whitesmoke;*/
    }

    img {
        max-width: 100%;
        /*max-height: 300px;*/
    }

    .box {
        max-width: 1824px;
        margin: 0 auto;
    }

    @media  only screen and (max-width: 1200px) {
        .box {
            padding: 48px;
        }
    }
    .d {
        display: flex;
        align-items: center;
    }


    .align-center {
        display: flex;
        align-items: center;
        justify-content: center;
    }



    /* Intro */
    .intro {
        height: calc(100vh - 112px);
        overflow: hidden;
        position: relative;
        z-index: 0;
        background-color: lightgray;
        /*background-image: url('wallet1.jpg');*/
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: 100% 100%;
        /*background-blend-mode: overlay;*/
    }

    .intro-content {
        height: 100%;
    }



    .dis {
        display: inline-block;
        font-size: 40px;
        color: #ff4321;
    }

    .intro h1 {
        margin-top: 50px;
        line-height: 1.3;
        font-weight: 600;
        font-size: 50px;
        text-align: center;
    }

    .intro h2 {
        line-height: 1.3;
        font-weight: 600;
        font-size: 45px;
        text-align: center;
    }


    .intro  h3 {
        font-weight: 400;
        font-size: 40px;
        text-align: center;
    }

    .btns {
        display: inline-block;
        border-radius: 80px;
        background-color: #ff4321;
        padding: 20px 80px;
        color: white;
        font-weight: 600;
        box-shadow: 0 16px 24px rgba(0, 0, 0, 0.3);
        margin-top: 75px;
        margin-left: 600px;
    }




    /* Section */
    .sections {
        padding: 100px 0 0 0;
    }

    /* Benefits */
    .benefit-center {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 80px;
    }

    .benefit {
        border: 1px solid #ccc;
        padding: 16px 16px 32px 16px;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .benefit .icon {
        color:  #ff4321;
        font-size: 64px;
    }

    .benefit h4 {
        margin-bottom: 5px;
    }

    .benefit .text {
        font-size: 24px;
        color: #777;
    }

    /* New Arrivals */
    .h {
        font-size: 3rem;
        text-align: center;
        margin-bottom: 5rem;
        font-weight: 600;
    }

    .h h1 {
        font-weight: 400;
    }

    .h span {
        color:  #ff4321;
    }

    .ac-center {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 80px;
        margin-bottom: 60px;
    }

    .ac {
        text-align: center;
        padding-bottom: 16px;
        transition: all 500ms ease-in-out;
    }

    .ac:hover {
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .ac .img-cover {
        overflow: hidden;
    }

    .ac img {
        transition: all 500ms ease-in-out;
    }

    .ac:hover img {
        transform: scale(1.2);
    }

    /*@media  only screen and (max-width: 500px) {*/

    /*    img {*/
    /*        display: flex;*/
    /*        align-items: center;*/
    /*        justify-content: center;*/
    /*    }*/
    /*}*/
    @media  only screen and (max-width: 500px) {
        .h {
            font-size: 32px;
        }
    }


    .ab {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(8, 4vw);
        gap: 2rem;
    }

    .ac-center {
        display: grid;
        /*display: flex;*/
                align-items: center;
                justify-content: center;
        /*grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));*/
        gap: 20px;
        margin-bottom: 20px;
    }

    .ab .item {
        overflow: hidden;
    }

    .ab img {
        object-fit: cover;
        height: 100%;
        width: 100%;
        transition: all 500ms ease-out;
    }

    .ab .item-1 img {
        object-fit: fill;
    }

    .ab img:hover {
        transform: scale(1.2);
    }

    .item-1 {
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 9;

    }

    .item-2 {
        grid-column-start: 5;
        grid-column-end: 7;
        grid-row-start: 1;
        grid-row-end: 9;
    }
    .item-3 {
        grid-column-start: 3;
        grid-column-end: 5;
        grid-row-start: 1;
        grid-row-end: 5;
    }

    .item-4 {
        grid-column-start: 3;
        grid-column-end: 5;
        grid-row-start: 5;
        grid-row-end: 9;
    }

    @media  only screen and (max-width: 500px) {
        .gallary {
            grid-template-columns: repeat(6, 1fr);
            grid-template-rows: repeat(20, 4vw);
        }
        .ac {
            display: grid;
            /*display: flex;*/
            align-items: center;
            justify-content: center;
            gap: 2rem;
            /*text-align: center !important;*/
        }

        .item-1 {
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start: 1;
            grid-row-end: 7;
        }

        .item-2 {
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start: 7;
            grid-row-end: 11;
        }
        .item-3 {
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start: 11;
            grid-row-end: 15;
        }
        .item-4 {
            grid-column-start: 1;
            grid-column-end: 7;
            grid-row-start: 15;
            grid-row-end: 19;
        }
    }

</style>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

    <?php if(session()->has('message') ): ?>  
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

    <!--Benefits  -->
        <section class="sections benefits">
            <div class="benefit-center box">
                <div class="benefit">
                    <span class="icon"><i class="bx bx-purchase-tag"></i></span>
                    <h4>Fast Shipping</h4>
                    <span class="text">At a low cost</span>
                </div>


                <div class="benefit">
                    <span class="icon"><i class="bx bx-book-reader"></i></span>
                    <h4>Yummy and Fresh</h4>
                    <span class="text">Free of chemicals</span>
                </div>

                <div class="benefit">
                    <span class="icon"><i class="bx bx-headphone"></i></span>
                    <h4>Pre-Order</h4>
                    <span class="text">Call us to pre-order</span>
                </div>
            </div>
        </section>

        <!-- New Arrivals -->
        <section class="sections">
            <div class="h">
                <h1><span>New</span> Arrivals</h1>
            </div>
            <div class="ac-center box">
                <?php $__currentLoopData = array_slice($latests->toArray(), 0, 3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="ac">
                    <div class="img-cover" style=" width: 100%;height: auto;">
                        <?php if(is_file('uploads/products/'.$latest['image_prod'])): ?>
                            <img  src="<?php echo e(asset('/uploads/products/'.$latest['image_prod'])); ?>" alt="">
                        <?php else: ?>
                            <img src="<?php echo e(url($latest['image_prod'])); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <p><?php echo e($latest['title']); ?></p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    <?php if($latest['sale_price']>0): ?>
                        <div class="price">
                            <strike style="color: #761b18;">Rp. <?php echo e($latest['price']); ?></strike>
                            <span style="color: #2d995b">Rp. <?php echo e($latest['sale_price']); ?></span>
                        </div>
                        <a href="<?php echo e(route('products.productshop')); ?>" class="btn btn-outline-success">ORDER NOW</a>
                    <?php else: ?>
                        <div class="price">Rp. <?php echo e($latest['price']); ?></div>
                        <a href="<?php echo e(route('products.productshop')); ?>" class="btn btn-outline-success">ORDER NOW</a>
                    <?php endif; ?>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </section>

        <!-- Shop By Category -->
        <section class="sections">
            <div class="h">
                <h1><span>Shop By</span> Categories</h1>
            </div>
            <div class="ab box">
                <div class="item item-1">
                    <?php if(is_file('uploads/categories/'.$categories->toArray()[0]['image_cat'])): ?>
                        <img  src="<?php echo e(asset('/uploads/categories/'.$categories->toArray()[0]['image_cat'])); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url($categories->toArray()[0]['image_cat'])); ?>" alt="">
                    <?php endif; ?>

                </div>
                <div class="item item-2">
                    <?php if(is_file('uploads/categories/'.$categories->toArray()[1]['image_cat'])): ?>
                        <img  src="<?php echo e(asset('/uploads/categories/'.$categories->toArray()[1]['image_cat'])); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url($categories->toArray()[1]['image_cat'])); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="item item-3">
                    <?php if(is_file('uploads/categories/'.$categories->toArray()[2]['image_cat'])): ?>
                        <img  src="<?php echo e(asset('/uploads/categories/'.$categories->toArray()[2]['image_cat'])); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url($categories->toArray()[3]['image_cat'])); ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="item item-4">
                    <?php if(is_file('uploads/categories/'.$categories->toArray()[3]['image_cat'])): ?>
                        <img  src="<?php echo e(asset('/uploads/categories/'.$categories->toArray()[3]['image_cat'])); ?>" alt="">
                    <?php else: ?>
                        <img src="<?php echo e(url($categories->toArray()[3]['image_cat'])); ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Popular Products -->
        <section class="sections">
            <div class="h">
                <h1><span>Popular</span> Products</h1>
            </div>
            <div class="ac-center box">
                <?php $__currentLoopData = array_slice($products->toArray(), 4, 12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="ac">
                    <div class="img-cover">
                        <?php if(is_file('uploads/products/'.$product['image_prod'])): ?>

                            <img  src="<?php echo e(asset('/uploads/products/'.$product['image_prod'])); ?>" alt="">
                        <?php else: ?>
                            <img src="<?php echo e(url($product['image_prod'])); ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <p><?php echo e($product['title']); ?></p>
                    <div class="rating">
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                        <i class="bx bxs-star"></i>
                    </div>
                    <?php if($product['sale_price']>0): ?>
                        <div class="price">
                            <strike style="color: #761b18;">Rp. <?php echo e($product['price']); ?></strike>
                            <span style="color: #2d995b">Rp. <?php echo e($product['sale_price']); ?></span>
                        </div>
                        <a href="<?php echo e(route('products.productshop')); ?>" class="btn btn-outline-success">ORDER NOW</a>
                    <?php else: ?>
                        <div class="price">Rp. <?php echo e($product['price']); ?></div>
                        <a href="<?php echo e(route('products.productshop')); ?>" class="btn btn-outline-success">ORDER NOW</a>
                    <?php endif; ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </section>


            <h3 class="pb-3 mb-4 font-italic border-bottom">

            </h3>
    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
<?php if(\Illuminate\Support\Facades\Auth::user()->role_as==1): ?>
            <div class="blog-post">
                <h2 class="blog-post-title" style="text-align: center;">Admin Management Section</h2>

                <p>
                    <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-info btn-block">Category Management</a>
                </p>
                <p>
                    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-info btn-block">Products Management</a>
                </p>
                <p>
                    <a href="<?php echo e(route('orders.index')); ?>" class="btn btn-info btn-block">Orders Management</a>
                </p>
            </div>
<?php endif; ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/welcome.blade.php ENDPATH**/ ?>