

<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .content-container.custom-profile-container {
        width:900px;
        margin-bottom: 300px !important;  
    }
</style>
<?php if(@session('success')): ?>
    <div class="alert alert-success" role="alert">
        <strong>Data has been saved</strong>
    </div>
<?php endif; ?>
<?php if(auth()->guard()->check()): ?>
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Welcome, <?php echo e(Auth::user()->name); ?>!</p>
        <h1 class="mb-5">Your EcoProfile</h1>
    </div>

    <div class="container rounded mt-5 mb-5 content-container text-white custom-profile-container" style="background-color: #404A3D;">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="p-1 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Information</h4>
                        <h5 class="text-right" style="color:#EDDD5E">Your Ecopoints: <?php echo e(Auth::user()->points); ?></h5>
                    </div>
                    <form method="POST" action="<?php echo e(route('profile.update')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>">
                                <?php $__errorArgs = ['name'];
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
                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-select" name="gender">
                                    <option selected><?php echo e(Auth::user()->gender); ?></option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Rather Not Say">Rather Not Say</option>
                                </select>
                                <?php $__errorArgs = ['gender'];
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
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" value="<?php echo e(Auth::user()->age); ?>">
                                <?php $__errorArgs = ['age'];
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
                            <div class="col-md-6">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->address); ?>">
                                <?php $__errorArgs = ['address'];
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
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo e(Auth::user()->phone); ?>">
                                <?php $__errorArgs = ['phone'];
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
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                <?php $__errorArgs = ['email'];
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
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn" style="background-color:#EDDD5E;">Save Profile</button>
                        </div>
                    </form>
                    <div class="mt-4 text-center">
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are not logged in</h2>
        <a class="btn btn-primary" href="<?php echo e(route('login')); ?>" style="margin-top: 25px">Log In</a>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/profile.blade.php ENDPATH**/ ?>