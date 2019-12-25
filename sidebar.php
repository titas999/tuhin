<div class="col-md-4 blog-sidebar">
    <div class="row">
        <div class="col-md-12">
            <div class="sidebar-item">
            <?php
            if (is_active_sidebar('blog-sidebar')){
                dynamic_sidebar('blog-sidebar');
            }
            ?>
            </div>
        </div>

    </div>
</div>