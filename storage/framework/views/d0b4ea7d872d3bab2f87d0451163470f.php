

<?php $__env->startSection('title', 'Newsletter'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-bottom: 300px">
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Newsletter</p>
        <h1 class="mb-5">EcoKnowledge!</h1>
    </div>

    <div class="d-flex justify-content-center">
        <?php $__currentLoopData = $newsletters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newsletter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mx-lg-3" style="width: 18rem; margin-bottom:100px">
            <img src="<?php echo e(asset('images/' . $newsletter->image)); ?>" class="card-img-top uniform-img" style="">
            <div class="card-body">
                <h5 class="card-title"><strong><?php echo e($newsletter->title); ?></strong></h5>
                <p class="card-text"><?php echo e($newsletter->short_desc); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($newsletters->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/newsletter.blade.php ENDPATH**/ ?>