
<?php echo $__env->make('inculdes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inculdes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  <div class="container" style="margin-top: 70px">
        <h1>Current Runing Movies</h1>
        <div class="grid">
             <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('/show/' . $movie->slug)); ?>" class="card-link">
                    <div class="card_movie">
                        <img src="<?php echo e($movie->poster); ?>" alt="Poster for <?php echo e($movie->title); ?>" class="card-img">
                        <div class="card-content">
                            <h2 class="card-title"><?php echo e($movie->title); ?></h2>
                            <p class="card-text"><?php echo e($movie->about); ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php echo $__env->make('inculdes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Downloads\Ticket box\resources\views/movies.blade.php ENDPATH**/ ?>