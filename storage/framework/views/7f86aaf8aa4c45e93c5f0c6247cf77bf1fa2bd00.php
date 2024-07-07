



<?php $__env->startSection('content'); ?>

    <?php if(session()->has('message')): ?>  
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>
<div class="container-fluid">
    <table class="table table-bordered table-condensed">
        <h3>Product List</h3>

        <thead>
        <tr>

            <th>Product Name</th>
            <th>Image</th>
            <th>Availability</th>

        </tr>

        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

                <td><?php echo e($product->title); ?></td>

                <td>
                    <?php if(is_file('uploads/categories/'.$product->image_prod )): ?>
                    <img src="<?php echo e(asset('/uploads/categories/'.$product->image_prod )); ?>" width="100px" height="100px" alt="">
                    <?php else: ?>
                    <img src="<?php echo e(url($product->image_prod )); ?>" width="100px" height="100px" alt="">
                    <?php endif; ?>
                </td>
                <td><?php echo e($product->status ==1 ? 'Active' : 'Inactive'); ?></td>


                <td>
                    <a  href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-info">
                        Details
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
    <div class="row">
<div class="col-md-6 blog-main">
    <?php echo e($products->links()); ?>

</div>
    <div class="col-md-6 blog-main">
    <a  href="<?php echo e(route('products.create')); ?>" class="btn btn-success" style="float: right">
            Add Product
        </a>
</div>
    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/product/productindex.blade.php ENDPATH**/ ?>