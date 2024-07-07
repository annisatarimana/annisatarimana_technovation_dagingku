
<?php $__env->startSection('content'); ?>
    <h3 class="text-center mt-4" >Register Your Account</h3>

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
    <?php endif; ?>
    <div class="card">
        <div class="card-header"><?php echo e(session('message')); ?></div>

        <div class="card-body">
    <form method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Enter Your Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" value="<?php echo e(old('name')); ?>">

        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo e(old('email')); ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input name="phone_number" type="text" class="form-control" id="phone_number" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm your Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="confirm_password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/register.blade.php ENDPATH**/ ?>