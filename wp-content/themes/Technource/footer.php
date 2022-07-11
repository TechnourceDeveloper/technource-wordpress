<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 *
 * @package WordPress
 * @subpackage Technource
 * @since Technource 1.0
 */
?>
<div class="mobile-footer">



    <div class="row footer-mobile">
        <div class="col-lg-3 col-sm-6">
            <?php dynamic_sidebar('footer-logo') ?>
        </div>
        <div class="col-12">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <label class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Services
                        </button>
                    </label>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <?php dynamic_sidebar('footer-menu-1') ?>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <label class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Resources
                        </button>
                    </label>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <?php dynamic_sidebar('footer-menu-2') ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-socail-section text-center">
            <?php dynamic_sidebar('footer-menu-3') ?>
        </div>
    </div>

</div>

<div class="footer-section">
    <div class="footer-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <?php dynamic_sidebar('footer-logo') ?>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-menu-items">
                        <?php dynamic_sidebar('footer-menu-1') ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <?php dynamic_sidebar('footer-menu-2') ?>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center">
                        <?php dynamic_sidebar('footer-menu-3') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-section">
        Copyright @ 2012-<?php echo date("Y"); ?> by <a href="https://www.technource.com/">Technource</a>
    </div>
</div>

<script>
    function dashboardopenNav() {
        document.getElementById("navbar_mobile").style.width = "100%";
    }

    function dashboardcloseNav() {
        document.getElementById("navbar_mobile").style.width = "0";
    }
</script>
<script>
    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 150) {
            $(".navbar-sticky").addClass("fixed-top");
        } else {
            $(".navbar-sticky").removeClass("fixed-top");
        }
    });
</script>
</body>
<?php wp_footer(); ?>

</body>

</html>