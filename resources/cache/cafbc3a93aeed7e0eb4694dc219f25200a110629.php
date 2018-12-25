<section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight"><?php echo $__env->yieldContent('pageName'); ?></h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="./">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $__env->yieldContent('url'); ?>"><?php echo $__env->yieldContent('labelForUrl'); ?></a>
                    </li>
                    <li class="active"><?php echo $__env->yieldContent('pageName'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
