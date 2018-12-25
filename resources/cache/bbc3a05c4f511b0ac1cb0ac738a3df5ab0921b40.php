<?php $__env->startSection('pageName',$pageName); ?>
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('url',$url); ?>
<?php $__env->startSection('labelForUrl',$labelForUrl); ?>

<?php $__env->startSection('topContentNav'); ?>
    <?php echo $__env->make('.sections.topContentNavigationPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <h2><?php echo e($post['title']); ?></h2>
        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <i><?php echo e($category->title); ?></i>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($post['content']); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>нет постов</p>
    <?php endif; ?>
    <?php if($posts->currentPage()!=1): ?>

        <a href="?page=1">Первая страница</a>
        <a href="?page=<?php echo e($posts->currentPage() -1); ?>">Prev</a>
        <?php endif; ?>

    <?php for($i= 1; $i <= $total; $i++): ?>
        <a href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
    <?php endfor; ?>
    <?php if($posts->currentPage()!= $total): ?>
        <a href="?page=<?php echo e($posts->currentPage() + 1); ?>">Next</a>
        <a href="?page=<?php echo e($total); ?>">Последняя страница</a>

    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.blogLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>