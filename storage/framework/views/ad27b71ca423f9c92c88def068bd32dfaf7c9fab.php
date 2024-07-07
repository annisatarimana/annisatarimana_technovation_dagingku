

<?php $__env->startSection('content'); ?>

    <style>
        td:hover {
            background-color: lightblue;
            color: #1d643b;
            font-weight: bold;

            box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
            transform: translate3d(6px, -6px, 0);

            transition-delay: 0s;
            transition-duration: 0.4s;
            transition-property: all;
            transition-timing-function: linear;
        }

    </style>

    <?php if(session()->has('message')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

    <h1 style="text-align: center;"><span style="color: #ff4321;">Order</span> <span style="color: black;">History</span></h1>
       <div class="table-responsive">
        <table class="table">
            <thead style="background: #1F2739;">
            <tr>
                <th><span style="color: paleturquoise;">Order No</span></th>
                <th><span style="color: paleturquoise">Order ID</span></th>
                <th><span style="color: paleturquoise">Customer Name</span></th>
                <th><span style="color: paleturquoise">Address</span></th>
                <th><span style="color: paleturquoise">Product Name</span></th>
                <th><span style="color: paleturquoise">Quantity</span></th>
                <th><span style="color: paleturquoise">Price</span></th>
                <th><span style="color: paleturquoise">Payment</span></th>
                <th><span style="color: paleturquoise">Delivery Status</span></th>
                <th><span style="color: paleturquoise">Action</span></th>
                <th><span style="color: paleturquoise">Action</span></th>
            </tr>
            </thead>
            <tbody style="background: #fff8b3;">
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->order_id); ?></td>
                    <td><?php echo e($order->order->customer_name); ?></td>
                    <td><?php echo e($order->order->address); ?></td>
                    <td><?php echo e($order->product->title); ?></td>
                    <td><?php echo e($order->quantity); ?></td>
                    <td><?php echo e($order->price); ?></td>
                    <td><?php echo e($order->order->payment_status); ?></td>
                    <td><?php echo e($order->order->operational_status); ?></td>
                    <td><form action="<?php echo e(route('orders.destroy', $order->order_id)); ?>" method="POST" >
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-block " style="margin: auto">
                                Delete
                            </button>
                        </form></td>
                    <td><a href="#" class="btn btn-info">
                            Edit
                        </a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6 blog-main">
            <?php echo e($orders->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/order/ordermanage.blade.php ENDPATH**/ ?>