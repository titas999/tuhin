<footer id="footer" class=" footer p-100 pb-0 bg-dark-light">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-3 footer-item">
                <?php
                if (is_active_sidebar('sidebar-1')){
                    dynamic_sidebar('sidebar-1');
                }
                ?>
            </div>
            <div class="col-md-3 footer-item">
                <?php
                if (is_active_sidebar('sidebar-2')){
                    dynamic_sidebar('sidebar-2');
                }
                ?>
            </div>
            <div class="col-md-3 footer-item">
                <?php
                if (is_active_sidebar('sidebar-3')){
                    dynamic_sidebar('sidebar-3');
                }
                ?>
            </div>
            <div class="col-md-3 footer-item">
                <?php
                if (is_active_sidebar('sidebar-4')){
                    dynamic_sidebar('sidebar-4');
                }
                ?>
            </div>
        </div>
        <hr class="border-footer">
        <div class="footer-bottom text-center">
            <p class="mb-0">
                <?php
                if (is_active_sidebar('footer_copyright')){
                    dynamic_sidebar('footer_copyright');
                }
                ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>