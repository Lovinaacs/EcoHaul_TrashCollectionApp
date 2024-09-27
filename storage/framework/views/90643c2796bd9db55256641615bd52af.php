

<?php $__env->startSection('title', 'Success, Yay!'); ?>

<?php $__env->startSection('content'); ?>

<div class="py-5 text-center" style="margin-bottom: 300px">
    <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    <h2 style="font-weight: bolder">Transaction Success!</h2>

    <p style="padding-top: 10px"> 
        Want to cancel your order?
        <a class="btn btn-danger" href="<?php echo e(route('transaction.history')); ?>" style="margin-left: 50px">Cancel</a>
    </p> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/success.blade.php ENDPATH**/ ?>