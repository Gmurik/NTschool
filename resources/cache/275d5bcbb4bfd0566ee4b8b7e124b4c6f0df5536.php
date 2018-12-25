<?php $__env->startSection('pageName',$pageName); ?>
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('url',$url); ?>
<?php $__env->startSection('labelForUrl',$labelForUrl); ?>



<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('sections.topNavigationPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.topContentNavigationPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <div class="row">

                <form class="shop-register" role="form" method="post">

                    <p>Email:</p>
                    <?php if($messages !== null && $messages->has('email')): ?>
                        <?php $__currentLoopData = $messages->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p style="color:red"><?php echo e($message); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <input type="text" name="email" id="email" value="<?php if(isset($email)): ?><?php echo e($email); ?><?php elseif(isset($user)): ?><?php echo e($user->email); ?><?php endif; ?>">
                    <br>

                    <p>Пароль:</p>
                    <?php if($messages !== null && $messages->has('password')): ?>
                        <?php $__currentLoopData = $messages->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p style="color:red"><?php echo e($message); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <input type="password" name="password" id="password" value="<?php if(isset($password)): ?><?php echo e($password); ?><?php endif; ?>">
                    <br>

                    <p>Подтверждение пароля:</p>
                    <?php if($messages !== null && $messages->has('password_confirmation')): ?>
                        <?php $__currentLoopData = $messages->get('password_confirmation'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p style="color:red"><?php echo e($message); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <input type="password" name="password_confirmation" id="password_confirmation" value="<?php if(isset($password_confirmation)): ?><?php echo e($password_confirmation); ?><?php endif; ?>">
                    <br>
                    <br>

                    <div class="col-sm-12">

                        <button type="submit" class="theme_button wide_button color1 topmargin_40">Register Now</button>

                    </div>

                </form>


            </div>
        </div>
    </section>

    <?php echo $__env->make('sections.contactFormSection', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sections.copyrightSection', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>