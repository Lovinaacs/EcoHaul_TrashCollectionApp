

<?php $__env->startSection('title', 'Sign Up'); ?>

<?php $__env->startSection('content'); ?>
<?php if(@session('success')): ?>
    <div class="alert alert-success" role="alert">
        <strong>Sign Up Successful</strong>
    </div>
<?php endif; ?>


<?php if(auth()->guard()->guest()): ?>
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Sign Up</p>
        <h1 class="mb-5">EcoFriend Registration</h1>
        <img class="d-block mx-auto mb-4" src="planetBot.png" alt="" width="150px">
    </div>
    <div class="page-wrapper p-t-30">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-body">
                    <form action="<?php echo e(route('signup')); ?>" method="post" enctype="multipart/form-data" class="row g-3">
                        <?php echo csrf_field(); ?>

                        <h5 style="text-align: center">Have an Account? <a href="<?php echo e(route('login')); ?>" style="color: #5B8C51">Login</a></h5>
                        <div class="col-5">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="inputName" value="<?php echo e(old('name')); ?>">
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
                        <div class="col-md-5">
                            <label for="inputGender" class="form-label">Gender</label>
                            <select id="inputGender" class="form-select" name="gender">
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
                        <div class="col-md-2">
                            <label for="inputAge" class="form-label">Age</label>
                            <input type="integer" class="form-control" name="age" id="inputAge" value="<?php echo e(old('age')); ?>">
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
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress">
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
                        <div class="col-12">
                            <label for="inputPhone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="inputPhone">
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
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4">
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
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword4">
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
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="terms">
                                <label class="form-check-label" for="gridCheck">
                                    Terms & Conditions
                                </label>
                                <?php $__errorArgs = ['terms'];
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
                        
                        <button type="submit" class="btn btn-lg btn-block" style="background-color:#EDDD5E; align: center">Submit</button>
                    </form>
                </div>
            </div> 
        </div>    
    </div>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center px-3" style="color: #404A3D; font-weight: bolder">Sign Up</p>
        <h1 class="mb-5">EcoFriend Registration</h1>
    </div>
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/signup.blade.php ENDPATH**/ ?>