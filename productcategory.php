<?php
// Include necessary files
include 'navbar.php';


?>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <div class="container-fluid custom-container-banner">
        <!-- <?php echo "Last URI segment: " . $lastSegment;
                echo "<pre> ";
                echo $Prod_category[$lastSegment]['category_name'];
                echo BASEURL . 'cone-crushers';
                ?> -->
        <!-- Banner -->

        <section class="about-us-banner">
        <!-- <div class="container"> -->
            <div class="">
                <img class="desktop-banner" src="<?php echo BASEURL .  $Prod_category[$lastSegment]['banner_image_desktop'] ?>" alt="product-cat">
                <img class="mobile-banner" src="<?php echo BASEURL .  $Prod_category[$lastSegment]['banner_image_mob'] ?>" alt="product-cat">
            </div>
        <!-- </div> -->
    </section>
        <!-- Products -->
        <section class="category-product-section" style="background-color:#F7F6EF;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="category-sub-title">
                        <p><?php echo $Prod_category[$lastSegment]['product-category-description'] ?></p>
                            <h1>OUR PRODUCTS</h1>
                        </div>
                        <!-- <div class="category-main-title">
                        <h2><?php echo $Prod_category[$lastSegment]['category_name'] ?></h2>
                    </div> -->
                    </div>
                </div>
                <!-- 1 -->
                <?php
                if ($Prod_category[$lastSegment]['category_name'] == "Classifiers") {
                ?>
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_1'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <h3><?php echo $Prod_category[$lastSegment]['product_title_1'] ?></h3>
                                <p><?php echo $Prod_category[$lastSegment]['category_description1'] ?></p>
                            </div>
                            <div class="product-btn">
                                <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url'];?>">View More</a>
                            </div>
                        </div>

                    </div>
                <?php } else { ?>
                    <!-- 2 -->
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_1'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <h3><?php echo $Prod_category[$lastSegment]['product_title_1'] ?></h3>
                                <p><?php echo $Prod_category[$lastSegment]['category_description1'] ?></p>
                            </div>
                            <div class="product-btn">
                                <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url1']; ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <h3><?php echo $Prod_category[$lastSegment]['product_title_2'] ?></h3>
                                <p><?php echo $Prod_category[$lastSegment]['category_description2'] ?></p>
                            </div>
                            <div class="product-btn">
                                <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url2']; ?>">View More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_2'] ?> class="product-img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-row product-grid-row-reverse">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_3'] ?> class="product-img"></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <h3><?php echo $Prod_category[$lastSegment]['product_title_3'] ?></h3>
                                <p><?php echo $Prod_category[$lastSegment]['category_description3'] ?></p>
                            </div>
                            <div class="product-btn">
                                <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url3']; ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-row">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-content">
                                <h3><?php echo $Prod_category[$lastSegment]['product_title_4'] ?></h3>
                                <p><?php echo $Prod_category[$lastSegment]['category_description3'] ?></p>
                            </div>
                            <div class="product-btn">
                                <a href="<?php echo BASEURL . $Prod_category[$lastSegment]['product_url4']; ?>">View More</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <a href="#"><img src=<?php echo $Prod_category[$lastSegment]['product_image_4'] ?> class="product-img"></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- Features -->
        <!-- <section class="featuresection">
  <div class="container feature-container" style="background-color: #066a3f;">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="feature-heading">
                <h2>Features</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
            <div class="icon-img">
                <img src="https://dummyimage.com/100x100/fff/000">
            </div>
            <div class="feature-content">
                <h6>Accurate Thikness</h6>
            </div>
        </div>
    </div>
  </div>
</section> -->
        <!-- Category -->
        <!-- <section class="related-product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="product-col">
                    <img src="https://dummyimage.com/350x300/000/fff">
                </div>
                <div class="product-col-content">
                    <h4>Plywoods</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="product-col">
                    <img src="https://dummyimage.com/350x300/000/fff">
                </div>
                <div class="product-col-content">
                    <h4>Blockboards</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="product-col">
                    <img src="https://dummyimage.com/350x300/000/fff">
                </div>
                <div class="product-col-content">
                    <h4>Flush Doors</h4>
                </div>
            </div>
        </div> 
    </div>
</section> -->

        <!-- CTA -->
        <?php include 'cta.php'; ?>
    </div>

    <!-- Footer-->
    <?php include 'footer2.php'; ?>