

<?php $__env->startSection('title', 'History'); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container" style="margin-bottom: 300px">
        <?php if(auth()->guard()->check()): ?>
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">History</p>
          <h1 class="mb-5">Your EcoPrints!</h1>
        </div>
        <div class="table-responsive" style="font-size: 1.25em;">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Waste Type</th>
                        <th scope="col">Service Type</th>
                        <th scope="col">Waste Weight</th>
                        <th scope="col">Recycle Bank</th>
                        <th scope="col">Transaction Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($transaction->id); ?></td>
                        <td><?php echo e($transaction->wastetype->name); ?></td>
                        <td><?php echo e($transaction->servtype->name); ?></td>
                        <td><?php echo e($transaction->waste_weight); ?> g</td>
                        <td><?php echo e($transaction->recyclebank->name); ?></td>
                        <td><?php echo e($transaction->transaction_date); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="6">No data found</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo e($transactions->links()); ?>

        </div>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <div class="py-5 text-center" style="margin-bottom: 300px">
            <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
            <h2 style="font-weight: bolder">You are not logged in</h2>
            <a class="btn btn-danger" href="<?php echo e(route('login')); ?>" style="margin-top: 25px">Log In</a>
        </div>
        <?php endif; ?>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/transaction_history.blade.php ENDPATH**/ ?>