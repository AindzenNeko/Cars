    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
    <?php global $geniuscourses_options; ?>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <?php if($geniuscourses_options['footer-title1']){ ?> 
                    <h4 class="text-uppercase text-light mb-4"><?php echo $geniuscourses_options['footer-title1'] ?></h4>
                <?php } ?> 
                <?php if($geniuscourses_options['contact-address']){ ?> 
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i><?php echo $geniuscourses_options['contact-address'] ?></p>
                <?php } ?> 
                <?php if($geniuscourses_options['contact-phone']){ ?> 
                    <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i><?php echo $geniuscourses_options['contact-phone'] ?></p>
                <?php } ?> 
                <?php if($geniuscourses_options['contact-email']){ ?> 
                    <p><i class="fa fa-envelope text-white mr-3"></i><?php echo $geniuscourses_options['contact-email'] ?></p>
                <?php } ?> 
                <?php if($geniuscourses_options['social-tw'] || $geniuscourses_options['social-fb'] || $geniuscourses_options['social-in'] || $geniuscourses_options['social-ins']){ ?> 
                    <h6 class="text-uppercase text-white py-2"><?php echo esc_html__('Follow Us', 'geniuscourses') ?></h6>
                <?php } ?> 
                <div class="d-flex justify-content-start">
                    <?php if($geniuscourses_options['social-tw']){ ?> 
                        <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="<?php echo $geniuscourses_options['social-tw'] ?>"><i class="fab fa-twitter"></i></a>
                    <?php } ?> 
                    <?php if($geniuscourses_options['social-fb']){ ?> 
                        <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="<?php echo $geniuscourses_options['social-fb'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <?php } ?> 
                    <?php if($geniuscourses_options['social-in']){ ?> 
                        <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="<?php echo $geniuscourses_options['social-in'] ?>"><i class="fab fa-linkedin-in"></i></a>
                    <?php } ?> 
                    <?php if($geniuscourses_options['social-ins']){ ?> 
                        <a class="btn btn-lg btn-dark btn-lg-square" href="<?php echo $geniuscourses_options['social-ins'] ?>"><i class="fab fa-instagram"></i></a>
                    <?php } ?> 
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <?php if($geniuscourses_options['footer-title2']){ ?> 
                    <h4 class="text-uppercase text-light mb-4"><?php echo $geniuscourses_options['footer-title2'] ?></h4>
                <?php } ?> 
                <?php if($geniuscourses_options['footer-links']){ ?>
                    <div class="d-flex flex-column justify-content-start">
                        <?php 
                            $combinedArray = array_combine($geniuscourses_options['link-title'], $geniuscourses_options['link-url']);
                            foreach($combinedArray as $title => $url) {
                        ?>
                            <a class="text-body mb-2" href="<?php echo $url ?>"><i class="fa fa-angle-right text-white mr-2"></i><?php echo $title ?></a>
                        <?php } ?>
                    </div>
                <?php } ?> 
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <?php if($geniuscourses_options['footer-title3']){ ?> 
                    <h4 class="text-uppercase text-light mb-4"><?php echo $geniuscourses_options['footer-title3'] ?></h4>
                <?php } ?> 
                <?php if($geniuscourses_options['footer-gallery']){ ?> 
                    <div class="row mx-n1">
                        <?php foreach($geniuscourses_options['footer-gallery'] as $id => $url) { ?>
                            <div class="col-4 px-1 mb-2">
                                <a href=""><img class="w-100" src='<?php echo $url ?>' alt=""></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?> 
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <?php if($geniuscourses_options['footer-title4']){ ?> 
                    <h4 class="text-uppercase text-light mb-4"><?php echo $geniuscourses_options['footer-title4'] ?></h4>
                <?php } ?> 
                <?php if($geniuscourses_options['footer-title4-text']){ ?> 
                    <?php echo $geniuscourses_options['footer-title4-text'] ?>
                <?php } ?> 
            </div>
        </div>
    </div>
        <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
            <?php if($geniuscourses_options['copyright']){ ?> 
                <?php echo $geniuscourses_options['copyright'] ?>
            <?php } ?> 
        </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>
