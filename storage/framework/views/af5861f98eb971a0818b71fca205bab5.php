

<?php $__env->startSection('title', 'Drop Off'); ?>

<?php $__env->startSection('content'); ?>


<?php if(auth()->guard()->check()): ?>
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Drop Off</p>
        <h1 class="mb-5">Start your EcoJourney!</h1>
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    </div>

    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form action="/dropoff" method="POST" id="dropOffForm">
                        <?php echo csrf_field(); ?>
                        
                        <!-- Waste Type -->
                        <div class="form-row">
                            <div class="name">Waste Type</div>
                            <select class="form-select" name="wastetype_id">
                                <option selected>Choose One:</option>
                                <?php $__currentLoopData = $wastetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wastetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($wastetype->id); ?>"><?php echo e($wastetype->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> 
                            <?php $__errorArgs = ['wastetype_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Waste Weight -->
                        <div class="form-row">
                            <div class="name">Waste Weight</div>
                            <input type="text" class="form-control" name="waste_weight" id="waste_weight" required>
                            <?php $__errorArgs = ['waste_weight'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Recycle Bank -->
                        <div class="form-row">
                            <div class="name">Recycle Bank</div>
                            <select class="form-select" name="recyclebank_id">
                                <option selected>Choose One:</option>
                                <?php $__currentLoopData = $recyclebanks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recyclebank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($recyclebank->id); ?>"><?php echo e($recyclebank->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select> 
                            <?php $__errorArgs = ['recyclebank_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <!-- Pickup Date -->
                        <div class="form-row">
                            <div class="name">Drop Off Date</div>
                            <input type="date" class="form-control" name="transaction_date" id="transaction_date" min="<?php echo e(now()->toDateString()); ?>" required>
                            <?php $__errorArgs = ['transaction_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="error-message" style="color: red;font-size: 0.9em; display: block;"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E;">Submit</button>
                    </form>
                </div>
            </div> 
        </div>    
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/dropoff.blade.php ENDPATH**/ ?>