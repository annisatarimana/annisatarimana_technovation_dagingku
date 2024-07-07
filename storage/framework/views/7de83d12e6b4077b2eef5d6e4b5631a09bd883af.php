

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

    <?php if(session()->has('message') ): ?>  
        <div class="alert alert-<?php echo e(session('type')); ?>">
                        <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>
    <div class="card" style="max-width:600px; margin: 0 auto; float: none; margin-bottom: 10px;">
        <div class="card-header"><?php echo e(__('Login')); ?></div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo e(old('email')); ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>


            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\lomba-annisa\resources\views/login.blade.php ENDPATH**/ ?>