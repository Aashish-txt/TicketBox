
<?php echo $__env->make('inculdes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inculdes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

<section class="section_c slider-section">
  <div class="container_c slider-column">
    <div class="swiper swiper-slider">
      <div class="swiper-wrapper">
    
          <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="swiper-slide">
<img src="<?php echo e($banner->img); ?>" alt="Swiper">
<div class="center_in_c">
<h4 class="title_in_c"><?php echo e($banner->title); ?></h4>
<a class="button_in_c" href="/show/<?php echo e($banner->action); ?>">Book Now!</a>
</div>

        </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <span class="swiper-pagination"></span>
      <span class="swiper-button-prev"></span>
      <span class="swiper-button-next"></span>
    </div>
  </div>
</section>

  <div class="container">
        <h1>Current Movies</h1>
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
<?php echo $__env->make('inculdes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TicketBox\resources\views/home.blade.php ENDPATH**/ ?>