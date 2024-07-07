
<?php $__env->startSection('contents'); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <?php if(session()->has('message')): ?>  
    <br>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <?php if(is_file('uploads/categories/'.$category->image_cat)): ?>
                        <img class="card-img-top" src="<?php echo e(asset('/uploads/categories/'.$category->image_cat)); ?>" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <?php else: ?>
                            <img class="card-img-top" src="<?php echo e(url($category->image_cat)); ?>" width="150px" height="200px" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">

                        <?php endif; ?>

                            <div class="card-body">
                            <p class="card-text"><?php echo e(Str::limit($category->description, 50)); ?>...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a  href="<?php echo e(route('categories.show', $category->id)); ?>" class="btn btn-sm btn-outline-secondary">
                                        Details
                                    </a>
                                    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
                                   <?php if(\Illuminate\Support\Facades\Auth::user()->role_as==1): ?>
                                    <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-sm btn-outline-secondary">
                                        Edit
                                    </a>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <small class="text-muted" style="color: #2fa360 !important;"><?php echo e($category->cat_name); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 blog-main">
            <?php echo e($categories->links()); ?>

        </div>
        <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
        <?php if(\Illuminate\Support\Facades\Auth::user()->role_as==1): ?>

        <div class="col-md-6 blog-main">
            <a  href="<?php echo e(route('categories.create')); ?>" class="btn btn-success" style="float: right">
                 Add a New Category
            </a>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
    <br>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\lomba-annisa\resources\views/category/categoryindexuser.blade.php ENDPATH**/ ?>