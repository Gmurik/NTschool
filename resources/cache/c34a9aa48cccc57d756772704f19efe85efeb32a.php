<?php $__env->startSection('pageName',$pageName); ?>
<?php $__env->startSection('title',$title); ?>
<?php $__env->startSection('url',$url); ?>
<?php $__env->startSection('labelForUrl',$labelForUrl); ?>

<?php $__env->startSection('topContentNav'); ?>
    <?php echo $__env->make('.sections.topContentNavigationPanel', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('video'); ?>
    <?php echo $__env->make('blog.blogSection.videoPost', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('blog.blogSection.articleBlogPosts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('blog.blogLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>