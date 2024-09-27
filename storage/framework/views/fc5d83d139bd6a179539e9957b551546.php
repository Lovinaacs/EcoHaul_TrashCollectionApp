

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-5 hero-header mb-5" style="background-color: #404A3D">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4">Recycling For Our Home</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget vulputate ipsum. Nulla porta erat et ante molestie, sed porta elit iaculis.</p>
                <a href="<?php echo e(route('signup')); ?>" class="btn py-sm-3 px-sm-5 rounded" style="background-color: #EDDD5E">Start Recycle</a>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <img class="img-fluid" src="planetBot.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 content-container" id="ourServices">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center px-3">Our Services</p>
            <h1 class="mb-5">Services That We Offer For EcoFriends</h1>
        </div>
        <div class="row gy-5 gx-4">
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="1.png" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="1.png" alt="">
                        </div>
                        <h5 class="mb-3">Pick Up</h4>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a href="<?php echo e(route('pickup')); ?>" class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="2.png" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="2.png" alt="">
                        </div>
                        <h5 class="mb-3">Drop Off</h5>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a href="<?php echo e(route('dropoff')); ?>" class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="3.png" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle" src="3.png" alt="">
                        </div>
                        <h5 class="mb-3">Eco Reward</h5>
                        <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                        <a class="btn btn-square rounded-circle" href="<?php echo e(route('rewards')); ?>"><i class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cynti\ecohaul\resources\views/home.blade.php ENDPATH**/ ?>