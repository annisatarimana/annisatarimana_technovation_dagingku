

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
    <div class="card">
        <div class="card-header"><?php echo e(__('Add Category')); ?></div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('categories.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input name="cat_name" type="text" class="form-control" id="cat_name"  placeholder="Enter category name" value="<?php echo e(old('cat_name')); ?>">
                </div>
                <div class="form-group">
                    <label for="category_id">Alternative Category Name(optional)</label>

                    <select class="form-control" name="category_id">
                        <option value="">Select a category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->cat_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                </div>
                <div class="form-group">
                    <label for="description">Category Description</label>
                    <textarea name="description" type="text" class="form-control" id="description"  placeholder="Enter category description"></textarea>
                </div>
                <div class="form-group">
                    <label for="image_cat">Category Image</label>
                    <input name="image_cat" type="file" class="form-control" id="image_cat"  placeholder="Upload category image">

                    <?php $__errorArgs = ['image_cat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="status">Enter Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>


            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/category/categorycreate.blade.php ENDPATH**/ ?>