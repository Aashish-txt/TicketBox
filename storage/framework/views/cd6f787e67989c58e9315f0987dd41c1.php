
<?php echo $__env->make('inculdes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inculdes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<main>
<div class="shows" style="margin-top: 70px">
   <?php $__currentLoopData = $screens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $screen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('/book/' . $movie->movie_id.'/'.$screen->screening_id)); ?>" class="button-50">
                    <div>
                    <h2 style="margin-top: 10px"><?php echo e($movie->title); ?></h2>
                    <h3 style="margin-top: 10px"><?php echo e($screen->start_time); ?> To <?php echo e($screen->end_time); ?></h3>
                    <h3 style="margin-top: 10px"><?php echo e($screen->date); ?></h3>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php echo $__env->make('inculdes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Ticket box\resources\views/screeing.blade.php ENDPATH**/ ?>