
<?php echo $__env->make('inculdes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php echo $__env->make('inculdes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

 <div class="movie-container">
        <div class="movie-grid">
            <div class="movie-poster">
                <img src="<?php echo e($movie->poster); ?>" alt="Poster of <?php echo e($movie->title); ?>">
            </div>
            <div class="movie-content">
                <h1><?php echo e($movie->title); ?></h1>
                <p><?php echo e($movie->about); ?></p>
                <p>Showtimes: </p>
            <?php echo $movie->trailer; ?>

                <a href="/book/<?php echo e($movie->movie_id); ?>" class="btn">Book Tickets</a>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<?php echo $__env->make('inculdes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TicketBox\resources\views/movie.blade.php ENDPATH**/ ?>