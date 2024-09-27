<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoHaul | <?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   
 
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href="./style.css" rel="stylesheet">
  </head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
      <a href="<?php echo e(route('home')); ?>" class="navbar-brand d-flex align-items-center">
          <h1 class="m-0" style="color: #5B8C51">EcoHaul</h1>
      </a>
      <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo e(route('home')); ?>" class="nav-item nav-link active">Home</a>
                <a href="<?php echo e(route('about')); ?>" class="nav-item nav-link active">About</a>
                <a href="<?php echo e(route('newsletter.list')); ?>" class="nav-item nav-link active">Newsletter</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo e(route('pickup')); ?>" class="dropdown-item">Pick Up</a>
                        <a href="<?php echo e(route('dropoff')); ?>" class="dropdown-item">Drop Off</a>
                        <a href="<?php echo e(route('rewards')); ?>" class="dropdown-item">EcoReward</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Account</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="<?php echo e(route('signup')); ?>" class="dropdown-item">Sign Up</a>
                        <a href="<?php echo e(route('login')); ?>" class="dropdown-item">Log In</a>
                        <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">Profile</a>
                        <a href="<?php echo e(route('transaction.history')); ?>" class="dropdown-item">Transaction History</a>
                        <a href="<?php echo e(route('redeem.history')); ?>" class="dropdown-item">Redeem History</a>
                    </div>
                </div>
          </div>
          <div class="border-start ps-4 d-none d-lg-block">
              <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
          </div>
        </div>
    </nav>

    
    <?php echo $__env->yieldContent('content'); ?>

    
    <div class="container-fluid footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #404A3D">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>888 Street, Green Lane</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+123 456 789</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>eco@haul.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="<?php echo e(route('about')); ?>">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="/home#ourServices">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Want to Throw Away Your Trash?</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2" style="background-color: #EDDD5E">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


  <!-- Copyright Start -->
  <div class="container-fluid text-body copyright py-4"  style="background-color: #EDDD5E">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a class="fw-semi-bold" href="<?php echo e(route('home')); ?>" style="color: #5B8C51">EcoHaul</a>, All Right Reserved.
              </div>
          </div>
      </div>
  </div>
  <!-- Copyright End -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\Users\cynti\ecohaul\resources\views/layout.blade.php ENDPATH**/ ?>