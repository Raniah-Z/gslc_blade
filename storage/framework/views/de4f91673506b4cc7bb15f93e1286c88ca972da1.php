<?php $__env->startSection('title', 'Home'); ?>



<?php $__env->startSection('content'); ?>

    <div class="container-fluid" style="padding-top: 80px">
        <div class="container d-flex">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" style="width: 18rem; margin-right: 30px">
                <img src=<?php echo e($d->image_path); ?> class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($d->name); ?></h5>
                  <p class="card-text"><?php echo e($d->desc); ?></p>
                  <p class="card-text"><?php echo e($d->price); ?></p>
                  <?php if($d->type == "drink"): ?>
                    <span class="badge text-bg-danger"><?php echo e($d->type); ?></span>
                  <?php elseif($d->type == "snack"): ?>
                  <span class="badge text-bg-warning"><?php echo e($d->type); ?></span>
                  <?php else: ?>
                    <span class="badge text-bg-primary"><?php echo e($d->type); ?></span>
                  <?php endif; ?>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\~{DokiDocky}~\OneDrive - Bina Nusantara\.Semester 5\Web Programming - LAB\gslc blade\resources\views/home.blade.php ENDPATH**/ ?>