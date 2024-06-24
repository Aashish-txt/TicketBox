<header class="header" id="header">
   <nav class="navbar container">
      <section class="navbar-left">
         <a href="/" class="brand">TicketBox</a>
         <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
         </div>
      </section>
      <section class="navbar-center">
         <span class="overlay"></span>
         <div class="menu" id="menu">
            <div class="menu-header">
               <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
               <span class="menu-title"></span>
            </div>
            <ul class="menu-inner">
               <li class="menu-item"><a href="/" class="menu-link">Home</a></li>
               
             <li class="menu-item"><a href="/currently-running-movies" class="menu-link">Running Movies</a></li>

             <li class="menu-item"><a href="#" class="menu-link">About</a></li>
            
             <li class="menu-item"><a href="#" class="menu-link">Contact</a></li>

               <li class="menu-item menu-dropdown">
                  <span class="menu-link">Account<i class="bx bx-chevron-right"></i></span>
                  <div class="submenu megamenu megamenu-column-1">
                     <ul class="submenu-list">
                        <li class="submenu-item"><a href="#" class="submenu-link">Help</a></li>
                         <?php if($user): ?>         
<li class="submenu-item"><a href="/dashboard" class="submenu-link">Dashboard</a></li>
   <!-- Authentication -->
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                        this.closest(\'form\').submit();']); ?>
                        <?php echo e(__('Log Out')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                </form>
    <?php else: ?>
        <li class="submenu-item"><a href="/login" class="submenu-link">Login</a></li>
                        <li class="submenu-item"><a href="/register" class="submenu-link">Register</a></li>
    </button>   
<?php endif; ?>
                     
                    
                    
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </section>
      <section class="navbar-right">
         <button class="switch" id="switch">
            <span class="switch-light"><i class="bx bx-sun"></i></span>
            <span class="switch-dark"><i class="bx bx-moon"></i></span>
         </button>
      </section>
   </nav>
</header><?php /**PATH C:\Users\hp\Downloads\Ticket box\resources\views/inculdes/nav.blade.php ENDPATH**/ ?>