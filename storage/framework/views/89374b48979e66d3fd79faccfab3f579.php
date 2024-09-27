

<?php $__env->startSection('title', 'Redeem History'); ?>

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container" style="margin-bottom: 300px">
        <?php if(auth()->guard()->check()): ?>
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
          <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Redeem History</p>
          <h1 class="mb-5">Your EcoPrints!</h1>
        </div>
        <div class="table-responsive" style="font-size: 1.25em;">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th scope="col">Redeem Date</th>
                        <th scope="col">Reward</th>
                        <th scope="col">Points Deducted</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $redeems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $redeem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($redeem->redeem_date); ?></td>
                        <td><?php echo e($redeem->reward->name); ?></td>
                        <td>-<?php echo e($redeem->reward->points); ?> EcoPoints</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr><td colspan="6">No data found</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <?php echo e($redeems->links()); ?>

        </div>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <div class="py-5 text-center" style="margin-bottom: 300px">
            <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
            <h2 style="font-weight: bolder">You are not logged in</h2>
            <a class="btn btn-lg btn-block" href="<?php echo e(route('login')); ?>" style="margin-top: 25px; background-color:#EDDD5E;">Log In</a>
        </div>
        <?php endif; ?>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/redeemhistory.blade.php ENDPATH**/ ?>