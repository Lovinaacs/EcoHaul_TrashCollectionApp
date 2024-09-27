

<?php $__env->startSection('title', 'Rewards'); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->guard()->check()): ?>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        Reward successfully redeemed!
    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

    <div class="container" style="margin-bottom: 300px">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; margin-bottom: 75px">
            <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Rewards</p>
            <h1 class="mb-5">EcoRewards!</h1>
            <h4 style="color: #404A3D">Your EcoPoints: <?php echo e(Auth::user()->points); ?></h4>
        </div>

        <div class="d-flex justify-content-center">
            
            <?php $__currentLoopData = $rewards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reward): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mx-lg-3" style="width: 20rem; margin-bottom: 100px;">
                <div class="image-container" style="width: 100%; height: 300px; overflow: hidden;">
                    <img src="<?php echo e(asset('images/' . $reward->image)); ?>" class="card-img-top uniform-img" alt="Image of <?php echo e($reward->name); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="card-body text-start">
                    <h5 class="card-title"><strong><?php echo e($reward->name); ?></strong></h5>
                    <p class="card-text">Stock: <?php echo e($reward->stock); ?></p>
                    <p class="card-text">Points required: <?php echo e($reward->points); ?></p>
                </div>
                <div class="card-body text-end">
                    <form action="<?php echo e(route('redeem.rewards')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="reward_id" value="<?php echo e($reward->id); ?>">
                        <button type="submit" class="btn btn-primary" <?php echo e($reward->stock <= 0 ? 'disabled' : ''); ?>>Redeem</button>
                    </form>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
        <?php echo e($rewards->links()); ?>

    </div>
    
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are not logged in</h2>
        <a class="btn btn-lg btn-block" href="<?php echo e(route('login')); ?>" style="margin-top: 25px; background-color:#EDDD5E;">Log In</a>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/rewards.blade.php ENDPATH**/ ?>