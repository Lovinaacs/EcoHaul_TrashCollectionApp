

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Log In</p>
    <h1 class="mb-5">Welcome back, EcoFriend!</h1>
</div>
<?php if(auth()->guard()->guest()): ?>
    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form class="row g-3" action="<?php echo e(route('login')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <h5 style="text-align: center">New EcoFriends? <a href="<?php echo e(route('signup')); ?>" style="color: #5B8C51">Sign Up</a></h5>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
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
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                            <?php $__errorArgs = ['password'];
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E;">Submit</button>
                    </form>
                    
                </div>
            </div> 
        </div>    
    </div>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <div class="py-5 text-center" style="margin-bottom: 300px">
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
        <h2 style="font-weight: bolder">You are logged in</h2>
        <p style="margin-top: 25px">Log Out First</p>
        <div class="mt-4 text-center">
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Log Out</button>
            </form>
        </div>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/login.blade.php ENDPATH**/ ?>